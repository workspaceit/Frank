<?php
class m_mail_template extends CI_Model
{
    function __construct() {
        parent::__construct();
    }
    function update_row_By_type($type,$update_array){
        $this->db->where('type',$type);
        return  $this->db->update('mail_template',$update_array);
    }
    function get_subject_and_message_By_type($type){
        $this->db->select('subject,message');
        $this->db->from('mail_template');
        $this->db->where('type',$type);
        return $this->db->get()->result();
    }
}
?>