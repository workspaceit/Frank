<?php
	 class m_user_group extends CI_Model{
		 function insert_row_data($insert_data_array){
			$r = $this->db->insert('user_group',$insert_data_array);
			if($r){
				return $this->db->insert_id();
			}else {
				return false;
			}
		 }
		 
		 function check_groupname_by_userid($userID,$groupName){
		 	$sql = "SELECT *
					FROM user_group AS ug
					WHERE ug.creator_id = {$userID}
					AND LOWER(ug.name) = LOWER('{$groupName}')";
		 	
		 	$data = $this->db->query($sql);
		 	
		 	if($data->num_rows() >0 ){
		 		return $data->result_array();
		 	}else {
		 		return false;
		 	}
		 }
		 
		 function get_groupid_by_groupname_and_userid($userID,$groupName) {
		 	$sql = "SELECT *
				 	FROM user_group AS ug
				 	WHERE ug.creator_id = {$userID}
				 	AND LOWER(ug.name) = LOWER('{$groupName}')";
		 	
	 		$data = $this->db->query($sql);
	 	
	 		if($data->num_rows() >0 ){
	 			$value = $data->result_array();
	 			
	 			return $value[0]['id'];
	 		}else {
	 			return false;
	 		}
		 }
		 
		 function edit_group_name($group_id,$group_name){
		 	$this->db->where('id', $group_id);
		 	$this->db->update('user_group', array('name'=>$group_name));
		 }
		 
		 function get_grouplist_by_user_id($user_id){
		 	$sql = "SELECT *
				 	FROM user_group AS ug
				 	WHERE ug.creator_id = {$user_id}";
		 	
		 		$data = $this->db->query($sql);
		 	
		 		if($data->num_rows() >0 ){
		 			return $data->result_array();
		 		}else {
		 			return false;
		 		}
		 }
	 }
?>