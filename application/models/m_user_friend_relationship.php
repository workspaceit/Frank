<?php
class m_user_friend_relationship extends CI_Model
{
	function submit_data($insertData)
	{
	
		if($this->db->insert('user_friend_relationship',$insertData))
			return true;
		return false;
	}
}