<?php
	 class m_user_favorite extends CI_Model{
		 function insert_row_data($insert_data_array){
			return $this->db->insert('user_favorite',$insert_data_array);
		 }
                 function is_exist($user_id,$favorited_id){
                        $this->db->select('id');
                        $this->db->from('user_favorite');
                        $this->db->where('user_id',$user_id);
                        $this->db->where('favorited_id',$favorited_id);
                        $this->db->limit(1);
                        foreach( $this->db->get()->result() as $rowData){
                            return true;
                        }
                        return false;
                 }
	 }
?>