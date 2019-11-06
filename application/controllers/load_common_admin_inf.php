<?php

        if($this->session->userdata('admin_inf')){
           $session_data=$this->session->userdata('admin_inf');
           $this->u_id=$session_data['u_id'];
        }else{
           $respond_array['status']="faild";
            $respond_array['msg']="Please Login";
            json_encode($respond_array);
            echo json_encode($respond_array);
            die();
        }
?>
