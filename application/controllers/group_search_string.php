<?php
	 class group_search_string extends CI_Controller{
		 function __construct(){

			parent::__construct();

		 }
		 function index(){
			
			 include_once(APPPATH.'controllers/class_file/c_group_search_string.php');
			 $c_group_search_string_obj=new c_group_search_string();

			//$id=trim($this->input->post('id'));
			//$user_group_id=trim($this->input->post('user_group_id'));
			//$name=trim($this->input->post('name'));
			//$age=trim($this->input->post('age'));
			//$sign=trim($this->input->post('sign'));
			//$gender=trim($this->input->post('gender'));
			//$school_high=trim($this->input->post('school_high'));
			//$school_higher_education=trim($this->input->post('school_higher_education'));
			//$current_location_country=trim($this->input->post('current_location_country'));
			//$current_location_state=trim($this->input->post('current_location_state'));
			//$current_location_city=trim($this->input->post('current_location_city'));
			//$home_town_country=trim($this->input->post('home_town_country'));
			//$home_town_state=trim($this->input->post('home_town_state'));
			//$home_town_city=trim($this->input->post('home_town_city'));
			//$trait=trim($this->input->post('trait'));
			//$created_date=trim($this->input->post('created_date'));

			$id='';
			$user_group_id='';
			$name='';
			$age='';
			$sign='';
			$gender='';
			$school_high='';
			$school_higher_education='';
			$current_location_country='';
			$current_location_state='';
			$current_location_city='';
			$home_town_country='';
			$home_town_state='';
			$home_town_city='';
			$trait='';
			$created_date='';

			$c_group_search_string_obj->set_id($id);
			$c_group_search_string_obj->set_user_group_id($user_group_id);
			$c_group_search_string_obj->set_name($name);
			$c_group_search_string_obj->set_age($age);
			$c_group_search_string_obj->set_sign($sign);
			$c_group_search_string_obj->set_gender($gender);
			$c_group_search_string_obj->set_school_high($school_high);
			$c_group_search_string_obj->set_school_higher_education($school_higher_education);
			$c_group_search_string_obj->set_current_location_country($current_location_country);
			$c_group_search_string_obj->set_current_location_state($current_location_state);
			$c_group_search_string_obj->set_current_location_city($current_location_city);
			$c_group_search_string_obj->set_home_town_country($home_town_country);
			$c_group_search_string_obj->set_home_town_state($home_town_state);
			$c_group_search_string_obj->set_home_town_city($home_town_city);
			$c_group_search_string_obj->set_trait($trait);
			$c_group_search_string_obj->set_created_date($created_date);

			if($c_group_search_string_obj->insert_row_data()){
				echo ';True;';
			}else{
				echo ';False;';
			}
		 }
	 }
?>