<?php

/**
 * Description of search
 *
 * @property CI_DB_active_reocrd $db
 *
 * @property m_user_login $m_user_login
 * @property m_gossip_main $m_gossip_main
 * @property m_trait_categories $m_trait_categories
 * @property m_trait_users $m_trait_users
 * @property m_user_basic_info $m_user_basic_info
 * @property m_user_profile_data $m_user_profile_data
 * @property m_user_trait_final_values $m_user_trait_final_values
 * @property m_search $m_search
 * @property m_user_group $m_user_group
 * @property m_group_members $m_group_members
 *
 */

class group_members extends CI_Controller{

	private $u_id;
	private $pageData;
	private $site_url;
	 
	private $sign_in;
	private $sign_up;
	private $sign_out;
	private $search;
	private $home;
	 
	function __construct(){

		parent::__construct();
		
		$this->load->helper('url');
		$this->pageData=array();
			
		include_once(APPPATH.'controllers/common_site_setting.php');
		include_once(APPPATH.'controllers/class_file/site_url.php');
		include_once(APPPATH.'controllers/class_file/initailize_header_operation.php');
		include_once(APPPATH.'controllers/load_common_properties_of_user.php');
		include_once(APPPATH.'controllers/class_file/encrypt_tbl_primary_key.php');
			
		$this->sign_in=FALSE;
		$this->sign_up=FALSE;
		$this->sign_out=TRUE;
		$this->search=FALSE;
		$this->home=FALSE;

	}
	
	function index(){
			
		include_once(APPPATH.'controllers/class_file/c_group_members.php');
		$c_group_members_obj=new c_group_members();

		//$id=trim($this->input->post('id'));
		//$user_group_id=trim($this->input->post('user_group_id'));
		//$members_id=trim($this->input->post('members_id'));
		//$create_date=trim($this->input->post('create_date'));

		$id='';
		$user_group_id='';
		$members_id='';
		$create_date='';

		$c_group_members_obj->set_id($id);
		$c_group_members_obj->set_user_group_id($user_group_id);
		$c_group_members_obj->set_members_id($members_id);
		$c_group_members_obj->set_create_date($create_date);

		if($c_group_members_obj->insert_row_data()){
			echo ';True;';
		}else{
			echo ';False;';
		}
	}
	
	public function remove_group_member(){
		$this->load->model('m_group_members');
		
		$encryptObj = new encrypt_tbl_primary_key();		
		
		$group_id = $encryptObj->get_plain_text($this->input->post('group_id'));
		$member_id = $encryptObj->get_plain_text($this->input->post('member_id'));
		
		$this->m_group_members->remove_group_member($group_id, $member_id);
		
		echo 1;
	}
}