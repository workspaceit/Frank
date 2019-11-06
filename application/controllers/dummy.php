<?php
class dummy extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->load->helper('url');
    }
    function index(){
      $this->load->model('m_mail_template');
      $subject='';
       $message='';
      foreach($this->m_mail_template->get_subject_and_message_By_type('sign_up') as $rowData){
          $subject=$rowData->message;
          $message=$rowData->message;
      }
       $message=  str_replace("[_recipient_name_]","rafi", $message);
       $message= str_replace("[_recipient_email_]","rafi@workspaceit.com", $message);   
       echo $message;
    }
}
?>
