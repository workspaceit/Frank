<?php
class m_developer_sign extends CI_model{
    function __construct() {
        parent::__construct();
    }
    function get_all(){
        $this->db->select('*');
        $this->db->from('developer_sign');
        return $this->db->get()->result();
    }
    function get_start_and_end_by_id($id){
        $this->db->select('*');
        $this->db->from('developer_sign');
        $this->db->where('id',$id);
        foreach($this->db->get()->result() as $rowData){
            return $rowData->start.' '.$rowData->end;
        }
        return '0000-00-00 0000-00-00';
    }
}
?>
