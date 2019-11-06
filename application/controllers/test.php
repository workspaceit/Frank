<?php

class test extends CI_Controller{
    function index(){
        echo "<pre>";
        include_once(APPPATH . 'controllers/class_file/encrypt_tbl_primary_key.php');
        $encryptObj = new encrypt_tbl_primary_key();
        echo $encryptObj->get_encrypted_code(32);
      echo   $encryptObj->get_plain_text("BApeZJKXWq9rX/NocPm03TWrFO4cXMa1ePRY4uV6nxc=");
    }
}