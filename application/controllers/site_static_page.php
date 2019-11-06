<?php
    
class site_static_page extends CI_Controller{
    private $pageData;
    private $site_url;
    private $u_id;
    function __construct(){
    	parent::__construct();
    	$this->load->helper('url');
        $this->pageData=array();
	include_once(APPPATH.'controllers/common_site_setting.php');
	include_once(APPPATH.'controllers/class_file/site_url.php');
        include_once(APPPATH.'controllers/class_file/time_zone.php');
        if($this->session->userdata('admin_inf')){
           $session_data=$this->session->userdata('admin_inf');
           $this->u_id=$session_data['u_id'];
        }else{
            echo ";False;;Server Error";
            die();
        }
	
    }
    function get_site_static_page_about(){
        $this->load->model('m_site_static_page_about');
        $this->pageData['details']=$this->m_site_static_page_about->get_details();
        $this->pageData['title']='About Frank';
        $this->pageData['suffix']='about';
        $this->load->view('admin_static_page_update_view',$this->pageData);
    }
    
    function get_site_static_page_faq(){
        $this->load->model('m_site_static_page_faq');
        $this->pageData['details']=$this->m_site_static_page_faq->get_details();
        $this->pageData['title']='FAQ';
        $this->pageData['suffix']='faq';
        $this->load->view('admin_static_page_update_view',$this->pageData);
    }
    function get_site_static_page_contact(){
        $this->load->model('m_site_static_page_contact');
        $this->pageData['details']=$this->m_site_static_page_contact->get_details();
        $this->pageData['title']='Contact Us';
        $this->pageData['suffix']='contact';
        $this->load->view('admin_static_page_update_view',$this->pageData);
    }
    function get_site_static_page_map(){
        $this->load->model('m_site_static_page_map');
        $this->pageData['details']=$this->m_site_static_page_map->get_details();
        $this->pageData['title']='Site Map';
        $this->pageData['suffix']='map';
        $this->load->view('admin_static_page_update_view',$this->pageData);
    }
    function get_site_static_page_terms(){
        $this->load->model('m_site_static_page_terms');
        $this->pageData['details']=$this->m_site_static_page_terms->get_details();
         $this->pageData['title']='Terms of Service';
        $this->pageData['suffix']='terms';
        $this->load->view('admin_static_page_update_view',$this->pageData);
    }
    function get_site_static_page_privacy(){
        $this->load->model('m_site_static_page_privacy');
        $this->pageData['details']=$this->m_site_static_page_privacy->get_details();
        $this->pageData['title']='Privacy Policy';
        $this->pageData['suffix']='privacy';
        $this->load->view('admin_static_page_update_view',$this->pageData);
    }
    function update_site_static_page_about_row(){
         $this->load->model('m_site_static_page_about');
         $details=trim($this->input->post('details'));
         $rowdata=array(
             'details'=>$details,
             'updated_by'=>$this->u_id,
             'modified_date'=>date('y-m-d H:i:s')
         );
         if($this->m_site_static_page_about->update_row($rowdata)){
             echo ";True;About Us Updated";
         }else{
              echo ";False;Internal Server Error;";
         }
    }
    function update_site_static_page_faq_row(){
         $this->load->model('m_site_static_page_faq');
        $details=trim($this->input->post('details'));
         $rowdata=array(
             'details'=>$details,
             'updated_by'=>$this->u_id,
             'modified_date'=>date('y-m-d H:i:s')
         );
         if($this->m_site_static_page_faq->update_row($rowdata)){
              echo ";True;FAQ Updated;";
         }else{
              echo ";False;Internal Server Error;";
         }
    }
    function update_site_static_page_contact_row(){
         $this->load->model('m_site_static_page_contact');
          $details=trim($this->input->post('details'));
         $rowdata=array(
             'details'=>$details,
             'updated_by'=>$this->u_id,
             'modified_date'=>date('y-m-d H:i:s')
         );
         if($this->m_site_static_page_contact->update_row($rowdata)){
              echo ";True;Contact Us updated;";
         }else{
              echo ";False;Internal Server Error;";
         }
    }
    function update_site_static_page_map_row(){
         $this->load->model('m_site_static_page_map');
         $details=trim($this->input->post('details'));
         $rowdata=array(
             'details'=>$details,
             'updated_by'=>$this->u_id,
             'modified_date'=>date('y-m-d H:i:s')
         );
         if($this->m_site_static_page_map->update_row($rowdata)){
              echo ";True;Site Map Updated;";
         }else{
              echo ";False;Internal Server Error;";
         }
    }
    function update_site_static_page_terms_row(){
         $this->load->model('m_site_static_page_terms');
         $details=trim($this->input->post('details'));
         $rowdata=array(
             'details'=>$details,
             'updated_by'=>$this->u_id,
             'modified_date'=>date('y-m-d H:i:s')
         );
         if($this->m_site_static_page_terms->update_row($rowdata)){
              echo ";True;Terms of Service Updated;";
         }else{
             echo ";False;Internal Server Error;";
         }
    }
    function update_site_static_page_privacy_row(){
         $this->load->model('m_site_static_page_privacy');
         $details=trim($this->input->post('details'));
         $rowdata=array(
             'details'=>$details,
             'updated_by'=>$this->u_id,
             'modified_date'=>date('y-m-d H:i:s')
         );
         if($this->m_site_static_page_privacy->update_row($rowdata)){
              echo ";True;Privacy Policy Updated;";
         }else{
             echo ";False;Internal Server Error;";
         }
    }
    
}

?>
