<?php
	 class c_gossip_relationship extends CI_Controller{
		 private $id;
		 private $gossip_id;
		 private $values;
		 private $point;
		 private $profile_auth;
		 private $created_by;
		 private $created_date;
		 function __construct(){

			parent::__construct();
                        include_once(APPPATH.'controllers/class_file/time_zone.php');
			$this->gossip_id='';
			$this->values='';
			$this->point='';
			$this->profile_auth=null;
			$this->created_by='';
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

		 function set_values($values)
		 {
			$this->values=$values;
		 }

		 function set_point($point)
		 {
			$this->point=$point;
		 }

		 function set_created_by($created_by)
		 {
			$this->created_by=$created_by;
		 }final

		 function set_created_date($created_date)
		 {
			$this->created_date=$created_date;
		 }
		function set_profile_auth($profile_auth){
			$this->profile_auth = $profile_auth;
		}
		 function insert_row_data(){
			$this->load->model('m_gossip_relationship');

			$insert_array_data=array(
					 'id' => $this->id,
					 'gossip_id' => $this->gossip_id,
					 'profile_auth' => $this->profile_auth,
					 'values' => $this->values,
					 'point' => $this->point,
					 'created_by' => $this->created_by,
					 'created_date' => $this->created_date
					 );
			return $this->m_gossip_relationship->insert_row_data($insert_array_data);
		 }
	 }