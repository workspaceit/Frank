<?php
class user_login extends CI_Controller{
		function __construct(){
			parent::__construct();
		}
		function index(){
			include_once(APPPATH.'controllers/class_file/c_user_login.php');
			
			$user_login_obj=new c_user_login();
			$email=trim($this->input->post(''));
			$password=trim($this->input->post(''));
			$user_login_obj->set_u_email("email");
			$user_login_obj->set_password("password");
			$user_login_obj->insertRow();
		}
}