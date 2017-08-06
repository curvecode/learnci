<?php
    $this->load->view("templates/header");
    $this->load->helper('url');

    $this->load->view("todos/content");

    $this->load->view("templates/footer");
?>