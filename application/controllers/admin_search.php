<?php
    class admin_search extends CI_Controller{
        private $pageData;
        private $site_url;
        private $u_id;
        function __construct(){
                parent::__construct();
                $this->load->helper('url');
                $this->pageData=array();
                include_once(APPPATH.'controllers/common_site_setting.php');
                include_once(APPPATH.'controllers/class_file/site_url.php');
                if($this->session->userdata('admin_inf')){
                   $session_data=$this->session->userdata('admin_inf');
                   $this->u_id=$session_data['u_id'];
                }else{
                   echo ";False;;Please Login;";
                }
            }
        function get_user_row(){
            $this->load->model("m_user_login");
            $this->load->model("m_user_login_history");
            
            $this->pageData['start_row']=1;
            $term=trim($this->input->get_post('term'));
            $this->pageData['user_inf']=$this->m_user_login->j_search_get_user_inf_for_admin($term);
            
            foreach($this->pageData['user_inf'] as $rowData){
                $this->pageData['login_count'][$rowData->user_id]=$this->m_user_login_history->get_login_count($rowData->user_id);
            }
            
            $this->load->view('admin_member_search_view',$this->pageData);
       }
    }
?>
