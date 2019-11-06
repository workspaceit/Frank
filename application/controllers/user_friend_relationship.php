<?php

class user_friend_relationship extends  CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
	}
	function index()
	{
		    $u_id_to=1;
		    $u_id_from=1;
		    $r_id=1;
		    $date=date('Y-m-d H:i:s');
		  
		    include_once(APPPATH.'controllers/class_file/c_user_friend_relationship.php');
			$user_friend_relation_obj=new c_user_friend_relationship();
			$user_friend_relation_obj->set_u_id_to($u_id_to);
			$user_friend_relation_obj->set_u_id_from($u_id_from);
			$user_friend_relation_obj->set_r_id($r_id);
			$user_friend_relation_obj->set_date($date);
			$user_friend_relation_obj->insertRow();
		  
	}
}