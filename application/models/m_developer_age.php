<?php
class m_developer_age extends CI_Model
{
    function get_all()
    {
        $this->db->select('*');
        $this->db->from('developer_age');
        return $this->db->get()->result();
    }
}

?>
