<?php
class Post_list extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->helper('form');
        $this->load->model('post_model');
        //kiem tra session
        if (!$this->admin_logged_in()) {
            redirect("http://localhost/LinhProject/login");
        }
    }

    public function show_list_post()
    {
        //lay  danh sach post hien thi
        $data['listpost'] = $this->post_model->get_post_list();
        $this->load->view('manage/post_list_view', $data);
    }
}
