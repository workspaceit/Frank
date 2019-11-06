<?php

class m_trait_like extends CI_Model
{
    function insert_row_data($insert_data_array)
    {
        return $this->db->insert('trait_like', $insert_data_array);
    }

    function update_row_data($update_data_array, $main_comment, $comment_id, $liker_id)
    {
        $this->db->where('main_comment', $main_comment);
        $this->db->where('comment_id', $comment_id);
        $this->db->where('liker_id', $liker_id);
        return $this->db->update('trait_like', $update_data_array);
    }

    function get_avg_point_by_gossip_id($gossip_id)
    {
        $this->db->select('avg(point) as avg_point', false);
        $this->db->from('trait_like');
        $this->db->where('gossip_id', $gossip_id);
        foreach ($this->db->get()->result() as $rowData) {
            return $rowData->avg_point;
        }
        return 0;
    }

    function get_avg_point_By_comment_id_main_comment($comment_id, $main_comment)
    {
        $this->db->select('avg(point) as avg_point', false);
        $this->db->from('trait_like');
        $this->db->where('comment_id', $comment_id);
        $this->db->where('main_comment', $main_comment);
        foreach ($this->db->get()->result() as $rowData) {
            return $rowData->avg_point;
        }
        return 0;
    }

    function get_points_By_comment_id_main_comment($comment_id, $main_comment)
    {
        $this->db->select('sum(point) as sum_point', false);
        $this->db->from('trait_like');
        $this->db->where('comment_id', $comment_id);
        $this->db->where('main_comment', $main_comment);
        foreach ($this->db->get()->result() as $rowData) {
            return $rowData->sum_point;
        }
        return 0;
    }

    function get_total_row_By_comment_id_main_comment($comment_id, $main_comment)
    {
        $this->db->select('SUM(point) as c', false);
        $this->db->from('trait_like');
        $this->db->where('comment_id', $comment_id);
        $this->db->where('main_comment', $main_comment);
        foreach ($this->db->get()->result() as $rowData) {
            return $rowData->c;
        }
        return 0;
    }

    function get_total_likes_By_comment_id_main_comment($comment_id, $main_comment)
    {
        $this->db->select('COUNT(point) as c', false);
        $this->db->from('trait_like');
        $this->db->where('comment_id', $comment_id);
        $this->db->where('main_comment', $main_comment);
        $this->db->where('point','1');
        foreach ($this->db->get()->result() as $rowData) {
            return $rowData->c;
        }
        return 0;
    }

    function get_total_unlikes_By_comment_id_main_comment($comment_id, $main_comment)
    {
        $this->db->select('COUNT(point) as c', false);
        $this->db->from('trait_like');
        $this->db->where('comment_id', $comment_id);
        $this->db->where('main_comment', $main_comment);
        $this->db->where('point','-1');
        foreach ($this->db->get()->result() as $rowData) {
            return $rowData->c;
        }
        return 0;
    }

    function get_total_like_By_comment_id_main_comment($comment_id, $main_comment)
    {
        $this->db->select('SUM(point) as c', false);
        $this->db->from('trait_like');
        $this->db->where('comment_id', $comment_id);
        $this->db->where('main_comment', $main_comment);
        foreach ($this->db->get()->result() as $rowData) {
            return $rowData->c;
        }
        return 0;
    }

    function is_already_liked($main_comment, $comment_id, $liker_id)
    {
        $this->db->select('id');
        $this->db->from('trait_like');
        $this->db->where('main_comment', $main_comment);
        $this->db->where('comment_id', $comment_id);
        $this->db->where('liker_id', $liker_id);
        foreach ($this->db->get()->result() as $rowData) {
            return TRUE;
        }
        return FALSE;
    }

    function getLikeOrDislikeStatusByLikerAndCommentId($main_comment = null, $likerId = null, $commentId = null){
        if($likerId != null && $commentId != null && $main_comment != null){
            $this->db->select('point');
            $this->db->where('main_comment', $main_comment);
            $this->db->where('comment_id', $commentId);
            $this->db->where('liker_id', $likerId);
            $query = $this->db->get('trait_like');
            if($query->num_rows() == 1){
                $result = $query->result();
                return $result[0]->point;
            }
        }
        return 0;
    }
}

?>