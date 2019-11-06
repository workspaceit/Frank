<?php
class c_site_static_page_contact extends CI_Controller{
	private $details;
	private $updated_by;
	private $modified_date;
	private $pageData;
	function __construct(){
		parent::__construct();
		$this->details='';
		$this->updated_by=0;
		$this->modified_date=date('Y-m-d H:i:s');
		$this->pageData=array();
	}
        function set_details($details)
        {
            $this->details=$details;
        }
        function set_updated_by($updated_by)
        {
            $this->updated_by=$updated_by;
        }
        function set_modified_date($modified_date)
        {
            $this->modified_date=$modified_date;
        }
	function insert_Data(){
            $this->load->model('m_site_static_page_contact');
		$this->pageData=array(
		'details'=>$this->details,
		'updated_by'=>$this->updated_by,
		'modified_date'=>$this->modified_date
		);
                $this->m_site_static_page_contact->insert_Data($this->pageData);
	}
}