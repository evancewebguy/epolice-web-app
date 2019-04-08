<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Dashboard extends MX_Controller
{

function __construct() {
parent::__construct();
}

function manage()
{
	$this->load->module('site_security');
	$this->load->module('users');
	$this->load->module('reports');
	$this->site_security->_make_sure_is_admin();

	$mysql_query = "select * from users order by id desc";
	$query = $this->users->_custom_query($mysql_query);
  	$num_rows = $query->num_rows();
 
  	if($num_rows>0){
  		$data['num_rows'] = $num_rows;
  	}


	$mysql_query = "select * from reports order by id desc";
	$query = $this->reports->_custom_query($mysql_query);
  	$num_rows = $query->num_rows();
 
  	if($num_rows>0){
  		$data['num_rows_report'] = $num_rows;
  	}

	$data['flash'] = $this->session->flashdata('item');
	$data['view_file'] = "manage";
	$this->load->module('templates');
	$this->templates->admin($data);
}

}

