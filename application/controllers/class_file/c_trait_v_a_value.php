<?php
	 class c_trait_v_a_value extends CI_Controller{
		 private $id;
		 private $q_a_id;
		 private $trait_categories_id;
		 private $gossip_id;
                 private $main_comment;
		 private $rated_by;
                 private $rated_to;
		 private $r_point;
		 private $f_point;
		 private $created_date;
		 function __construct(){

			parent::__construct();

			$this->id='';
			$this->q_a_id='';
			$this->trait_categories_id='';
			$this->gossip_id='';
                        $this->main_comment=0;
			$this->rated_by='';
			$this->r_point='';
			$this->f_point='';
			$this->created_date=date("y-m-d");
		 }
		 function set_id($id)
		 {
			$this->id=$id;
		 }

		 function set_q_a_id($q_a_id)
		 {
			$this->q_a_id=$q_a_id;
		 }

		 function set_trait_categories_id($trait_categories_id)
		 {
			$this->trait_categories_id=$trait_categories_id;
		 }

		 function set_gossip_id($gossip_id)
		 {
			$this->gossip_id=$gossip_id;
		 }
                 function set_main_comment($main_comment)
		 {
			$this->main_comment=$main_comment;
		 }
                 function set_rated_to($rated_to)
		 {
			$this->rated_to=$rated_to;
		 }
		 function set_rated_by($rated_by)
		 {
			$this->rated_by=$rated_by;
		 }

		 function set_r_point($r_point)
		 {
			$this->r_point=$r_point;
		 }

		 function set_f_point($f_point)
		 {
			$this->f_point=$f_point;
		 }

		 function set_created_date($created_date)
		 {
			$this->created_date=$created_date;
		 }

		 function insert_row_data(){
                    
			$this->load->model('m_trait_v_a_value');

			$insert_array_data=array(
					 'id' => $this->id,
					 'q_a_id' => $this->q_a_id,
					 'trait_categories_id' => $this->trait_categories_id,
					 'gossip_id' => $this->gossip_id,
                                         'main_comment'=>$this->main_comment,
					 'rated_by' => $this->rated_by,
					 'r_point' => $this->r_point,
					 'f_point' => $this->f_point,
					 'created_date' => $this->created_date
					 );
			return $this->m_trait_v_a_value->insert_row_data($insert_array_data);
		 }
                 function submit_multi_row($traits_queue_data,$target_id){
                     
                        $this->load->model('m_trait_v_a_value');  
                        $this->load->model('m_trait_q_a');  
                        
                        include_once(APPPATH.'controllers/class_file/encrypt_tbl_primary_key.php');

                        $encrypt_tbl_primary_key_obj=new encrypt_tbl_primary_key();
                        $traits_queue=json_decode($traits_queue_data);
                        $traits_queue_array=array();
                        $t_u_trait_category_id=array();
                        for($i=0;$i<sizeof($traits_queue);$i++){
                            $question_id=$encrypt_tbl_primary_key_obj->get_plain_text($traits_queue[$i]->question_id);
                            $trait_category_id=$encrypt_tbl_primary_key_obj->get_plain_text($traits_queue[$i]->trait_category_id);
                            $real_point=$this->m_trait_q_a->get_point_by_id($question_id);
                            
                            $traits_queue_array[$i]=" ".$question_id;     
                            $traits_queue_array[$i].=" ".$real_point;
                            $traits_queue_array[$i].=" ".$traits_queue[$i]->fake_point;
                            $traits_queue_array[$i].=" ".$trait_category_id;
                            $traits_queue_array[$i].=" ".$this->rated_by;
                            $traits_queue_array[$i].=" ".$target_id;  //Rated to 
                            $traits_queue_array[$i].=" ".$this->gossip_id;
                            $traits_queue_array[$i].=" ".$this->main_comment;
                            $traits_queue_array[$i].=" ".date('Y-m-d');
                            $t_u_trait_category_id[$i]=$trait_category_id;
                          
                        }
                        include_once(APPPATH.'controllers/class_file/c_trait_users_gossip.php');
						$c_trait_users_gossip_obj=new c_trait_users_gossip();
                        
                        if(sizeof($traits_queue_array)>0){
                            if(!$this->m_trait_v_a_value->insert_multi_row_data($traits_queue_array)){
                                return false;
                            }
                        }else{
                           return false;
                        }
                       for($i=0;$i<sizeof($t_u_trait_category_id);$i++){
                            $trait_categories_id=$t_u_trait_category_id[$i];
                            
                            $category="";
                            $sub_category_value="";
                            $sub_category_hidden=0;
                            $sub_category_avg_point=$this->m_trait_v_a_value->get_avg_r_point_by_gossip_id_trait_categories_rated_to($this->gossip_id,$trait_categories_id,$target_id);
                           
                            foreach($this->m_trait_v_a_value->get_trait_categories_all($trait_categories_id) as $rowData){
                                $category=$rowData->category;
                                $sub_category_value=$rowData->sub_category;
                            }
                            
                            $c_trait_users_gossip_obj->set_user_id($target_id);
                            $c_trait_users_gossip_obj->set_gossip_id($this->gossip_id);
                            $c_trait_users_gossip_obj->set_trait_categories_id($trait_categories_id);
                            $c_trait_users_gossip_obj->set_category($category);
                            $c_trait_users_gossip_obj->set_sub_category_value($sub_category_value);
                            $c_trait_users_gossip_obj->set_sub_category_hidden($sub_category_hidden);
                            $c_trait_users_gossip_obj->set_sub_category_avg_point($sub_category_avg_point);

                            if($c_trait_users_gossip_obj->change_avg_point_row_data()){
                                   
                            }else{
                                  
                            }
                        }
                        return true;
                 }
	 }