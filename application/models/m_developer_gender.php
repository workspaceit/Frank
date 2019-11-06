<?php
class m_developer_gender extends CI_Model
{
	function get_all()
	{
		$this->db->select('*');
		$this->db->from('developer_gender');
		return $this->db->get()->result();
	}
        function get_value_by_id($id)
	{
		$this->db->select('value');
		$this->db->from('developer_gender');
                $this->db->where('id',$id);
		foreach($this->db->get()->result() as $rowData){
                    return $rowData->value;
                }
                return "";
	}
}