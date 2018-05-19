<?php
class Homepage_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }
        //chen user
        public function insert_user($data_insert)
        {
           return $this->db->insert('user', $data_insert);
        }
        //lay danh muc
        public function  list_get_category_home()
        {
            return $this->db->query("select * from catagory order by id_category asc")->result();
        }  
        // load bai viet
        public function list_get_post_home()
        {
                      
            return $this->db->query("select * from post order by id_post desc")->result();
        }
       
        
       
}
