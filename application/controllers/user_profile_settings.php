<?php 
class user_profile_settings extends CI_Controller{
	function __construct(){
		parent::__construct();
	}
	function index(){
		include_once(APPPATH.'controllers/class_file/c_user_profile_settings.php');
		
		$user_profile_settings_obj=new c_user_profile_settings();
		
		$user_profile_settings_obj->set_u_id(1);
		$user_profile_settings_obj->set_birthday_hidden(1);
		$user_profile_settings_obj->set_home_page(1);
		$user_profile_settings_obj->set_col_security(1);
		$user_profile_settings_obj->set_gossip(1);
		$user_profile_settings_obj->set_notification(1);
		
		$user_profile_settings_obj->insertRow();
	
	}
}