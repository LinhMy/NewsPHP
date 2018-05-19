<?php
class Login_model extends MY_Model
{ 
    public function __construct()
    {
        $this->load->database();

    }
    //kiem tra user pass co trong DB ko
     public function check_exits($username, $password)
    {
        $where = array('username' => $username, 'password' => $password);
        $this->db->where($where);
        $query = $this->db->get('user');
        if($query->num_rows() > 0)
        {
            return true;
        }
        return false;
    }
    
    //lay user co dieu kien
    public function get_user_info($where = array())
    {
        $this->db->where($where);
        $result = $this->db->get('user');
        return $result->row();
    }
}