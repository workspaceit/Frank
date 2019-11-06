<?php
class faq extends CI_Controller
{
    private $pageData;
    private $site_url;
      
    private $sign_in;
    private $sign_up;
    private $sign_out;
    private $search;
    private $home;
    
    function __construct() {
        parent::__construct();
        $this->pageData=array();
        $this->load->helper('url');
        
        include_once(APPPATH.'controllers/common_site_setting.php');
        include_once(APPPATH.'controllers/class_file/initailize_header_operation.php');
        include_once(APPPATH.'controllers/class_file/site_url.php');
        
         $this->sign_in=FALSE;
         $this->sign_up=FALSE;
         $this->sign_out=FALSE;
         $this->search=FALSE;
         $this->home=FALSE;
    }
    function index()
    {
        $this->load->model('m_site_static_page_faq');
        $this->pageData['footer_details']=$this->m_site_static_page_faq->get_details();
        $this->pageData['title']='FAQ';
        $this->load->view('footer_content_view',$this->pageData);
    }
}
?>