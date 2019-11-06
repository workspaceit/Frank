<?php 
class site_settings extends CI_Controller{
	
	function __construct(){
		parent::__construct();
	}
	function index(){
		include_once(APPPATH.'controllers/class_file/c_site_settings.php');
		
		$site_setting_obj=new c_site_settings();
		
		$site_setting_obj->set_profile_default_pic_path("pic path");
		$site_setting_obj->set_site_logo("site logo");
		$site_setting_obj->set_site_activation("Site Activation");
		$site_setting_obj->set_site_down_text("text down");
		
		$site_setting_obj->insertRow();
	}
}
	