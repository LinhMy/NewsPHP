<?php
class Category extends MY_Controller {

  public function __construct()
    {
      parent::__construct(); 
      $this->load->model('admin_model');       
      $this->load->library('form_validation');
      $this->load->helper('form');
      //kiem tra session
      if (!$this->admin_logged_in()) 
      {
           redirect("http://localhost/LinhProject/login");
      }
    }

  public function index()
  {
     $this->load->view('manage/listuser');       
                
  }
  public function manage_category()
  {
    //lay danh muc hien thi 
     $dtcategory['category']= $this->admin_model->list_get_category();
     $this->load->view('manage/category_view',$dtcategory);
     //xét tập lệnh
     $this->form_validation->set_rules('name_category', 'Tên danh mục', 'required');
     if($this->form_validation->run())
     {
        $name_category = $this->input->post('name_category');
        $note = $this->input->post('note');
        $data_insert = array('name_category' => $name_category, 'note' => $note);
        //insert dữ liệu danh mục
        if($this->admin_model->insert_category_model($data_insert))//kiểm tra insert 
        { 
            $url ="http://localhost/LinhProject/category";
            ($url);                    
        }
        else             
        {
          //to do
        }
      }
  }
 
}
?>