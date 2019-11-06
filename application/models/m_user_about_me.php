<?php
class m_user_about_me extends CI_Model{
	function __construct(){
		parent::__construct();
	}
	function insertRow($rowData){
		if($this->db->insert('user_about_me',$rowData))
			return true;
		return false;
	}
	function updateRow_BY_id($id,$rowData){
		$this->db->where('id',$id);
		if($this->db->update('user_about_me',$rowData))
				return true;
			return false;
	}
	function updateRow_BY_u_id($u_id,$rowData){
		$this->db->where('u_id',$u_id);
		if($this->db->update('user_about_me',$rowData))
				return true;
			return false;
	}
	function get_all_by_u_id($u_id)
	{
		$this->db->select('*');
		$this->db->from('user_about_me');
		$this->db->where('u_id',$u_id);
		return $this->db->get()->result();
		
	}
}