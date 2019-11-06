<?php
	 class m_developer_gossip_insider extends CI_Model{
		 function insert_row_data($insert_data_array){
			return $this->db->insert('developer_gossip_insider',$insert_data_array);
		 }
                  function get_all(){
                        $this->db->select('*');
                        $this->db->from('developer_gossip_insider');
                        return $this->db->get()->result();
                 }
                 function get_all_by_id($id){
                     $this->db->select('*');
                     $this->db->from('developer_gossip_insider');
                     $this->db->where('id',$id);
                     $this->db->limit(1);
                     return $this->db->get()->result();
                 }
                 function get_point_by_id($id){
                     $this->db->select('point');
                     $this->db->from('developer_gossip_insider');
                     $this->db->where('id',$id);
                     $this->db->limit(1);
                     foreach($this->db->get()->result() as $rowData){
                         return $rowData->point;
                     }
                     return '';
                 }
	 }
?>