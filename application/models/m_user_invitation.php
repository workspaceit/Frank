<?php
class m_user_invitation extends CI_Model{
	function __construct(){
		parent::__construct();
	}
	function insertRow($rowData){
		if($this->db->insert('user_invitation',$rowData))
			return true;
		return false;
	}
	function updateRow_BY_id($id,$rowData){
		$this->db->where('id',$id);
		if($this->db->update('user_invitation',$rowData))
				return true;
			return false;
	}
	function updateRow_BY_u_id($u_id,$rowData){
		$this->db->where('u_id',$u_id);
		if($this->db->update('user_invitation',$rowData))
				return true;
			return false;
	}
	function has_friend_email($u_id,$friend_email){
		$this->db->select('friend_email');
		$this->db->from('user_invitation');
		$this->db->where('friend_email',$u_email);
		$this->db->where('u_id',$u_id);
		
		foreach($this->db->get()->result() as $rowData){
			return true;
		}
		return false;
	}
}