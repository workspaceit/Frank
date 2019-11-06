<?php
	 class m_gossip_comments extends CI_Model{
		 function insert_row_data($insert_data_array){
			return $this->db->insert('gossip_comments',$insert_data_array);
		 }
         function deleteByGossipId($gossip_id){
             $this->db->where('gossip_id', $gossip_id);
             $this->db->delete('gossip_comments');
         }
                 function update_row_data($id,$update_data_array){
                        $this->db->where('id',$id);
			return $this->db->update('gossip_comments',$update_data_array);
		 }
                 function get_all_by_gossip_id($gossip_id){
                     $this->db->select('*');
                     $this->db->from('gossip_comments');
                     $this->db->where('gossip_id',$gossip_id);
                     $this->db->order_by("id asc");
                     return $this->db->get()->result();
                 }
                 function get_user_id_by_id($id){
                     $this->db->select('user_id');
                     $this->db->from('gossip_comments');
                     $this->db->where('id',$id);
                     $this->db->limit(1);
                     foreach( $this->db->get()->result() as $rowData){
                         return $rowData->user_id;
                     }
                     return "";
                 }
                 function get_gossip_id_by_id($id){
                     $this->db->select('gossip_id');
                     $this->db->from('gossip_comments');
                     $this->db->where('id',$id);
                     $this->db->limit(1);
                     foreach( $this->db->get()->result() as $rowData){
                         return $rowData->gossip_id;
                     }
                     return "";
                 }
                 
	 }
?>