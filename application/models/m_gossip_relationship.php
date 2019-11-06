<?php	 class m_gossip_relationship extends CI_Model{		 function insert_row_data($insert_data_array){			return $this->db->insert('gossip_relationship',$insert_data_array);		 }         function deleteByGossipId($gossip_id){             $this->db->where('gossip_id', $gossip_id);             $this->db->delete('gossip_relationship');         }         function update_row_data($update_data_array,$id){             $this->db->where('id',$id);			return $this->db->update('gossip_relationship',$update_data_array);		 }                 function get_all_by_gossip_id($gossip_id){                     $this->db->select('*');                     $this->db->from('gossip_relationship');                     $this->db->where('gossip_id',$gossip_id);                     $this->db->limit(1);                     return $this->db->get()->result();                 }                 function get_created_by_by_gossip_id($id){                     $this->db->select('created_by');                     $this->db->from('gossip_relationship');                     $this->db->where('id',$id);                     $this->db->limit(1);                     foreach( $this->db->get()->result() as $rowData){                         return $rowData->created_by;                     }                     return "";                 }         function get_target_id($gossip_id){             $sql="select gossip_main.target_id as c                            from                            gossip_main                            left join  gossip_relationship on ( gossip_relationship.gossip_id = gossip_main.id)                            where                            gossip_main.id = ".$gossip_id;             foreach( $this->db->query($sql)->result() as $rowData){                 return $rowData->c;             }             return 0;         }         function get_profile_auth($target_id){             $sql="select SUM(gossip_relationship.profile_auth) as c                            from                            gossip_relationship                            left join  gossip_main on ( gossip_relationship.gossip_id = gossip_main.id)                            where gossip_relationship.accept=1 AND                           gossip_main.target_id = ".$target_id ;             foreach( $this->db->query($sql)->result() as $rowData){                 return $rowData->c;             }             return 0;         }         function get_gossipper_id($gossip_id){             $sql="select gossip_main.gossipper_id as c                            from                            gossip_main                            left join  gossip_relationship on ( gossip_relationship.gossip_id = gossip_main.id)                            where                            gossip_main.id = ".$gossip_id;             foreach( $this->db->query($sql)->result() as $rowData){                 return $rowData->c;             }             return 0;         }         function get_gen_score_value($gossip_id){             $sql="select gossip_main.integrity as c from gossip_main where id = ".$gossip_id;             foreach( $this->db->query($sql)->result() as $rowData){                 return $rowData->c;             }             return 0;         }         function get_insider_value($gossip_id){             $sql="select gossip_insiders.values as c from gossip_insiders where gossip_id = ".$gossip_id;             foreach( $this->db->query($sql)->result() as $rowData){                 return $rowData->c;             }             return 0;         }         function get_identity_value($gossip_id){             $sql="select gossip_relationship.profile_auth as c from gossip_relationship where gossip_id = ".$gossip_id;             foreach( $this->db->query($sql)->result() as $rowData){                 return $rowData->c;             }             return 0;         }                 function get_accepted_relation(){                     $sql="select count(gossip_relationship.id) as c                            from                             gossip_main                            left join  gossip_relationship on ( gossip_relationship.gossip_id = gossip_main.id and gossip_relationship.accept = 1 )                                                        where                            gossip_main.gossipper_id = gossip_relationship.created_by ";                     foreach( $this->db->query($sql)->result() as $rowData){                            return $rowData->c;                     }                     return 0;                 }                 function get_disputed_relation(){                     $sql=" select count(gossip_relationship.id) as c                            from                             gossip_main                            left join  gossip_relationship on ( gossip_relationship.gossip_id = gossip_main.id and gossip_relationship.accept = 0 )                                                        where                            gossip_main.gossipper_id = gossip_relationship.created_by";                     foreach( $this->db->query($sql)->result() as $rowData){                            return $rowData->c;                     }                     return 0;                 }	 }?>