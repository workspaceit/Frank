<?php
class m_user_login extends CI_Model{
	function __construct(){
		parent::__construct();
	}
	function insertRow($rowData){
		if($this->db->insert('user_login',$rowData))
			return true;
		return false;
	}
	function updateRow_BY_id($id,$rowData){
		$this->db->where('id',$id);
		if($this->db->update('user_login',$rowData))
				return true;
			return false;
	}
	function updateRow_BY_u_email($u_email,$rowData){
		$this->db->where('u_email',$u_email);
		if($this->db->update('user_login',$rowData))
				return true;
			return false;
	}
	function updateRow_BY_u_email_activation_key($u_email,$activation_key,$rowData){
		$this->db->where('u_email',$u_email);
		$this->db->where('activation_key',$activation_key);
		if($this->db->update('user_login',$rowData))
				return true;
			return false;
	}
	function delete_from_related_table_By_u_id($u_id)
	{
		$this->db->where('u_id',$u_id);
		$this->db->delete('user_basic_info');
		
		$this->db->where('u_id',$u_id);
		$this->db->delete('user_profile_data');
		
		$this->db->where('u_id',$u_id);
		$this->db->delete('user_profile_settings');
		
		$this->db->where('id',$u_id);
		$this->db->delete('user_login'); 	
			
	}
        function delete_from_system_By_u_id($u_id) //Delete From All Table
	{
		$this->db->where('u_id',$u_id);
		$this->db->delete('user_basic_info');
		
		$this->db->where('u_id',$u_id);
		$this->db->delete('user_profile_data');
		
		$this->db->where('u_id',$u_id);
		$this->db->delete('user_profile_settings');
		
		$this->db->where('id',$u_id);
		$this->db->delete('user_login'); 
                
                $this->db->where('user_id',$u_id);
                $this->db->delete('trait_users'); 	
                
                $this->db->where('user_id',$u_id);
                $this->db->delete('trait_users_gossip'); 	
                
                $this->db->where('user_id',$u_id);
                $this->db->delete('user_trait_final_values'); 	
                
                
		return true;	
	}
	function is_exist($u_email){
		$this->db->select('u_email');
		$this->db->from('user_login');
		$this->db->where('u_email',$u_email);
		
		foreach($this->db->get()->result() as $rowData){
			return true;
		}
		return false;
	}
        function is_other($u_id,$u_email){
		$this->db->select('u_email');
		$this->db->from('user_login');
		$this->db->where('u_email',$u_email);
		$this->db->where('id !=',$u_id);
		foreach($this->db->get()->result() as $rowData){
			return true;
		}
		return false;
	}
	function is_this_email_unique($u_email){
		$this->db->select('COUNT(u_email) c');
		$this->db->from('user_login');
		$this->db->where('u_email',$u_email);
		
		foreach($this->db->get()->result() as $rowData){
			if(intval($rowData->c)==1)
				return true;
			return false;
		}
		return false;
	}
	function authenticate($u_email,$password){
		$this->db->select('COUNT(u_email) c');
		$this->db->from('user_login');
		$this->db->where('u_email',$u_email);
		$this->db->where('password',$password);
		
		foreach($this->db->get()->result() as $rowData){
			if(intval($rowData->c)==1)
				return true;
			return false;
		}
		return false;
	}
        function is_active($u_email){
                $this->db->select('developer_activation.value status');
		$this->db->from('user_login,developer_activation');
		$this->db->where('developer_activation.id = user_login.activation');
                $this->db->where('user_login.u_email',$u_email);
		
		foreach($this->db->get()->result() as $rowData){
			if($rowData->status=="active")
                            return true;
                        return false;
		}
                return false;
        }
        //From m_trait_categories
        function get_trait_all(){
		$this->db->select('*');		$this->db->from('trait_categories');		$this->db->where('user_type',1);
		$this->db->order_by('id','asc');		return $this->db->get()->result();
        }
        function get_account_status($u_email){
                $this->db->select('developer_activation.value status');
		$this->db->from('user_login,developer_activation');
		$this->db->where('developer_activation.id = user_login.activation');
                $this->db->where('user_login.u_email',$u_email);
		
		foreach($this->db->get()->result() as $rowData){
                    return $rowData->status;
		}
                return "";
        }
        function get_account_status_u_id($u_id){
                $this->db->select('developer_activation.value status');
		$this->db->from('user_login,developer_activation');
		$this->db->where('developer_activation.id = user_login.activation');
                $this->db->where('user_login.id',$u_id);
		
		foreach($this->db->get()->result() as $rowData){
                    return $rowData->status;
		}
                return "";
        }
	function get_id_by_email($u_email){
		$this->db->select('id');
		$this->db->from('user_login');
		$this->db->where('u_email',$u_email);

		foreach($this->db->get()->result() as $rowData){
			return $rowData->id;
		}
		return '';
	
	}
        function get_email_by_id($id){
		$this->db->select('u_email');
		$this->db->from('user_login');
		$this->db->where('id',$id);
		
		foreach($this->db->get()->result() as $rowData){
			return $rowData->u_email;
		}
		return '';
	
	}
	function get_email_suggestion($u_email){
		$this->db->select('u_email');
		$this->db->from('user_login');
		$this->db->like('u_email',$u_email,'after');
		
		return $this->db->get()->result();
	
	}
	function get_all_by_uid($id)
	{
            $this->db->select('*');
            $this->db->from('user_login');
            $this->db->where('id ',$id);
		 
            return   $this->db->get()->result();
	}
        function get_row_size()
	{
            $this->db->select('COUNT(*) c');
            $this->db->from('user_login');
            foreach($this->db->get()->result() as $rowData){
                return intval($rowData->c);
            }
            return 0;
	}
	function j_get_user_inf_for_admin($star_row,$total_row){
            	$this->db->select("
                                    user_login.id AS user_id,
                                    user_profile_data.current_location_1 AS  location_1,
                                    user_profile_data.current_location_2 AS  location_2,
                                    user_basic_info.f_name AS name_1,
                                    user_basic_info.l_name AS name_2,
                                    user_basic_info.c_date AS signup_date,
                                    developer_activation.value AS account_status,
                                    user_login.activation_date AS last_activation
                                    ",FALSE);
		$this->db->from('user_login,user_basic_info,user_profile_data,developer_activation');
		$this->db->where('developer_activation.id = user_login.activation');
                $this->db->where('user_login.id = user_basic_info.u_id');
                $this->db->where('user_login.id = user_profile_data.u_id');
		$this->db->order_by("user_basic_info.f_name",'desc');
                $this->db->limit($total_row,$star_row);
                
		return   $this->db->get()->result();
            
        }
        function j_search_get_user_inf_for_admin($term){
            
                $sql="select 
                        user_login.id AS user_id,
                        user_profile_data.current_location_1 AS  location_1,
                        user_profile_data.current_location_2 AS  location_2,
                        user_basic_info.f_name AS name_1,
                        user_basic_info.l_name AS name_2,
                        user_basic_info.c_date AS signup_date,
                        developer_activation.value AS account_status,
                        user_login.activation_date AS last_activation
                      from 
                        user_login,
                        user_basic_info,
                        user_profile_data,
                        developer_activation
                      where
                        user_login.activation = developer_activation.id AND
                        user_login.id = user_basic_info.u_id AND
                        user_login.id = user_profile_data.u_id AND 
                        (
                            user_basic_info.f_name Like '%".$term."%' OR
                            user_basic_info.l_name Like '%".$term."%' OR
                            CONCAT(user_basic_info.f_name,' ',user_basic_info.l_name) Like '%".$term."%' OR
                            CONCAT(user_basic_info.l_name,' ',user_basic_info.f_name) Like '%".$term."%'
                        )
                                    ";
                return $this->db->query($sql)->result();
//                $this->db->distinct();
//            	$this->db->select("
//                                    user_login.id AS user_id,
//                                    user_profile_data.current_location_1 AS  location_1,
//                                    user_profile_data.current_location_2 AS  location_2,
//                                    user_basic_info.f_name AS name_1,
//                                    user_basic_info.l_name AS name_2,
//                                    user_basic_info.c_date AS signup_date,
//                                    developer_activation.value AS account_status,
//                                     user_login.activation_date AS last_activation
//                                    ",FALSE);
//                $this->db->from('user_login,user_basic_info,user_profile_data,developer_activation');
//                $this->db->where('user_login.activation = developer_activation.id');
//                $this->db->where('user_login.id = user_basic_info.u_id');
//                $this->db->where('user_login.id = user_profile_data.u_id');
//		$this->db->like('user_basic_info.f_name',$term,"match");
             //   $this->db->or_like('user_basic_info.l_name',$term,"match");
                
               // $this->db->or_like("CONCAT(user_basic_info.f_name,' ',user_basic_info.l_name)",$term,"match");
               
               
//		$this->db->order_by("user_basic_info.f_name",'asc');
//               
//		return   $this->db->get()->result();
//            
        }
        
        function get_last_user_id() {
        	$sql = "SELECT MAX(id) AS id FROM user_login";
        	
        	$resullObj =  $this->db->query($sql)->result();
        	return $resullObj[0]->id;
        }
		function getTotalUser(){
			$sql = "SELECT Count(id) as total_user FROM `user_login` ";
			$resultObj =  $this->db->query($sql)->result();
			return $resultObj[0]->total_user;
		}
		function getAllUserId(){
			$sql = "SELECT id  FROM `user_login` ";
			$resultObj =  $this->db->query($sql)->result();
			$userList = array();
			foreach($resultObj as $key=>$row){

				$userList[$key] =$row->id;
			}
			return $userList;
		}
}