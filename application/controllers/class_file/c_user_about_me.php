<?php
class c_user_about_me extends CI_Controller{
	private $u_id;
	private $about_me;
	private $date;
	function __construct(){
		parent::__construct();
		include_once(APPPATH.'controllers/class_file/time_zone.php');
		$this->u_id=-1;
		$this->about_me='';
		$this->date=date('Y-m-d H:i:s');
	}
	function set_u_id($u_id){
		$this->u_id=$u_id;
	}
	function set_about_me($about_me){
		$this->about_me=$about_me;
	}
	function insertRow(){
		$this->load->model('m_user_about_me');
			$insertionData=array(
			'u_id'=>$this->u_id,
	 		'about_me'=>$this->about_me,
	 		'date'=>$this->date
		);
		return $this->m_user_about_me->insertRow($insertionData);
	}
}