<?php
class contact_us  extends CI_Controller
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
        $this->load->helper('url');
        $this->pageData=array();
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
        $this->load->model('m_site_static_page_contact');
        $this->pageData['footer_details']=$this->m_site_static_page_contact->get_details();
        
        $this->pageData['title']='Contact Us';
        $this->load->view('footer_content_view',$this->pageData);
    }
}
?>