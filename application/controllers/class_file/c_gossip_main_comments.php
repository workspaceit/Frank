<?php
	 class c_gossip_main_comments extends CI_Controller{
		 private $id;
		 private $gossip_id;
		 private $user_id;
		 private $comments;
		 private $created_date;
		 function __construct(){

			parent::__construct();
                        include_once(APPPATH.'controllers/class_file/time_zone.php');
			$this->id='';
			$this->gossip_id='';
			$this->user_id='';
			$this->comments='';
			$this->created_date=date("Y-m-d");
		 }
		

		 function set_gossip_id($gossip_id)
		 {
			$this->gossip_id=$gossip_id;
		 }

		 function set_user_id($user_id)
		 {
			$this->user_id=$user_id;
		 }

		 function set_comments($comments)
		 {
			$this->comments=$comments;
		 }

		 function set_created_date($created_date)
		 {
			$this->created_date=$created_date;
		 }

		 function insert_row_data(){
			$this->load->model('m_gossip_main_comments');

			$insert_array_data=array(
					 'id' => $this->id,
					 'gossip_id' => $this->gossip_id,
					 'user_id' => $this->user_id,
					 'comments' => $this->comments,
					 'created_date' => $this->created_date
					 );
			return $this->m_gossip_main_comments->insert_row_data($insert_array_data);
		 }
	 }