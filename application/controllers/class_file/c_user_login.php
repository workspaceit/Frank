<?php
class c_user_login extends CI_Controller{
	
	private $u_email;
	private $password;
	private $activation;
	private $activation_key;
	private $c_date;
	
	function __construct(){
		parent::__construct();
		include_once(APPPATH.'controllers/class_file/time_zone.php');
		$this->u_email='';
		$this->password='';
		$this->activation=0;
		$this->c_date=date('Y-m-d H:i:s');
	}
	
	function set_u_email($u_email){
		$this->u_email=$u_email;
	}
	function set_password($password){
		$this->password=$password;
	}
	function set_activation($activation){
		$this->activation=$activation;
	}
	function set_activation_key($activation_key){
		$this->activation_key=$activation_key;
	}
	function insertRow(){
		$this->load->model('m_user_login');
		
		$insertionData=array(
			'u_email'=>$this->u_email,
			'password'=>$this->password,
			'activation'=>$this->activation,
			'activation_key'=>$this->activation_key,
			'c_date'=>$this->c_date
		);
		
		return $this->m_user_login->insertRow($insertionData);
	}
        function updateRow_id_email_and_password($id){
		$this->load->model('m_user_login');
		if($this->u_email){
                    $insertionData['u_email']=$this->u_email;
                }if($this->password){
                    $insertionData['password']=$this->password;
                }
                
		
	
		
		return $this->m_user_login->updateRow_BY_id($id,$insertionData);
	}
	function activate_account(){
		$this->load->model('m_user_login');
		 $this->load->model('m_developer_activation');
                 $new_activation_key = substr(md5(microtime()),rand(0,26),10);
		$updateData=array(
			'activation'=>$this->m_developer_activation->get_id_by_value("active"),
			'activation_key'=>$new_activation_key,
                        'activation_date'=>date("y-m-d H:i:s")
		);
		
		return $this->m_user_login->updateRow_BY_u_email_activation_key($this->u_email,$this->activation_key,$updateData);
	}
	function decline_account(){
		$this->load->model('m_user_login');
		
		$this->u_id=$this->m_user_login->get_id_by_email($this->u_email);
		
		return $this->m_user_login->delete_from_related_table_By_u_id($this->u_id);
	}
}