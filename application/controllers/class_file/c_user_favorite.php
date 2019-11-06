<?php
	 class c_user_favorite extends CI_Controller{
		 private $id;
		 private $user_id;
		 private $favorited_id;
		 private $created_date;
		 function __construct(){

			parent::__construct();
                        include_once(APPPATH.'controllers/class_file/time_zone.php');
			$this->id='';
			$this->user_id='';
			$this->favorited_id='';
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

		 function set_favorited_id($favorited_id)
		 {
			$this->favorited_id=$favorited_id;
		 }

		 function set_created_date($created_date)
		 {
			$this->created_date=$created_date;
		 }

		 function insert_row_data(){
			$this->load->model('m_user_favorite');
                        if(!$this->m_user_favorite->is_exist($this->user_id,$this->favorited_id)){
                            $insert_array_data=array(
                                             'id' => $this->id,
                                             'user_id' => $this->user_id,
                                             'favorited_id' => $this->favorited_id,
                                             'created_date' => $this->created_date
                                             );
                            return $this->m_user_favorite->insert_row_data($insert_array_data);
                        }else{
                            return true;
                        }
		 }
	 }