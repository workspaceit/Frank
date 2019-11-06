<?php
class  c_admin_login extends CI_Controller
{
	private $u_id;
	private $email;
	private $password;
	private $activation;
	private $c_date;
	function __construct()
	{
		parent::__construct();
		include_once(APPPATH.'controllers/class_file/time_zone.php');
		$this->email='';
		$this->password='';
		$this->activation='';
		$this->c_date=date('Y-m-d H:i:s');
	}
	function set_u_id($u_id)
	{	
		$this->u_id=$u_id;
	}
	function set_email($email)
	{	
	$this->email=$email;
	}
	function set_password($password)
	{
		$this->password=$password;
	}
	function set_activation($activation)
	{
		$this->activation=$activation;
	}
	function set_c_date($c_date)
	{
		$this->c_date=$c_date;
	}
	function insert_Data()
	{
		$this->load->model('m_admin_login');
		$insert_Data=array(
		'email'=>$this->email,
		'password'=>$this->password,
		'activation'=>$this->activation,
		'c_date'=>$this->c_date
		);
		return $this->m_admin_login->insert_Data($insert_Data);
		
	}
	function updateRow_BY_id(){
		$this->load->model('m_admin_login');
		
		$insert_Data=array(
			'email'=>$this->email,
			'password'=>$this->password,
			'activation'=>$this->activation,
			'c_date'=>$this->c_date
		);
		return $this->m_admin_login->updateRow_BY_id($this->u_id,$insert_Data);
	}
		
	
}