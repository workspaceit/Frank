<?php
class reset extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('m_gossip_main');
        $this->load->model('m_trait_v_a_value');
        $this->load->model('m_gossip_insiders');
        $this->load->model('m_gossip_outsiders');
        $this->load->model('m_gossip_relationship');
        $this->load->model('m_gossip_comments');
        $this->load->model('m_gossip_main_trait');
        $this->load->model('m_trait_users_gossip');
        $this->load->model('m_trait_users_gossip');
    }
    function remove_all_gossip($uid){
    }
    function reset_gossip_for_me($uid){
        $gossipdata = $this->m_gossip_main->getAllByTargetId($uid);
        foreach($gossipdata as $rowData){
            $this->m_trait_v_a_value->deleteByGossipId($rowData->id);
            $this->m_gossip_insiders->deleteByGossipId($rowData->id);
            $this->m_gossip_outsiders->deleteByGossipId($rowData->id);
            $this->m_gossip_relationship->deleteByGossipId($rowData->id);
            $this->m_gossip_comments->deleteByGossipId($rowData->id);
            $this->m_gossip_main_trait->deleteByGossipId($rowData->id);
            $this->m_trait_users_gossip->deleteByGossipId($rowData->id);
        }
        $this->m_gossip_main->deleteByTarget_id($uid);

        redirect(base_url());
    }
    function reset_gossip_from_me($uid){
        $gossipdata = $this->m_gossip_main->getAllByGossipperId($uid);
        foreach($gossipdata as $rowData){
            $this->m_trait_v_a_value->deleteByGossipId($rowData->id);
            $this->m_gossip_insiders->deleteByGossipId($rowData->id);
            $this->m_gossip_outsiders->deleteByGossipId($rowData->id);
            $this->m_gossip_relationship->deleteByGossipId($rowData->id);
            $this->m_gossip_comments->deleteByGossipId($rowData->id);
            $this->m_gossip_main_trait->deleteByGossipId($rowData->id);
            $this->m_trait_users_gossip->deleteByGossipId($rowData->id);
        }
        $this->m_gossip_main->deleteByGossipper_id($uid);
        redirect(base_url());
    }
    function recalculate_trait_avg($uid){
        $this->load->model('m_trait_users');
        $this->load->model('m_trait_v_a_value');
        foreach($this->m_trait_users->get_all_by_user_id($uid) as $rowData){
            $update_data_array=array();
            $avgPoint = $this->m_trait_v_a_value->getAvg_r_pointOfTarget_id($uid,$rowData->trait_categories_id);

            $update_data_array['sub_category_avg_point'] = $avgPoint;
            $update_data_array['sub_category_hidden'] = 0;
            $this->m_trait_users->update_row_data($uid,$rowData->trait_categories_id,$update_data_array);
        }
        redirect(base_url());
    }
    function reset_reputation($uid){
        require_once dirname(__FILE__).'/class_file/Profile/C_Aggrigates.php';
        $c_aggrigates = new C_Aggrigates();
        $c_aggrigates->updateReputation($uid);
        redirect(base_url());
    }
}