<?php
    /*
    là dòng Security bảo vệ file của các bạn, 
    nó không cho truy cập thẳng vào file mà phải 
    thông qua file index.php ở mức ngoài cùng.
    */
    if(!defined('BASEPATH'))
    exit('No direct script access allowed');

    class Hello extends CI_Controller {
        function __construct() {
            parent::__construct();
        }
        public function index() {
            echo "Hello";
        }

        public function sendMessage($mess = ''){
            echo "The message is ".$mess;
        }
    }
?>