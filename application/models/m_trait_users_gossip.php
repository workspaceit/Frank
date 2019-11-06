<?php

class m_trait_users_gossip extends CI_Model
{
    function insert_row_data($insert_data_array)
    {
        return $this->db->insert('trait_users_gossip', $insert_data_array);
    }
    function deleteByGossipId($gossip_id){
        $this->db->where('gossip_id', $gossip_id);
        $this->db->delete('trait_users_gossip');
    }
    function update_row_data($insert_data_array, $user_id, $gossip_id, $trait_categories_id)
    {
        $this->db->where('user_id', $user_id);
        $this->db->where('gossip_id', $gossip_id);
        $this->db->where('trait_categories_id', $trait_categories_id);
        return $this->db->update('trait_users_gossip', $insert_data_array);
    }

    function get_avg_point($user_id, $trait_categories_id)
    {
        $this->db->select('avg(sub_category_avg_point) avg_point');
        $this->db->from('trait_users_gossip');
        $this->db->where("user_id", $user_id);
        $this->db->where("trait_categories_id", $trait_categories_id);
        foreach ($this->db->get()->result() as $rowData) {
            return $rowData->avg_point;
        }
        return 0;
    }

    function getAvgPointByGossipId($user_id, $gossipId)
    {
        $this->db->select('avg(sub_category_avg_point) avg_point');
        $this->db->from('trait_users_gossip');
        $this->db->where("user_id", $user_id);
        $this->db->where("gossip_id", $gossipId);
        foreach ($this->db->get()->result() as $rowData) {
            return $rowData->avg_point;
        }
        return 0;
    }

    function get_j_gossip_trait_by_gossip_id($gossip_id)
    {
        $sql = "select
                            trait_categories.id trait_categories_id,
                            trait_categories.color_class,     
                            trait_categories.category,
                            
                            trait_users_gossip.id,
                            gossip_main.target_id,
                            trait_users_gossip.category category_value,
                            trait_users_gossip.sub_category_value,
                            trait_users_gossip.sub_category_hidden,
                            trait_users_gossip.sub_category_avg_point,
                            trait_v_a_value.f_point
                         from  
                           trait_users_gossip 
                         right join
                           trait_categories on (  trait_users_gossip.trait_categories_id =  trait_categories.id and  trait_users_gossip.gossip_id = " . $gossip_id . ")
                         left join
                           trait_v_a_value on  (   trait_users_gossip.gossip_id = trait_v_a_value.gossip_id and trait_users_gossip.trait_categories_id =  trait_v_a_value.trait_categories_id)
                         left join
                            gossip_main on  (   trait_users_gossip.gossip_id = gossip_main.id )
                         order by trait_categories.category desc
                         ";
        return $this->db->query($sql)->result();
    }

    function is_sub_category_avg_point_already_set($user_id, $gossip_id, $trait_categories_id)
    {
        $this->db->select('*');
        $this->db->from('trait_users_gossip');
        $this->db->where('user_id', $user_id);
        $this->db->where('gossip_id', $gossip_id);
        $this->db->where('trait_categories_id', $trait_categories_id);
        $this->db->limit(1);
        foreach ($this->db->get()->result() as $rowData) {
            return true;
        }
        return false;
    }
    function isRecevied($user_id,$trait_categories_id){
        $this->db->select('*');
        $this->db->from('trait_users_gossip');
        $this->db->where('user_id', $user_id);
        $this->db->where('trait_categories_id', $trait_categories_id);
        $this->db->limit(1);
        foreach ($this->db->get()->result() as $rowData) {
            return true;
        }
        return false;
    }
}

?>