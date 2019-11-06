<?php
class c_user_basic_info{
	
	private $u_id;
	private	$f_name;
	private $l_name;
	private $gender;
	private $birthday;
	private $pic_path;
	private $c_date;
    private $CI;

	function __construct(){

		
		include_once(APPPATH.'controllers/class_file/time_zone.php');
        $this->CI = &get_instance();
		$this->u_id=-1;
		$this->f_name='';
		$this->l_name='';
		$this->gender='';
		$this->birthday='';
		$this->pic_path='';
		$this->c_date=date('Y-m-d H:i:s');
		
	}
	
	function set_u_id($u_id){
		$this->u_id=$u_id;
	}
	function set_f_name($f_name){
		$this->f_name=$f_name;
	}
	function set_l_name($l_name){
		$this->l_name=$l_name;
	}
	function set_gender($gender){
		$this->gender=$gender;
	}
	function set_birthday($birthday){
		$this->birthday=$birthday;
	}
	function set_pic_path($pic_path){
		$this->pic_path=$pic_path;
	}
	function set_c_date($c_date){
		$this->c_date=$c_date;
	}
	function insertRow(){
		$this->CI->load->model('m_user_basic_info');
		
		$insertionData=array(
				'u_id'=>$this->u_id,
				'f_name'=>$this->f_name,
				'l_name'=>$this->l_name,
				'gender'=>$this->gender,
				'birthday'=>$this->birthday,
				'pic_path'=>$this->pic_path,
				'c_date'=>$this->c_date,
		);
	
		$this->CI->m_user_basic_info->insertRow($insertionData);
	}
	function updateRow_BY_id($u_id){
            $this->CI->load->model('m_user_basic_info');
	    $allupdate_data=array();
	    if ($this->f_name!=''){
	    	$allupdate_data['f_name']=$this->f_name;
	    }
	    if ($this->l_name!=''){
	    	$allupdate_data['l_name']=$this->l_name;
	    }
	    if ($this->gender!=''){
	    	$allupdate_data['gender']=$this->gender;
               
	    }
	    if($this->birthday!=''){
	    	$allupdate_data['birthday']=$this->birthday;
	    }
	    if($this->pic_path!=''){
	    	$allupdate_data['pic_path']=$this->pic_path;
	    }
	   
            return $this->CI->m_user_basic_info->updateRow_BY_id($u_id,$allupdate_data);
	}
         
	
}