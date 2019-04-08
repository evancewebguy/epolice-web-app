<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Blog extends MX_Controller
{

function __construct() {
parent::__construct();
}

//function for SEO.
function article()
{
	//figure out what the blog id is
	$blog_url = $this->uri->segment(3);
	$this->load->module('blog');
	$blog_id = $this->blog->_get_blog_id_foem_blog_url($blog_url);
	$this->blog->view($blog_id);
}

function _get_blog_id_foem_blog_url($blog_url)
{
	$query = $this->get_where_custom('blog_url', $blog_url);
	foreach($query->result() as $row) {
		$blog_id = $row->id;
	}

	if(!isset($blog_id)){
		$blog_id = 0;
	}

	return $blog_id;
}

/*
function index()
{
	//fetch the blog details
	$this->load->helper('text');
	$mysql_query = "select * from blog order by date_published desc";
	$data['query_blog'] = $this->_custom_query($mysql_query);
	$data['view_file'] = "blog_view";
	$this->load->module('templates');
	$this->templates->public_bootstrap($data);
}*/

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

function news()
{
	$this->load->module('custom_pagination');
	$this->load->helper('text');

	//count articles belonging to this page
	$use_limit = FALSE;
	$mysql_query = $this->_generate_mysql_query($use_limit);
	$query_xx = $this->_custom_query($mysql_query);
	$total_articles = $query_xx->num_rows();

	//fetch articles that should be on this page.
	$use_limit = TRUE;
	$mysql_query = $this->_generate_mysql_query($use_limit);

	//$template, $target_base_url, $total_rows, $offset_segment, $limit
	$pagination_data['template'] = 'public_bootstrap';
	$pagination_data['target_base_url'] = $this->get_target_pagination_base_url();
	$pagination_data['total_rows'] = $total_articles;
	$pagination_data['offset_segment'] = 3;
	$pagination_data['limit'] = $this->get_limit();

	$data['pagination'] = $this->custom_pagination->_generate_pagination($pagination_data);
	$data['query_gf'] = $this->_custom_query($mysql_query);
	$data['view_file'] = "blog_view";
	$this->load->module('templates');
	$this->templates->public_bootstrap($data);
}

function _generate_mysql_query($use_limit)
{
	$mysql_query = "select * from blog order by date_published desc";
	if($use_limit==TRUE){
		$limit = $this->get_limit();
		$offset = $this->get_offset();
		$mysql_query.= " limit ".$offset.", ".$limit;
	}
	return $mysql_query;
}

function get_limit()
{
	$limit = 3;
	return $limit;
}
function get_offset()
{
	$offset = $this->uri->segment(3);
	if(!is_numeric($offset)){
		$offset = 0;
	}
	return $offset;
}

function get_target_pagination_base_url()
{
	$first_bit = $this->uri->segment(1);
	$second_bit = $this->uri->segment(2);
	$third_bit = $this->uri->segment(3);
	$target_base_url = base_url().$first_bit."/".$second_bit; //."/".$third_bit
	return $target_base_url;
}


function _draw_feed_hp()
{
	$this->load->helper('text');
	$mysql_query = "select * from blog order by date_published desc limit 0,4";
	$data['query_hp_blog'] = $this->_custom_query($mysql_query);
	$this->load->view('feed_hp',$data);
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

	$big_pic_path = './blog_pics/'.$picture;
	$small_picture = str_replace('.', '_thumb.', $picture);
	$small_pic_path = './blog_pics/'.$small_picture;

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

	$flash_msg = "The  image was successfully deleted.";
	$value = '<div class="alert alert-success" role="alert">'.$flash_msg.'</div>';
	$this->session->set_flashdata('item',$value);
	redirect('blog/create/'.$update_id);

}

function _generate_thumbnail($file_name, $thumbnail_name)
{
	$config['image_library']  	= 'gd2';
	$config['source_image'] 	= './blog_pics/'.$file_name;
	$config['new_image']    	= './blog_pics/'.$thumbnail_name;
	$config['maintain_ratio'] 	= TRUE;
	$config['width'] 			= 800;
	$config['height'] 			= 210;

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
		redirect('blog/create/'.$update_id);
	}

	$config['upload_path'] 		= './blog_pics/';
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
	//delete page from blog
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
		redirect('blog/create/'.$update_id);
	}elseif ($submit=="Yes - Delete Blog Entry") {
		$this->_process_delete($update_id);

		$flash_msg = "The blog was successfully deleted.";
		$value = '<div class="alert alert-success" role="alert">'.$flash_msg.'</div>';
		$this->session->set_flashdata('item',$value);
		redirect('blog/manage');
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

	$data['headline'] = "Delete Blog Entry";
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
		redirect('blog/manage');
	}
	
	if($submit=="Submit")
	{
		//process the form
		$this->load->library('form_validation');
		$this->form_validation->set_rules('blog_title', 'Blog Title','required|max_length[240]');
		$this->form_validation->set_rules('blog_content', 'Blog Content','required');
		$this->form_validation->set_rules('date_published', 'Date Published','required');

		if($this->form_validation->run()== TRUE)
		{
			//get variables
			$data = $this->fetch_data_from_post();
			$data['blog_url'] = url_title($data['blog_title']);

			//convert the datepicker into a unix timestamp
			$data['date_published'] = $this->timedate->make_timestamp_from_datepicker($data['date_published']);

			if(is_numeric($update_id)){

				//update the page details
				$this->_update($update_id, $data);
				$flash_msg = "The blog entry was successfully updated.";
				$value = '<div class="alert alert-success" role="alert">'.$flash_msg.'</div>';
				$this->session->set_flashdata('item',$value);
				redirect('blog/create/'.$update_id);
			}
			else{
				//insert a new page
				$this->_insert($data);
				$update_id = $this->get_max(); //get the id og the new page
				$flash_msg = "The blog entry was successfully added.";
				$value = '<div class="alert alert-success" role="alert">'.$flash_msg.'</div>';
				$this->session->set_flashdata('item',$value);
				redirect('blog/create/'.$update_id);
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
		$data['headline'] = "Create New Blog Entry";
	}else{
		$data['headline'] = "Update Blog Entry Details";
	}

	if($data['date_published']>0){
		//must be a unix timestamp, so convert to datepicker format
		$data['date_published'] = $this->timedate->get_nice_date($data['date_published'], 'datepicker');
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
	$data['query'] = $this->get('date_published desc');
	$data['view_file'] = "manage";
	$this->load->module('templates');
	$this->templates->admin($data);
}

function fetch_data_from_post()
{
	$data['blog_title'] = $this->input->post('blog_title', TRUE);
	$data['blog_url'] = $this->input->post('blog_url', TRUE);
	$data['blog_keywords'] = $this->input->post('blog_keywords', TRUE);
	$data['blog_content'] = $this->input->post('blog_content', TRUE);
	$data['blog_description'] = $this->input->post('blog_description', TRUE);
	$data['date_published'] = $this->input->post('date_published', TRUE);
	$data['author'] = $this->input->post('author', TRUE);
	return $data;
}

function fetch_data_from_db($update_id)
{
	$query = $this->get_where($update_id);
	foreach ($query->result() as $row) 
	{
		$data['blog_title'] = $row->blog_title;
		$data['author'] = $row->author;
		$data['blog_url'] = $row->blog_url;
		$data['blog_keywords'] = $row->blog_keywords;
		$data['blog_content'] = $row->blog_content;
		$data['blog_description'] = $row->blog_description;
		$data['date_published'] = $row->date_published;
		$data['picture'] = $row->picture;
	}
	if(!isset($data))
	{
		$data = "";
	}
	return $data;
}


function get($order_by) {
$this->load->model('mdl_blog');
$query = $this->mdl_blog->get($order_by);
return $query;
}

function get_with_limit($limit, $offset, $order_by) {
$this->load->model('mdl_blog');
$query = $this->mdl_blog->get_with_limit($limit, $offset, $order_by);
return $query;
}

function get_where($id) {
$this->load->model('mdl_blog');
$query = $this->mdl_blog->get_where($id);
return $query;
}

function get_where_custom($col, $value) {
$this->load->model('mdl_blog');
$query = $this->mdl_blog->get_where_custom($col, $value);
return $query;
}

function _insert($data) {
$this->load->model('mdl_blog');
$this->mdl_blog->_insert($data);
}

function _update($id, $data) {
$this->load->model('mdl_blog');
$this->mdl_blog->_update($id, $data);
}

function _delete($id) {
$this->load->model('mdl_blog');
$this->mdl_blog->_delete($id);
}

function count_where($column, $value) {
$this->load->model('mdl_blog');
$count = $this->mdl_blog->count_where($column, $value);
return $count;
}

function get_max() {
$this->load->model('mdl_blog');
$max_id = $this->mdl_blog->get_max();
return $max_id;
}

function _custom_query($mysql_query) {
$this->load->model('mdl_blog');
$query = $this->mdl_blog->_custom_query($mysql_query);
return $query;
}

}

