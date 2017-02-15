<?php 
class Demo extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->helper("url");
        $this->load->library("session");
        $this->session->set_flashdata("ten", "value001");
    }
    public function index($mess = "") {
        echo $mess;
        $this->session->set_userdata("ten", "thanh_betonamujin");
        echo ($this->session->userdata("ten"));
        $data=array(
            "username" => "Kaito",
            "email" => "codephp2013@gmail.com",
            "website" => "freetuts.net",
            "gender" => "Male",
        );
        $this->session->set_userdata($data);
        echo ("<br>".$this->session->userdata("username"));
        $arrData = $this->session->all_userdata();
        echo "<pre>";
        print_r($arrData);
        echo "</pre>";
        $this->session->sess_destroy();
        echo "Huy session thanh cong";
        redirect(base_url(), "demo/index2");
    }

    public function index2(){
        $user=$this->session->userdata("username");
        $email=$this->session->userdata("email");
        $website=$this->session->userdata("website");
        $gender=$this->session->userdata("gender");
        echo "Username : .$user, Email: $email, Gender: $gender";
    }
}
?>