<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Videos extends MX_Controller
{

function __construct() {
parent::__construct();
}

function index()
{
	$this->load->helper('text');
	$mysql_query = "select * from videos order by id desc";
	$data['query_videos'] = $this->_custom_query($mysql_query);
	$data['view_file'] = "videos_view";
	$this->load->module('templates');
	$this->templates->public_bootstrap($data);
}

function _draw_video_hp()
{
	$this->load->helper('text');
	$mysql_query = "select * from videos order by id desc limit 0,2";
	$data['query_gtjd'] = $this->_custom_query($mysql_query);
	$this->load->view('video_hp',$data);
}



function _process_delete($update_id)
{
	//delete page from videos
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
		redirect('videos/create/'.$update_id);
	}elseif ($submit=="Yes - Delete Video Entry") {
		$this->_process_delete($update_id);

		$flash_msg = "The Video Entry was successfully deleted.";
		$value = '<div class="alert alert-success" role="alert">'.$flash_msg.'</div>';
		$this->session->set_flashdata('item',$value);
		redirect('videos/manage');
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

	$data['headline'] = "Delete Video Entry";
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
		redirect('videos/manage/'.$update_id);
	}
	
	if($submit=="Submit")
	{
		//process the form
		$this->load->library('form_validation');
		$this->form_validation->set_rules('video_title', 'Video Title','required|max_length[240]');
		$this->form_validation->set_rules('video_source', 'Video Source','required');

		if($this->form_validation->run()== TRUE)
		{
			//get variables
			$data = $this->fetch_data_from_post();

			if(is_numeric($update_id)){

				//update the page details
				$this->_update($update_id, $data);
				$flash_msg = "The video details was successfully updated.";
				$value = '<div class="alert alert-success" role="alert">'.$flash_msg.'</div>';
				$this->session->set_flashdata('item',$value);
				redirect('videos/create/'.$update_id);
			}
			else{
				//insert a new page
				$this->_insert($data);
				$update_id = $this->get_max(); //get the id og the new page
				$flash_msg = "The video details was successfully added.";
				$value = '<div class="alert alert-success" role="alert">'.$flash_msg.'</div>';
				$this->session->set_flashdata('item',$value);
				redirect('videos/create/'.$update_id);
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
		$data['headline'] = "Add Video Music Details";
	}else{
		$data['headline'] = "Update Video Music Details";
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
	$data['video_title'] = $this->input->post('video_title', TRUE);
	$data['video_source'] = $this->input->post('video_source', TRUE);
	return $data;
}

function fetch_data_from_db($update_id)
{
	$query = $this->get_where($update_id);
	foreach ($query->result() as $row) 
	{
		$data['video_title'] = $row->video_title;
		$data['video_source'] = $row->video_source;
	}
	if(!isset($data))
	{
		$data = "";
	}
	return $data;
}


function get($order_by) {
$this->load->model('mdl_videos');
$query = $this->mdl_videos->get($order_by);
return $query;
}

function get_with_limit($limit, $offset, $order_by) {
$this->load->model('mdl_videos');
$query = $this->mdl_videos->get_with_limit($limit, $offset, $order_by);
return $query;
}

function get_where($id) {
$this->load->model('mdl_videos');
$query = $this->mdl_videos->get_where($id);
return $query;
}

function get_where_custom($col, $value) {
$this->load->model('mdl_videos');
$query = $this->mdl_videos->get_where_custom($col, $value);
return $query;
}

function _insert($data) {
$this->load->model('mdl_videos');
$this->mdl_videos->_insert($data);
}

function _update($id, $data) {
$this->load->model('mdl_videos');
$this->mdl_videos->_update($id, $data);
}

function _delete($id) {
$this->load->model('mdl_videos');
$this->mdl_videos->_delete($id);
}

function count_where($column, $value) {
$this->load->model('mdl_videos');
$count = $this->mdl_videos->count_where($column, $value);
return $count;
}

function get_max() {
$this->load->model('mdl_videos');
$max_id = $this->mdl_videos->get_max();
return $max_id;
}

function _custom_query($mysql_query) {
$this->load->model('mdl_videos');
$query = $this->mdl_videos->_custom_query($mysql_query);
return $query;
}

}

