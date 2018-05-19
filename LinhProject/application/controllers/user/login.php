<?php
class Login extends CI_Controller {

	public function __construct()
  {
      parent::__construct();             
      $this->load->library('form_validation','session');
      $this->load->helper('form');
      $this->load->model('login_model');
  }

	public function index()
	{
      $this->load->view('user/login_view');       
                
	}
	 public function login()
  {       
      $this->load->view('user/login_view'); 
       //Xét ruler cho from  
      $this->form_validation->set_rules('username', 'Tên đăng nhập', 'required');
      $this->form_validation->set_rules('password', 'Mật khẩu', 'required');
      $this->form_validation->set_rules('loginform', 'Đăng nhập', 'callback_check_login');
      if($this->form_validation->run())
      {
          $username = $this->input->post('username');
          $password = $this->input->post('password');
          $where = array('username' => $username, 'password' => $password);// tao dieu kien
          if($this->login_model->get_user_info($where))
          {
              $user = $this->login_model->get_user_info($where);// tao session tên login
              $this->session->set_userdata('login', $user);
              $this->session->set_flashdata('flash_message', 'Đăng nhập thành công');
              $url =$base_url."/listuser";
            	redirect($url);//sang trang adminhome
              $this->load->session(array(
                                  'admin_name'=> $username,
                                  'admin_password'=> $password
                                 ));
              $this->session->set_flashdata('login', 'Đăng nhập thành công');
              echo $this->session->flashdata('login');
        	}
          else
          {
              $this->session->set_flashdata('login', 'Tài khoản hoặc mật khẩu chưa đúng');
              echo $this->session->flashdata('login');
          }
        	
      }
        
     
  }
    // button loginfrom callback
  public function check_login()
	{
	    $username    = $this->input->post('username');
	    $password = $this->input->post('password');
	    $where = array('username' => $username, 'password' => $password);
          //kiem tra user pass
	    if(!$this->login_model->check_exits($username, $password))
	    {
	        $this->form_validation->set_message(__FUNCTION__, 'Đăng nhập không thành công');
	         return FALSE;
	    }
      else
      {
           return true;
      }
	}
}
?>