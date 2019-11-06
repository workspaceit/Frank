<?php
class c_user_invitation extends CI_Controller{
	
	private $u_id;
	private $friend_name;
	private $friend_email;
	private $s_date;
	
	function __construct(){
		parent::__construct();
		
		include_once(APPPATH.'controllers/class_file/time_zone.php');
		
		$this->u_id=-1;
		$this->friend_name='';
		$this->friend_email='';
		
		$this->s_date=date('Y-m-d H:i:s');
	}
	function set_u_id($u_id){
		$this->u_id=$u_id;
	}
	function set_friend_name($friend_name){
		$this->friend_name=$friend_name;
	}
	function set_friend_email($friend_email){
		$this->friend_email=$friend_email;
	}
	function set_s_date($s_date){
		$this->s_date=$s_date;
	}
	function insertRow(){
		$this->load->model('m_user_invitation');
		
		$insertionData=array(
			'u_id'=>$this->u_id,
		 	'friend_name'=>$this->friend_name,
			'friend_email'=>$this->friend_email,
		 	's_date'=>$this->s_date
		);
		
		return $this->m_user_invitation->insertRow($insertionData);
	}
	function updateRow_BY_u_id(){
		$this->load->model('m_user_invitation');
		
		$insertionData=array(
			
		 	'friend_name'=>$this->friend_name,
			'friend_email'=>$this->friend_email,
		 	's_date'=>$this->s_date
		);
		
		return $this->m_user_invitation->updateRow_BY_u_id($this->u_id,$insertionData);
	}
	
	
}