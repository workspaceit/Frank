<?php
	 class m_gossip_main_trait extends CI_Model{
		 function insert_row_data($insert_data_array){
			return $this->db->insert('gossip_main_trait',$insert_data_array);
		 }
         function deleteByGossipId($gossip_id){
             $this->db->where('gossip_id', $gossip_id);
             $this->db->delete('gossip_main_trait');
         }
                 function insert_multi_row_data($insert_data_array){
                     
                     $sql="INSERT INTO gossip_main_trait ";
                     $sql.="(   
                                gossip_id,
                                trait_categories_id,                              
                                created_date
                             )";
                     $sql.=" VALUES ";
                     
                     for($i=0;$i<sizeof($insert_data_array);$i++){
                        $insert_data_row=explode(";",trim($insert_data_array[$i]));
                        $sql.="(";
                        for($j=0;$j<sizeof($insert_data_row);$j++){
                           
                            if(is_numeric($insert_data_row[$j])){
                                $sql.=$insert_data_row[$j];
                            }else{
                                 $sql.="'".$insert_data_row[$j]."'";
                            }
                            if($j<sizeof($insert_data_row)-1){
                                $sql.=",";
                            }
                            
                        }
                        
                        $sql.=")";
                           
                        if($i<sizeof($insert_data_array)-1){
                                $sql.=",";
                        }else{
                            $sql.=";";
                        }
                     }
                   
                    return $this->db->query($sql);
		 }
	 }
?>