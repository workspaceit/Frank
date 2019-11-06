<?php
class site_static_page_contact extends CI_Controller{
        private $details;
	private $updated_by;
	private $modified_date;
    function __construct() {
        parent::__construct();
                $this->details='';
		$this->updated_by=0;
		$this->modified_date=date('Y-m-d H:i:s');
		
    }
    function index()
    {
        
        include_once(APPPATH.'controllers/class_file/c_site_static_page_contact.php');
        $c_site_static_page_contact_obj=new c_site_static_page_contact();
        $c_site_static_page_contact_obj->set_details($this->details);
        $c_site_static_page_contact_obj->set_updated_by($this->updated_by);
        $c_site_static_page_contact_obj->set_modified_date($this->modified_date);
        $c_site_static_page_contact_obj->insert_Data();
    }
}
?>