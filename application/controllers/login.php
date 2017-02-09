<?php
class Login extends CI_Controller {
    public function index(){
        $data = array(
            'title' => "This is login page",
            'message' => 'Please enter username and password'
        );
        $this->load->view('login_view', $data);
    }
}
?>