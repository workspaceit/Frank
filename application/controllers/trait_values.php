<?php
	 class trait_values extends CI_Controller{
		 function __construct(){

			parent::__construct();

		 }
		 function index(){
			
			 include_once(APPPATH.'controllers/class_file/c_trait_values.php');
			 $c_trait_values_obj=new c_trait_values();

			//$id=trim($this->input->post('id'));
			//$category=trim($this->input->post('category'));
			//$values=trim($this->input->post('values'));
			//$rank=trim($this->input->post('rank'));
			//$created_date=trim($this->input->post('created_date'));

			$id='';
			$category='';
			$value='';
			$rank='';
			$created_date='';

			$c_trait_values_obj->set_id($id);
			$c_trait_values_obj->set_category($category);
			$c_trait_values_obj->set_value($value);
			$c_trait_values_obj->set_rank($rank);
			$c_trait_values_obj->set_created_date($created_date);

			if($c_trait_values_obj->insert_row_data()){
				echo ';True;';
			}else{
				echo ';False;';
			}
		 }
	 }
?>