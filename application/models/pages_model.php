<?php
class Pages_model extends CI_Model{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    public function countAll()
    {
        $this->db->select("id, username, level");
        $this->db->order_by("username");
        $this->db->limit(10, 0);
        $this->db->where("level >", "1");
        $query=$this->db->get("user");
        $data=$query->result_array();
        return $query->num_rows();
    }
}

?>