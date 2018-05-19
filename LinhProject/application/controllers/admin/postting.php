<?php
class Postting extends MY_Controller {

	public function __construct()
    {
        parent::__construct();     
       $this->load->model('admin_model');                    
       $this->load->library('form_validation','session');
       $this->load->helper('form');
       //kiem tra session
       if (!$this->admin_logged_in()) {
            redirect("http://localhost/LinhProject/login");
        }

    }

	public function index()
	{
        //lấy danh mục hiển thị name ra combobox
        $dtcategory['category'] = $this->admin_model->list_get_category();
        $this->load->view('manage/postting_view', $dtcategory);   
        //kiểm tra submit
        if($this->input->post('submit'))
        {
            $config = array();
            $config['upload_path']   = 'images/';
            $config['allowed_types'] = 'jpg|png|gif';
            $config['max_size']      = '500';
            $config['max_width']     = '1028';
            $config['max_height']    = '1028';
            $this->load->library('upload', $config);//upload ảnh
            if($this->upload->do_upload('image'))//kiểm tra upload ảnh
            {
               // $data = $this->upload->data(); 
                $title = $this->input->post('title');
                $content = $this->input->post('content');                
               // $image = $this->input->post('image');// lấy tên file ảnh
                  // lấy id danh mục từ cobobox
                $id =$this->admin_model->get_category_id($this->input->post('category'));
                // dữ liệu chèn
                $data_insert = array('title' => $title, 'content' => $content,'image'=> $_FILES['image']['name'], 'id_category'=>$id['id_category']);
                if($this->admin_model->insert_post($data_insert))// kiểm tra insert 
                { 
                   $url =$base_url."/home";
                   redirect($url);                  
                }
                else             
                {
                  //to do
                }
                
            }
            else
            {
                        $error = $this->upload->display_errors();
                        echo $error;
            }
        }

  }
}
  ?>