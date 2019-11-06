<?php
class user_basic_info extends CI_Controller{
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
		include_once(APPPATH.'controllers/class_file/c_user_basic_info.php');
		
		$user_basic_info_obj=new c_user_basic_info();
		
		$u_id=trim($this->input->post(''));
		$f_name=trim($this->input->post(''));
		$l_name=trim($this->input->post(''));
		$gender=trim($this->input->post(''));
		$pic_path=trim($this->input->post(''));
		
		$user_basic_info_obj->set_u_id($u_id);
		$user_basic_info_obj->set_f_name($f_name);
		$user_basic_info_obj->set_l_name($l_name);
		$user_basic_info_obj->set_gender($gender);
		$user_basic_info_obj->set_pic_path($pic_path);
		
		$user_basic_info_obj->insertRow();
		
		
	}
	function get_gender_update_view_by_u_id(){
		$this->load->model('m_user_basic_info');
		$this->load->model('m_developer_gender');
		$this->pageData['gender']=$this->m_user_basic_info->get_gender_by_u_id($this->u_id);
		$this->pageData['user_all_gender']=$this->m_developer_gender->get_all();
		$this->load->view('update_gender_view',$this->pageData);
	}
	function get_birthday_update_view_by_u_id(){
		$this->load->model('m_user_basic_info');
		$this->load->model('m_developer_day');
		$this->load->model('m_developer_month');
		$this->load->model('m_developer_year');
		
		
		$this->pageData['date_name_all']=$this->m_developer_day->get_day_all();
		$this->pageData['month_data_all']=$this->m_developer_month->get_all_name();
		$this->pageData['year_name_all']=$this->m_developer_year->get_all_year();
		
		$temp_birth_day=$this->m_user_basic_info->get_birthday_update_view_by_u_id($this->u_id);
	
		if($temp_birth_day!=""){
			$temp_birth_day_array=explode("-",$temp_birth_day);
			$this->pageData['day']=$temp_birth_day_array[2];
			$this->pageData['month']=$temp_birth_day_array[1];
			$this->pageData['year']=$temp_birth_day_array[0];
			
		}else{
			$this->pageData['day']="";
			$this->pageData['month']="";
			$this->pageData['year']="";
		}
		
		$this->load->view('update_birth_day_view',$this->pageData);
	}
        function update_any_col_get() {
             $this->load->model('m_user_basic_info');
             $updateArray=array();
             if($this->input->get('f_name')){
                $updateArray['f_name']=$this->input->get('f_name'); 
             }if($this->input->get('l_name')){
                $updateArray['l_name']=$this->input->get('l_name'); 
             }if($this->input->get('gender')){
                $updateArray['gender']=$this->input->get('gender'); 
             }if($this->input->get('birthday')){
                $updateArray['birthday']=$this->input->get('birthday'); 
             }
             if($this->m_user_basic_info->updateRow_BY_u_id($this->u_id,$updateArray)){
                 echo ";True;";
             }else{
                 echo ";False;";
             }
          
				
        }
       
	
}