<?php
class user_profile_data extends CI_Controller{
	private $u_id;
        private $gender;
	private $pageData;
	private $site_url;
        function __construct(){
	    parent::__construct();
	    $this->load->helper('url');
	    include_once(APPPATH.'controllers/common_site_setting.php');
            include_once(APPPATH.'controllers/class_file/site_url.php');
            include_once(APPPATH.'controllers/load_common_properties_of_user.php');
	    $this->pageData=array();
         }
	function index(){
		include_once(APPPATH.'controllers/class_file/c_user_profile_data.php');
		
		$user_profile_data_obj=new c_user_profile_data();
		
		$user_profile_data_obj->set_u_id(1);
		$user_profile_data_obj->set_current_location_1("current_location_1");
		$user_profile_data_obj->set_current_location_2("current_location_2");
		$user_profile_data_obj->set_home_town_1("home town");
		$user_profile_data_obj->set_home_town_2("home town");
		$user_profile_data_obj->set_organization_1("org 1");
		$user_profile_data_obj->set_organization_2("org 2");
		$user_profile_data_obj->set_high_school("high school");
		$user_profile_data_obj->set_higher_education_1("higher education");
		$user_profile_data_obj->set_higher_education_2("higher edu 2");
		$user_profile_data_obj->set_workplace_1("work place 1");
		$user_profile_data_obj->set_workplace_2("work place 2");
		
		$user_profile_data_obj->insertRow();
	}
        function get_location_update_view_by_u_id(){
            $this->load->model('m_user_profile_data');
            
            $this->pageData['location']=$this->m_user_profile_data->get_location_by_u_id($this->u_id);
            $this->load->view('update_location_view',$this->pageData);
            
        } 	 	
        function get_home_town_update_view_by_u_id(){
            $this->load->model('m_user_profile_data');
            
            $this->pageData['home_town']=$this->m_user_profile_data->get_home_town_by_u_id($this->u_id);
            $this->load->view('update_home_town_view',$this->pageData);
            
        }
        function get_high_school_update_view_by_u_id(){
            $this->load->model('m_user_profile_data');
            
            $this->pageData['high_school']=$this->m_user_profile_data->get_high_school_by_u_id($this->u_id);
            $this->load->view('update_high_school_view',$this->pageData);
            
        }
        function get_higher_education_update_view_by_u_id(){
            $this->load->model('m_user_profile_data');
            
            $this->pageData['higher_education']=$this->m_user_profile_data->get_higher_education_by_u_id($this->u_id);
            $this->load->view('update_higher_education_view',$this->pageData);
        }
        function get_workplace_update_view_by_u_id(){
            $this->load->model('m_user_profile_data');
            
            $this->pageData['workplace']=$this->m_user_profile_data->get_workplace_by_u_id($this->u_id);
            $this->load->view('update_workplace_view',$this->pageData);
            
        }
       function get_organization_update_view_by_u_id(){
            $this->load->model('m_user_profile_data');
            
            $this->pageData['organization']=$this->m_user_profile_data->get_organization_by_u_id($this->u_id);
            $this->load->view('update_organization_view',$this->pageData);
       }
       function update_any_col_get(){
           $this->load->model("m_user_profile_data");
           $update_array=array();
          
           if($this->input->get_post('current_location_1')){
               $update_array['current_location_1']=$this->input->get_post('current_location_1');
           }if($this->input->get_post('current_location_2')){
               $update_array['current_location_2']=$this->input->get_post('current_location_2');
           }if($this->input->get_post('home_town_1')){
               $update_array['home_town_1']=$this->input->get_post('home_town_1');
           }if($this->input->get_post('home_town_2')){
               $update_array['home_town_2']=$this->input->get_post('home_town_2');
           }if($this->input->get_post('organization_1')){
               $update_array['organization_1']=$this->input->get_post('organization_1');
           }if($this->input->get_post('organization_2')){
               $update_array['organization_2']=$this->input->get_post('organization_2');
           }if($this->input->get_post('high_school')){
               $update_array['high_school']=$this->input->get_post('high_school');
           }if($this->input->get_post('higher_education_1')){
               $update_array['higher_education_1']=$this->input->get_post('higher_education_1');
           }if($this->input->get_post('higher_education_2')){
               $update_array['higher_education_2']=$this->input->get_post('higher_education_2');
           }if($this->input->get_post('workplace_1')){
               $update_array['workplace_1']=$this->input->get_post('workplace_1');
           }if($this->input->get_post('workplace_2')){
               $update_array['workplace_2']=$this->input->get_post('workplace_2');
           }
           if($this->m_user_profile_data->updateRow_BY_u_id($this->u_id,$update_array)){
               echo ";True;";
           }else{
               echo ";False;"; 
           }
           
       }
       function update_location(){
           $this->load->model("m_user_profile_data");
           $update_array=array();
          
          
               $update_array['current_location_1']=$this->input->get_post('current_location_1');
           
               $update_array['current_location_2']=$this->input->get_post('current_location_2');
               if($this->m_user_profile_data->updateRow_BY_u_id($this->u_id,$update_array)){
                    echo ";True;";
                }else{
                    echo ";False;"; 
                }
       }
       function update_home_town(){
           $this->load->model("m_user_profile_data");
           $update_array=array();
          
          
           $update_array['home_town_1']=$this->input->get_post('home_town_1');
           $update_array['home_town_2']=$this->input->get_post('home_town_2');
           
            if($this->m_user_profile_data->updateRow_BY_u_id($this->u_id,$update_array)){
                 echo ";True;";
             }else{
                 echo ";False;"; 
             }
       }
       function update_organization(){
           $this->load->model("m_user_profile_data");
           $update_array=array();
          
           $update_array['organization_1']=$this->input->get_post('organization_1');
           $update_array['organization_2']=$this->input->get_post('organization_2');
           
            if($this->m_user_profile_data->updateRow_BY_u_id($this->u_id,$update_array)){
                 echo ";True;";
             }else{
                 echo ";False;"; 
             }
       }
       function update_high_school(){
           $this->load->model("m_user_profile_data");
           $update_array=array();
          
           $update_array['high_school']=$this->input->get_post('high_school');
           
            if($this->m_user_profile_data->updateRow_BY_u_id($this->u_id,$update_array)){
                 echo ";True;";
             }else{
                 echo ";False;"; 
             }
       }
       function update_higher_education(){
           $this->load->model("m_user_profile_data");
           $update_array=array();
          
           $update_array['higher_education_1']=$this->input->get_post('higher_education_1');
           $update_array['higher_education_2']=$this->input->get_post('higher_education_2');
           
           if($this->m_user_profile_data->updateRow_BY_u_id($this->u_id,$update_array)){
                echo ";True;";
           }else{
               echo ";False;"; 
           }
       }
       function update_workplace(){
           $this->load->model("m_user_profile_data");
           $update_array=array();
          
           $update_array['workplace_1']=$this->input->get_post('workplace_1');
           $update_array['workplace_2']=$this->input->get_post('workplace_2');
          
           if($this->m_user_profile_data->updateRow_BY_u_id($this->u_id,$update_array)){
                echo ";True;";
           }else{
               echo ";False;"; 
           }
       }
       
}