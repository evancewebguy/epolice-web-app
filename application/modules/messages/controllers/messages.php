<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Messages extends MX_Controller
{

function __construct() {
parent::__construct();
}

////////////////////////////GET MESSAGE SUBMITTED/////////////////////////

function delete($update_id)
{
	if(!is_numeric($update_id)){
		redirect('site_security/not_allowed');
	}
	
	$this->load->module('site_security');
	$this->site_security->_make_sure_is_admin();
	$this->load->library('session');

	//fetch the message_id
	$query = $this->get_where($update_id);
	foreach($query->result() as $row){
		$update_id = $row->id;
	}

	$this->_delete($update_id);

	$flash_msg = "The  message was successfully deleted.";
	$value = '<div class="alert alert-success" role="alert">'.$flash_msg.'</div>';
	$this->session->set_flashdata('item',$value);
	redirect('messages/manage/'.$update_id);

}


function read_message()
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


///////////////////////////////////SUBMIT MESSAGE BY USER////////////////////////
function submit()
{
	$this->load->library('session');
	$this->load->module('timedate');
	$submit = $this->input->post('submit',TRUE);

	if($submit=="Send Message")
	{
		//process the form
		$this->load->library('form_validation');
		$this->form_validation->set_rules('message_name', 'Message Name','required|max_length[240]');
		$this->form_validation->set_rules('message_subject', 'Message Subject','required');
		$this->form_validation->set_rules('message_email', 'Message Email','required|valid_email');
		$this->form_validation->set_rules('message', 'Message','required');

		if($this->form_validation->run()== TRUE)
		{
				//get variables
			$data = $this->fetch_data_from_post();

			//convert the datepicker into a unix timestamp
			$data['date_sent'] = time();

			//insert a new page
			$this->_insert($data);
			$flash_msg = "The message was successfully sent.";
			$value = '<div class="alert alert-success" role="alert">'.$flash_msg.'</div>';
			$this->session->set_flashdata('item',$value);
			redirect('messages/thankyou');
		}
	}else{
		redirect(base_url().'#section-contact');
	}


	$data['flash'] = $this->session->flashdata('item');
	$this->load->module('templates');
	$this->templates->public_bootstrap($data);	
}

function thankyou()
{
	$data['view_file'] = "thankyou";
	$this->load->module('templates');
	$this->templates->public_bootstrap($data);	
}

function _draw_form()
{
	$this->load->helper('text');
	$data['flash'] = $this->session->flashdata('item');
	$this->load->view('create',$data);	
}

function fetch_data_from_post()
{
	$data['message_name'] = $this->input->post('message_name', TRUE);
	$data['message_subject'] = $this->input->post('message_subject', TRUE);
	$data['message'] = $this->input->post('message', TRUE);
	$data['message_email'] = $this->input->post('message_email', TRUE);
	return $data;
}

function fetch_data_from_db($update_id)
{
	$query = $this->get_where($update_id);
	foreach ($query->result() as $row) 
	{
		$data['message_name'] = $row->message_name;
		$data['message_subject'] = $row->message_subject;
		$data['message'] = $row->message;
		$data['date_sent'] = $row->date_sent;
		$data['message_email'] = $row->message_email;
	}
	if(!isset($data))
	{
		$data = "";
	}
	return $data;
}


function get($order_by) {
$this->load->model('mdl_messages');
$query = $this->mdl_messages->get($order_by);
return $query;
}

function get_with_limit($limit, $offset, $order_by) {
$this->load->model('mdl_messages');
$query = $this->mdl_messages->get_with_limit($limit, $offset, $order_by);
return $query;
}

function get_where($id) {
$this->load->model('mdl_messages');
$query = $this->mdl_messages->get_where($id);
return $query;
}

function get_where_custom($col, $value) {
$this->load->model('mdl_messages');
$query = $this->mdl_messages->get_where_custom($col, $value);
return $query;
}

function _insert($data) {
$this->load->model('mdl_messages');
$this->mdl_messages->_insert($data);
}

function _update($id, $data) {
$this->load->model('mdl_messages');
$this->mdl_messages->_update($id, $data);
}

function _delete($id) {
$this->load->model('mdl_messages');
$this->mdl_messages->_delete($id);
}

function count_where($column, $value) {
$this->load->model('mdl_messages');
$count = $this->mdl_messages->count_where($column, $value);
return $count;
}

function get_max() {
$this->load->model('mdl_messages');
$max_id = $this->mdl_messages->get_max();
return $max_id;
}

function _custom_query($mysql_query) {
$this->load->model('mdl_messages');
$query = $this->mdl_messages->_custom_query($mysql_query);
return $query;
}

}

