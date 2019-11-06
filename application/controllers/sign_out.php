<?php
class sign_out extends CI_Controller{
    function __construct() {
        parent::__construct();
        $this->load->helper("url");
        if($this->session->userdata('user_login_session')==null){
	    	redirect(base_url());
	    }
    }
    function index(){
        $this->session->sess_destroy();
        redirect(base_url());
   }
}
?>
