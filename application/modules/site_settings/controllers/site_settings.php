<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Site_settings extends MX_Controller
{

function __construct() {
parent::__construct();
}

function _get_cookie_name()
{
	$cookie_name = 'sgfxhrfjd';
	return $cookie_name;
}

function _get_page_not_found_msg()
{
	$msg = "<h1> The page you are looking for is not available </h1>";
	$msg.= "<p> please check and make sure everything is correct and try again</p>";
	return $msg;
}

function _get_item_segments()
{
	//return the segments of meal item pages
	$segments = "food/list";
	return $segments;
}
function _get_items_segments()
{
	//return the segments of meal category pages
	$segments = "menuset/dishs";
	return $segments;
}

}

