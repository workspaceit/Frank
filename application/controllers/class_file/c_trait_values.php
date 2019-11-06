<?php
	 class c_trait_value extends CI_Controller{
		 private $id;
		 private $category;
		 private $value;
		 private $rank;
		 private $created_date;
		 function __construct(){

			parent::__construct();

			$this->id='';
			$this->category='';
			$this->value='';
			$this->rank='';
			$this->created_date='';
		 }
		 function set_id($id)
		 {
			$this->id=$id;
		 }

		 function set_category($category)
		 {
			$this->category=$category;
		 }

		 function set_value($value)
		 {
			$this->value=$value;
		 }

		 function set_rank($rank)
		 {
			$this->rank=$rank;
		 }

		 function set_created_date($created_date)
		 {
			$this->created_date=$created_date;
		 }

		 function insert_row_data(){
			$this->load->model('m_trait_value');

			$insert_array_data=array(
					 'id' => $this->id,
					 'category' => $this->category,
					 'value' => $this->value,
					 'rank' => $this->rank,
					 'created_date' => $this->created_date
					 );
			return $this->m_trait_value->insert_row_data($insert_array_data);
		 }
	 }