<?php
	 class m_gossip_main_comments extends CI_Model{
		 function insert_row_data($insert_data_array){
			return $this->db->insert('gossip_main_comments',$insert_data_array);
		 }
                 function update_row_data($update_data_array,$id){
                        $this->db->where('id',$id);
			return $this->db->update('gossip_main_comments',$update_data_array);
		 }
	 }
?>