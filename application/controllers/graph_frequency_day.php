<?php
	 class graph_frequency_day extends CI_Controller{
		 function __construct(){

			parent::__construct();

		 }
		 function index(){
			
			 include_once(APPPATH.'controllers/class_file/c_graph_frequency_day.php');
			 $c_graph_frequency_day_obj=new c_graph_frequency_day();

			//$id=trim($this->input->post('id'));
			//$category_id=trim($this->input->post('category_id'));
			//$x_axis=trim($this->input->post('x_axis'));
			//$percentage=trim($this->input->post('percentage'));
			//$frequency=trim($this->input->post('frequency'));
			//$avg=trim($this->input->post('avg'));
			//$date=trim($this->input->post('date'));

			$id='';
			$category_id='';
			$x_axis='';
			$percentage='';
			$frequency='';
			$avg='';
			$date='';

			$c_graph_frequency_day_obj->set_id($id);
			$c_graph_frequency_day_obj->set_category_id($category_id);
			$c_graph_frequency_day_obj->set_x_axis($x_axis);
			$c_graph_frequency_day_obj->set_percentage($percentage);
			$c_graph_frequency_day_obj->set_frequency($frequency);
			$c_graph_frequency_day_obj->set_avg($avg);
			$c_graph_frequency_day_obj->set_date($date);

			if($c_graph_frequency_day_obj->insert_row_data()){
				echo ';True;';
			}else{
				echo ';False;';
			}
		 }
	 }
?>