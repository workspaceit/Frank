<?php
class mail_template extends CI_Controller
{
    private $admin_u_id;
    private $pageData;
    
    function __construct() {
        parent::__construct();
        $this->pageData=array();
    }
    function get_subject_and_message_by_type(){
        $this->load->model('m_mail_template');
        
        $type=trim($this->input->post('mail_type'));
       
        $this->pageData['mail_template_data']=$this->m_mail_template->get_subject_and_message_By_type($type);
        $this->pageData['mail_type']=$type;
        $this->load->view('admin_mail_template_update_view', $this->pageData);
    }
    function submit_update_mail_template_by_type(){
         $this->load->model('m_mail_template');
         
        $subject=trim($this->input->post('subject'));
        $message=trim($this->input->post('message'));
        $type=trim($this->input->post('type'));
        
        $update_data=array(
            'subject'=>$subject,
            'message'=>$message
        );
        if($this->m_mail_template->update_row_By_type($type,$update_data)){
            echo ";True;Mail Updated Successfully;";
        }else{
             echo ";False;Internal Server Error";
        }
        
    }
    
}
?>