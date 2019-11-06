<?php
class m_user_profile_data extends CI_Model{
	function __construct(){
            parent::__construct();
	}
	function insertRow($rowData){
		if($this->db->insert('user_profile_data',$rowData))
			return true;
		return false;
	}
	function updateRow_BY_id($id,$rowData){
		$this->db->where('u_id',$id);
		if($this->db->update('user_profile_data',$rowData))
				return true;
			return false;
	}
	function updateRow_BY_u_id($u_id,$rowData){
		$this->db->where('u_id',$u_id);
		if($this->db->update('user_profile_data',$rowData))
				return true;
			return false;
	}
	function get_all_by_u_id($id)
	{
		$this->db->select('*');
		$this->db->from('user_profile_data');
		$this->db->where('u_id',$id);
		 
		return   $this->db->get()->result();
	}
        
        function get_current_location_state_sugesstion($term){
            $this->db->distinct();
            $this->db->select('current_location_1');
            $this->db->from('user_profile_data');
            $this->db->like('current_location_1',$term,'after');

            return $this->db->get()->result();
        }
        
        function get_current_location_city_sugesstion($term){
            $this->db->distinct();
            $this->db->select('current_location_2');
            $this->db->from('user_profile_data');
            $this->db->like('current_location_2',$term,'after');

            return $this->db->get()->result();
        }
       function get_home_town_state_sugesstion($term){
            $this->db->distinct();
            $this->db->select('home_town_1');
            $this->db->from('user_profile_data');
            $this->db->like('home_town_1',$term,'after');

            return $this->db->get()->result();
        }
        
