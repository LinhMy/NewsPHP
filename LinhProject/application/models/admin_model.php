<?php
class Admin_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }
        //chen user
        public function insert_user($data_insert)
        {
           return $this->db->insert('user', $data_insert);
        }
        // cap nhat user
        public function update_user_model($id_user, $data_update)
        {
            $this->db->where('id_user',$id_user);
           return $this->db->update('user',$data_update);
        }
        //delete user theo id
        public function delete_user_model($id_user)
        {
            $this->db->where('id_user',$id_user);
           return $this->db->delete('user');
        }
        //chèn danh mục mới
        public function insert_category_model($dtcategory)
        {
            return $this->db->insert('catagory', $dtcategory);
        }
        // chèn bai viet
        public function insert_post($dtpost)
        {
            return $this->db->insert('post',$dtpost);
        }
	    // lay danh sach user
        public function  list_get_user()
        {
            return $this->db->query("select * from user order by id_user asc")->result();
        }  
         // lay thong tin user
        public function  get_user($id_user)
        {
            $this->db->select('username,fullname,city,password,id_user,phone');
            $this->db->where('id_user',$id_user);
           $query = $this->db->get('user');
           return $query->row();
        } 
        // lay danh muc
        public function  list_get_category()
        {
            return $this->db->query("select * from catagory order by id_category asc")->result();
        }
        // lấy id danh mục từ name
        public function  get_category_id($name_category)
        {
           // $this->db->select('id_category');
           $this->db->where('name_category',$name_category);
           $query = $this->db->get('catagory');
           return $query->row_array();

        }  
        //danh sach bai viet
        public function list_get_post()
        {
                      
            return $this->db->query("select * from post order by id_post desc")->result();
        }
 
       
}
