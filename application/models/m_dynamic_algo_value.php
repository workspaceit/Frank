<?php
	 class m_dynamic_algo_value extends CI_Model{
		 function insert_row_data($insert_data_array){
			return $this->db->insert('dynamic_algo_value',$insert_data_array);
		 }
                 function get_all(){
                     $sql="select * from dynamic_algo_value";
                     return $this->db->query($sql)->result();
                 }
                 function get_j_all(){
                     $sql="SELECT dynamic_algo_value.*,dynamic_algo_sql.id modifier_id,dynamic_algo_sql.modifier 
                           FROM dynamic_algo_value
                           right join  dynamic_algo_modifier on dynamic_algo_modifier.dynamic_algo_id = dynamic_algo_value.id
                           inner join dynamic_algo_sql on dynamic_algo_sql.id = dynamic_algo_modifier.modifier_id

                            order by  	dynamic_algo_value.exposed_str asc";
                     return $this->db->query($sql)->result();
                 }
                 function get_j_dynamic_sql($id,$m_id){
                     $sql="SELECT 
                                dynamic_algo_value.*,
                                dynamic_algo_sql.modifier,
                                dynamic_algo_sql.select_str,
                                dynamic_algo_sql.from_str,
                                dynamic_algo_sql.where_str,           
                                dynamic_algo_sql.limit_str           
                       FROM 
                            dynamic_algo_value, dynamic_algo_sql 
                       where 
                            dynamic_algo_value.id = $id
                       and 
                            dynamic_algo_sql.id = $m_id ";
                     return $this->db->query($sql)->result();                              
                 }
                 function execute_query($sql){
                     $result=mysql_query($sql);
                     
                     if(!$result){
                         return 0;
                     }
                     while($rowData = mysql_fetch_array($result) ){
                         return $rowData[0];
                     }
                     return 0;
                 }
	 }
?>