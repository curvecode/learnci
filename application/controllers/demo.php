<?php 
class Demo extends CI_Controller{

    public function __constructor(){
        parent::__constructor();
        
    }
    public function index() {
        $this->load->library("session");
        $this->session->set_userdata("ten", "thanh_betonamujin");
        echo ($this->session->userdata("ten"));
	
        // $this->session->sess_destroy();
    }
}
?>