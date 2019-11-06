<?php
class user_invitation extends CI_Controller{
	function __construct(){
		parent::__construct();
	}
	function index(){
		include_once(APPPATH.'controllers/class_file/c_session_signup.php');
		
		$user_session_signup=new c_session_signup();
	  	$u_id=$user_session_signup->get_session_for_sign_up_u_id();
	  	unset($user_session_signup);
                $u_id=1;
		include_once(APPPATH.'controllers/class_file/c_user_invitation.php');
			
		$user_invitation_obj=new c_user_invitation();
		$friend_email=trim($this->input->post('friend_email'));
                $friend_name=trim($this->input->post('friend_name'));
		$sender_first_name=trim($this->input->post('sender_first_name'));
		
                $user_invitation_obj->set_u_id($u_id);
                
                $user_invitation_obj->set_friend_name($friend_name);
		$user_invitation_obj->set_friend_email($friend_email);
		
		$user_invitation_obj->insertRow();
                unset($user_invitation_obj);
                
                include_once(APPPATH.'controllers/class_file/custom_mail.php');
                $custom_mail_obj=new custom_mail();
                $custom_mail_obj->send_invitation_mail($sender_first_name,$friend_name,$friend_email);
                unset($custom_mail_obj);
	}
        function load_invitation_row_for_signup(){
            $size=trim($this->input->post('size'));
            $this->pageData['size']=$size;
            $this->load->view("invite_friend_row_view",$this->pageData);
        }
        function invite_friends(){
        
        }
}
?>