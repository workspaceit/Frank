<?php
class m_trait_q_a extends CI_Model{
        function __construct(){
		parent::__construct();
	}
	function insertRow($rowData){
		if($this->db->insert('trait_q_a',$rowData))
			return true;
		return false;
	}
        function get_point_by_id($id){
            $this->db->select('point');
            $this->db->from('trait_q_a');
            $this->db->where('id',$id);
            $this->db->limit(1);
            foreach($this->db->get()->result() as $rowData){
                return $rowData->point;
            }
            return "";
        }
        function get_all_By_trait_categories_id_and_point($trait_categories_id,$point){
            $this->db->select('*');
            $this->db->from('trait_q_a');
            $this->db->where('trait_categories_id',$trait_categories_id);
            $this->db->where('point',$point);
            return $this->db->get()->result();
        }
        function is_exist_by_categoty_Id($id)
        {
           
            $this->db->select('*');
            $this->db->from('trait_q_a');
            $this->db->where('trait_categories_id',$id);
            if($this->db->get()->result())
            {
                return TRUE;
            }
            else
                return FALSE;
            
        }
        
        
        function get_ans_question($id)
        {
            $this->db->select('*');
            $this->db->from('trait_q_a');
            $this->db->where('trait_categories_id',$id);
            $this->db->order_by('point','desc');
            return  $this->db->get()->result();
        }
        function update_trait_q_a($rowData,$id)
        {
            $this->db->where('id',$id);
		if($this->db->update('trait_q_a',$rowData))
				return true;
			return false;
        }
        function update_trait_q_a_question($rowData,$id)
        {
            $this->db->where('trait_categories_id',$id);
		if($this->db->update('trait_q_a',$rowData))
				return true;
			return false;
        }
}