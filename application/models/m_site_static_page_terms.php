<?php
class m_site_static_page_terms extends CI_Model
{
    function insert_Data($rowData)
    {
        if($this->db->insert('site_static_page_terms',$rowData))
			return true;
		return false;
    }
    function get_details(){
       $this->db->select('details');
       $this->db->from('site_static_page_terms');
       
       return $this->db->get()->result();
   }
   function update_row($rowData){
        return $this->db->update('site_static_page_terms',$rowData);
    }
}
?>