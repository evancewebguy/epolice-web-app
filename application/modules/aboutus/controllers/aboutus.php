<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Aboutus extends MX_Controller
{

function __construct() {
parent::__construct();
}

//function for SEO.
function article()
{
	//figure out what the aboutus id is
	$aboutus_url = $this->uri->segment(3);
	$this->load->module('aboutus');
	$aboutus_id = $this->aboutus->_get_aboutus_id_from_aboutus_url($aboutus_url);
	$this->aboutus->view($aboutus_id);
}

function _get_aboutus_id_from_aboutus_url($aboutus_url)
{
	$query = $this->get_where_custom('aboutus_url', $aboutus_url);
	foreach($query->result() as $row) {
		$aboutus_id = $row->id;
	}

	if(!isset($aboutus_id)){
		$aboutus_id = 0;
	}

	return $aboutus_id;
}


function index()
{
			//fetch the aboutus details
		$this->load->helper('text');
		$mysql_query = "select * from aboutus order by date_published desc";
		$data['query'] = $this->_custom_query($mysql_query);
		$data['view_file'] = "aboutus_view";
		$this->load->module('templates');
		$this->templates->public_bootstrap($data);
}

function view($update_id)
{
	if(!is_numeric($update_id)){
		redirect('site_security/not_allowed');
	}

		//fetch the aboutus details
		$data = $this->fetch_data_from_db($update_id);
		$data['update_id'] = $update_id;
		$data['flash'] = $this->session->flashdata('item');
		$data['view_file'] = "view";
		$this->load->module('templates');
		$this->templates->public_bootstrap($data);

}

function _draw_about_hp()
{
	$this->load->helper('text');
	$mysql_query = "select * from aboutus order by date_published desc";
	$data['query'] = $this->_custom_query($mysql_query);
	$this->load->view('aboutus_hp',$data);
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

	$big_pic_path = './aboutus_pics/'.$picture;
	$small_picture = str_replace('.', '_thumb.', $picture);
	$small_pic_path = './aboutus_pics/'.$small_picture;

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
	redirect('aboutus/create/'.$update_id);

}

function _generate_thumbnail($file_name, $thumbnail_name)
{
	$config['image_library']  	= 'gd2';
	$config['source_image'] 	= './aboutus_pics/'.$file_name;
	$config['new_image']    	= './aboutus_pics/'.$thumbnail_name;
	$config['maintain_ratio'] 	= TRUE;
	$config['width'] 			= 1000;
	$config['height'] 			= 1000;

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
		redirect('aboutus/create/'.$update_id);
	}

	$config['upload_path'] 		= './aboutus_pics/';
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
	//delete page from aboutus
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
		redirect('aboutus/create/'.$update_id);
	}elseif ($submit=="Yes - Delete Aboutus Entry") {
		$this->_process_delete($update_id);

		$flash_msg = "The aboutus was successfully deleted.";
		$value = '<div class="alert alert-success" role="alert">'.$flash_msg.'</div>';
		$this->session->set_flashdata('item',$value);
		redirect('aboutus/manage');
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

	$data['headline'] = "Delete Aboutus Entry";
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
		redirect('aboutus/manage/'.$update_id);
	}
	
	if($submit=="Submit")
	{
		//process the form
		$this->load->library('form_validation');
		$this->form_validation->set_rules('aboutus_title', 'About Us Title','required|max_length[240]');
		$this->form_validation->set_rules('aboutus_content', 'About Us Content','required');
		$this->form_validation->set_rules('date_published', 'Date Published','required');

		if($this->form_validation->run()== TRUE)
		{
			//get variables
			$data = $this->fetch_data_from_post();
			$data['aboutus_url'] = url_title($data['aboutus_title']);

			//convert the datepicker into a unix timestamp
			$data['date_published'] = $this->timedate->make_timestamp_from_datepicker($data['date_published']);

			if(is_numeric($update_id)){

				//update the page details
				$this->_update($update_id, $data);
				$flash_msg = "The aboutus entry was successfully updated.";
				$value = '<div class="alert alert-success" role="alert">'.$flash_msg.'</div>';
				$this->session->set_flashdata('item',$value);
				redirect('aboutus/create/'.$update_id);
			}
			else{
				//insert a new page
				$this->_insert($data);
				$update_id = $this->get_max(); //get the id og the new page
				$flash_msg = "The aboutus entry was successfully added.";
				$value = '<div class="alert alert-success" role="alert">'.$flash_msg.'</div>';
				$this->session->set_flashdata('item',$value);
				redirect('aboutus/create/'.$update_id);
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
		$data['headline'] = "Create New Aboutus Entry";
	}else{
		$data['headline'] = "Update Aboutus Entry Details";
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
	$data['aboutus_title'] = $this->input->post('aboutus_title', TRUE);
	$data['aboutus_url'] = $this->input->post('aboutus_url', TRUE);
	$data['aboutus_keywords'] = $this->input->post('aboutus_keywords', TRUE);
	$data['aboutus_content'] = $this->input->post('aboutus_content', TRUE);
	$data['aboutus_description'] = $this->input->post('aboutus_description', TRUE);
	$data['date_published'] = $this->input->post('date_published', TRUE);
	$data['author'] = $this->input->post('author', TRUE);
	return $data;
}

function fetch_data_from_db($update_id)
{
	$query = $this->get_where($update_id);
	foreach ($query->result() as $row) 
	{
		$data['aboutus_title'] = $row->aboutus_title;
		$data['author'] = $row->author;
		$data['aboutus_url'] = $row->aboutus_url;
		$data['aboutus_keywords'] = $row->aboutus_keywords;
		$data['aboutus_content'] = $row->aboutus_content;
		$data['aboutus_description'] = $row->aboutus_description;
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
$this->load->model('mdl_aboutus');
$query = $this->mdl_aboutus->get($order_by);
return $query;
}

function get_with_limit($limit, $offset, $order_by) {
$this->load->model('mdl_aboutus');
$query = $this->mdl_aboutus->get_with_limit($limit, $offset, $order_by);
return $query;
}

function get_where($id) {
$this->load->model('mdl_aboutus');
$query = $this->mdl_aboutus->get_where($id);
return $query;
}

function get_where_custom($col, $value) {
$this->load->model('mdl_aboutus');
$query = $this->mdl_aboutus->get_where_custom($col, $value);
return $query;
}

function _insert($data) {
$this->load->model('mdl_aboutus');
$this->mdl_aboutus->_insert($data);
}

function _update($id, $data) {
$this->load->model('mdl_aboutus');
$this->mdl_aboutus->_update($id, $data);
}

function _delete($id) {
$this->load->model('mdl_aboutus');
$this->mdl_aboutus->_delete($id);
}

function count_where($column, $value) {
$this->load->model('mdl_aboutus');
$count = $this->mdl_aboutus->count_where($column, $value);
return $count;
}

function get_max() {
$this->load->model('mdl_aboutus');
$max_id = $this->mdl_aboutus->get_max();
return $max_id;
}

function _custom_query($mysql_query) {
$this->load->model('mdl_aboutus');
$query = $this->mdl_aboutus->_custom_query($mysql_query);
return $query;
}

}

