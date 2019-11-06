<?php
	 class m_trait_v_a_value extends CI_Model{
         function deleteByGossipId($gossipId){
             $sql = "delete from trait_v_a_value where gossip_id = ".$gossipId;

             return $this->db->query($sql);
         }
		 function insert_row_data($insert_data_array){
			return $this->db->insert('trait_v_a_value',$insert_data_array);
		 }
                 function get_trait_categories_id_by_gossip_id($gossip_id){
                    $this->db->distinct();
                    $this->db->select('trait_categories_id');
                    $this->db->from('trait_v_a_value');
                    $this->db->where("gossip_id",$gossip_id);
                    return $this->db->get()->result();
                 }
                
                  //Function From m_trait_categories
                 function get_trait_categories_all($id){
                    $this->db->select('*');
                    $this->db->from('trait_categories');
                    $this->db->where("id",$id);
                    $this->db->order_by('category','desc');
                    return $this->db->get()->result();
                 }
                 function insert_multi_row_data($insert_data_array){
                     
                     $sql="INSERT INTO trait_v_a_value ";
                     $sql.="(   q_a_id,
                                r_point,
                                f_point,
                                trait_categories_id,
                                rated_by,
                                rated_to,
                                gossip_id,
                                main_comment,
                                created_date
                             )";
                     $sql.=" VALUES ";
                     
                     for($i=0;$i<sizeof($insert_data_array);$i++){
                        $insert_data_row=explode(" ",trim($insert_data_array[$i]));
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
                 function get_avg_r_point_by_gossip_id_trait_categories_rated_to($gossip_id,$trait_categories_id,$rated_to){
                     $sql="select 
                                avg(r_point) as avg_r_point
                           from 
                                trait_v_a_value 
                           where 
                                gossip_id = ".$gossip_id." and 
                                trait_categories_id =".$trait_categories_id." and
                                rated_to = ".$rated_to."    
                            ";
                    
                     foreach($this->db->query($sql)->result() as $rowData){
                           return intval($rowData->avg_r_point);
                     }
                     return 0;
                 }
                 function get_r_point_by_rated_by_and_gossip_id($gossip_id,$rated_by){
                     $this->db->select("r_point");
                     $this->db->from("trait_v_a_value");
                     $this->db->where("gossip_id",$gossip_id);
                     $this->db->where("rated_by",$rated_by);
                     foreach($this->db->get()->result() as $rowData){
                           return intval($rowData->r_point);
                     }
                     return 0;
                 }

         function getAvg_r_pointOfTarget_id($userID,$trait_categories_id){
             $sql="select avg(r_point) as avg_r_point
                   from
                        trait_v_a_value
                   INNER JOIN
                        gossip_main on trait_v_a_value.gossip_id = gossip_main.id
                   where
                         gossip_main.target_id = ".$userID." and
                         trait_v_a_value.trait_categories_id =".$trait_categories_id;

             foreach($this->db->query($sql)->result() as $rowData){

                 return intval($rowData->avg_r_point);
             }
             return 0;
         }
                 
	 }
?>