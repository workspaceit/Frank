<?php
class  c_user_friend_relationship extends  CI_Controller{
	
	private $u_id_to;
	private $u_id_from;
	private $r_id;
	private $date;
	function  __construct()
	{
		parent::__construct();
		$this->u_id_to=0;
		$this->u_id_from=0;
		$this->r_id=0;
		$this->date=date('Y-m-d H:i:s');
	}
	function set_u_id_to($u_id_to)
	{
		$this->u_id_to=$u_id_to;
	}
	function set_u_id_from($u_id_from)
	{
		$this->u_id_from=$u_id_from;
	}
	function set_r_id($r_id)
	{
		$this->r_id=$r_id;
	}
	function set_date($date)
	{
		$this->date=$date;
	}
	function insertRow()
	{
		$this->load->model('m_user_friend_relationship');
		$insertData=array(
		'u_id_to'=>$this->u_id_to,
		'u_id_from'=>$this->u_id_from,
        'r_id'=>$this->r_id,
		'date'=>$this->date
		);
		$this->m_user_friend_relationship->submit_data($insertData);
	}
	
}