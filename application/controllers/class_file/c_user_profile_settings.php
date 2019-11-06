<?php
class c_user_profile_settings extends CI_Controller{
	
	private $u_id;
	private $birthday_hidden;
	private $home_page;
	private $col_security;
	private $gossip;
	private $notification;
	private $date;
	
	function __construct(){
		parent::__construct();
		include_once(APPPATH.'controllers/class_file/time_zone.php');
		$this->u_id=-1;
		$this->birthday_hidden=-1;
		$this->home_page=-1;
		$this->security=-1;
		$this->gossip=-1;
		$this->notification=-1;
		$this->date=date('Y-m-d H:i:s');
	}
	
	function set_u_id($u_id){
		$this->u_id=$u_id;
	}
	function set_birthday_hidden($birthday_hidden){
		$this->birthday_hidden=$birthday_hidden;
	}
	function set_home_page($home_page){
		$this->home_page=$home_page;
	}
	function set_col_security($col_security){
		$this->col_security=$col_security;
	}
	function set_gossip($gossip){
		$this->gossip=$gossip;
	}
	function set_notification($notification){
		$this->notification=$notification;
	}
	function set_date($date){
		$this->date=$date;
	}
	function insertRow(){
		$this->load->model('m_user_profile_settings');
		
		$insertionData=array(
			'u_id'=>$this->u_id,
			'birthday_hidden'=>$this->birthday_hidden,
			'home_page'=>$this->home_page,
			'security'=>$this->col_security,
			'gossip'=>$this->gossip,
			'notification'=>$this->notification,
			'date'=>$this->date		
		);
		if($this->birthday_hidden<0){
			unset($insertionData['birthday_hidden']);
		}
		$this->m_user_profile_settings->insertRow($insertionData);
	}
	function updateRow_BY_u_id($id)
	{
		
		$this->load->model('m_user_profile_settings');
		$allupdate_data=array();
		if($this->home_page!=''){
			$allupdate_data['home_page']=$this->home_page;
		}
		if($this->col_security!=''){
			$allupdate_data['security']=$this->col_security;
		}
		if ($this->gossip!=''){
			$allupdate_data['gossip']=$this->gossip;
			}
		if ($this->notification!='')
			{
		$allupdate_data['notification']=$this->notification;		
			}
			if ($this->date!=''){
				$allupdate_data['date']=$this->date;
			}
		
		return $this->m_user_profile_settings->updateRow_BY_id($id,$allupdate_data);
	}
}