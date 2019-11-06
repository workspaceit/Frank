<?php
	 class user_visitor_details extends CI_Controller{
		 function __construct(){

			parent::__construct();

		 }
		 function index(){
			
			 include_once(APPPATH.'controllers/class_file/c_user_visitor_details.php');
			 $c_user_visitor_details_obj=new c_user_visitor_details();

			//$id=trim($this->input->post('id'));
			//$visitor_id=trim($this->input->post('visitor_id'));
			//$visitor_ip=trim($this->input->post('visitor_ip'));
			//$host_id=trim($this->input->post('host_id'));
			//$created_date=trim($this->input->post('created_date'));

			$id='';
			$visitor_id='';
			$visitor_ip='';
			$host_id='';
			$created_date='';

			$c_user_visitor_details_obj->set_id($id);
			$c_user_visitor_details_obj->set_visitor_id($visitor_id);
			$c_user_visitor_details_obj->set_visitor_ip($visitor_ip);
			$c_user_visitor_details_obj->set_host_id($host_id);
			$c_user_visitor_details_obj->set_created_date($created_date);

			if($c_user_visitor_details_obj->insert_row_data()){
				echo ';True;';
			}else{
				echo ';False;';
			}
		 }
	 }
?>