<?php
class m_user_login_history extends CI_Model
{
     function insert_Row($insertData)
    {
        if($this->db->insert('user_login_history',$insertData))
            return true;
	return false;
    }
    function updateRow_by_u_id($u_id,$updateData){
        $this->db->where('user_id',$u_id);
        if($this->db->insert('user_login_history',$updateData))
            return true;
	return false;
    }
    function get_login_count($u_id){
        $this->db->select('COUNT(id)c');
        $this->db->from('user_login_history');
        $this->db->where('user_id',$u_id);
        
        foreach($this->db->get()->result() as $rowData){
            return intval($rowData->c);
        }
        return '';
    }
    function get_todays_visitor_count(){
        $sql="select count(id) c from user_login_history where login_date = '".date('Y-m-d')."'";
        foreach($this->db->query($sql)->result() as $rowData){
            return $rowData->c;
        }
        return 0;
    }
}

?>
