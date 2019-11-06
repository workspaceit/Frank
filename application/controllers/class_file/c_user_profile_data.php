<?php
class c_user_profile_data extends CI_Controller{
	private	$u_id;
	private	$current_location_1;
	private	$current_location_2;
	private	$home_town_1;
	private	$home_town_2;
	private	$organization_1;
	private	$organization_2;
	private	$high_school;
	private	$higher_education_1;
	private	$higher_education_2;
	private	$workplace_1;
	private	$workplace_2;
	private	$c_date;
	function __construct(){
		parent::__construct();
		include_once(APPPATH.'controllers/class_file/time_zone.php');
			$this->u_id=-1;
			$this->current_location_1='';
			$this->current_location_2='';
			$this->home_town_1='';
			$this->home_town_2='';
			$this->organization_1='';
			$this->organization_2='';
			$this->high_school='';
			$this->higher_education_1='';
			$this->higher_education_2='';
			$this->workplace_1='';
			$this->workplace_2='';
			$this->c_date=date('Y-m-d H:i:s');
	}
	function set_u_id($u_id){
		$this->u_id=$u_id;
	}
	function set_current_location_1($current_location_1){
		$this->current_location_1=$current_location_1;
	}
	function set_current_location_2($current_location_2){
		$this->current_location_2=$current_location_2;
	}
	function set_home_town_1($home_town_1){
		$this->home_town_1=$home_town_1;
	}
	function set_home_town_2($home_town_2){
		$this->home_town_2=$home_town_2;
	}
	function set_organization_1($organization_1){
		$this->organization_1=$organization_1;
	}
	function set_organization_2($organization_2){
		$this->organization_2=$organization_2;
	}
	function set_high_school($high_school){
		$this->high_school=$high_school;
	}
	function set_higher_education_1($higher_education_1){
		$this->higher_education_1=$higher_education_1;
	}
	function set_higher_education_2($higher_education_2){
		$this->higher_education_2=$higher_education_2;
	}
	function set_workplace_1($workplace_1){
		$this->workplace_1=$workplace_1;
	}
	function set_workplace_2($workplace_2){
		$this->workplace_2=$workplace_2;
	}
	function set_c_date($c_date){
		$this->c_date=$c_date;
	}
	function insertRow(){
		$this->load->model('m_user_profile_data');
		
		$insertionData=array(
			
			'u_id'=>$this->u_id,
			'current_location_1'=>$this->current_location_1,
			'current_location_2'=>$this->current_location_2,
			'home_town_1'=>$this->home_town_1,
			'home_town_2'=>$this->home_town_2,
			'organization_1'=>$this->organization_1,
			'organization_2'=>$this->organization_2,
			'high_school'=>$this->high_school,
			'higher_education_1'=>$this->higher_education_1,
			'higher_education_2'=>$this->higher_education_2,
			'workplace_1'=>$this->workplace_1,
			'workplace_2'=>$this->workplace_2,
			'c_date'=>$this->c_date
		
		);
		
		$this->m_user_profile_data->insertRow($insertionData);
	}
        function update_row_by_u_id($u_id){  //Allow NULL Value 
        
		$this->load->model('m_user_profile_data');
		$allupdate_data=array();
                
                $allupdate_data['current_location_1 ']=$this->current_location_1;
                $allupdate_data['current_location_2']=$this->current_location_2;
                $allupdate_data['home_town_1']=$this->home_town_1;
                $allupdate_data['home_town_2']=$this->home_town_2;
                $allupdate_data['organization_1']=$this->organization_1;
                $allupdate_data['organization_2']=$this->organization_2;
                $allupdate_data['high_school']=$this->high_school;
                $allupdate_data['higher_education_1']=$this->higher_education_1;
                $allupdate_data['higher_education_2']=$this->higher_education_2;
                $allupdate_data['workplace_1']=$this->workplace_1;
                $allupdate_data['workplace_2']=$this->workplace_2;
                
                return $this->m_user_profile_data->updateRow_BY_u_id($u_id,$allupdate_data);
               
        }
	function updateRow_BY_u_id($u_id) // NULL Value restricted
	{
		$this->load->model('m_user_profile_data');
		$allupdate_data=array();
                $i=0;
		if ($this->current_location_1!=''){
			$allupdate_data['current_location_1 ']=$this->current_location_1;
                        $i++;
		}
		if ($this->current_location_2!=''){
			$allupdate_data['current_location_2']=$this->current_location_2;
                        $i++;
		}
		if($this->home_town_1!=''){
                    $allupdate_data['home_town_1']=$this->home_town_1;
                    $i++;
                }
		if ($this->home_town_2!=''){
			$allupdate_data['home_town_2']=$this->home_town_2;
                        $i++;
		}
		if($this->organization_1!=''){
			$allupdate_data['organization_1']=$this->organization_1;
                        $i++;
		}
		if ($this->organization_2!=''){
			$allupdate_data['organization_2']=$this->organization_2;
                        $i++;
		}
		if($this->high_school!=''){
			$allupdate_data['high_school']=$this->high_school;
                        $i++;
		}
		if($this->higher_education_1!=''){
			$allupdate_data['higher_education_1']=$this->higher_education_1;
                        $i++;
		}
		if ($this->higher_education_2!=''){
			$allupdate_data['higher_education_2']=$this->higher_education_2;
                        $i++;
		}
		if($this->workplace_1!=''){
			$allupdate_data['workplace_1']=$this->workplace_1;
                        $i++;
		}
		if($this->workplace_2!=''){
			$allupdate_data['workplace_2']=$this->workplace_2;
                        $i++;
		}
		
		if($i>0){
                    return $this->m_user_profile_data->updateRow_BY_u_id($u_id,$allupdate_data);
                }else{
                    return true;
                }
            
		
//                $allupdate_data['current_location_1 ']=$this->current_location_1;
//                $allupdate_data['current_location_2']=$this->current_location_2;
//                $allupdate_data['home_town_1']=$this->home_town_1;		
//                $allupdate_data['home_town_2']=$this->home_town_2;       
//                $allupdate_data['organization_1']=$this->organization_1;
//                $allupdate_data['organization_2']=$this->organization_2;		
//                $allupdate_data['high_school']=$this->high_school;
//                $allupdate_data['higher_education_1']=$this->higher_education_1;
//                $allupdate_data['higher_education_2']=$this->higher_education_2;
//                $allupdate_data['workplace_1']=$this->workplace_1;
//                $allupdate_data['workplace_2']=$this->workplace_2;
//                
//                return $this->m_user_profile_data->updateRow_BY_u_id($u_id,$allupdate_data);
                
	}
}