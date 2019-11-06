<?php
class m_developer_day extends CI_Model
{
	function get_day_all()
	{
		$this->db->select('*');
		$this->db->from('developer_day');
		$this->db->order_by('name','asc');
		return   $this->db->get()->result();
	}
	function get_day_by_id($day)
	{
		$this->db->select('name');
		$this->db->from('developer_day');
		$this->db->where('name',$day);
		return   $this->db->get()->result();	
	}
}