<?php
class activation extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->helper('url');
	}
	function index(){
		 include_once(APPPATH.'controllers/class_file/c_user_login.php');
	
		 $u_email=trim($this->input->get('u_email'));
                 $activation_key=trim($this->input->get('activation_key'));
		 
		 $user_login_obj=new c_user_login();
		 
		 $user_login_obj->set_u_email($u_email);
		 $user_login_obj->set_activation_key($activation_key);
		 
		 $user_login_obj->activate_account();
			
		 redirect(base_url());
	}
}