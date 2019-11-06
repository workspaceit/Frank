<?php
class m_user_profile_settings extends CI_Model{
	function __construct(){
		parent::__construct();
	}
	function insertRow($rowData){
		if($this->db->insert('user_profile_settings',$rowData))
			return true;
		return false;
	}
	function updateRow_BY_id($id,$rowData){
    
		$this->db->where('u_id',$id);
		if($this->db->update('user_profile_settings',$rowData))
				return true;
			return false;
	}
	function updateRow_BY_u_id($u_email,$rowData){
		$this->db->where('u_id',$u_email);
		if($this->db->update('user_profile_settings',$rowData))
				return true;
			return false;
	}
function get_all_by_u_id($id)
	{
		$this->db->select('*');
		$this->db->from('user_profile_settings');
		$this->db->where('u_id',$id);
		 
		return   $this->db->get()->result();
		
	}
}