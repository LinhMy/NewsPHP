<?php
class Post extends CI_Controller {

	public function __construct()
    {
         parent::__construct();
         $this->load->helper('url');  
         $this->load->model('post_model');
    }

	public function index()
	{
        $this->load->view('user/post_view'); 
                
	}
	public function post_display($id_post)
	{
		//lay du lieu post sang view
		$datapost['dtpost']= $this->post_model->get_post_show($id_post);
		//lay danh muc hien thi o menu
		$datapost['category']= $this->post_model->list_get_category_post();
		$this->load->view('user/post_view', $datapost);

	}
}
?>