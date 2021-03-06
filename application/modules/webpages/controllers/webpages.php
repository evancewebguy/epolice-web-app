<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Webpages extends MX_Controller
{

function __construct() {
parent::__construct();
}

function _process_delete($update_id)
{
	//delete page from webpages
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
		redirect('webpages/create/'.$update_id);
	}elseif ($submit=="Yes - Delete Page") {
		$this->_process_delete($update_id);

		$flash_msg = "The page was successfully deleted.";
		$value = '<div class="alert alert-success" role="alert">'.$flash_msg.'</div>';
		$this->session->set_flashdata('item',$value);
		redirect('webpages/manage');
	}
}

function deleteconf($update_id)
{
	if(!is_numeric($update_id)){
		redirect('site_security/not_allowed');
	}elseif ($update_id<3) {
		redirect('site_security/not_allowed');  //stoping them from deleting home page
	}
	
	$this->load->module('site_security');
	$this->site_security->_make_sure_is_admin();
	$this->load->library('session');

	$data['headline'] = "Delete Page";
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

	$update_id = $this->uri->segment(3);
	$submit = $this->input->post('submit',TRUE);
	if($submit=="Cancel"){
		redirect('webpages/manage');
	}
	
	if($submit=="Submit")
	{
		//process the form
		$this->load->library('form_validation');
		$this->form_validation->set_rules('page_title', 'page Title','required|max_length[240]');
		$this->form_validation->set_rules('page_content', 'page Content','required');

		if($this->form_validation->run()== TRUE)
		{
			//get variables
			$data = $this->fetch_data_from_post();
			$data['page_url'] = url_title($data['page_title']);

			if(is_numeric($update_id)){
				if($update_id<3){
					unset($data['page_url']);
				}
				//update the page details
				$this->_update($update_id, $data);
				$flash_msg = "The page details was successfully updated.";
				$value = '<div class="alert alert-success" role="alert">'.$flash_msg.'</div>';
				$this->session->set_flashdata('item',$value);
				redirect('webpages/create/'.$update_id);
			}
			else{
				//insert a new page
				$this->_insert($data);
				$update_id = $this->get_max(); //get the id of the new page
				$flash_msg = "The page details was successfully added.";
				$value = '<div class="alert alert-success" role="alert">'.$flash_msg.'</div>';
				$this->session->set_flashdata('item',$value);
				redirect('webpages/create/'.$update_id);
			}
		}
	}

	if((is_numeric($update_id)) && ($submit!="Submit")){
		$data = $this->fetch_data_from_db($update_id);
	}
	else{
		$data = $this->fetch_data_from_post();
	}

	if(!is_numeric($update_id)){
		$data['headline'] = "Create New Page";
	}else{
		$data['headline'] = "Update Page Details";
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
	$data['query'] = $this->get('page_url');
	$data['view_file'] = "manage";
	$this->load->module('templates');
	$this->templates->admin($data);
}

function fetch_data_from_post()
{
	$data['page_title'] = $this->input->post('page_title', TRUE);
	$data['page_headline'] = $this->input->post('page_headline', TRUE);
	$data['page_url'] = $this->input->post('page_url', TRUE);
	$data['page_keywords'] = $this->input->post('page_keywords', TRUE);
	$data['page_content'] = $this->input->post('page_content', TRUE);
	$data['page_description'] = $this->input->post('page_description', TRUE);
	return $data;
}

function fetch_data_from_db($update_id)
{
	$query = $this->get_where($update_id);
	foreach ($query->result() as $row) 
	{
		$data['page_title'] = $row->page_title;
		$data['page_headline'] = $row->page_headline;
		$data['page_url'] = $row->page_url;
		$data['page_keywords'] = $row->page_keywords;
		$data['page_content'] = $row->page_content;
		$data['page_description'] = $row->page_description;
	}
	if(!isset($data))
	{
		$data = "";
	}
	return $data;
}


function get($order_by) {
$this->load->model('mdl_webpages');
$query = $this->mdl_webpages->get($order_by);
return $query;
}

function get_with_limit($limit, $offset, $order_by) {
$this->load->model('mdl_webpages');
$query = $this->mdl_webpages->get_with_limit($limit, $offset, $order_by);
return $query;
}

function get_where($id) {
$this->load->model('mdl_webpages');
$query = $this->mdl_webpages->get_where($id);
return $query;
}

function get_where_custom($col, $value) {
$this->load->model('mdl_webpages');
$query = $this->mdl_webpages->get_where_custom($col, $value);
return $query;
}

function _insert($data) {
$this->load->model('mdl_webpages');
$this->mdl_webpages->_insert($data);
}

function _update($id, $data) {
$this->load->model('mdl_webpages');
$this->mdl_webpages->_update($id, $data);
}

function _delete($id) {
$this->load->model('mdl_webpages');
$this->mdl_webpages->_delete($id);
}

function count_where($column, $value) {
$this->load->model('mdl_webpages');
$count = $this->mdl_webpages->count_where($column, $value);
return $count;
}

function get_max() {
$this->load->model('mdl_webpages');
$max_id = $this->mdl_webpages->get_max();
return $max_id;
}

function _custom_query($mysql_query) {
$this->load->model('mdl_webpages');
$query = $this->mdl_webpages->_custom_query($mysql_query);
return $query;
}

}

