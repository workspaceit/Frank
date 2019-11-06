<?php
            $after_login_url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
            if($this->session->userdata('user_login_session')==null){
	    	redirect(base_url().'welcome/index?url='.urlencode($after_login_url));
	    }
	    $session_data=$this->session->userdata('user_login_session');
	    $this->u_id=$session_data['id'];
            $this->gender=$session_data['gender'];
            $this->pageData['user_id']=$this->u_id;
            $this->load->model('m_user_login');
            $this->load->model('m_user_group');
            $status=$this->m_user_login->get_account_status_u_id($this->u_id);
            $respond_array=array();
            
            if($status=="inactive"){
                 $respond_array['status']="faild";
                 $respond_array['msg']="Please Login";
                 json_encode($respond_array);
                 echo json_encode($respond_array);
                 die();
            }elseif($status=="suspended"){
                $respond_array['status']="faild";
                $respond_array['msg']="Please Login";
                echo json_encode($respond_array);
                 die();
             } 
            $this->pageData['myGroupList'] = $this->m_user_group->get_grouplist_by_user_id($this->u_id);
             
?>