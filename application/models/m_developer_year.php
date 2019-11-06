<?php
class m_developer_year extends CI_Model
{
function get_all_year()
	{
		$this->db->select('name');
		$this->db->from('developer_year');
		$this->db->order_by('name','desc');
		return   $this->db->get()->result();
		
	}
	function get_year_by_id($year)
	{
		$this->db->select('name');
		$this->db->from('developer_year');
		$this->db->where('name',$year);
		return   $this->db->get()->result();
	}
}