        function get_home_town_city_sugesstion($term){
            $this->db->distinct();
            $this->db->select('home_town_2');
            $this->db->from('user_profile_data');
            $this->db->like('home_town_2',$term,'after');

            return $this->db->get()->result();
        }
        function get_current_location_one($u_id){
            $this->db->select('current_location_1');
		$this->db->from('user_profile_data');
		$this->db->where('u_id',$u_id);
		$this->db->limit(1);
		foreach($this->db->get()->result() as $rowData){
			return $rowData->current_location_1;
		}
		return '';
        }
        function get_location_by_u_id($u_id){
		$this->db->select('current_location_1,current_location_2');
		$this->db->from('user_profile_data');
		$this->db->where('u_id',$u_id);
		
		return $this->db->get()->result();
	}
        function get_home_town_by_u_id($u_id){
		$this->db->select('home_town_1,home_town_2');
		$this->db->from('user_profile_data');
		$this->db->where('u_id',$u_id);
		
		return $this->db->get()->result();
	}
        function get_high_school_by_u_id($u_id){
		$this->db->select('high_school');
		$this->db->from('user_profile_data');
		$this->db->where('u_id',$u_id);
		
		return $this->db->get()->result();
	}
        function get_higher_education_by_u_id($u_id){
                $this->db->select('higher_education_1,higher_education_2');
		$this->db->from('user_profile_data');
		$this->db->where('u_id',$u_id);
		
		return $this->db->get()->result();
        }
         function get_workplace_by_u_id($u_id){
		$this->db->select('workplace_1,workplace_2');
		$this->db->from('user_profile_data');
		$this->db->where('u_id',$u_id);
		
		return $this->db->get()->result();
	}
        function get_organization_by_u_id($u_id){
		$this->db->select('organization_1,organization_2');
		$this->db->from('user_profile_data');
		$this->db->where('u_id',$u_id);
		
		return $this->db->get()->result();
	}
	function get_current_location_suggestion($term){
		$sugession_array=array();
		$result_array=array();
		$z=0;
		$this->db->select('current_location_1 current_location');
		$this->db->from('user_profile_data');
		$this->db->like('current_location_1',$term,'after');
		
		$sugession_array=$this->db->get()->result();
		
		foreach ($sugession_array as $rowData){
			$result_array[$z]=$rowData->current_location;
			$z++;
		}
		$this->db->select('current_location_2 current_location');
		$this->db->from('user_profile_data');
		$this->db->like('current_location_2',$term,'after');
		
		$sugession_array=$this->db->get()->result();
		
		foreach ($sugession_array as $rowData){
			$result_array[$z]=$rowData->current_location;
			$z++;
		}
		asort($result_array);
		$result_array=array_unique($result_array);
		
		return $result_array;
	}
	function get_home_town_suggestion($term){
		$sugession_array=array();
		$result_array=array();
		$z=0;
		$this->db->select('home_town_1 home_town');
		$this->db->from('user_profile_data');
		$this->db->like('home_town_1',$term,'after');
		
		$sugession_array=$this->db->get()->result();
		
		foreach ($sugession_array as $rowData){
			$result_array[$z]=$rowData->home_town;
			$z++;
		}
		$this->db->select('home_town_2 home_town');
		$this->db->from('user_profile_data');
		$this->db->like('home_town_2',$term,'after');
		
		$sugession_array=$this->db->get()->result();
		
		foreach ($sugession_array as $rowData){
			$result_array[$z]=$rowData->home_town;
			$z++;
		}
		asort($result_array);
		$result_array=array_unique($result_array);
		
		return $result_array;
	}
	function get_organization_suggestion($term){
		$sugession_array=array();
		$result_array=array();
		$z=0;
		$this->db->select('organization_1 organization');
		$this->db->from('user_profile_data');
		$this->db->like('organization_1',$term,'after');
		
		$sugession_array=$this->db->get()->result();
		
		foreach ($sugession_array as $rowData){
			$result_array[$z]=$rowData->organization;
			$z++;
		}
		$this->db->select('organization_2 organization');
		$this->db->from('user_profile_data');
		$this->db->like('organization_2',$term,'after');
		
		$sugession_array=$this->db->get()->result();
		
		foreach ($sugession_array as $rowData){
			$result_array[$z]=$rowData->organization;
			$z++;
		}
		asort($result_array);
		$result_array=array_unique($result_array);
		
		return $result_array;
	}	
	function get_high_school_suggestion($term){
		$sugession_array=array();
		$result_array=array();
		$z=0;
		$this->db->select('high_school high_school');
		$this->db->from('user_profile_data');
		$this->db->like('high_school',$term,'after');
		
		$sugession_array=$this->db->get()->result();
		
		foreach ($sugession_array as $rowData){
			$result_array[$z]=$rowData->high_school;
			$z++;
		}
		
		asort($result_array);
		$result_array=array_unique($result_array);
		
		return $result_array;
	}
	function get_higher_education_suggestion($term){
		$sugession_array=array();
		$result_array=array();
		$z=0;
		$this->db->select('higher_education_1 higher_education');
		$this->db->from('user_profile_data');
		$this->db->like('higher_education_1',$term,'after');
		
		$sugession_array=$this->db->get()->result();
		
		foreach ($sugession_array as $rowData){
			$result_array[$z]=$rowData->higher_education;
			$z++;
		}
		$this->db->select('higher_education_2 higher_education');
		$this->db->from('user_profile_data');
		$this->db->like('higher_education_2',$term,'after');
		
		$sugession_array=$this->db->get()->result();
		
		foreach ($sugession_array as $rowData){
			$result_array[$z]=$rowData->higher_education;
			$z++;
		}
		asort($result_array);
		$result_array=array_unique($result_array);
		
		return $result_array;
	}		
	function get_workplace_suggestion($term){
		$sugession_array=array();
		$result_array=array();
		$z=0;
		$this->db->select('workplace_1 workplace');
		$this->db->from('user_profile_data');
		$this->db->like('workplace_1',$term,'after');
		
		$sugession_array=$this->db->get()->result();
		
		foreach ($sugession_array as $rowData){
			$result_array[$z]=$rowData->workplace;
			$z++;
		}
		$this->db->select('workplace_2 workplace');
		$this->db->from('user_profile_data');
		$this->db->like('workplace_2',$term,'after');
		
		$sugession_array=$this->db->get()->result();
		
		foreach ($sugession_array as $rowData){
			$result_array[$z]=$rowData->workplace;
			$z++;
		}
		asort($result_array);
		$result_array=array_unique($result_array);
	
		return $result_array;
	}		
	 	
}