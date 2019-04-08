<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Events extends MX_Controller
{

function __construct() {
parent::__construct();
}


function index()
{
			//fetch the blog details
		$this->load->helper('text');
		$mysql_query = "select * from events order by event_date desc";
		$data['query_events'] = $this->_custom_query($mysql_query);
		$data['view_file'] = "event_view";
		$this->load->module('templates');
		$this->templates->public_bootstrap($data);
}


function view($update_id)
{
	if(!is_numeric($update_id)){
		redirect('site_security/not_allowed');
	}

		//fetch the blog details
		$data = $this->fetch_data_from_db($update_id);
		$data['update_id'] = $update_id;
		$data['flash'] = $this->session->flashdata('item');
		$data['view_file'] = "view";
		$this->load->module('templates');
		$this->templates->public_bootstrap($data);

}

function _draw_events_hp()
{
	$this->load->helper('text');
	$mysql_query = "select * from events order by event_date desc limit 0,4";
	$data['query'] = $this->_custom_query($mysql_query);
	$this->load->view('events_hp',$data);
}

function _process_delete($update_id)
{
	//delete page from events
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
		redirect('events/create/'.$update_id);
	}elseif ($submit=="Yes - Delete Event Entry") {
		$this->_process_delete($update_id);

		$flash_msg = "The Event Entry was successfully deleted.";
		$value = '<div class="alert alert-success" role="alert">'.$flash_msg.'</div>';
		$this->session->set_flashdata('item',$value);
		redirect('events/manage');
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

	$data['headline'] = "Delete Event Entry";
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
		redirect('events/manage/'.$update_id);
	}
	
	if($submit=="Submit")
	{
		//process the form
		$this->load->library('form_validation');
		$this->form_validation->set_rules('event_title', 'Event Title','required|max_length[240]');
		$this->form_validation->set_rules('event_description', 'Event Description','required');
		$this->form_validation->set_rules('event_date', 'Event Date','required');

		if($this->form_validation->run()== TRUE)
		{
			//get variables
			$data = $this->fetch_data_from_post();

			//convert the datepicker into a unix timestamp
			$data['event_date'] = $this->timedate->make_timestamp_from_datepicker($data['event_date']);

			if(is_numeric($update_id)){

				//update the page details
				$this->_update($update_id, $data);
				$flash_msg = "The event entry was successfully updated.";
				$value = '<div class="alert alert-success" role="alert">'.$flash_msg.'</div>';
				$this->session->set_flashdata('item',$value);
				redirect('events/create/'.$update_id);
			}
			else{
				//insert a new page
				$this->_insert($data);
				$update_id = $this->get_max(); //get the id og the new page
				$flash_msg = "The Event entry was successfully added.";
				$value = '<div class="alert alert-success" role="alert">'.$flash_msg.'</div>';
				$this->session->set_flashdata('item',$value);
				redirect('events/create/'.$update_id);
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
		$data['headline'] = "Create New Event Entry";
	}else{
		$data['headline'] = "Update Event Entry Details";
	}

	if($data['event_date']>0){
		//must be a unix timestamp, so convert to datepicker format
		$data['event_date'] = $this->timedate->get_nice_date($data['event_date'], 'datepicker');
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
	$data['query'] = $this->get('event_date desc');
	$data['view_file'] = "manage";
	$this->load->module('templates');
	$this->templates->admin($data);
}

function fetch_data_from_post()
{
	$data['event_title'] = $this->input->post('event_title', TRUE);
	$data['event_description'] = $this->input->post('event_description', TRUE);
	$data['event_date'] = $this->input->post('event_date', TRUE);
	return $data;
}

function fetch_data_from_db($update_id)
{
	$query = $this->get_where($update_id);
	foreach ($query->result() as $row) 
	{
		$data['event_title'] = $row->event_title;
		$data['event_description'] = $row->event_description;
		$data['event_date'] = $row->event_date;
	}
	if(!isset($data))
	{
		$data = "";
	}
	return $data;
}


function get($order_by) {
$this->load->model('mdl_events');
$query = $this->mdl_events->get($order_by);
return $query;
}

function get_with_limit($limit, $offset, $order_by) {
$this->load->model('mdl_events');
$query = $this->mdl_events->get_with_limit($limit, $offset, $order_by);
return $query;
}

function get_where($id) {
$this->load->model('mdl_events');
$query = $this->mdl_events->get_where($id);
return $query;
}

function get_where_custom($col, $value) {
$this->load->model('mdl_events');
$query = $this->mdl_events->get_where_custom($col, $value);
return $query;
}

function _insert($data) {
$this->load->model('mdl_events');
$this->mdl_events->_insert($data);
}

function _update($id, $data) {
$this->load->model('mdl_events');
$this->mdl_events->_update($id, $data);
}

function _delete($id) {
$this->load->model('mdl_events');
$this->mdl_events->_delete($id);
}

function count_where($column, $value) {
$this->load->model('mdl_events');
$count = $this->mdl_events->count_where($column, $value);
return $count;
}

function get_max() {
$this->load->model('mdl_events');
$max_id = $this->mdl_events->get_max();
return $max_id;
}

function _custom_query($mysql_query) {
$this->load->model('mdl_events');
$query = $this->mdl_events->_custom_query($mysql_query);
return $query;
}

}

