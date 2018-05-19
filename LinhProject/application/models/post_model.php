<?php
class Post_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }
       // lay du lieu post hien thi view
        public function  get_post_show($id_post)
        {
            $this->db->where('id_post', $id_post);
            $query = $this->db->get('post');
            return $query->row_array();
          
        }
        public function  list_get_category_post()
        {
            return $this->db->query("select * from catagory order by id_category asc")->result();
        }
        public function  get_post_list()
        {
           $this->db->select('post.id_post,post.title,post.content,post.image,catagory.name_category');
            $this->db->from('post');
           $this->db->join('catagory', 'catagory.id_category = post.id_category');
            $query = $this->db->get();
            return $query->result();
          
        } 
     }
    ?> 