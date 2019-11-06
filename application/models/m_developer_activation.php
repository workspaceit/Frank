<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of developer_activation
 *
 * @author Dell
 */
class m_developer_activation extends CI_Model{
    
    function __construct() {
        parent::__construct();
    }
    function get_value_by_id($id){
        $this->db->select('value');
        $this->db->from('developer_activation');
        $this->db->where('id',$id);
        $this->db->limit(1);
        foreach($this->db->get()->result() as $rowData){
            return $rowData->value;
        }
        return '';
    }
    function get_id_by_value($value){
        $this->db->select('id');
        $this->db->from('developer_activation');
        $this->db->where('value',$value);
        $this->db->limit(1);
        foreach($this->db->get()->result() as $rowData){
            return intval($rowData->id);
        }
        return '';
    }
}

?>
