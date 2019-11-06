<?php
class user_about_me extends CI_Controller{
	private $u_id;
        private $gender;
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
//		include_once(APPPATH.'controllers/class_file/c_user_about_me.php');
//		
//		$user_about_me_obj=new c_user_about_me();
//		$user_about_me_obj->set_u_id(1);
//		$user_about_me_obj->set_about_me('about_me');
//		
//		$user_about_me_obj->insertRow();
	}
        function get_user_about_me_update_view(){
            $this->load->model('m_user_about_me');
            $this->pageData['user_about_me']=$this->m_user_about_me->get_all_by_u_id($this->u_id);
            $this->load->view('update_user_about_me_view',$this->pageData);
        }
        function submit_update_about_me_data(){
            $this->load->model('m_user_about_me');
            $about_me_text=trim($this->input->post('about_me_text'));
            $update_data=array(
                'about_me'=>$about_me_text
            );
            if($this->m_user_about_me->updateRow_BY_u_id($this->u_id,$update_data)){
                echo ";True;";
            }else{
                echo ";False;";
            }
        }
}