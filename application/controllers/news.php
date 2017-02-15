<?php
class News extends CI_Controller{
    function new_list()
    {
        // load model
        $this->load->model('news_model');
        // Goi function trong model
        $news_list = $this->news_model->getList();
    }
}
?>