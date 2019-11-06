<?php


class admin_user_profile extends CI_Controller{
    private $pageData;
    private $site_url;
    
    function __construct(){
    	parent::__construct();
    	$this->load->helper('url');
        include_once(APPPATH.'controllers/class_file/time_zone.php');
	include_once(APPPATH.'controllers/common_site_setting.php');
	include_once(APPPATH.'controllers/class_file/site_url.php');
       
	if($this->session->userdata('admin_inf')){
           $session_data=$this->session->userdata('admin_inf');
           $this->u_id=$session_data['u_id'];
        }else{
            echo ";False;;Please Login";
        }
			
	$this->pageData=array();
    }
    function get_email_view(){
        $this->load->view('admin_members_mail_view');
    }
    function get_user_edit_profile_view(){
        include_once(APPPATH.'controllers/class_file/c_information.php');
        
        $user_id=$this->input->post('u_id');
        $c_information_obj=new c_information();
        
        $this->pageData=$c_information_obj->get_user_infomation_by_u_id($user_id);
        $this->pageData['prefix']=$this->input->post('prefix');
        $this->load->view('admin_user_update_profile_view',$this->pageData);
    }
    function submit_update_user_basic_info(){
         include_once(APPPATH.'controllers/class_file/c_user_basic_info.php');
					
	$user_basic_info_obj=new c_user_basic_info();
	
        $u_id=trim($this->input->post('u_id'));
        $mm=trim($this->input->post('month'));
	$dd=trim($this->input->post('day'));
	$yy=trim($this->input->post('year'));
	
        $f_name=trim($this->input->post('f_name'));
	$l_name=trim($this->input->post('l_name'));
        $gender=trim($this->input->post('gender'));
				
        $birthday=$yy.'-'.$mm.'-'.$dd;
	
        
        $user_basic_info_obj->set_f_name($f_name);
        $user_basic_info_obj->set_l_name($l_name);
        $user_basic_info_obj->set_gender($gender);
        $user_basic_info_obj->set_birthday($birthday);
        if ($user_basic_info_obj->updateRow_BY_id($u_id)){
            echo ";True;";
        }else{
            echo ";Flase;";
        }
        
    }
    function submit_update_profile_data(){
        include_once(APPPATH.'controllers/class_file/c_user_profile_data.php');
		$user_profile_data_obj=new c_user_profile_data();
		
                $u_id=$this->input->post('u_id');
                
		$current_location_1=trim($this->input->post('current_location_1'));
		$current_location_2=trim($this->input->post('current_location_2'));
		$home_town_1=trim($this->input->post('home_town_1'));
		$home_town_2=trim($this->input->post('home_town_2'));
		$organization_1=trim($this->input->post('organization_1'));
		$organization_2=trim($this->input->post('organization_2'));
		$high_school=trim($this->input->post('high_school'));
		$higher_education_1=trim($this->input->post('higher_education_1'));
                $higher_education_2=trim($this->input->post('higher_education_2'));
                $workplace_1=trim($this->input->post('workplace_1'));
                $workplace_2=trim($this->input->post('workplace_2'));
		
	    
                $user_profile_data_obj->set_u_id($u_id);
		$user_profile_data_obj->set_current_location_1($current_location_1);
		$user_profile_data_obj->set_current_location_2($current_location_2);
		$user_profile_data_obj->set_home_town_1($home_town_1);
		$user_profile_data_obj->set_home_town_2($home_town_2);
		$user_profile_data_obj->set_organization_1($organization_1);
		$user_profile_data_obj->set_organization_2($organization_2);
		$user_profile_data_obj->set_high_school($high_school);
		$user_profile_data_obj->set_higher_education_1($higher_education_1);
		$user_profile_data_obj->set_higher_education_2($higher_education_2);
		$user_profile_data_obj->set_workplace_1($workplace_1);
		$user_profile_data_obj->set_workplace_2($workplace_2);
		
		if($user_profile_data_obj->update_row_by_u_id($u_id)){
			echo ";True;";
                }else{
                    echo ";Flase;";
                }
    }
    function submit_update_user_login_data(){
        include_once(APPPATH.'controllers/class_file/c_user_login.php');
        $this->load->model('m_user_login');
        
        $user_login_obj=new c_user_login();
        
        $u_id=trim($this->input->post('u_id'));
        $email=trim($this->input->post('u_email'));
        $password=trim($this->input->post('password'));

        if(!$this->m_user_login->is_other($u_id,$email)){
            $user_login_obj->set_u_email($email);
            $user_login_obj->set_password($password);
            $user_login_obj->updateRow_id_email_and_password($u_id);
            echo ";True;";
        }else{
            echo ";False;".$email." belongs to an existing account";
        }
    }
    function suspend_user(){
        $this->load->model('m_developer_activation');
        $this->load->model('m_user_login');
        
        $u_id=$this->input->post('u_id');
        
        $update_array=array(
            'activation'=>$this->m_developer_activation->get_id_by_value("suspended")
         );
        
         if($this->m_user_login->updateRow_BY_id($u_id,$update_array)){
                 echo ";True;suspended;";
         }else{
            echo ";False;";
         }
    }
    function send_email_to_selected_user(){
       
        $this->load->model('m_user_login');

        $u_id=trim($this->input->post('u_id'));
        $subject=trim($this->input->post('subject'));
        $message=trim($this->input->post('message'));
        $to_email=$this->m_user_login->get_email_by_id($u_id);
        $from="Frank";
        $reply_email="developer_beta@workspaceit.com";
        $headers = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
        $headers .= "From: " .$from. "\r\n" .
                    "Reply-To:".$reply_email."\r\n" .
                    "X-Mailer: PHP/" . phpversion();
        mail($to_email,$subject,$message,$headers);
    }
    function activate_user(){
        $this->load->model('m_developer_activation');
        $this->load->model('m_user_login');
        
        $u_id=trim($this->input->post('u_id'));
        
        $update_array=array(
            'activation'=>$this->m_developer_activation->get_id_by_value("active"),
            'activation_date'=>date('y-m-d H:i:s')
         );
        
        if($this->m_user_login->updateRow_BY_id($u_id,$update_array)){
             echo ";True;active;";
         }else{
            echo ";False;";
         }
    }
    function delet_from_frank(){
        $this->load->model('m_user_login');
        $u_id=trim($this->input->post('u_id'));
        if($this->m_user_login->delete_from_system_By_u_id($u_id)){ 
            echo ";True;Deleted;";
         }else{
            echo ";False;";
         }
    }
}

?>
