<?php
	 class c_trait_users_gossip extends CI_Controller{
		 private $id;
		 private $user_id;
		 private $gossip_id;
		 private $trait_categories_id;
		 private $category;
		 private $sub_category_value;
		 private $sub_category_hidden;
		 private $sub_category_avg_point;
		 private $created_date;
		 function __construct(){

			parent::__construct();

			$this->id='';
			$this->user_id='';
			$this->gossip_id='';
			$this->trait_categories_id='';
			$this->category='';
			$this->sub_category_value='';
			$this->sub_category_hidden='';
			$this->sub_category_avg_point='';
			$this->created_date=date('Y-m-d');
		 }
		 function set_id($id)
		 {
			$this->id=$id;
		 }

		 function set_user_id($user_id)
		 {
			$this->user_id=$user_id;
		 }

		 function set_gossip_id($gossip_id)
		 {
			$this->gossip_id=$gossip_id;
		 }

		 function set_trait_categories_id($trait_categories_id)
		 {
			$this->trait_categories_id=$trait_categories_id;
		 }

		 function set_category($category)
		 {
			$this->category=$category;
		 }

		 function set_sub_category_value($sub_category_value)
		 {
			$this->sub_category_value=$sub_category_value;
		 }

		 function set_sub_category_hidden($sub_category_hidden)
		 {
			$this->sub_category_hidden=$sub_category_hidden;
		 }

		 function set_sub_category_avg_point($sub_category_avg_point)
		 {
			$this->sub_category_avg_point=$sub_category_avg_point;
		 }

		 function set_created_date($created_date)
		 {
			$this->created_date=$created_date;
		 }

		 function insert_row_data(){
			$this->load->model('m_trait_users_gossip');

			$insert_array_data=array(
					 'id' => $this->id,
					 'user_id' => $this->user_id,
					 'gossip_id' => $this->gossip_id,
					 'trait_categories_id' => $this->trait_categories_id,
					 'category' => $this->category,
					 'sub_category_value' => $this->sub_category_value,
					 'sub_category_hidden' => $this->sub_category_hidden,
					 'sub_category_avg_point' => $this->sub_category_avg_point,
					 'created_date' => $this->created_date
					 );
			return $this->m_trait_users_gossip->insert_row_data($insert_array_data);
		 }
                 function update_row_data(){
			$this->load->model('m_trait_users_gossip');

			$update_array_data=array(
					 'sub_category_avg_point' => $this->sub_category_avg_point,
					 'created_date' => $this->created_date
					 );
			return $this->m_trait_users_gossip->update_row_data($update_array_data,$this->user_id,$this->gossip_id,$this->trait_categories_id);
		 }
                function change_avg_point_row_data(){
                    $this->load->model('m_trait_users_gossip');
                    $query_action=$this->m_trait_users_gossip->is_sub_category_avg_point_already_set($this->user_id,$this->gossip_id,$this->trait_categories_id);
                    if($query_action){
                         $this->update_row_data();
                    }else{
                         $this->insert_row_data();
                    }
                    include_once(APPPATH.'controllers/class_file/c_trait_users.php');
                    $c_trait_users_obj=new c_trait_users();

                    $user_id=$this->user_id;
                    $trait_categories_id=$this->trait_categories_id;
                    $category=$this->category;
                    $sub_category_value=$this->sub_category_value;
                    $sub_category_hidden=0;
                    $sub_category_avg_point=$this->m_trait_users_gossip->get_avg_point($this->user_id,$this->trait_categories_id);

					//$this->m_trait_users_gossip->getAvgPointByGossipId($this->user_id,$this->gossip_id);
                    $c_trait_users_obj->set_user_id($user_id);
                    $c_trait_users_obj->set_trait_categories_id($trait_categories_id);
                    $c_trait_users_obj->set_category($category);
                    $c_trait_users_obj->set_sub_category_value($sub_category_value);
                    $c_trait_users_obj->set_sub_category_hidden($sub_category_hidden);
                    $c_trait_users_obj->set_sub_category_avg_point($sub_category_avg_point);

                    return $c_trait_users_obj->change_avg_point();
                    
                    
                }
	 }