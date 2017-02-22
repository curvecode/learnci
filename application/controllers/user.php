<?php
class User extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function index(){
        $this->db->select("id, username, level");
        $this->db->order_by("username");
        $this->db->limit(10, 0);
        $this->db->where("level >", "1");
        $query=$this->db->get("user");
        $data=$query->result_array();
        echo "<pre>";
        print_r($data);
        echo "</pre>";
        echo $query->num_rows()." Users";
    }
    public function insert($us = "", $pwd = "", $lv = ""){
        $data=array(
            "username" => (string)us,
            "password" => (string)pwd,
            "level" => (string)lv
        );
        $this->db->inser("user", $data);
    }
}

?>