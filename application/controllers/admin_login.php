<?php
class admin_login extends CI_Controller
{
    private $sign_out;
    private $pageData;
    private $site_url;
    private $u_id;
    function __construct(){
    	parent::__construct();
    	$this->load->helper('url');
        $this->pageData=array();
	include_once(APPPATH.'controllers/common_site_setting.php');
	include_once(APPPATH.'controllers/class_file/site_url.php');
        if($this->session->userdata('admin_inf')){
           $session_data=$this->session->userdata('admin_inf');
           $this->u_id=$session_data['u_id'];
        }else{
            echo ";False;golbal_notification_;Please Login Again;";
        }
	$this->pageData['sign_out']=&$this->sign_out;
        $this->sign_out=TRUE;
    }
	function index()
	{
            $email='y';
            $password='y';
            $activation='y';

            include_once(APPPATH.'controllers/class_file/c_admin_login.php');
            $admin_login_obj=new c_admin_login();
            $admin_login_obj->set_email($email);
            $admin_login_obj->set_password($password);
            $admin_login_obj->set_activation($activation);

            if($admin_login_obj->insert_Data())
            { 
             echo 'True';
            }
            else 
            {
            echo 'False';
            }
	}
         function update_submit_admin_password()
        {
       
            include_once(APPPATH.'controllers/class_file/c_admin.php');
            $old_password=$this->input->post('old_password');
            $new_password=$this->input->post('new_password');
           
            include_once(APPPATH.'controllers/class_file/c_admin.php');
           
            $c_admin_odj=new c_admin();
            $c_admin_odj->set_old_password($old_password);
            $c_admin_odj->set_new_password($new_password);
            if($c_admin_odj->check_password($this->u_id)){
                   
                    if($c_admin_odj->update_admin_password(10))
                    {
                        echo ";True;global_notification;Password Changed;";
                    }
                    else 
                        echo ';False;global_notification;Server Error;';
             }else{
                 echo ';False;old_password;Password is not correct';
             }
       }
}