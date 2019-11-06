<?php
	 class m_gossip_insiders extends CI_Model{
		 function insert_row_data($insert_data_array){
			return $this->db->insert('gossip_insiders',$insert_data_array);
		 }
		 function deleteByGossipId($gossip_id){
			 $this->db->where('gossip_id', $gossip_id);
			 $this->db->delete('gossip_insiders');
		 }

         function get_integrity($gossipper_id){

             $sql="select ROUND(AVG(integrity),0) as c

                            from

                            gossip_main

                            where

                           gossip_main.gossipper_id = ".$gossipper_id;

             foreach( $this->db->query($sql)->result() as $rowData){

                 return $rowData->c;

             }

             return 0;

         }
	 }
?>