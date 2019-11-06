<?php
class m_blacklist_traits extends CI_Model{
        function __construct(){
		parent::__construct();
	}
	function insertRow($rowData){
		if($this->db->insert('blacklist_traits',$rowData))
			return true;
		return false;
	}
        function get_black_list_by_category_id($category_id)
        {
            $this->db->select('*');
            $this->db->from('blacklist_traits');
            $this->db->where('trait_categories_id',$category_id);
            return  $this->db->get()->result();
        }
        function insert_balck_list_data($rowData)
        {
            if($this->db->insert('blacklist_traits',$rowData))
			return true;
		return false;
        }
        function update_balck_list_data($rowData,$id)
        {
             $this->db->where('id',$id);
		if($this->db->update('blacklist_traits',$rowData))
				return true;
			return false;
        }
        function  get_id_by_category_id_and_value($black_list_value,$category_id)
        {
            $this->db->select('id');
            $this->db->from('blacklist_traits');
            $this->db->where('value',$black_list_value);
            $this->db->where('trait_categories_id',$category_id);
            
            foreach ($this->db->get()->result() as $rowData)
            {
                return $rowData->id;
            }
            return "";
        }
}