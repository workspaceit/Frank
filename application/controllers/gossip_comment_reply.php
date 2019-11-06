<?php
	 class gossip_comment_reply extends CI_Controller{
                private $u_id;
                private $gender;
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
                    include_once(APPPATH.'controllers/load_common_properties_of_user_for_ajax_request_json.php');

                    $this->sign_in=FALSE;
                    $this->sign_up=FALSE;
                    $this->sign_out=TRUE;
                    $this->search=TRUE;
                    $this->home=FALSE;

                 }
		 function index(){
                         die();
			 include_once(APPPATH.'controllers/class_file/c_gossip_comment_reply.php');
			 $c_gossip_comment_reply_obj=new c_gossip_comment_reply();

			//$id=trim($this->input->post('id'));
			//$comments_id=trim($this->input->post('comments_id'));
			//$user_id=trim($this->input->post('user_id'));
			//$comments=trim($this->input->post('comments'));
			//$created_date=trim($this->input->post('created_date'));

			$id='';
			$comments_id='';
			$user_id='';
			$comments='';
			$created_date='';

			$c_gossip_comment_reply_obj->set_id($id);
			$c_gossip_comment_reply_obj->set_comments_id($comments_id);
			$c_gossip_comment_reply_obj->set_user_id($user_id);
			$c_gossip_comment_reply_obj->set_comments($comments);
			$c_gossip_comment_reply_obj->set_created_date($created_date);

			if($c_gossip_comment_reply_obj->insert_row_data()){
				echo ';True;';
			}else{
				echo ';False;';
			}
		 }
                 function get_user_inf_box_by_comment_id(){
                        $this->load->model('m_gossip_comment_reply');
                        $this->load->model('m_user_basic_info');
                        include_once(APPPATH.'controllers/class_file/encrypt_tbl_primary_key.php');
                        $encrypt_tbl_primary_key_obj=new encrypt_tbl_primary_key();
                        
                        
                        if(isset($_REQUEST['row']) && $_REQUEST['row']!=""){
                            $row=$_REQUEST['row'];
                        }else{
                            die();
                        }
                        $this->pageData['row']=$row;
                        
                        if(isset($_REQUEST['comment_id']) && $_REQUEST['comment_id']!=""){
                            $comment_id=$encrypt_tbl_primary_key_obj->get_plain_text($_REQUEST['comment_id']);
                        }else{
                            die();
                        }
                        $gossip_comments_array=$this->m_gossip_comment_reply->get_all_by_comment_id($comment_id);
                        $comment_user_inf=array();
                        $comment_text=array();
                        $comment_like=array();
                        $comment_user_id=array();
                        $comment_created_date=array();
                        $comment_created_time=array();
                        $comment_reply_id=array();
                        $comment_reply=array();
                        $i=0;
                        //Have Extract the value here and put it to array
                        //Because at view the design is column-wise not not row-wise, 
                        //therefore prepareing the data in array to print it in column
                        foreach($gossip_comments_array as $rowData){
                            $comment_user_inf[$i]=$this->m_user_basic_info->get_j_comment_user_inf_by_u_id($rowData->user_id);
                            $comment_text[$i]=$rowData->comments;
                            $comment_like[$i]=$rowData->avg_like;
                            $comment_user_id[$i]=$encrypt_tbl_primary_key_obj->get_encrypted_code($rowData->user_id);
                            $temp_date=new DateTime($rowData->created_date);
                            $comment_created_date[$i]=$temp_date->format("m/d/Y");
                            $comment_created_time[$i]=$temp_date->format("H:i A");
                            $comment_reply_id[$i]=$encrypt_tbl_primary_key_obj->get_encrypted_code($rowData->id);
                            if(intval($this->u_id)==intval($rowData->user_id)){
                                $comment_reply[$i]=false;
                            }else{
                                $comment_reply[$i]=true;
                            }
                            $i++;
                        }
                       
                        
                        $this->pageData['first_col_view']=true;
                        $this->pageData['second_col_view']=false;
                        $this->pageData['third_col_view']=false;
                        
                        //First Column Data
                        $this->pageData['row']=$row;
                        $this->pageData['comment_id']=$encrypt_tbl_primary_key_obj->get_encrypted_code($comment_id);
                        $this->pageData['comment_user_inf']=$comment_user_inf;
                        $this->pageData['comment_created_date']=$comment_created_date;
                        $this->pageData['comment_created_time']=$comment_created_time;
                        
                        $this->load->view("gossip_comment_reply_view",$this->pageData);
                 }
                 function get_comment_box_by_comment_id(){
                        $this->load->model('m_gossip_comment_reply');
                        $this->load->model('m_user_basic_info');
                        include_once(APPPATH.'controllers/class_file/encrypt_tbl_primary_key.php');
                        $encrypt_tbl_primary_key_obj=new encrypt_tbl_primary_key();
                        
                        
                        if(isset($_REQUEST['row']) && $_REQUEST['row']!=""){
                            $row=$_REQUEST['row'];
                        }else{
                            die();
                        }
                        $this->pageData['row']=$row;
                        
                        if(isset($_REQUEST['comment_id']) && $_REQUEST['comment_id']!=""){
                            $comment_id=$encrypt_tbl_primary_key_obj->get_plain_text($_REQUEST['comment_id']);
                        }else{
                            die();
                        }
                        $gossip_comments_array=$this->m_gossip_comment_reply->get_all_by_comment_id($comment_id);
                        $comment_user_inf=array();
                        $comment_text=array();
                        $comment_like=array();
                        $comment_user_id=array();
                        $comment_created_date=array();
                        $comment_created_time=array();
                        $comment_reply_id=array();
                        $comment_reply=array();
                        $i=0;
                        //Have Extract the value here and put it to array
                        //Because at view the design is column-wise not not row-wise, 
                        //therefore prepareing the data in array to print it in column
                        foreach($gossip_comments_array as $rowData){
                            $comment_user_inf[$i]=$this->m_user_basic_info->get_j_comment_user_inf_by_u_id($rowData->user_id);
                            $comment_text[$i]=$rowData->comments;
                            $comment_like[$i]=$rowData->avg_like;
                            $comment_user_id[$i]=$rowData->user_id;
                            $temp_date=new DateTime($rowData->created_date);
                            $comment_created_date[$i]=$temp_date->format("m/d/Y");
                            $comment_created_time[$i]=$temp_date->format("H:i A");
                            $comment_reply_id[$i]=$encrypt_tbl_primary_key_obj->get_encrypted_code($rowData->id);
                            if(intval($this->u_id)==intval($rowData->user_id)){
                                $comment_reply[$i]=false;
                            }else{
                                $comment_reply[$i]=true;
                            }
                            $i++;
                        }
                        
                        
                        $this->pageData['first_col_view']=false;
                        $this->pageData['second_col_view']=true;
                        $this->pageData['third_col_view']=false;
                        //Second Column Data
                        $this->pageData['row']=$row;
                        $this->pageData['encrypt_tbl_primary_key_obj']=$encrypt_tbl_primary_key_obj;
                        $this->pageData['comment_id']=$encrypt_tbl_primary_key_obj->get_encrypted_code($comment_id);
                        $this->pageData['comment_text']=$comment_text;
                        $this->pageData['comment_like']=$comment_like;
                        $this->pageData['comment_user_id']=$comment_user_id;
                        $this->pageData['comment_reply_id']=$comment_reply_id;
                        $this->pageData['comment_reply']=$comment_reply;

                        $this->load->view("gossip_comment_reply_view",$this->pageData);
                 }
                 function get_reply_button_by_comment_id(){
                        $this->load->model('m_gossip_comment_reply');
                        $this->load->model('m_user_basic_info');
                        include_once(APPPATH.'controllers/class_file/encrypt_tbl_primary_key.php');
                        $encrypt_tbl_primary_key_obj=new encrypt_tbl_primary_key();
                       
                        
                        if(isset($_REQUEST['row']) && $_REQUEST['row']!=""){
                            $row=$_REQUEST['row'];
                        }else{
                            die();
                        }
                        
                        if(isset($_REQUEST['comment_id']) && $_REQUEST['comment_id']!=""){
                            $comment_id=$encrypt_tbl_primary_key_obj->get_plain_text($_REQUEST['comment_id']);
                        }else{
                            die();
                        }
                        $gossip_comments_array=$this->m_gossip_comment_reply->get_all_by_comment_id($comment_id);
                        $comment_user_inf=array();
                        $comment_text=array();
                        $comment_like=array();
                        $comment_user_id=array();
                        $comment_created_date=array();
                        $comment_created_time=array();
                        $comment_reply_id=array();
                        $comment_reply=array();
                        $i=0;
                        //Have Extract the value here and put it to array
                        //Because at view the design is column-wise not not row-wise, 
                        //therefore prepareing the data in array to print it in column
                        foreach($gossip_comments_array as $rowData){
                            $comment_user_inf[$i]=$this->m_user_basic_info->get_j_comment_user_inf_by_u_id($rowData->user_id);
                            $comment_text[$i]=$rowData->comments;
                            $comment_like[$i]=$rowData->avg_like;
                            $comment_user_id[$i]=$encrypt_tbl_primary_key_obj->get_encrypted_code($rowData->user_id);
                            $temp_date=new DateTime($rowData->created_date);
                            $comment_created_date[$i]=$temp_date->format("m/d/Y");
                            $comment_created_time[$i]=$temp_date->format("H:i A");
                            $comment_reply_id[$i]=$encrypt_tbl_primary_key_obj->get_encrypted_code($rowData->id);
                            if(intval($this->u_id)==intval($rowData->user_id)){
                                $comment_reply[$i]=false;
                            }else{
                                $comment_reply[$i]=true;
                            }
                            $i++;
                        }
                        
                        $this->pageData['first_col_view']=false;
                        $this->pageData['second_col_view']=false;
                        $this->pageData['third_col_view']=true;
                       //Third Column Data
                        $this->pageData['row']=$row;
                        $this->pageData['comment_id']=$encrypt_tbl_primary_key_obj->get_encrypted_code($comment_id);
                        $this->pageData['comment_reply_id']=$comment_reply_id;
                        $this->pageData['comment_reply']=$comment_reply;

                        $this->load->view("gossip_comment_reply_view",$this->pageData);
                 }
	 }
?>