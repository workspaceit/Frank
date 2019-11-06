<?php
	 class m_dynamic_algo_equation extends CI_Model{
		 function insert_row_data($insert_data_array){
			return $this->db->insert('dynamic_algo_equation',$insert_data_array);
		 }
                 function update_row_data($id,$update_data_array){
                        $this->db->where("id",$id);
			return $this->db->update('dynamic_algo_equation',$update_data_array);
		 }
                 function get_all(){
                      $sql="select * from dynamic_algo_equation";
                     return $this->db->query($sql)->result();
                 }
                 function get_all_by_component($component){
                     $sql="select * from dynamic_algo_equation";
                     $sql.=" where component = '$component' ";
                     $sql.=" limit 1 ";
                     return $this->db->query($sql)->result();
                 }
	 }
?>