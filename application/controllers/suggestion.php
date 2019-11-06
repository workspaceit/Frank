<?php
class suggestion extends CI_Controller{
	
        function get_name(){
		$this->load->model('m_user_basic_info');
		$term=trim($this->input->post('term'));
		
		if(strlen($term)<1){
			die();
		}
		
		$keywords = array();
		$i=0;
		foreach($this->m_user_basic_info->get_name_suggestion($term) as $rowData){
                    if($rowData!=""){	
                        array_push($keywords,$rowData->f_name.' '.$rowData->l_name);
                    }
		}
		echo json_encode($keywords);
	}
        function get_name_for_make_gossip(){
		$this->load->model('m_user_basic_info');
                include_once(APPPATH.'controllers/class_file/encrypt_tbl_primary_key.php');
                $encrypt_tbl_primary_key_obj=new encrypt_tbl_primary_key();
                
		$term=trim($this->input->post('term'));
		
		if(strlen($term)<1){
			die();
		}
		
		$keywords_name = array();
                $keywords_email=array();
                $keywords_id=array();
		$i=0;
                
		foreach($this->m_user_basic_info->get_name_email_suggestion($term) as $rowData){
                    if($rowData!=""){	
                        array_push($keywords_name,$rowData->f_name.' '.$rowData->l_name);
                        array_push($keywords_email,$rowData->u_email);
                        array_push($keywords_id,$encrypt_tbl_primary_key_obj->get_encrypted_code($rowData->id));
                    }
		}
                $keywords['name']=$keywords_name;
                $keywords['email']=$keywords_email;
                $keywords['id']=$keywords_id;
		echo json_encode($keywords);
	}
        function get_current_location_state(){
		$this->load->model('m_user_profile_data');
		$term=trim($this->input->post('term'));
		
		if(strlen($term)<1){
			die();
		}
		
		$keywords = array();
		$i=0;
		foreach($this->m_user_profile_data->get_current_location_state_sugesstion($term) as $rowData){
                    if($rowData!=""){	
                        array_push($keywords,$rowData->current_location_1);
                    }
		}
		echo json_encode($keywords);
	}
        function get_current_location_city(){
		$this->load->model('m_user_profile_data');
		$term=trim($this->input->post('term'));
		
		if(strlen($term)<1){
			die();
		}
		
		$keywords = array();
		$i=0;
		foreach($this->m_user_profile_data->get_current_location_city_sugesstion($term) as $rowData){
                    if($rowData!=""){	
                        array_push($keywords,$rowData->current_location_2);
                    }
		}
		echo json_encode($keywords);
	}
           function get_home_town_state(){
		$this->load->model('m_user_profile_data');
		$term=trim($this->input->post('term'));
		
		if(strlen($term)<1){
			die();
		}
		
		$keywords = array();
		$i=0;
		foreach($this->m_user_profile_data->get_home_town_state_sugesstion($term) as $rowData){
                    if($rowData!=""){	
                        array_push($keywords,$rowData->home_town_1);
                    }
		}
		echo json_encode($keywords);
	}
        function get_home_town_city(){
		$this->load->model('m_user_profile_data');
		$term=trim($this->input->post('term'));
		
		if(strlen($term)<1){
			die();
		}
		
		$keywords = array();
		$i=0;
		foreach($this->m_user_profile_data->get_home_town_city_sugesstion($term) as $rowData){
                    if($rowData!=""){	
                        array_push($keywords,$rowData->home_town_2);
                    }
		}
		echo json_encode($keywords);
	}
	function get_current_location_from_user_profile_data(){
		$this->load->model('m_user_profile_data');
		$term=trim($this->input->post('term'));
		
		if(strlen($term)<1){
			die();
		}
		
		$keywords = array();
		$i=0;
		foreach($this->m_user_profile_data->get_current_location_suggestion($term) as $rowData){
                    if($rowData!=""){	
                        array_push($keywords,$rowData);
                    }
		}
		echo json_encode($keywords);
	}
	function get_home_town_suggestion_from_user_profile_data(){
		$this->load->model('m_user_profile_data');
		$term=trim($this->input->post('term'));
		
		if(strlen($term)<1){
			die();
		}
		
		$keywords = array();
		$i=0;
		foreach($this->m_user_profile_data->get_home_town_suggestion($term) as $rowData){
			array_push($keywords,$rowData);
		}
		echo json_encode($keywords);
	}
	function get_organization_suggestion_from_user_profile_data(){
		$this->load->model('m_user_profile_data');
		$term=trim($this->input->post('term'));
		
		if(strlen($term)<1){
			die();
		}
		
		$keywords = array();
		$i=0;
		foreach($this->m_user_profile_data->get_organization_suggestion($term) as $rowData){
			array_push($keywords,$rowData);
		}
		echo json_encode($keywords);
	}
	function get_high_school_suggestion_from_user_profile_data(){
		$this->load->model('m_user_profile_data');
		$term=trim($this->input->post('term'));
		
		if(strlen($term)<1){
			die();
		}
		
		$keywords = array();
		$i=0;
		foreach($this->m_user_profile_data->get_high_school_suggestion($term) as $rowData){
			array_push($keywords,$rowData);
		}
		echo json_encode($keywords);
	}
	function get_higher_education_suggestion_from_user_profile_data(){
		$this->load->model('m_user_profile_data');
		$term=trim($this->input->post('term'));
		
		if(strlen($term)<1){
			die();
		}
		
		$keywords = array();
		$i=0;
		foreach($this->m_user_profile_data->get_higher_education_suggestion($term) as $rowData){
			array_push($keywords,$rowData);
		}
		echo json_encode($keywords);
	}
	function get_workplace_suggestion_from_user_profile_data(){
		$this->load->model('m_user_profile_data');
		$term=trim($this->input->post('term'));
		
		if(strlen($term)<1){
			die();
		}
		
		$keywords = array();
		$i=0;
		foreach($this->m_user_profile_data->get_workplace_suggestion($term) as $rowData){
			array_push($keywords,$rowData);
		}
		echo json_encode($keywords);
	}
}