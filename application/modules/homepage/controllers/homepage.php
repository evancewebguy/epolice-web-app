<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Homepage extends MX_Controller
{

function __construct() {
parent::__construct();
}


function view()
{
	$this->load->module('site_security');
	$this->site_security->_make_sure_is_admin();
	$this->load->library('session');
	$this->load->module('timedate');

	$update_id = $this->uri->segment(3);
	$data = $this->fetch_data_from_db($update_id);

	$data['update_id'] = $update_id;
	$data['flash'] = $this->session->flashdata('item');
	$data['view_file'] = "view";
	$this->load->module('templates');
	$this->templates->admin($data);	
}


function index()
{
	$this->load->helper('text');
	$mysql_query = "select * from homepage order by id desc";
	$data['query'] = $this->_custom_query($mysql_query);
	$data['view_file'] = "gallery_view";
	$this->load->module('templates');
	$this->templates->public_bootstrap($data);
}

function _homepage()
{
	$this->load->helper('text');
	$mysql_query = "select * from homepage order by id desc";
	$data['query'] = $this->_custom_query($mysql_query);
	$this->load->view('homepage_members',$data);
}

function _homepage_photos()
{
	$this->load->helper('text');
	$mysql_query = "select * from homepage order by id desc";
	$data['query_couresel'] = $this->_custom_query($mysql_query);
	$this->load->view('homepage_hp',$data);
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

	$big_pic_path = './homepage_pics/'.$picture;
	$small_picture = str_replace('.', '_thumb.', $picture);
	$small_pic_path = './homepage_pics/'.$small_picture;

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
	redirect('homepage/create/'.$update_id);

}

function _generate_thumbnail($file_name, $thumbnail_name)
{
	$config['image_library']  	= 'gd2';
	$config['source_image'] 	= './homepage_pics/'.$file_name;
	$config['new_image']    	= './homepage_pics/'.$thumbnail_name;
	$config['maintain_ratio'] 	= TRUE;
	$config['width'] 			= 600;
	$config['height'] 			= 600;

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
		redirect('homepage/create/'.$update_id);
	}

	$config['upload_path'] 		= './homepage_pics/';
	$config['allowed_types'] 	= 'gif|jpg|png|jpeg';
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
	//delete page from blog
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
		redirect('homepage/create/'.$update_id);
	}elseif ($submit=="Yes - Delete Homepage Entry") {
		$this->_process_delete($update_id);

		$flash_msg = "The Homepage details was successfully deleted.";
		$value = '<div class="alert alert-success" role="alert">'.$flash_msg.'</div>';
		$this->session->set_flashdata('item',$value);
		redirect('homepage/manage');
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

	$data['headline'] = "Delete Picture Entry";
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
		redirect('homepage/manage');
	}
	
	if($submit=="Submit")
	{
		//process the form
		$this->load->library('form_validation');
		$this->form_validation->set_rules('picture_alt', 'Picture Alt','required');
		$this->form_validation->set_rules('title', 'Homepage Title','required');
		$this->form_validation->set_rules('description', 'Description','required');

		if($this->form_validation->run()== TRUE)
		{
			//get variables
			$data = $this->fetch_data_from_post();
			if(is_numeric($update_id)){

				//update the page details
				$this->_update($update_id, $data);
				$flash_msg = "The member entry was successfully updated.";
				$value = '<div class="alert alert-success" role="alert">'.$flash_msg.'</div>';
				$this->session->set_flashdata('item',$value);
				redirect('homepage/create/'.$update_id);
			}
			else{
				//insert a new page
				$data['date_reported'] = time();

				$this->_insert($data);
				$update_id = $this->get_max(); //get the id og the new page
				$flash_msg = "The Homepage entry was successfully added.";
				$value = '<div class="alert alert-success" role="alert">'.$flash_msg.'</div>';
				$this->session->set_flashdata('item',$value);
				redirect('homepage/create/'.$update_id);
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
		$data['headline'] = "Create New Homepage Entry";
	}else{
		$data['headline'] = "Update Homepage Entry Details";
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
	$data['query'] = $this->get('id desc');
	$data['view_file'] = "manage";
	$this->load->module('templates');
	$this->templates->admin($data);
}

function fetch_data_from_post()
{
	$data['picture_alt'] = $this->input->post('picture_alt', TRUE);
	$data['title'] = $this->input->post('title', TRUE);
	$data['description'] = $this->input->post('description', TRUE);
	return $data;
}

function fetch_data_from_db($update_id)
{
	$query = $this->get_where($update_id);
	foreach ($query->result() as $row) 
	{
		$data['picture_alt'] = $row->picture_alt;
		$data['title'] = $row->title;
		$data['description'] = $row->description;
		$data['picture'] = $row->picture;
		$data['date_reported'] = $row->date_reported;
	}
	if(!isset($data))
	{
		$data = "";
	}
	return $data;
}


function _transfer_from_missing_person($update_id)
{
	$this->load->module('missing_person');
	$query = $this->missing_person->get_where($update_id);
	foreach ($query->result() as $row) {
		$data['picture_alt'] = $row->picture_alt;
		$data['title'] = $row->title;
		$data['description'] = $row->description;
		$data['picture'] = $row->picture;
		$data['date_reported'] = $row->date_reported;
		$this->_insert($data);
	}
}

function get($order_by) {
$this->load->model('mdl_homepage');
$query = $this->mdl_homepage->get($order_by);
return $query;
}

function get_with_limit($limit, $offset, $order_by) {
$this->load->model('mdl_homepage');
$query = $this->mdl_homepage->get_with_limit($limit, $offset, $order_by);
return $query;
}

function get_where($id) {
$this->load->model('mdl_homepage');
$query = $this->mdl_homepage->get_where($id);
return $query;
}

function get_where_custom($col, $value) {
$this->load->model('mdl_homepage');
$query = $this->mdl_homepage->get_where_custom($col, $value);
return $query;
}

function _insert($data) {
$this->load->model('mdl_homepage');
$this->mdl_homepage->_insert($data);
}

function _update($id, $data) {
$this->load->model('mdl_homepage');
$this->mdl_homepage->_update($id, $data);
}

function _delete($id) {
$this->load->model('mdl_homepage');
$this->mdl_homepage->_delete($id);
}

function count_where($column, $value) {
$this->load->model('mdl_homepage');
$count = $this->mdl_homepage->count_where($column, $value);
return $count;
}

function get_max() {
$this->load->model('mdl_homepage');
$max_id = $this->mdl_homepage->get_max();
return $max_id;
}

function _custom_query($mysql_query) {
$this->load->model('mdl_homepage');
$query = $this->mdl_homepage->_custom_query($mysql_query);
return $query;
}

}

