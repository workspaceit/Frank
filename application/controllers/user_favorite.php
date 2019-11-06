<?php
	 class user_favorite extends CI_Controller{
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
			 include_once(APPPATH.'controllers/class_file/c_user_favorite.php');
			 $c_user_favorite_obj=new c_user_favorite();

			//$id=trim($this->input->post('id'));
			//$user_id=trim($this->input->post('user_id'));
			//$favorited_id=trim($this->input->post('favorited_id'));
			//$created_date=trim($this->input->post('created_date'));

			$id='';
			$user_id='';
			$favorited_id='';
			$created_date='';

			$c_user_favorite_obj->set_id($id);
			$c_user_favorite_obj->set_user_id($user_id);
			$c_user_favorite_obj->set_favorited_id($favorited_id);
			$c_user_favorite_obj->set_created_date($created_date);

			if($c_user_favorite_obj->insert_row_data()){
				echo ';True;';
			}else{
				echo ';False;';
			}
		 }
                 function submit_insert_data(){
                        $this->load->model('m_user_favorite');
                        include_once(APPPATH.'controllers/class_file/c_user_favorite.php');
			$c_user_favorite_obj=new c_user_favorite();
                        
                        $favorited_id=$this->m_user_login->get_id_by_email(trim($this->input->post('email')));
			
                        
                        if($this->m_user_favorite->is_exist($this->u_id,$favorited_id)){
                            $respond_array['status']="true";
                            $respond_array['element_id']="";
                            $respond_array['msg']="Already In Your Favourite List";
                            echo json_encode($respond_array);
                            die();
                        }
                        
                        $c_user_favorite_obj->set_user_id($this->u_id);
			$c_user_favorite_obj->set_favorited_id($favorited_id);

			if($c_user_favorite_obj->insert_row_data()){
                                $respond_array['status']="true";
                                $respond_array['element_id']="";
                                $respond_array['msg']="Successfully Added In Your Favourite List";
                                echo json_encode($respond_array);
			}else{
				$respond_array['status']="false";
                                $respond_array['element_id']="";
                                $respond_array['msg']="Please clean your browser cache and refresh your page";
                                echo json_encode($respond_array);
			}
                 }
	 }
?>