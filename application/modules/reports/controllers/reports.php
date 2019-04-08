<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Reports extends MX_Controller
{

function __construct() {
parent::__construct();
}



function view()
{
	$this->load->module('site_security');
	$this->site_security->_make_sure_logged_in();
	$this->load->library('session');
	$this->load->module('timedate');

	$update_id = $this->uri->segment(3);
	$data = $this->fetch_data_from_db($update_id);

	$data['update_id'] = $update_id;
	$data['flash'] = $this->session->flashdata('item');
	$data['view_file'] = "view";
	$this->load->module('templates');
	$this->templates->user_dashboard($data);	
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
	$this->site_security->_make_sure_logged_in();
	$this->load->library('session');

	$submit = $this->input->post('submit',TRUE);
	if($submit=="Cancel"){
		redirect('reports/create/'.$update_id);
	}elseif ($submit=="Yes - Delete Missing Person Entry") {
		$this->_process_delete($update_id);

		$flash_msg = "The reports details was successfully deleted.";
		$value = '<div class="alert alert-success" role="alert">'.$flash_msg.'</div>';
		$this->session->set_flashdata('item',$value);
		redirect('reports/manage');
	}
}

function deleteconf($update_id)
{
	if(!is_numeric($update_id)){
		redirect('site_security/not_allowed');
	}
	
	$this->load->module('site_security');
	$this->site_security->_make_sure_logged_in();
	$this->load->library('session');

	$data['headline'] = "Delete Picture Entry";
	$data['update_id'] = $update_id;
	$data['flash'] = $this->session->flashdata('item');
	$data['view_file'] = "deleteconf";
	$this->load->module('templates');
	$this->templates->user_dashboard($data);
}

function create()
{
	$this->load->module('site_security');
	$this->site_security->_make_sure_logged_in();
	$this->load->library('session');
	$this->load->module('timedate');

	$update_id = $this->uri->segment(3);
	$submit = $this->input->post('submit',TRUE);
	if($submit=="Cancel"){
		redirect('reports/manage');
	}
	
	if($submit=="Submit")
	{
		//process the form
		$this->load->library('form_validation');
		$this->form_validation->set_rules('report_title', 'Title','required');
		$this->form_validation->set_rules('report_description', 'Report','required');

		if($this->form_validation->run()== TRUE)
		{
			//get variables
			$data = $this->fetch_data_from_post();
			if(is_numeric($update_id)){

				//update the page details
				$this->_update($update_id, $data);
				$flash_msg = "The Report entry was successfully updated.";
				$value = '<div class="alert alert-success" role="alert">'.$flash_msg.'</div>';
				$this->session->set_flashdata('item',$value);
				redirect('reports/create/'.$update_id);
			}
			else{
				//insert a new page
				$data['reported_time'] = time();
				$data['user_id'] = $this->site_security->_get_user_id();

				$this->_insert($data);
				$update_id = $this->get_max(); //get the id og the new page

				//transfer data from reports to admin reports management
				$this->load->module('admin_reports'); 
				$this->admin_reports->_transfer_from_reports($update_id);

				$flash_msg = "The Report entry was successfully added. A staff will be sent immediately";
				$value = '<div class="alert alert-success" role="alert">'.$flash_msg.'</div>';
				$this->session->set_flashdata('item',$value);
				redirect('reports/create/'.$update_id);
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
		$data['headline'] = "Write A New Report";
	}else{
		$data['headline'] = "Update Your Report";
	}

	$data['update_id'] = $update_id;
	$data['flash'] = $this->session->flashdata('item');
	$data['view_file'] = "create";
	$this->load->module('templates');
	$this->templates->user_dashboard($data);
}


function manage()
{
	$this->load->module('site_security');
	$this->site_security->_make_sure_logged_in();

	$data['user'] = $this->site_security->_get_user_id();
	$data['flash'] = $this->session->flashdata('item');
	$data['query'] = $this->get('reported_time desc');
	$data['view_file'] = "manage";
	$this->load->module('templates');
	$this->templates->user_dashboard($data);
}

function fetch_data_from_post()
{
	$data['report_title'] = $this->input->post('report_title', TRUE);
	$data['report_description'] = $this->input->post('report_description', TRUE);
	return $data;
}

function fetch_data_from_db($update_id)
{
	$query = $this->get_where($update_id);
	foreach ($query->result() as $row) 
	{
		$data['report_title'] = $row->report_title;
		$data['report_description'] = $row->report_description;
		$data['reported_time'] = $row->reported_time;
	}
	if(!isset($data))
	{
		$data = "";
	}
	return $data;
}


function get($order_by) {
$this->load->model('mdl_reports');
$query = $this->mdl_reports->get($order_by);
return $query;
}

function get_with_limit($limit, $offset, $order_by) {
$this->load->model('mdl_reports');
$query = $this->mdl_reports->get_with_limit($limit, $offset, $order_by);
return $query;
}

function get_where($id) {
$this->load->model('mdl_reports');
$query = $this->mdl_reports->get_where($id);
return $query;
}

function get_where_custom($col, $value) {
$this->load->model('mdl_reports');
$query = $this->mdl_reports->get_where_custom($col, $value);
return $query;
}

function _insert($data) {
$this->load->model('mdl_reports');
$this->mdl_reports->_insert($data);
}

function _update($id, $data) {
$this->load->model('mdl_reports');
$this->mdl_reports->_update($id, $data);
}

function _delete($id) {
$this->load->model('mdl_reports');
$this->mdl_reports->_delete($id);
}

function count_where($column, $value) {
$this->load->model('mdl_reports');
$count = $this->mdl_reports->count_where($column, $value);
return $count;
}

function get_max() {
$this->load->model('mdl_reports');
$max_id = $this->mdl_reports->get_max();
return $max_id;
}

function _custom_query($mysql_query) {
$this->load->model('mdl_reports');
$query = $this->mdl_reports->_custom_query($mysql_query);
return $query;
}

}

