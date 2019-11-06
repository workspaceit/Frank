<?php
	 class dynamic_algo_equation extends CI_Controller{
		private $sign_out;
                private $pageData;
                private $site_url;
                private $u_id;
                function __construct(){
                    parent::__construct();
                    $this->load->helper('url');
                    $this->pageData=array();
                    include_once(APPPATH.'controllers/admin_common_site_setting.php');
                    include_once(APPPATH.'controllers/class_file/site_url.php');
                    include_once(APPPATH.'controllers/load_common_admin_inf.php');
                    
                    $this->pageData['sign_out']=&$this->sign_out;
                    $this->sign_out=TRUE;
                }
		 function index(){
			
			include_once(APPPATH.'controllers/class_file/c_dynamic_algo_equation.php');
			$c_dynamic_algo_equation_obj=new c_dynamic_algo_equation();

			$equation_str=trim($this->input->post('equation_str'));
			$exposed_str=trim($this->input->post('exposed_str'));
			$component=trim($this->input->post('component'));
			$creator_id=trim($this->input->post('creator_id'));
			$created_date=date('Y-m-d H:i:s');
			$last_update_date=date('Y-m-d H:i:s');

			

			$c_dynamic_algo_equation_obj->set_equation_str($equation_str);
			$c_dynamic_algo_equation_obj->set_exposed_str($exposed_str);
			$c_dynamic_algo_equation_obj->set_component($component);
			$c_dynamic_algo_equation_obj->set_creator_id($creator_id);
			$c_dynamic_algo_equation_obj->set_created_date($created_date);
			$c_dynamic_algo_equation_obj->set_last_update_date($last_update_date);

			if($c_dynamic_algo_equation_obj->insert_row_data()){
				echo ';True;';
			}else{
				echo ';False;';
			}
		 }
                 function submit_insert_data(){
                        include_once(APPPATH.'controllers/class_file/c_dynamic_algo_equation.php');
			$c_dynamic_algo_equation_obj=new c_dynamic_algo_equation();
                      
			$equation_str=$this->input->post('equation_str');
			$exposed_str=$this->input->post('exposed_str');
			$component=trim($this->input->post('e_id'));
			$creator_id=trim($this->u_id);
			$created_date=date('Y-m-d H:i:s');
			$last_update_date=date('Y-m-d H:i:s');

			
                        
			$c_dynamic_algo_equation_obj->set_equation_str($equation_str);
			$c_dynamic_algo_equation_obj->set_exposed_str($exposed_str);
			$c_dynamic_algo_equation_obj->set_component($component);
			$c_dynamic_algo_equation_obj->set_creator_id($creator_id);
			$c_dynamic_algo_equation_obj->set_created_date($created_date);
			$c_dynamic_algo_equation_obj->set_last_update_date($last_update_date);

			if($c_dynamic_algo_equation_obj->insert_row_data()){
                            $respond_array['status']="true";
                            $respond_array['msg']="success";
                            json_encode($respond_array);
                            echo json_encode($respond_array);
                            die();
			}else{ 
                            $respond_array['status']="false";
                            $respond_array['msg']="server error";
                            json_encode($respond_array);
                            echo json_encode($respond_array);
                            die();;
			}
                 }
                 function submit_update_data(){
                        include_once(APPPATH.'controllers/class_file/c_dynamic_algo_equation.php');
			$c_dynamic_algo_equation_obj=new c_dynamic_algo_equation();
                        
                        $id=trim($this->input->post('e_id'));
			$equation_str=$this->input->post('equation_str');
			$exposed_str=$this->input->post('exposed_str');
			$component=trim($this->input->post('component'));
			$creator_id=trim($this->u_id);
			$last_update_date=date('Y-m-d H:i:s');
			
                        $c_dynamic_algo_equation_obj->set_id($id);
			$c_dynamic_algo_equation_obj->set_equation_str($equation_str);
			$c_dynamic_algo_equation_obj->set_exposed_str($exposed_str);
			$c_dynamic_algo_equation_obj->set_creator_id($creator_id);
			$c_dynamic_algo_equation_obj->set_last_update_date($last_update_date);

			if($c_dynamic_algo_equation_obj->update_row_data()){
                            $respond_array['status']="true";
                            $respond_array['msg']="success";
                            json_encode($respond_array);
                            echo json_encode($respond_array);
                            die();
			}else{
                            $respond_array['status']="false";
                            $respond_array['msg']="server error";
                            json_encode($respond_array);
                            echo json_encode($respond_array);
                            die();
			}
                 }
	 }
?>