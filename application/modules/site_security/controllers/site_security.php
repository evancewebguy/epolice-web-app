<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Site_security extends MX_Controller
{

function __construct() {
parent::__construct();
}


function _make_sure_logged_in()
{
	//make sure the user is loged in
	$user_id = $this->_get_user_id();
	if (!is_numeric($user_id)) {
		redirect('users');
	}
}


function _get_user_id()
{
	//attept to get the id of the user
	//start by checking the session variable
	$user_id = $this->session->userdata('user_id');

	if (!is_numeric($user_id)) {
		//check for a valid cookie
		$this->load->module('site_cookies');
		$user_id = $this->site_cookies->_attempt_get_user_id();
	}
	return $user_id;
}

function _check_admin_login_details($username,$pword)
{
	$target_username = 'mayhouse@admin';
	$target_pass = 'mayhouse@agency';

	if(($username==$target_username)&&($pword==$target_pass)){
		return TRUE;
	}else{
		return FALSE;
	}
}

function _check_other_admin_login_details($username,$pword)
{
	$target_username = $this->input->post('username',TRUE);
	$target_pass = $pword;

	if(($username==$target_username)&&($pword==$target_pass)){
		return TRUE;
	}else{
		return FALSE;
	}
}

function generate_random_string($length)
{
	$characters =  '23456789abcdefghjkmnpqrstuvwxyzABCDEFGHJKLMNPQRSTUVWXYZ';
	$randomString = '';
	for ($i=0; $i < $length; $i++) { 
		$randomString.= $characters[rand(0,strlen($characters) - 1)];
	}
	return $randomString;
}

function _make_sure_is_admin()
{
		//make sure the user is loged in
	$user_id = $this->_get_user_id();
	if (!is_numeric($user_id)) {
		redirect('youraccount');
	}
}


function not_allowed()
{
	echo "you are not allowed here";
}



function _hash_string($str)
{
	$hashed_string = password_hash($str, PASSWORD_BCRYPT, array(
			'cost' => 11
		));
	return $hashed_string;
}

function _verify_hash($plain_text_str, $hashed_string)
{
	$result = password_verify($plain_text_str, $hashed_string);
	return $result; //TRUE OR FALSE
}

}

