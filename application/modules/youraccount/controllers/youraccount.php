<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Youraccount extends MX_Controller
{

function __construct() {
parent::__construct();
$this->load->library('form_validation');
$this->form_validation->CI =& $this;
}


//////////////////////////////////admin login////////////////////////////////////////////////////////////

function _in_you_go($user_id,$login_type)
{
	//NOTE: login_type can be both long term or shortterm
	if ($login_type=="longterm") {
		//set a cookie
		echo "hello cookie world";
	}else{
		//set a session variable
		$this->session->set_userdata('user_id', $user_id);
	}
	//send the user to the admin area
	redirect('dashboard/manage');
}

function submit_login()
{
	$submit = $this->input->post('submit',TRUE);

	if($submit =="Submit"){
		//prcess the form
		$this->load->library('form_validation');
		$this->form_validation->set_rules('username', 'Username', 'required|min_length[4]|max_length[60]|callback_username_check'); //|callback_username_check
		$this->form_validation->set_rules('pword', 'Password', 'required|min_length[4]|max_length[35]');

		if($this->form_validation->run() == TRUE){
			//figure out the user_id
				$col1 = 'username';
				$value1 = $this->input->post('username', TRUE);
				$col2 = 'email';
				$value2 = $this->input->post('email', TRUE);
				$query = $this->get_with_double_condition($col1, $value1,$col2, $value2);
				$num_rows = $query->num_rows();

				foreach ($query->result() as $row) {
					$user_id = $row->id;
				}

				$remember = $this->input->post('remember', TRUE);
				if ($remember=="remember-me") {
					$login_type = "longterm";
				}else{
					$login_type = "shortterm";
				}
			//send them to admin area
			$this->_in_you_go($user_id,$login_type);
		}else{
			$data['username'] = $this->input->post('username', TRUE);
			$this->load->module('templates');
			$this->templates->login($data);
		} 
	}
}

function index()
{
	$data['username'] = $this->input->post('username', TRUE);
	$this->load->module('templates');
	$this->templates->login($data);
}

function logout()
{
	unset($_SESSION['user_id']);
	$this->load->module('site_cookies');
	$this->site_cookies->_destroy_cookie();
	redirect(base_url());
}



////////////////////////////////////////////////////////////////////////////////////////////////////////

function view($update_id)
{
	if(!is_numeric($update_id)){
		redirect('site_security/not_allowed');
	}
	//fetch the details
	$data = $this->fetch_data_from_db($update_id);
	$data['update_id'] = $update_id;
	$data['flash'] = $this->session->flashdata('item');
	$data['view_file'] = "view";
	$this->load->module('templates');
	$this->templates->admin($data);
}

function delete_image($update_id)
{
	if(!is_numeric($update_id)){
		redirect('site_security/not_allowed');
	}
	
	$this->load->module('site_security');
	$this->site_security->_make_sure_is_admin();
	$this->load->library('session');

	$data = $this->fetch_data_from_db($update_id);
	$picture = $data['picture'];

	$big_pic_path = './profile_pics/'.$picture;
	$small_picture = str_replace('.', '_thumb.', $picture);
	$small_pic_path = './profile_pics/'.$small_picture;

	//attempt to remove the image
	if(file_exists($big_pic_path)){
		unlink($big_pic_path);
	}
	if(file_exists($small_pic_path)){
		unlink($small_pic_path);
	}
	//update the database 
	unset($data);
	$data['picture'] = "";
	$this->_update($update_id, $data);

	$flash_msg = "The profile image was successfully deleted.";
	$value = '<div class="alert alert-success" role="alert">'.$flash_msg.'</div>';
	$this->session->set_flashdata('item',$value);
	redirect('youraccount/create/'.$update_id);

}

function _generate_thumbnail($file_name, $thumbnail_name)
{
	$config['image_library']  	= 'gd2';
	$config['source_image'] 	= './profile_pics/'.$file_name;
	$config['new_image']    	= './profile_pics/'.$thumbnail_name;
	$config['maintain_ratio'] 	= TRUE;
	$config['width'] 			= 200;
	$config['height'] 			= 200;

	$this->load->library('image_lib',$config);

	$this->image_lib->resize();
} 

function do_upload($update_id)
{
	if(!is_numeric($update_id)){
		redirect('site_security/not_allowed');
	}
	$this->load->module('site_security');
	$this->site_security->_make_sure_is_admin();
	$this->load->library('session');

	$submit = $this->input->post('submit',TRUE);
	if($submit=="Cancel"){
		redirect('youraccount/create/'.$update_id);
	}
	$config['upload_path'] 		= './profile_pics/';
	$config['allowed_types'] 	= 'gif|jpg|png|JPG';
	$config['max_size'] 		= 0;
	$config['max_width'] 		= 2024;
	$config['max_height']		= 1268;
	$config['file_name']        = $this->site_security->generate_random_string(16);

	$this->load->library('upload',$config);

	if(!$this->upload->do_upload('userfile'))
	{
		$data['error'] = array('error'=>$this->upload->display_errors("<p style='color:red;'>","</p>"));
		$data['headline'] = "Upload Error";
		$data['update_id'] = $update_id;
		$data['flash'] = $this->session->flashdata('item');
		$data['view_file'] = "upload_image";
		$this->load->module('templates');
		$this->templates->admin($data);
	}
	else
	{
		//upload was successful
		$data = array('upload_data' => $this->upload->data());

		$upload_data = $data['upload_data'];

		//raw_name  and ...file_ext
		$raw_name = $upload_data['raw_name'];
		$file_ext = $upload_data['file_ext'];

		//generate a thumbnail name
		$thumbnail_name = $raw_name."_thumb".$file_ext;

		$file_name = $upload_data['file_name'];
		$this->_generate_thumbnail($file_name, $thumbnail_name);

		//update the database
		$update_data['picture'] = $file_name;
		$this->_update($update_id, $update_data);

		$data['headline'] = "Upload Success";
		$data['update_id'] = $update_id;
		$data['flash'] = $this->session->flashdata('item');
		$data['view_file'] = "upload_success";
		$this->load->module('templates');
		$this->templates->admin($data);
	}
}

function upload_image($update_id)
{
	if(!is_numeric($update_id)){
		redirect('site_security/not_allowed');
	}
	
	$this->load->module('site_security');
	$this->site_security->_make_sure_is_admin();
	$this->load->library('session');

	$data['headline'] = "Upload Image";
	$data['update_id'] = $update_id;
	$data['flash'] = $this->session->flashdata('item');
	$data['view_file'] = "upload_image";
	$this->load->module('templates');
	$this->templates->admin($data);

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
		redirect('youraccount/create/'.$update_id);
	}elseif ($submit=="Yes - Delete User Account") {
		$this->_process_delete($update_id);

		$flash_msg = "The User Account was successfully deleted.";
		$value = '<div class="alert alert-success" role="alert">'.$flash_msg.'</div>';
		$this->session->set_flashdata('item',$value);
		redirect('youraccount/manage');
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

	$data['headline'] = "Delete User Account";
	$data['update_id'] = $update_id;
	$data['flash'] = $this->session->flashdata('item');
	$data['view_file'] = "deleteconf";
	$this->load->module('templates');
	$this->templates->admin($data);
}

function update_pword()
{ 

	$this->load->module('site_security');
	$this->site_security->_make_sure_is_admin();
	$this->load->library('session');
	$this->load->module('timedate');

	$update_id = $this->uri->segment(3);
	$submit = $this->input->post('submit',TRUE);

	if(!is_numeric($update_id)){
		redirect('youraccount/manage');
	}elseif($submit=="Cancel"){
		redirect('youraccount/create/'.$update_id);
	}
	
	if($submit=="Submit")
	{
		//process the form
		$this->load->library('form_validation');
		$this->form_validation->set_rules('pword', 'Password','required|min_length[7]|max_length[35]');
		$this->form_validation->set_rules('repeat_pword', 'Repeat Password','required|matches[pword]');

		if($this->form_validation->run()== TRUE)
		{
			//get variables
			$pword = $this->input->post('pword',TRUE);
			$this->load->module('site_security');
			$data['pword'] = $this->site_security->_hash_string($pword);


			//update the page details
			$this->_update($update_id, $data);
			$flash_msg = "The user account password was successfully updated.";
			$value = '<div class="alert alert-success" role="alert">'.$flash_msg.'</div>';
			$this->session->set_flashdata('item',$value);
			redirect('youraccount/create/'.$update_id);
			
		}
	}
	$data['headline'] = "Update Account Password";
	$data['update_id'] = $update_id;
	$data['flash'] = $this->session->flashdata('item');
	$data['view_file'] = "update_pword";
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
		redirect('youraccount/manage/'.$update_id);
	}
	
	if($submit=="Submit")
	{
		//process the form
		$this->load->library('form_validation');
		$this->form_validation->set_rules('username', 'User Name','required|max_length[240]');	//|is_unique[youraccount.username]
		$this->form_validation->set_rules('firstname', 'First Name','required|max_length[240]');
		$this->form_validation->set_rules('lastname', 'Last Name','required|max_length[240]');
		$this->form_validation->set_rules('role', 'Role','required');
		$this->form_validation->set_rules('county', 'County','required|max_length[240]');
		$this->form_validation->set_rules('address1', 'First Address','required|max_length[240]');
		$this->form_validation->set_rules('telnum', 'Telephone Number','required|max_length[10]');
		$this->form_validation->set_rules('email', 'Email','required|valid_email');
		$this->form_validation->set_rules('town', 'Town','required');
		$this->form_validation->set_rules('identification_no', 'Identification Number','required');

		if($this->form_validation->run()== TRUE)
		{
			//get variables
			$data = $this->fetch_data_from_post();

			if(is_numeric($update_id)){

				//update the page details
				$this->_update($update_id, $data);
				$flash_msg = "The user account details was successfully updated.";
				$value = '<div class="alert alert-success" role="alert">'.$flash_msg.'</div>';
				$this->session->set_flashdata('item',$value);
				redirect('youraccount/create/'.$update_id);
			}
			else{
				//insert a new page
				$data['date_created'] = time();
				$this->_insert($data);
				$update_id = $this->get_max(); //get the id og the new page
				$flash_msg = "The user account detail was successfully added.";
				$value = '<div class="alert alert-success" role="alert">'.$flash_msg.'</div>';
				$this->session->set_flashdata('item',$value);
				redirect('youraccount/create/'.$update_id);
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
		$data['headline'] = "Create New User Account Entry";
	}else{
		$data['headline'] = "Update New User Account Details";
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
	$data['query'] = $this->get('lastname desc');
	$data['view_file'] = "manage";
	$this->load->module('templates');
	$this->templates->admin($data);
}

function fetch_data_from_post()
{
	$data['username'] = $this->input->post('username', TRUE);
	$data['firstname'] = $this->input->post('firstname', TRUE);
	$data['lastname'] = $this->input->post('lastname', TRUE);
	$data['county'] = $this->input->post('county', TRUE);
	$data['address1'] = $this->input->post('address1', TRUE);
	$data['address2'] = $this->input->post('address2', TRUE);
	$data['telnum'] = $this->input->post('telnum', TRUE);
	$data['email'] = $this->input->post('email', TRUE);
	$data['town'] = $this->input->post('town', TRUE);
	$data['role'] = $this->input->post('role', TRUE);
	$data['identification_no'] = $this->input->post('identification_no', TRUE);
	return $data; 
}

function fetch_data_from_db($update_id)
{
	$query = $this->get_where($update_id);
	foreach ($query->result() as $row) 
	{
		
		$data['username'] = $row->username;
		$data['firstname'] = $row->firstname;
		$data['lastname'] = $row->lastname;
		$data['county'] = $row->county;
		$data['address1'] = $row->address1;
		$data['address2'] = $row->address2;
		$data['telnum'] = $row->telnum;
		$data['email'] = $row->email;
		$data['town'] = $row->town;
		$data['picture'] = $row->picture;
		$data['pword'] = $row->pword; 
		$data['role'] = $row->role;
		$data['identification_no'] = $row->identification_no; 
	}
	if(!isset($data))
	{
		$data = "";
	}
	return $data; 
}


function get($order_by) {
$this->load->model('mdl_youraccount');
$query = $this->mdl_youraccount->get($order_by);
return $query;
}

function get_with_limit($limit, $offset, $order_by) {
$this->load->model('mdl_youraccount');
$query = $this->mdl_youraccount->get_with_limit($limit, $offset, $order_by);
return $query;
}

function get_where($id) {
$this->load->model('mdl_youraccount');
$query = $this->mdl_youraccount->get_where($id);
return $query;
}

function get_where_custom($col, $value) {
$this->load->model('mdl_youraccount');
$query = $this->mdl_youraccount->get_where_custom($col, $value);
return $query;
}

function get_with_double_condition($col1, $value1,$col2, $value2)
{
$this->load->model('mdl_youraccount');
$query = $this->mdl_youraccount->get_with_double_condition($col1, $value1,$col2, $value2);
return $query;
}

function _insert($data) {
$this->load->model('mdl_youraccount');
$this->mdl_youraccount->_insert($data);
}

function _update($id, $data) {
$this->load->model('mdl_youraccount');
$this->mdl_youraccount->_update($id, $data);
}

function _delete($id) {
$this->load->model('mdl_youraccount');
$this->mdl_youraccount->_delete($id);
}

function count_where($column, $value) {
$this->load->model('mdl_youraccount');
$count = $this->mdl_youraccount->count_where($column, $value);
return $count;
}

function get_max() {
$this->load->model('mdl_youraccount');
$max_id = $this->mdl_youraccount->get_max();
return $max_id;
}

function _custom_query($mysql_query) {
$this->load->model('mdl_youraccount');
$query = $this->mdl_youraccount->_custom_query($mysql_query);
return $query;
}


function username_check($str)
{
	$this->load->module('site_security');
	$error_msg = "You did not enter the correct username and/or password";

	$col1 = 'username';
	$value1 = $str;
	$col2 = 'email';
	$value2 = $str;
	$query = $this->get_with_double_condition($col1, $value1, $col2, $value2);
	$num_rows = $query->num_rows();

	if($num_rows<1){
		$this->form_validation->set_message('username_check', $error_msg);
		return FALSE;
	}

	foreach ($query->result() as $row) {
		$pword_on_table = $row->pword;
	}

	$pword = $this->input->post('pword',TRUE);
	$result = $this->site_security->_verify_hash($pword, $pword_on_table);

	if ($result == TRUE)
	    {
	        return TRUE;
	    }
	    else
	    {
	        $this->form_validation->set_message('username_check', $error_msg);
			return FALSE;
	    }
	}

}

