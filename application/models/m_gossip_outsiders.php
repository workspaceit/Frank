<?php
	 class m_gossip_outsiders extends CI_Model{
		 function insert_row_data($insert_data_array){
			return $this->db->insert('gossip_outsiders',$insert_data_array);
		 }
		 function deleteByGossipId($gossip_id){
			 $this->db->where('gossip_id', $gossip_id);
			 $this->db->delete('gossip_outsiders');
		 }
	 }
?>