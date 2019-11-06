<?php
class c_login extends CI_Controller{
	private $email;
	private $password;
	function __construct(){
		parent::__construct();
		$this->email='';
		$this->password='';
	}
	function authenticate($email,$password){
		
		$this->load->model('m_user_login');
		$this->email=$email;
		$this->password=$password;
		
		if ($email=='' && $password==''){
		    
			return false;
		}
		if ($this->m_user_login->authenticate($email,$password)){
			return true;
		}
	}
        function is_active($email){
            $this->load->model('m_user_login');
            return $this->m_user_login->is_active($email);
        }
        function get_account_status($email){
             $this->load->model('m_user_login');
            return $this->m_user_login->get_account_status($email);
        }
        function insert_login_histroy($email,$login_ip){
            $this->load->model('m_user_login_history');
            $this->load->model('m_user_login');
            $u_id=$this->m_user_login->get_id_by_email($email);
            
            $insertData=array(
                    'user_id'=>$u_id,
                    'login_time'=>date("H:i:s"),
                    'login_date'=>date("y-m-d"),
                    'login_ip'=>$login_ip
                    );
            $this->m_user_login_history->insert_Row($insertData);
        }
}