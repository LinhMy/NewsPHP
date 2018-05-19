<?php
class Logout extends MY_Controller {

	public function __construct()
        {
           parent::__construct();
           $this->load->helper('url');  
           $this->load->model('admin_model');
           //kiem tra session
	       if (!$this->admin_logged_in()) {
	            redirect("http://localhost/LinhProject/login");
	        }
        }

	public function index()
	{
		//xoa cookie
		//$this->homepage_model->admin_logout();
		$this->admin_logout();
		//hien thi home page
		$data_catagory['category']= $this->admin_model->list_get_category();
		$data_catagory['postsdt'] = $this->admin_model->list_get_post();
		$this->load->view('user/home_view', $data_catagory); 
                
	}
	
}
?>