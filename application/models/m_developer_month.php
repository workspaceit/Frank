<?php
class m_developer_month extends CI_Model
{
	function get_month_name_by_id($id)
	{
		$this->db->select('name');
		$this->db->from('developer_month');
		$this->db->where('id',$id);
		return   $this->db->get()->result();
	}
	function get_all_name()
	{
		$this->db->select('*');
		$this->db->from('developer_month');
		$this->db->order_by('id','asc');
		return   $this->db->get()->result();
	}
	
}