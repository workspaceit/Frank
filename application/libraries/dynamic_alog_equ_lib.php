<?php

    class dynamic_alog_equ_lib {
        private $u_id;
        private $constant;
        private $operator;
        private $dynamic_val;
        private $equation_str;
        private $equation_queue;
        function __construct() {
            $this->u_id=2;
            $this->constant=array();
            $this->operator=array();
            $this->dynamic_val=array();
            $this->equation_queue=array();
        }
        function say_hi(){
            echo "hi";
        }
        function get_constant(){
            return $this->constant;
        }
        function get_operator(){
            return $this->operator;
        }
        function get_dynamic_val(){
            return $this->dynamic_val;
        }
        function get_equation_queue(){
            return $this->equation_queue;
        }
       
        function get_component_value($component){
            $CI=& get_instance();
            $CI->load->model('m_dynamic_equation_error_log');
            if($this->process_equation_by_component($component)){
                if($this->sync_array()){
                    $this->filter_array();
                    $result=0;
                    try{
                        if(strpos($this->equation_str,"/0")==NULL){
                            eval('$result = round('.$this->equation_str.',3); ');
                        }else{
                            $msg="Divide By Zero Found In Equation";
                            $exist=$CI->m_dynamic_equation_error_log->is_function_exist($component,$msg);
                            if(!$exist){
                                $insert_array_data=array(
					 'equation_str' => $this->equation_str,
					 'component' => $component,
					 'msg' => $msg,
					 'status' => 0
					 );
                                $CI->m_dynamic_equation_error_log->insert_row_data($insert_array_data);
                            }
                            $result=0;
                        }
                        
                    }catch(Exception $e){
                        return 0;
                    }
                    return $result;
                }
            }
            return 0;
        }
        private function process_equation_by_component($component){
            $CI=& get_instance();
            $CI->load->model('m_dynamic_algo_equation');
            $data=$CI->m_dynamic_algo_equation->get_all_by_component($component);
            $equation_str="";
            $r=false;
            foreach ($data as $rowData){
                $equation_str=$rowData->equation_str;
            }
            if($equation_str!=""){
                $r=$this->process_arrays($equation_str);
            }
            return $r;
            
        }
        private function process_arrays($equ_str){
            $equ_array=  explode('~', $equ_str);  
            for($e=0;$e<sizeof($equ_array)-1;$e++){
               if($equ_array[$e]==""){
                   return false;
               }
               if(
                  $equ_array[$e]=="x" ||
                  $equ_array[$e]=="/" ||
                  $equ_array[$e]=="+" ||
                  $equ_array[$e]=="-" ||
                  $equ_array[$e]==")" ||
                  $equ_array[$e]=="("
                ){
                    array_push($this->equation_queue,"operator");
                    array_push($this->operator,$equ_array[$e]);
               }else{
                   if(strpos($equ_array[$e],",")!==false){
                       $temp_dynamic_val_ar=explode(',',$equ_array[$e]);
                       $id="";
                       $m_id="";
                       if(strpos($temp_dynamic_val_ar[0],"id")!==false){
                           $id_array=explode('id',$temp_dynamic_val_ar[0]);
                           $id=$id_array[1];
                       }
                       if(strpos($temp_dynamic_val_ar[1],"m")!==false){
                           $m_id_array=explode('m',$temp_dynamic_val_ar[1]);
                           $m_id=$m_id_array[1];
                       }
                       $temp_dynamic_val=$this->get_dynamic_val_by_id($id,$m_id);
                       array_push($this->equation_queue,"dynamic_val");
                       array_push($this->dynamic_val,$temp_dynamic_val);
                   }else{
                       if(is_numeric($equ_array[$e])){
                           array_push($this->equation_queue,"constant");
                           array_push($this->constant,$equ_array[$e]);
                       }else{
                           $id="";
                           $m_id=1;
                           if(strpos($equ_array[$e],"id")!==false){
                               $id_array=explode('id',$equ_array[$e]);
                               $id=$id_array[1];
                           }else{
                               
                           }
                           $temp_dynamic_val=$this->get_dynamic_val_by_id($id,$m_id);
                           array_push($this->equation_queue,"dynamic_val");
                           array_push($this->dynamic_val,$temp_dynamic_val);
                       }
                   }
               }
            }
            return true;
        }
        private function sync_array(){
            for($e=0;$e<sizeof($this->equation_queue);$e++){
                $equ_val=$this->equation_queue[$e];
                switch ($equ_val){
                    case "dynamic_val":
                        $this->equation_str.=array_shift($this->dynamic_val);
                        break;
                    case "operator":
                        $this->equation_str.=array_shift($this->operator);
                        break;
                    case "constant":
                        $this->equation_str.=array_shift($this->constant);
                        break;
                }
            }
            if($this->equation_str!="")
                 return true;
            return false;
        }
        function filter_array(){
            $temp_equation_str=$this->equation_str;
            $this->equation_str=  str_replace("x","*", $temp_equation_str);
        }
        private function get_dynamic_val_by_id($id,$m_id){
           $CI=& get_instance();
           $CI->load->model('m_dynamic_algo_value');
           $data=$CI->m_dynamic_algo_value->get_j_dynamic_sql($id,$m_id);
           $temp_select_str="";
           $temp_from_str="";
           $temp_where_str="";
           $temp_limit_str="";
           
           $col_name="";
           $tbl_name="";
           
           $select_str="";
           $from_str="";
           $where_str="";
           $limit_str="";
           
           foreach ($data as $rowData){
                $col_name=$rowData->col_name_str;
                $tbl_name=$rowData->tbl_name_str;
                 
                $temp_select_str=$rowData->select_str;
                $temp_from_str=$rowData->from_str;
                $temp_where_str=$rowData->where_str;
                $temp_limit_str=$rowData->limit_str;
           }
           if(strpos($temp_select_str,"[_VN_]")!==false){
                $select_str=str_replace("[_VN_]",$col_name, $temp_select_str);
           }
           if(strpos($temp_from_str,"[_tbl_]")!==false){
                $from_str=str_replace("[_tbl_]",$tbl_name, $temp_from_str);
           }
           if(strpos($temp_where_str,"[_user_id_]")!==false){
                $where_str=str_replace("[_user_id_]",$this->u_id, $temp_where_str);
           }
           if(strpos($temp_limit_str,"[_L_]")!==false){
                $limit_str=str_replace("[_L_]",1, $temp_limit_str);
           }
          
           $sql = "$select_str $from_str $where_str $limit_str ";
           $result_val=$CI->m_dynamic_algo_value->execute_query($sql);
           return $result_val;
        }
        
    }
?>