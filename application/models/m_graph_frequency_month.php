<?php
	 class m_graph_frequency_month extends CI_Model{
		 function insert_row_data($insert_data_array){
			return $this->db->insert('graph_frequency_month',$insert_data_array);
		 }
                 function update_row_data($update_data_array,$category_id){
                    
                        $this->db->where('month(date)',date('m'));
                        $this->db->where('year(date)',date('Y'));
                        $this->db->where('category_id',$category_id);
			return $this->db->update('graph_frequency_month',$update_data_array);
		 }
                 function get_past_month_data($category_id,$month){ 
                     $sql="SELECT 
                                * 
                           FROM  
                               graph_frequency_month 
                           where 
                              DATE(date) <= CURDATE() and DATE(date) >= DATE_SUB(CURDATE(), INTERVAL $month MONTH) 
                           and 
                               category_id = $category_id
                             ";
                    return $this->db->query($sql)->result(); 
                 }
                 function is_empty($month,$year){
                     $sql="select count(*) c from graph_frequency_month";
                     if($year!="" && $month!="" ){
                          $sql.=" where month(date) = ".$month;
                          $sql.=" and year(date) = ".$year;
                     }
                     $sql.=" limit 1";
                     foreach($this->db->query($sql)->result() as $rowData){
                         if($rowData->c==0)
                             return true;
                         return false;
                     }
                     return true;
                 }
                 function get_max_month($year){
                     $sql="select max(month(date)) m_date from graph_frequency_month 
                           where year(date) = ".$year;
                     foreach($this->db->query($sql)->result() as $rowData){
                          if( !empty($rowData->m_date) )
                            return $rowData->m_date;
                          return 0;
                     }
                     return 0;
                 }
                 function get_min_month($year){
                     $sql="select min(month(date)) m_date from graph_frequency_month 
                           where year(date) = ".$year;
                     foreach($this->db->query($sql)->result() as $rowData){
                         if( !empty($rowData->m_date) )
                            return $rowData->m_date;
                          return 0;
                     }
                     return 0;
                 }
                 function get_min_date($year){
                     $sql="select DATE(date) m_date from graph_frequency_month ";
                     
                     foreach($this->db->query($sql)->result() as $rowData){
                         if( !empty($rowData->m_date) )
                            return $rowData->m_date;
                          return 0;
                     }
                     return 0;
                 }
	 }
?>