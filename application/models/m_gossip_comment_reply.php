<?php
	 class m_gossip_comment_reply extends CI_Model{
		 function insert_row_data($insert_data_array){
			return $this->db->insert('gossip_comment_reply',$insert_data_array);
		 }
                 function update_row_data($id,$update_data_array){
                        $this->db->where('id',$id);
			return $this->db->update('gossip_comment_reply',$update_data_array);
		 }
                 function get_all_by_comment_id($comment_id){
                     $this->db->select('*');
                     $this->db->from('gossip_comment_reply');
                     $this->db->where('comments_id',$comment_id);
                     $this->db->order_by("id asc");
                     return $this->db->get()->result();
                 }
                 function has_reply_by_comment_id($comment_id){
                     $this->db->select('*');
                     $this->db->from('gossip_comment_reply');
                     $this->db->where('comments_id',$comment_id);
                     $this->db->limit(1);
                     foreach ($this->db->get()->result() as $rowData){
                         return true;
                     }
                     return false;
                 }
	 }
?>