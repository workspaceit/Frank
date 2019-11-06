<?php
	 class c_gossip_main_trait extends CI_Controller{
		 private $id;
		 private $gossip_id;
		 private $trait_categories_id;
		 private $created_date;
		 function __construct(){

			parent::__construct();
                        include_once(APPPATH.'controllers/class_file/time_zone.php');
			$this->id='';
			$this->gossip_id='';
			$this->trait_categories_id='';
			$this->created_date=date('Y-m-d H:i:s');
		 }
		 function set_id($id)
		 {
			$this->id=$id;
		 }

		 function set_gossip_id($gossip_id)
		 {
			$this->gossip_id=$gossip_id;
		 }

		 function set_trait_categories_id($trait_categories_id)
		 {
			$this->trait_categories_id=$trait_categories_id;
		 }

		 function set_created_date($created_date)
		 {
			$this->created_date=$created_date;
		 }

		 function insert_row_data(){
			$this->load->model('m_gossip_main_trait');

			$insert_array_data=array(
					 'gossip_id' => $this->gossip_id,
					 'trait_categories_id' => $this->trait_categories_id,
					 'created_date' => $this->created_date
					 );
			return $this->m_gossip_main_trait->insert_row_data($insert_array_data);
		 }
                 function submit_multi_row($traits_queue_data){
                    $this->load->model('m_gossip_main_trait');
                    $encrypt_tbl_primary_key_obj=new encrypt_tbl_primary_key();
                    $traits_queue=json_decode($traits_queue_data);
                    $traits_queue_array=array();

                    for($i=0;$i<sizeof($traits_queue);$i++){
                        $trait_category_id=$encrypt_tbl_primary_key_obj->get_plain_text($traits_queue[$i]->trait_category_id);
                        $traits_queue_array[$i]=$this->gossip_id;     
                        $traits_queue_array[$i].=";".$trait_category_id;
                        $traits_queue_array[$i].=";".date('Y-m-d H:i:s');
                    }
                    if(sizeof($traits_queue_array)>0){
                        return $this->m_gossip_main_trait->insert_multi_row_data($traits_queue_array);
                            
                    }else{
                        return true;
                    }
                 }
	 }