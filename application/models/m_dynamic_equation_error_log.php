<?php
	 class m_dynamic_equation_error_log extends CI_Model{
		 function insert_row_data($insert_data_array){
			return $this->db->insert('dynamic_equation_error_log',$insert_data_array);
		 }
                 function is_function_exist($component,$msg){
                     $this->db->select('count(*) c');
                     $this->db->from('dynamic_equation_error_log');
                     $this->db->where('component',$component);
                     $this->db->where('msg',$msg);
                     $this->db->where('status = 0');
                     foreach( $this->db->get()->result() as $rowData){
                         if(intval($rowData->c)==0)
                             return false;
                         return true;
                     }
                     return false;
                 }
	 }
?>