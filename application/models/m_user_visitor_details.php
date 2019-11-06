<?php
	 class m_user_visitor_details extends CI_Model{
		 function insert_row_data($insert_data_array){
			return $this->db->insert('user_visitor_details',$insert_data_array);
		 }
	 }
?>