<?php
class Home_admin extends MY_Controller {

  public function __construct()
  {
      parent::__construct();             
      $this->load->library('form_validation');
      $this->load->helper('form');
      $this->load->model('admin_model');
      if (!$this->admin_logged_in())
      {
          redirect("http://localhost/LinhProject/login");
      }
  }

  public function listuser()
  {
      //lay thong tin user hien thi
      $data['listuser'] = $this->admin_model->list_get_user();
      $this->load->view('manage/admin_home_view',$data);
  }
  // chen user
   public function insertuser()
  {  
        // xet tap luat
        $this->load->view('manage/insertuser');
        $this->form_validation->set_rules('username', 'Tên đăng nhập', 'required');
        $this->form_validation->set_rules('password', 'Mật khẩu', 'required');
        $this->form_validation->set_rules('re_password', 'Nhập lại Mật khẩu', 'required|matches[password]');

         //chạy và kiểm tra các tập luật
         if($this->form_validation->run())
         {
            $username = $this->input->post('username');
            $fullname = $this->input->post('fullname');
            $password = $this->input->post('password');
            $city = $this->input->post('city');
            $phone = $this->input->post('phone');
            $data_insert = array('username' => $username, 'fullname' => $fullname, 'city'=> $city, 'phone'=> $phone, 'password'=> $password);
            // chen user
            if($this->admin_model->insert_user($data_insert))
            { 
                $url =$base_url."/listuser";// quay lai admin home
                redirect($url);                    
            }
            else
            {
                $this->load->view('admin/insertuser');// load lai trang insert
            }
    }
  }
  public function update_user($id_update)//cap nhat thong tin user
  {
        $info['user']=$this->admin_model->get_user($id_update);
        $this->load->view('manage/update_user_view',$info);
        $this->form_validation->set_rules('username', 'Tên đăng nhập', 'required');
        $this->form_validation->set_rules('password', 'Mật khẩu', 'required');

         //chạy và kiểm tra các tập luật
         if($this->form_validation->run())
         {
            $username = $this->input->post('username');
            $fullname = $this->input->post('fullname');
            $password = $this->input->post('password');
            $city = $this->input->post('city');
            $phone = $this->input->post('phone');
            $data_update = array('username' => $username, 'fullname' => $fullname, 'city'=> $city, 'phone'=> $phone, 'password'=> $password);
            // sửa user
            if($this->admin_model->update_user_model($id_update,$data_update))
            { 
                $url =$base_url."/listuser";// quay lai admin home
                redirect($url);                    
            }
            else
            {
                $this->load->view('admin/updateuser');// load lai trang update
            }
          }
  }
  public function delete_user($id_delete)
  {
        if($this->admin_model->delete_user_model($id_delete))
            { 
                $url =$base_url."/listuser";// quay lai admin home
                redirect($url);                    
            }
           
  }
}
?>