<?php
	 class gossip_insiders extends CI_Controller{
		
                private $u_id;
                private $pageData;
                private $site_url;
                
                function __construct(){
                    parent::__construct();
                    $this->load->helper('url');
                    include_once(APPPATH.'controllers/common_site_setting.php');
                    include_once(APPPATH.'controllers/class_file/site_url.php');
                    include_once(APPPATH.'controllers/load_common_properties_of_user.php');
                    $this->pageData=array();
                 }
		 function index(){
			
			 include_once(APPPATH.'controllers/class_file/c_gossip_insiders.php');
			 $c_gossip_insiders_obj=new c_gossip_insiders();

			//$id=trim($this->input->post('id'));
			//$gossip_id=trim($this->input->post('gossip_id'));
			//$values=trim($this->input->post('values'));
			//$point=trim($this->input->post('point'));
			//$created_by=trim($this->input->post('created_by'));
			//$created_date=trim($this->input->post('created_date'));

			$id='';
			$gossip_id='';
			$values='';
			$point='';
			$created_by='';

			$c_gossip_insiders_obj->set_values($values);
			$c_gossip_insiders_obj->set_point($point);
			$c_gossip_insiders_obj->set_created_by($created_by);

			if($c_gossip_insiders_obj->insert_row_data()){
				echo ';True;';
			}else{
				echo ';False;';
			}
		 }
	 }
?>