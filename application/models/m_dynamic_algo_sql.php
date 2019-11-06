<?php
	 class m_dynamic_algo_sql extends CI_Model{
		 function insert_row_data($insert_data_array){
			return $this->db->insert('dynamic_algo_sql',$insert_data_array);
		 }
                 function get_all(){
                      $sql="select * from dynamic_algo_sql";
                     return $this->db->query($sql)->result();
                 }
	 }
?>