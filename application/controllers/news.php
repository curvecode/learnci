<?php
class News extends CI_Controller{
    function new_list()
    {
        $this->load->model('news_model');
        $news_list = $this->news_model->getList();
    }
}
?>