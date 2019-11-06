<?php
	 class m_gossip_insiders_group extends CI_Model{
		 function insert_row_data($insert_data_array){
			return $this->db->insert('gossip_insiders_group',$insert_data_array);
		 }
	 }
?>