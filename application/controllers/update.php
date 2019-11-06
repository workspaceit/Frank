<?php
class update extends CI_Controller
{
	private $pageData;
	
	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->pageData=array();
	}
	function my_information()
	{       
			include_once(APPPATH.'controllers/class_file/c_information.php');
			$c_info_odj=new c_information();
			$this->pageData=$c_info_odj->get_user_infomation_by_u_id(1);
			$this->load->view('user_information_view.php',$this->pageData);
	} 
	function submit_update_basic_information()
	{
	                include_once(APPPATH.'controllers/class_file/c_user_basic_info.php');
					
					$user_basic_info_obj=new c_user_basic_info();
					
					$mm=$this->input->post('month');
			   		$dd=$this->input->post('day');
					$yy=$this->input->post('year');
					
				    $f_name=trim($this->input->post('f_name'));
					$l_name=trim($this->input->post('l_name'));
					$gender=trim($this->input->post('gender'));
					$birthday=$yy.'-'.$mm.'-'.$dd;
					$pic_path=trim($this->input->post('pic_path'));
					$user_basic_info_obj->set_f_name($f_name);
					$user_basic_info_obj->set_l_name($l_name);
					$user_basic_info_obj->set_gender($gender);
					$user_basic_info_obj->set_pic_path($pic_path);
					$user_basic_info_obj->set_birthday($birthday);
					if ($user_basic_info_obj->updateRow_BY_id(1))
					{
						echo ";True;";
				    }
					else {
						echo ";Flase;";
					}
					
					   
	}
	
	function update_profile_data()
	{
		include_once(APPPATH.'controllers/class_file/c_session_signup.php');
		
		$user_session_signup=new c_session_signup();
	  	$u_id=$user_session_signup->get_session_for_sign_up_u_id();
	  	unset($user_session_signup);
	  	
		include_once(APPPATH.'controllers/class_file/c_user_profile_data.php');
		$user_profile_data_obj=new c_user_profile_data();
		
		$current_location_1=$this->input->post('current_location_1');
		$current_location_2=$this->input->post('current_location_2');
		$home_town_1=$this->input->post('home_town_1');
		$home_town_2=$this->input->post('home_town_2');
		$organization_1=$this->input->post('organization_1');
		$organization_2=$this->input->post('organization_2');
		$high_school=$this->input->post('high_school');
		$higher_education_1=$this->input->post('higher_education_1');
	    $higher_education_2=$this->input->post('higher_education_2');
	    $workplace_1=$this->input->post('workplace_1');
	    $workplace_2=$this->input->post('workplace_2');
		
	    
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
		
		if($user_profile_data_obj->updateRow_BY_u_id(1))
			echo "True";
		else
			echo "Flase";
		
	}
	
	function update_preference_strring() {
		
		include_once(APPPATH.'controllers/class_file/c_session_signup.php');
		
		$user_session_signup=new c_session_signup();
	  	$u_id=$user_session_signup->get_session_for_sign_up_u_id();
	  	unset($user_session_signup);
	  	
		include_once(APPPATH.'controllers/class_file/c_user_profile_settings.php');
		
		$user_preference_settings_obj=new c_user_profile_settings();
		$birthday_hidden=$this->input->post('birthday_hidden');
		$home_page=$this->input->post('home_page');
		$security=$this->input->post('security');
		$gossip=$this->input->post('gossip');
		$notification=$this->input->post('notification');
		$user_preference_settings_obj->set_u_id($u_id);
		$user_preference_settings_obj->set_birthday_hidden($birthday_hidden);
		$user_preference_settings_obj->set_home_page($home_page);
		$user_preference_settings_obj->set_col_security($security);
		$user_preference_settings_obj->set_gossip($gossip);
		$user_preference_settings_obj->set_notification($notification);
		
		$user_preference_settings_obj->updateRow_BY_u_id(1);
	}
	function update_invite_friends_data()  
	{
		include_once(APPPATH.'controllers/class_file/c_session_signup.php');
		
		$user_session_signup=new c_session_signup();
	  	$u_id=$user_session_signup->get_session_for_sign_up_u_id();
	  	unset($user_session_signup);
	  	
		include_once(APPPATH.'controllers/class_file/c_user_invitation.php');
		$friend_name=$this->input->post('friend_name');
		$friend_email=$this->input->post('friend_email');
		$user_invitation_obj=new c_user_invitation();
		
		$user_invitation_obj->set_u_id($u_id);
		$user_invitation_obj->set_friend_email($friend_name);
		$user_invitation_obj->set_friend_name($friend_email);
		
		$user_invitation_obj->updateRow_BY_u_id();
	}
	function upload_file(){
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'gif|jpg|jpeg|png';
		$config['max_size']	= '1024';
		$config['max_width']  = '1024';
		$config['max_height']  = '768';

		$this->load->library('upload', $config);
		$data='';
		
		if ( ! $this->upload->do_upload("images")){
				
				$data['raw_name']='';
				$data['file_ext']='';
				
		}
		else{
				$data=$this->upload->data();
				$pic_path=$data['raw_name'].$data['file_ext'];
				echo ";".$pic_path.";";
		}
		
	}
	
	
}