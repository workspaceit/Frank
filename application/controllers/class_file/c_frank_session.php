<?php
class c_frank_session extends CI_Controller {
	
	function __construct(){
		parent::__construct();
	}
	function create_login_session($email){
		$this->load->model('m_user_login');
                $this->load->model('m_user_basic_info');
		$id=$this->m_user_login->get_id_by_email($email);
		$gender=$this->m_user_basic_info->get_gender_by_u_id($id);
		$sessionData=array(
		    'id'=>$id,
                    'email'=>$email,
		    'gender'=>$gender
		);
		$this->session->set_userdata('user_login_session', $sessionData);
	}
}