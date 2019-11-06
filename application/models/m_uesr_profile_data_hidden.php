<?php
class m_uesr_profile_data_hidden extends CI_Model
{
    function insert_data($insertData)
    {
        if($this->db->insert('uesr_profile_data_hidden',$insertData))
			return true;
		return false;
    }
    function update_by_u_id($u_id,$rowData)
    {
       $this->db->where('u_id',$u_id);
            if($this->db->update('uesr_profile_data_hidden',$rowData))
                return true;
            return false;  
        
    }
    function get_gender($u_id)
    {
        $this->db->select('gender');
        $this->db->from('uesr_profile_data_hidden');
        $this->db->where('u_id',$u_id);
        foreach ($this->db->get()->result() as $rowData)
        {
            return $rowData->gender;    
        }
       
    }
    function get_birthday($u_id)
    {
        $this->db->select('birthday');
        $this->db->from('uesr_profile_data_hidden');
        $this->db->where('u_id',$u_id);
        foreach ($this->db->get()->result() as $rowData)
        {
            return $rowData->birthday;    
        } 
        
    }
    function get_location($u_id)
    {
        $this->db->select('location');
        $this->db->from('uesr_profile_data_hidden');
        $this->db->where('u_id',$u_id);
        foreach ($this->db->get()->result() as $rowData)
        {
            return $rowData->location;    
        } 
    }
    function get_home_town($u_id)
    {
        $this->db->select('home_town');
        $this->db->from('uesr_profile_data_hidden');
        $this->db->where('u_id',$u_id);
        foreach ($this->db->get()->result() as $rowData)
        {
            return $rowData->home_town;    
        } 
    }
    function get_high_school($u_id)
    {
        $this->db->select('high_school');
        $this->db->from('uesr_profile_data_hidden');
        $this->db->where('u_id',$u_id);
        foreach ($this->db->get()->result() as $rowData)
        {
            return $rowData->high_school;    
        } 
    }
    function get_higher_education($u_id)
    {
        $this->db->select('higher_education');
        $this->db->from('uesr_profile_data_hidden');
        $this->db->where('u_id',$u_id);
        foreach ($this->db->get()->result() as $rowData)
        {
            return $rowData->higher_education;    
        }  
    }
     function get_work_place($u_id)
    {
        $this->db->select('work_place');
        $this->db->from('uesr_profile_data_hidden');
        $this->db->where('u_id',$u_id);
        foreach ($this->db->get()->result() as $rowData)
        {
            return $rowData->work_place;    
        }  
    }
    function get_organization($u_id)
    {
      $this->db->select('organization');
        $this->db->from('uesr_profile_data_hidden');
        $this->db->where('u_id',$u_id);
        foreach ($this->db->get()->result() as $rowData)
        {
            return $rowData->organization;    
        }   
    }
    function get_all_profule_data_hiden($u_id)
    {
        $this->db->select('*');
        $this->db->from('uesr_profile_data_hidden');
        $this->db->where('u_id',$u_id);
        return $this->db->get()->result();
    }
}

?>
