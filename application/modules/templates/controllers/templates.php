<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Templates extends MX_Controller
{

function __construct() {
parent::__construct();
}

function user_dashboard($data)
{
	if(!isset($data['page_keywords'])){
		$data['page_keywords'] = "e-police";
	}
	if(!isset($data['page_description'])){
		$data['page_description'] = "e-police";
	}
	if(!isset($data['title'])){
		$data['page_title'] = "user dashboard";
	}
	if(!isset($data['$page_author'])){
		$data['$page_author'] = "joel chacha";
	}

	if(!isset($data['view_module'])){
		$data['view_module'] = $this->uri->segment(1);
	}

	$this->load->module('site_security');
	$data['customer_id'] = $this->site_security->_get_user_id();

	$this->load->view('user_dashboard',$data);
}


function public_bootstrap($data)
{
	if(!isset($data['page_keywords'])){
		$data['page_keywords'] = "e-police kenya";
	}
	if(!isset($data['page_description'])){
		$data['page_description'] = "e-police kenya";
	}
	if(!isset($data['page_title'])){
		$data['page_title'] = "e-police kenya";
	}

	if(!isset($data['view_module'])){
		$data['view_module'] = $this->uri->segment(1);
	}
	$this->load->view('public_bootstrap',$data);
}


function admin($data)
{
	if(!isset($data['page_keywords'])){
		$data['page_keywords'] = "epolice admin";
	}
	if(!isset($data['page_description'])){
		$data['page_description'] = "epolice admin";
	}
	if(!isset($data['page_title'])){
		$data['page_title'] = "Admin Private Area";
	}

	if(!isset($data['view_module'])){
		$data['view_module'] = $this->uri->segment(1);
	}
	$this->load->view('admin',$data);
}

function register($data)
{
	if(!isset($data['view_module'])){
		$data['view_module'] = $this->uri->segment(1);
	}
	$this->load->view('register',$data);
}


function login($data)
{
	if(!isset($data['view_module'])){
		$data['view_module'] = $this->uri->segment(1);
	}
	$this->load->view('login',$data);
}

}

