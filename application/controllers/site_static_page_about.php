<?php
class site_static_page_about extends CI_Controller{
        private $details;
	private $updated_by;
	private $modified_date;
    function __construct() {
        parent::__construct();
        $this->details='ggfgfgg';
        $this->updated_by=45;
        
        $this->modified_date=date('Y-m-d H:i:s');
    }
    function index(){
       include_once(APPPATH.'controllers/class_file/c_site_static_page_about.php');
       $c_site_static_page_about_odj=new c_site_static_page_about();
       $c_site_static_page_about_odj->set_details($this->details);
       $c_site_static_page_about_odj->set_updated_by($this->updated_by);
       $c_site_static_page_about_odj->set_modified_date($this->modified_date);
       $c_site_static_page_about_odj->insert_Data();
    }
}
?>