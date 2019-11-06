<?php
class m_admin_login extends CI_Model
{
	function insert_Data($insertData)
	{
		if($this->db->insert('admin_login',$insertData))
			return true;
		return false;
	}
        function is_password_correct($id,$password)
        {
          
            $this->db->select('*');
            $this->db->from('admin_login');
            $this->db->where('id',$id);
            $this->db->where('password',$password);
            if($this->db->get()->result()){
                return TRUE;                
            }else{
                return FALSE;   
            }
        }
        function update_password($id,$rowData)
        {
            $this->db->where('id',$id);
            if($this->db->update('admin_login',$rowData))
                return true;
            return false;
            
        }
       	function get_all_rows($u_id)
        {
            $this->db->select('*');
            $this->db->from('site_settings');
            $this->db->where('id',$u_id);
            return $this->db->get()->result();
                   
        }
        function authenticate($email,$password)
        {
                   $this->db->select('*');
                   $this->db->from('admin_login');
                   $this->db->where('email',$email);
                   $this->db->where('password',$password);
                   if($this->db->get()->result())
                   {
                       return TRUE;
                   }
                   else 
                    {
                       return FALSE;
                    }
        }
         function is_active_user($email)
        {
                   $this->db->select('*');
                   $this->db->from('admin_login');
                   $this->db->where('email',$email);
                   $this->db->where('activation','active');
                   if($this->db->get()->result())
                   {
                       return TRUE;
                   }
                   else 
                    {
                       return FALSE;
                    }
        }
        function get_admin_id($email)
        {
                   $this->db->select('id');
                   $this->db->from('admin_login');
                   $this->db->where('email',$email);
                   $this->db->where('activation','active');
                   foreach($this->db->get()->result() as $rowData){
			return $rowData->id;
		}
                return '';
                  
        }
       	function member()
        {
            
        }
       	function member_edit()
        {
            
        }
    	function member_update_submit_data()
        {
            
        }
       	function website_settings()
        {
            
        }
       	function website_settings_submit_update_data()
        {
            
        }
}