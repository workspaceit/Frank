<?php
class login extends CI_Controller{
	private $email;
	private $password;
	private $sessionData;
	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->sessionData=array();
		$this->email='';
		$this->password='';
	}
	function index(){
		$this->load->view('login_view');
	}
	function authenticate(){
		
           include_once(APPPATH.'controllers/class_file/c_login.php');
	 
	 
	   $c_login_obj=new c_login();
	  
	   $email=trim($this->input->post('u_email'));
	   $password=trim($this->input->post('password'));
            if($email=='' || $password==''){
               $this->session->set_flashdata('error_message','Email and Password required');
               echo ";False;Email and Password required";
               die();
            }
            if ($c_login_obj->authenticate($email,$password))
            {
               if($c_login_obj->is_active($email)){
                   
                    include_once(APPPATH.'controllers/class_file/c_frank_session.php');
                    $c_login_obj->insert_login_histroy($email,'121');
                    $c_frank_session_obj=new c_frank_session();
                    $c_frank_session_obj->create_login_session($email);
                    unset($c_frank_session_obj);
                    echo ";True;";
               }else{
                    $status=$c_login_obj->get_account_status($email);
                    if($status=="inactive"){
                        echo ";False;Your Account is ".$status." Please check your email;";
                    }elseif($status=="suspended"){
                          echo ";False;Your Account has been ".$status." Please contact with admin;";
                    }
                    die();
               }
            }
            else {
               $this->session->set_flashdata('check_db','Email or Password is not Correct');
               $this->session->set_flashdata('email',$email);

               echo ";False;Email or Password is not Correct";
               die();
            }
	}
	
}