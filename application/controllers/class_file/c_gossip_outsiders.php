<?php
	 class c_gossip_outsiders extends CI_Controller{
		 private $id;
		 private $gossip_id;
		 private $user_email;
		 private $name;
		 private $created_date;
		 function __construct(){

			parent::__construct();
                        include_once(APPPATH.'controllers/class_file/time_zone.php');
			$this->id='';
			$this->gossip_id='';
			$this->user_email='';
			$this->name='';
			$this->created_date=date('Y-m-d');
		 }
		 function set_id($id)
		 {
			$this->id=$id;
		 }

		 function set_gossip_id($gossip_id)
		 {
			$this->gossip_id=$gossip_id;
		 }

		 function set_user_email($user_email)
		 {
			$this->user_email=$user_email;
		 }

		 function set_name($name)
		 {
			$this->name=$name;
		 }

		 function set_created_date($created_date)
		 {
			$this->created_date=$created_date;
		 }

		 function insert_row_data(){
			$this->load->model('m_gossip_outsiders');

			$insert_array_data=array(
					 'gossip_id' => $this->gossip_id,
					 'user_email' => $this->user_email,
					 'name' => $this->name,
					 'created_date' => $this->created_date
					 );
			return $this->m_gossip_outsiders->insert_row_data($insert_array_data);
		 }
	 }
