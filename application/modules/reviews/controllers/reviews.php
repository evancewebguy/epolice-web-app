<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Reviews extends MX_Controller
{

function __construct() {
parent::__construct();
}

//function for SEO.
function article()
{
	//figure out what the reviews id is
	$reviews_url = $this->uri->segment(3);
	$this->load->module('reviews');
	$reviews_id = $this->reviews->_get_reviews_id_foem_reviews_url($reviews_url);
	$this->reviews->view($reviews_id);
}

function _get_reviews_id_foem_reviews_url($reviews_url)
{
	$query = $this->get_where_custom('reviews_url', $reviews_url);
	foreach($query->result() as $row) {
		$reviews_id = $row->id;
	}

	if(!isset($reviews_id)){
		$reviews_id = 0;
	}

	return $reviews_id;
}


function index()
{
			//fetch the reviews details
		$this->load->helper('text');
		$mysql_query = "select * from reviews order by date_published desc";
		$data['query'] = $this->_custom_query($mysql_query);
		$data['view_file'] = "reviews_view";
		$this->load->module('templates');
		$this->templates->public_bootstrap($data);
}

function view($update_id)
{
	if(!is_numeric($update_id)){
		redirect('site_security/not_allowed');
	}

		//fetch the reviews details
		$data = $this->fetch_data_from_db($update_id);
		$data['update_id'] = $update_id;
		$data['flash'] = $this->session->flashdata('item');
		$data['view_file'] = "view";
		$this->load->module('templates');
		$this->templates->public_bootstrap($data);

}

function _draw_review_hp()
{
	$this->load->helper('text');
	$mysql_query = "select * from reviews order by date_published desc limit 0,2";
	$data['query'] = $this->_custom_query($mysql_query);
	$this->load->view('reviews_hp',$data);
}

function delete_image($update_id)
{
	if(!is_numeric($update_id)){
		redirect('site_security/not_allowed');
	}
	
	$this->load->module('site_security');
	$this->site_security->_make_sure_is_admin();
	$this->load->library('session');

	$data = $this->fetch_data_from_db($update_id);
	$picture = $data['picture'];

	$big_pic_path = './reviews_pics/'.$picture;
	$small_picture = str_replace('.', '_thumb.', $picture);
	$small_pic_path = './reviews_pics/'.$small_picture;

	//attempt to remove the image
	if(file_exists($big_pic_path)){
		unlink($big_pic_path);
	}
	if(file_exists($small_pic_path)){
		unlink($small_pic_path);
	}

	//update the database 
	unset($data);
	$data['picture'] = "";
	$this->_update($update_id, $data);

	$flash_msg = "The  image was successfully deleted.";
	$value = '<div class="alert alert-success" role="alert">'.$flash_msg.'</div>';
	$this->session->set_flashdata('item',$value);
	redirect('reviews/create/'.$update_id);

}

function _generate_thumbnail($file_name, $thumbnail_name)
{
	$config['image_library']  	= 'gd2';
	$config['source_image'] 	= './reviews_pics/'.$file_name;
	$config['new_image']    	= './reviews_pics/'.$thumbnail_name;
	$config['maintain_ratio'] 	= TRUE;
	$config['width'] 			= 200;
	$config['height'] 			= 200;

	$this->load->library('image_lib',$config);

	$this->image_lib->resize();
} 

function do_upload($update_id)
{
	if(!is_numeric($update_id)){
		redirect('site_security/not_allowed');
	}
	
	$this->load->module('site_security');
	$this->site_security->_make_sure_is_admin();
	$this->load->library('session');

	$submit = $this->input->post('submit',TRUE);
	if($submit=="Cancel"){
		redirect('reviews/create/'.$update_id);
	}

	$config['upload_path'] 		= './reviews_pics/';
	$config['allowed_types'] 	= 'gif|jpg|png|JPG';
	$config['max_size'] 		= 0;
	$config['max_width'] 		= 2024;
	$config['max_height']		= 1268;
	$config['file_name']        = $this->site_security->generate_random_string(16);

	$this->load->library('upload',$config);

	if(!$this->upload->do_upload('userfile'))
	{
		$data['error'] = array('error'=>$this->upload->display_errors("<p style='color:red;'>","</p>"));
		$data['headline'] = "Upload Error";
		$data['update_id'] = $update_id;
		$data['flash'] = $this->session->flashdata('item');
		$data['view_file'] = "upload_image";
		$this->load->module('templates');
		$this->templates->admin($data);
	}
	else
	{
		//upload was successful
		$data = array('upload_data' => $this->upload->data());

		$upload_data = $data['upload_data'];

		//raw_name  and ...file_ext
		$raw_name = $upload_data['raw_name'];
		$file_ext = $upload_data['file_ext'];

		//generate a thumbnail name
		$thumbnail_name = $raw_name."_thumb".$file_ext;

		$file_name = $upload_data['file_name'];
		$this->_generate_thumbnail($file_name, $thumbnail_name);

		//update the database
		$update_data['picture'] = $file_name;
		$this->_update($update_id, $update_data);

		$data['headline'] = "Upload Success";
		$data['update_id'] = $update_id;
		$data['flash'] = $this->session->flashdata('item');
		$data['view_file'] = "upload_success";
		$this->load->module('templates');
		$this->templates->admin($data);

	}
}

function upload_image($update_id)
{
	if(!is_numeric($update_id)){
		redirect('site_security/not_allowed');
	}
	
	$this->load->module('site_security');
	$this->site_security->_make_sure_is_admin();
	$this->load->library('session');

	$data['headline'] = "Upload Image";
	$data['update_id'] = $update_id;
	$data['flash'] = $this->session->flashdata('item');
	$data['view_file'] = "upload_image";
	$this->load->module('templates');
	$this->templates->admin($data);

}


function _process_delete($update_id)
{
	//delete page from reviews
	$this->_delete($update_id);

}

function delete($update_id)
{
		if(!is_numeric($update_id)){
		redirect('site_security/not_allowed');
	}
	
	$this->load->module('site_security');
	$this->site_security->_make_sure_is_admin();
	$this->load->library('session');

	$submit = $this->input->post('submit',TRUE);
	if($submit=="Cancel"){
		redirect('reviews/create/'.$update_id);
	}elseif ($submit=="Yes - Delete Reviews Entry") {
		$this->_process_delete($update_id);

		$flash_msg = "The reviews was successfully deleted.";
		$value = '<div class="alert alert-success" role="alert">'.$flash_msg.'</div>';
		$this->session->set_flashdata('item',$value);
		redirect('reviews/manage');
	}
}

function deleteconf($update_id)
{
	if(!is_numeric($update_id)){
		redirect('site_security/not_allowed');
	}
	
	$this->load->module('site_security');
	$this->site_security->_make_sure_is_admin();
	$this->load->library('session');

	$data['headline'] = "Delete Reviews Entry";
	$data['update_id'] = $update_id;
	$data['flash'] = $this->session->flashdata('item');
	$data['view_file'] = "deleteconf";
	$this->load->module('templates');
	$this->templates->admin($data);
}

function create()
{
	$this->load->module('site_security');
	$this->site_security->_make_sure_is_admin();
	$this->load->library('session');
	$this->load->module('timedate');

	$update_id = $this->uri->segment(3);
	$submit = $this->input->post('submit',TRUE);
	if($submit=="Cancel"){
		redirect('reviews/manage/'.$update_id);
	}
	
	if($submit=="Submit")
	{
		//process the form
		$this->load->library('form_validation');
		$this->form_validation->set_rules('reviews_title', 'Reviews Title','required|max_length[240]');
		$this->form_validation->set_rules('customer', 'Customer','required|max_length[240]');
		$this->form_validation->set_rules('customer_full_name', 'Customer Full Name','required|max_length[240]');
		$this->form_validation->set_rules('reviews_content', 'Reviews Content','required');
		$this->form_validation->set_rules('date_published', 'Date Published','required');

		if($this->form_validation->run()== TRUE)
		{
			//get variables
			$data = $this->fetch_data_from_post();
			$data['reviews_url'] = url_title($data['reviews_title']);

			//convert the datepicker into a unix timestamp
			$data['date_published'] = $this->timedate->make_timestamp_from_datepicker($data['date_published']);

			if(is_numeric($update_id)){

				//update the page details
				$this->_update($update_id, $data);
				$flash_msg = "The reviews entry was successfully updated.";
				$value = '<div class="alert alert-success" role="alert">'.$flash_msg.'</div>';
				$this->session->set_flashdata('item',$value);
				redirect('reviews/create/'.$update_id);
			}
			else{
				//insert a new page
				$this->_insert($data);
				$update_id = $this->get_max(); //get the id og the new page
				$flash_msg = "The reviews entry was successfully added.";
				$value = '<div class="alert alert-success" role="alert">'.$flash_msg.'</div>';
				$this->session->set_flashdata('item',$value);
				redirect('reviews/create/'.$update_id);
			}
		}
	}

	if((is_numeric($update_id)) && ($submit!="Submit")){
		$data = $this->fetch_data_from_db($update_id);
	}
	else{
		$data = $this->fetch_data_from_post();
		$data['picture'] = "";
	}

	if(!is_numeric($update_id)){
		$data['headline'] = "Create New Reviews Entry";
	}else{
		$data['headline'] = "Update Reviews Entry Details";
	}

	if($data['date_published']>0){
		//must be a unix timestamp, so convert to datepicker format
		$data['date_published'] = $this->timedate->get_nice_date($data['date_published'], 'datepicker');
	}
	
	$data['update_id'] = $update_id;
	$data['flash'] = $this->session->flashdata('item');
	$data['view_file'] = "create";
	$this->load->module('templates');
	$this->templates->admin($data);
}


function manage()
{
	$this->load->module('site_security');
	$this->site_security->_make_sure_is_admin();

	$data['flash'] = $this->session->flashdata('item');
	$data['query'] = $this->get('date_published desc');
	$data['view_file'] = "manage";
	$this->load->module('templates');
	$this->templates->admin($data);
}

function fetch_data_from_post()
{
	$data['reviews_title'] = $this->input->post('reviews_title', TRUE);
	$data['reviews_url'] = $this->input->post('reviews_url', TRUE);
	$data['reviews_keywords'] = $this->input->post('reviews_keywords', TRUE);
	$data['reviews_content'] = $this->input->post('reviews_content', TRUE);
	$data['reviews_description'] = $this->input->post('reviews_description', TRUE);
	$data['date_published'] = $this->input->post('date_published', TRUE);
	$data['customer'] = $this->input->post('customer', TRUE);
	$data['customer_full_name'] = $this->input->post('customer_full_name', TRUE);
	return $data;
}

function fetch_data_from_db($update_id)
{
	$query = $this->get_where($update_id);
	foreach ($query->result() as $row) 
	{
		$data['reviews_title'] = $row->reviews_title;
		$data['customer'] = $row->customer;
		$data['customer_full_name'] = $row->customer_full_name;
		$data['reviews_url'] = $row->reviews_url;
		$data['reviews_keywords'] = $row->reviews_keywords;
		$data['reviews_content'] = $row->reviews_content;
		$data['reviews_description'] = $row->reviews_description;
		$data['date_published'] = $row->date_published;
		$data['picture'] = $row->picture;
	}
	if(!isset($data))
	{
		$data = "";
	}
	return $data;
}


function get($order_by) {
$this->load->model('mdl_reviews');
$query = $this->mdl_reviews->get($order_by);
return $query;
}

function get_with_limit($limit, $offset, $order_by) {
$this->load->model('mdl_reviews');
$query = $this->mdl_reviews->get_with_limit($limit, $offset, $order_by);
return $query;
}

function get_where($id) {
$this->load->model('mdl_reviews');
$query = $this->mdl_reviews->get_where($id);
return $query;
}

function get_where_custom($col, $value) {
$this->load->model('mdl_reviews');
$query = $this->mdl_reviews->get_where_custom($col, $value);
return $query;
}

function _insert($data) {
$this->load->model('mdl_reviews');
$this->mdl_reviews->_insert($data);
}

function _update($id, $data) {
$this->load->model('mdl_reviews');
$this->mdl_reviews->_update($id, $data);
}

function _delete($id) {
$this->load->model('mdl_reviews');
$this->mdl_reviews->_delete($id);
}

function count_where($column, $value) {
$this->load->model('mdl_reviews');
$count = $this->mdl_reviews->count_where($column, $value);
return $count;
}

function get_max() {
$this->load->model('mdl_reviews');
$max_id = $this->mdl_reviews->get_max();
return $max_id;
}

function _custom_query($mysql_query) {
$this->load->model('mdl_reviews');
$query = $this->mdl_reviews->_custom_query($mysql_query);
return $query;
}

}

