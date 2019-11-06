<?php
 class m_group_search_string extends CI_Model{
	 function insert_row_data($insert_data_array){
		return $this->db->insert('group_search_string',$insert_data_array);
	 }
	 
	 function check_exists(){
	 	
	 }
	 
	 
 }