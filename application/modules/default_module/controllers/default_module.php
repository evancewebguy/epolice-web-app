<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Default_module extends MX_Controller
{
	//this is the module that loads by default.

function __construct() {
parent::__construct();
}

function index()
{
	//attept to load the content in the home page
	$first_bit = trim($this->uri->segment(1));

	$this->load->module('webpages');
	$query = $this->webpages->get_where_custom('page_url',$first_bit);
	$num_rows = $query->num_rows();

	if($num_rows>0){
		//we have found content!

		foreach ($query->result() as $row) {
			$data['page_title'] = $row->page_title;
			$data['page_url'] = $row->page_url;
			$data['page_keywords'] = $row->page_keywords;
			$data['page_headline'] = $row->page_headline;
			$data['page_content'] = $row->page_content;
			$data['page_description'] = $row->page_description;
		}

	}else{
		//page not found
		$this->load->module('site_settings');
		$data['page_content'] = $this->site_settings->_get_page_not_found_msg();
	}

	$this->load->module('templates');
	$this->templates->public_bootstrap($data);
}//end of index function




}

