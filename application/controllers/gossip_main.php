<?php
	 class gossip_main extends CI_Controller{
		 function __construct(){

			parent::__construct();

		 }
		 function index(){
			
			 include_once(APPPATH.'controllers/class_file/c_gossip_main.php');
			 $c_gossip_main_obj=new c_gossip_main();

			//$id=trim($this->input->post('id'));
			//$gosipper_id=trim($this->input->post('gosipper_id'));
			//$target_id=trim($this->input->post('target_id'));
			//$thread_value=trim($this->input->post('thread_value'));
			//$view_count=trim($this->input->post('view_count'));
			//$total_reply=trim($this->input->post('total_reply'));
			//$created_date=trim($this->input->post('created_date'));

			$gosipper_id='';
			$target_id='';
			$thread_value='';
			$view_count='';
			$total_reply='';

			$c_gossip_main_obj->set_gosipper_id($gosipper_id);
			$c_gossip_main_obj->set_target_id($target_id);
			$c_gossip_main_obj->set_thread_value($thread_value);
			$c_gossip_main_obj->set_view_count($view_count);
			$c_gossip_main_obj->set_total_reply($total_reply);

			if($c_gossip_main_obj->insert_row_data()){
				echo ';True;';
			}else{
				echo ';False;';
			}
		 }
	 }
?>