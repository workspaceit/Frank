<?php
class authentication extends CI_Controller{
    private $sign_out;
    private $pageData;
    function __construct() {
        parent::__construct();
        $this->load->helper('url');
        include_once(APPPATH.'controllers/common_site_setting.php');
         if($this->session->userdata('admin_inf')){
           redirect(base_url().'admin/dashboard');
         }
        $this->pageData['sign_out']=&$this->sign_out;
        $this->sign_out=FALSE;
        
    }
    function index(){
         $this->load->view('admin_login_view',$this->pageData); 
    }
    function authenticate(){
       $this->load->model('m_admin_login');
       $this->email=trim($this->input->post('email'));
       $this->password=trim($this->input->post('password'));
     
        if($this->m_admin_login->authenticate($this->email,$this->password))
        {
            if($this->m_admin_login->is_active_user($this->email))
            {
                $u_id=$this->m_admin_login->get_admin_id($this->email);
                
                $sessionData=array(
		        'u_id'=>$u_id,
			'email'=>$this->email
		);
		$this->session->set_userdata('admin_inf',$sessionData);
                redirect(base_url().'admin/dashboard');
            }
            else
            {  
                $this->session->set_flashdata('loginError','Invalid Email Or Password');
                redirect(base_url().'authentication');
            }
            
        }
         else
            {
                 $this->session->set_flashdata('loginError','Invalid Email Or Password');
                redirect(base_url().'authentication');
            }
            
        
    }
}
