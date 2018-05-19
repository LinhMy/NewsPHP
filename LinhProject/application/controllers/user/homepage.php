<?php
class Homepage extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');  
        $this->load->model('homepage_model');
    }

	public function index()
	{
        $this->load->view('user/home'); 
                
	}
	public function home()
	{
		//load danh muc
		$data_catagory['category']= $this->homepage_model->list_get_category_home();
		// load bai viet theo danh muc
		$data_catagory['postsdt'] = $this->homepage_model->list_get_post_home();
		$this->load->view('user/home_view', $data_catagory); 
		
	}
}
?>