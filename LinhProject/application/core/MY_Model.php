<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class MY_Model extends CI_Model {
    // Ten table
    var $table = '';
    function create($data)
    {
        if($this->db->insert($this->table, $data))
        {
           return TRUE;
        }else{
           return FALSE;
        }
    }
 
    function update($id, $data)
    {
        if (!$id)
        {
            return FALSE;
        }
        $where = array();
        $where['id'] = $id;
            return $this->update_rule($where, $data);
    }
    function update_rule($where, $data)
    {
        if (!$where)
        {
            return FALSE;
        }
        $this->db->where($where);
        if($this->db->update($this->table, $data))
        {
            return TRUE;
        }
        return FALSE;
    }
     function del_rule($where)
     {
         if (!$where)
         {
             return FALSE;
         }
         $this->db->where($where);
         if($this->db->delete($this->table))
         {
             return TRUE;
         }
         return FALSE;
     }
    function del_all($where)
    {
        if (!$where)
        {
            return FALSE;
        }
         $this->db->where_in($this->key,$where);
        $this->db->delete($this->table);
 
        return TRUE;
    }
 
    function get_info($id)
    {
        if (!$id)
        {
            return FALSE;
        }
        $where = array();
        $where['id'] = $id;
        return $this->get_info_rule($where);
    }   
    function get_info_rule($where = array())
    {
        $this->db->where($where);
        $query = $this->db->get($this->table);
        if ($query->num_rows())
        {
            return $query->row();
        }
        return FALSE;
    }
 
    function get_total($input = array())
    {
        $this->get_list_set_input($input);
        $query = $this->db->get($this->table);
        return $query->num_rows();
    }
 
    function get_list($input = array())
    {
        $this->get_list_set_input($input);
        $query = $this->db->get($this->table);
        return $query->result();
    }
    protected function get_list_set_input($input)
    {
    	if (isset($input['select']))
        {
          $this->db->select($input['select']);
        }
        // Thêm điều kiện cho câu truy vấn truyền qua biến $input['where']
 
        if ((isset($input['where'])) && $input['where'])
        {
            $this->db->where($input['where']);
        }
                // Thêm sắp xếp dữ liệu thông qua biến $input['order'] (ví dụ $input['order'] = array('id','DESC'))
        if (isset($input['order'][0]) && isset($input['order'][1]))
        {
            $this->db->order_by($input['order'][0], $input['order'][1]);
        }
        else
        {
            //mặc định sẽ sắp xếp theo id giảm dần
            $this->db->order_by('id', 'desc');
        }
 
        // Thêm điều kiện limit cho câu truy vấn thông qua biến $input['limit'] (ví dụ $input['limit'] = array('10' ,'0'))
        if (isset($input['limit'][0]) && isset($input['limit'][1]))
        {
            $this->db->limit($input['limit'][0], $input['limit'][1]);
        }
 
    }
    function check_exists($where = array())
    {
         $this->db->where($where);
         //thuc hien cau truy van lay du lieu
         $query = $this->db->get($this->table);
      
         if($query->num_rows() > 0){
            return TRUE;
         }else{
            return FALSE;
         }
    }
}

?>