<?php
class c_session_signup extends CI_Controller{
	function __construct(){
		parent::__construct();
	}
	function create_session_for_sign_up($u_id,$email){
		$sessionData=array(
			'u_id'=>$u_id,
			'email'=>$email
		);
		$this->session->set_userdata('get_user_id_email_session', $sessionData);
	}
	function get_session_for_sign_up_u_id(){
		$sessionData=$this->session->userdata('get_user_id_email_session');
		return $sessionData['u_id'];
	}
	function get_session_for_sign_up_email(){
		$sessionData=$this->session->userdata('get_user_id_email_session');
		return $sessionData['email'];
	}
}