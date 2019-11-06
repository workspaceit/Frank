<?php
class m_trait_catagories extends CI_Model{
        function __construct(){
		parent::__construct();
	}
     function insertRow($rowData){
		if($this->db->insert('trait_catagories',$rowData))
			return true;
		return false;
	}
    function get_traits_all(){
        $this->db->select('*');
        $this->db->from('trait_categories');
        $this->db->order_by('category','asc');
        return $this->db->get()->result();
    }
}