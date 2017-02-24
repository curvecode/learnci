<?php
class Page extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->helper("url");
    }

    public function index()
    {
        $this->load->model("pages_model");
        $config['base_url'] = base_url()."/page/index";
        $config['total_rows'] = $this->pages_model->countAll();
        $config['per_page'] = 1;

        $this->load->library("pagination", $config);
        echo $this->pagination->create_links();
    }

    public function view($page = 'home')
    {
        echo "Xin chao ".$page;
    }
}
?>
