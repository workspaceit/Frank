<?php
	 class user_trait_final_values extends CI_Controller{
		 function __construct(){

			parent::__construct();

		 }
		 function index(){
			
			 include_once(APPPATH.'controllers/class_file/c_user_trait_final_values.php');
			 $c_user_trait_final_values_obj=new c_user_trait_final_values();

			//$id=trim($this->input->post('id'));
			//$user_id=trim($this->input->post('user_id'));
			//$rank=trim($this->input->post('rank'));
			//$reputation=trim($this->input->post('reputation'));
			//$popularity=trim($this->input->post('popularity'));
			//$integrity=trim($this->input->post('integrity'));
			//$confidence=trim($this->input->post('confidence'));
			//$created_date=trim($this->input->post('created_date'));

			$id='';
			$user_id='';
			$rank='';
			$reputation='';
			$popularity='';
			$integrity='';
			$confidence='';
			$created_date='';

			$c_user_trait_final_values_obj->set_id($id);
			$c_user_trait_final_values_obj->set_user_id($user_id);
			$c_user_trait_final_values_obj->set_rank($rank);
			$c_user_trait_final_values_obj->set_reputation($reputation);
			$c_user_trait_final_values_obj->set_popularity($popularity);
			$c_user_trait_final_values_obj->set_integrity($integrity);
			$c_user_trait_final_values_obj->set_confidence($confidence);
			$c_user_trait_final_values_obj->set_created_date($created_date);

			if($c_user_trait_final_values_obj->insert_row_data()){
				echo ';True;';
			}else{
				echo ';False;';
			}
		 }
                 function update_confidence($u_id,$confidence){
                    include_once(APPPATH.'controllers/class_file/c_user_trait_final_values.php');
                    $c_user_trait_final_values_obj=new c_user_trait_final_values();
                    $c_user_trait_final_values_obj->set_user_id($u_id);
                    $c_user_trait_final_values_obj->set_confidence($confidence);

                    return $c_user_trait_final_values_obj->update_any_row();
                }
	 }
?>