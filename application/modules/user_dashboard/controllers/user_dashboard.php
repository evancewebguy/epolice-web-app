<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class User_dashboard extends MX_Controller
{

function __construct() {
parent::__construct();
}

function index()
{
	$this->load->module('site_security');
	$this->site_security->_make_sure_logged_in();
	
	$data['flash'] = $this->session->flashdata('item');
	$data['title'] = "How to navigate";
	$data['view_file'] = "manage";
	$this->load->module('templates');
	$this->templates->user_dashboard($data);
}

}

