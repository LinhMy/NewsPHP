<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class MY_Controller extends CI_Controller {
    // Bien luu thong tin gui den view
    var $data = array();
    function __construct()
    {
        //kế thừa từ CI_Controller
        parent::__construct();
        $controller = $this->uri->segment(1);
        $controller = strtolower($controller);
 
        switch ($controller)
        {
            //Nếu đang truy cập vào trang Admin
            case 'admin':
            {
              
                break;
            }
 
            default:
            {                
                break;
            }
        }
 
    }
    public function admin_logged_in() 
    {
        if($this->session->has_userdata('login')) 
        {
            return true;
        }
        else 
        {
            return false;
        }
    }
    public function admin_logout() 
    {
        $this->session->unset_userdata('login');
    }
    
}

?>