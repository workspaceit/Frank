<?php
	 class c_gossip_comment_reply extends CI_Controller{
		 private $id;
		 private $comments_id;
		 private $user_id;
		 private $comments;
		 private $created_date;
		 function __construct(){

			parent::__construct();

			$this->id='';
			$this->comments_id='';
			$this->user_id='';
			$this->comments='';
			$this->created_date=date('Y-m-d H:i:s');
		 }
		 function set_id($id)
		 {
			$this->id=$id;
		 }

		 function set_comments_id($comments_id)
		 {
			$this->comments_id=$comments_id;
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
			$this->load->model('m_gossip_comment_reply');

			$insert_array_data=array(
					 'id' => $this->id,
					 'comments_id' => $this->comments_id,
					 'user_id' => $this->user_id,
					 'comments' => $this->comments,
					 'created_date' => $this->created_date
					 );
			return $this->m_gossip_comment_reply->insert_row_data($insert_array_data);
		 }
	 }