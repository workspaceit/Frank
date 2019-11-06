<?php
class invitation extends CI_Controller{
    private $pageData;
    function __construct() {
        parent::__construct();
        $this->load->helper("url");
    }
    function load_invitation_row_for_signup(){
        $size=trim($this->input->post('size'));
        $this->pageData['size']=$size;
        $this->load->view("invite_friend_row_view",$this->pageData);
    }
    function invite_friends(){
        
    }
}
?> 