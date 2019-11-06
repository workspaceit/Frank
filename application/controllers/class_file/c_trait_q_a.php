<?php
class c_trait_q_a extends CI_Controller
{
	private $id;
	private $catagory;
	private $sub_catagory;
	private $ques;
	private $ans;
	private $point;
	private $created_by;
	private $created_date;
  function __construct(){
  	
  	parent::__construct();
	
  		$this->id='0';
		$this->catagory='';
		$this->sub_catagory=''; 	 	 
		$this->ques='';
		$this->ans='';
		$this->point='0';
	 	$this->created_by='';
	 	$this->date=date('Y-m-d');
	 	
	 	$this->load->model('m_trait_q_a');
	}
	
   
	function set_trait_categories_id($id)
        {
            $this->id=$id;
        }
	function set_ques($ques)
	{
		 $this->ques=$ques;
	}
	function set_ans($ans)
	{
	     $this->ans=$ans;
	}
	function set_point($point)
	{
	     $this->point=$point;
	}
	function set_created_by($created_by)
	{
		 $this->created_by=$created_by;
	}
	function set_created_date($created_date)
	{
		 $this->created_date=$created_date;
	}
	function insertRow()
	{
	$this->load->model('m_trait_q_a');
	$insertData=array(
		'trait_categories_id'=>$this->id,
		'ques'=>$this->ques,
		'ans'=>$this->ans,
		'point'=>$this->point,
	 	'created_by'=>$this->created_by,
	 	'created_date'=>date('y-m-d')
		);
		return $this->m_trait_q_a->insertRow($insertData);
	}
}