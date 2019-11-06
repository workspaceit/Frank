<?php
class c_site_settings extends CI_Controller{
	private	$profile_default_pic_path;
	private	$site_logo;
	private	$site_activation;
	private	$site_down_text;
	private	$last_updated_by;
	
	function __construct(){
		parent::__construct();
		include_once(APPPATH.'controllers/class_file/time_zone.php');
		$this->profile_default_pic_path='';
		$this->site_logo='';
		$this->site_activation='';
		$this->site_down_text='';
		$this->last_updated_by=date('Y-m-d H:i:s');
	}
	function set_profile_default_pic_path($profile_default_pic_path){
		$this->profile_default_pic_path=$profile_default_pic_path;
	}
	function set_site_logo($site_logo){
		$this->site_logo=$site_logo;
	}
	function set_site_activation($site_activation){
		$this->site_activation=$site_activation;
	}
	function set_site_down_text($site_down_text){
		$this->site_down_text=$site_down_text;
	}
	function set_last_updated_by($last_updated_by){
		$this->last_updated_by=$last_updated_by;
	}
	function insertRow(){
		$this->load->model('m_site_settings');
		$insertData=array(
			'profile_default_pic_path'=>$this->profile_default_pic_path,
			'site_logo'=>$this->site_logo,
			'site_activation'=>$this->site_activation,
			'site_down_text'=>$this->site_down_text,
			'last_updated_by'=>$this->last_updated_by
		);
		$this->m_site_settings->insertRow($insertData);
		
	}
}
