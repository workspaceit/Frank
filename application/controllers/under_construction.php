<?php
class under_construction extends CI_Controller{
	private $pageData;
	function __construct(){
		parent::__construct();
		$this->pageData=array();
	}
	function index(){
		$this->load->model('m_site_settings');
		
		foreach($this->m_site_settings->get_all() as $rowData){
			$this->pageData['profile_default_pic_path']=$rowData->profile_default_pic_path;
			$this->pageData['site_logo']=$rowData->site_logo;
			$this->pageData['site_down_text']=$rowData->site_down_text;
		}
		
		$this->load->view('user_construction_view',$this->pageData);
	}
}