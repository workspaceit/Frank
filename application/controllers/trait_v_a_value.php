<?php
	 class trait_v_a_value extends CI_Controller{
		 function __construct(){

			parent::__construct();

		 }
		 function index(){
			
			 include_once(APPPATH.'controllers/class_file/c_trait_v_a_value.php');
			 $c_trait_v_a_value_obj=new c_trait_v_a_value();

			//$id=trim($this->input->post('id'));
			//$q_a_id=trim($this->input->post('q_a_id'));
			//$trait_categories_id=trim($this->input->post('trait_categories_id'));
			//$gossip_id=trim($this->input->post('gossip_id'));
			//$rated_by=trim($this->input->post('rated_by'));
			//$r_point=trim($this->input->post('r_point'));
			//$f_point=trim($this->input->post('f_point'));
			//$created_date=trim($this->input->post('created_date'));
                      
			$id='';
			$q_a_id='';
			$trait_categories_id='';
			$gossip_id='';
			$rated_by='';
			$r_point='';
			$f_point='';
			$created_date='';

			$c_trait_v_a_value_obj->set_id($id);
			$c_trait_v_a_value_obj->set_q_a_id($q_a_id);
			$c_trait_v_a_value_obj->set_trait_categories_id($trait_categories_id);
			$c_trait_v_a_value_obj->set_gossip_id($gossip_id);
			$c_trait_v_a_value_obj->set_rated_by($rated_by);
			$c_trait_v_a_value_obj->set_r_point($r_point);
			$c_trait_v_a_value_obj->set_f_point($f_point);
			$c_trait_v_a_value_obj->set_created_date($created_date);

			if($c_trait_v_a_value_obj->insert_row_data()){
				echo ';True;';
			}else{
				echo ';False;';
			}
		 }
                 function submit_multi_row(){
                        $this->load->model('m_trait_v_a_value');  
                        $traits_queue=json_decode($this->input->post('req_traits_queue'));
                        $traits_queue_array=explode(",",$traits_queue->trait_queue);
			$this->m_trait_v_a_value->insert_multi_row_data($traits_queue_array);
                 }
	 }
?>