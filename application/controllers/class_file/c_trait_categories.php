<?php
class c_trait_categories
{
    private $id;
	private $category;
	private $sub_category;
	private $upper_pic_path;
	private $lower_pic_path;
    private $user_type;
    private $color_class;
	private $created_by;
	private $date;
    private $CI;

        function __construct(){

            $this->CI = &get_instance();
            $this->catagory='';
            $this->sub_catagory=''; 	 	 
            $this->upper_pic_path='';
            $this->lower_pic_path='';
            $this->user_type=0;
            $this->created_by='';
            $this->date=date('Y-m-d');
            $this->CI->load->model('m_trait_categories');
        }
	
   	function set_id($id)
	{
	     $this->id=$id;
	}
	function set_category($category)
	{
	 $this->category=$category;
	}
	function set_sub_category($sub_category)
	{
		 $this->sub_category=$sub_category;
	}
	function set_upper_pic_path($upper_pic_path)
	{
		 $this->upper_pic_path=$upper_pic_path;
	}
	function set_lower_pic_path($lower_pic_path)
	{
	     $this->lower_pic_path=$lower_pic_path;
	}
	function set_created_by($created_by)
	{
	     $this->created_by=$created_by;
	}
	function set_user_type($user_type)
	{
		 $this->user_type=$user_type;
	}
        function set_color_class($color_class)
	{
		 $this->color_class=$color_class;
	}
        function set_date($date)
	{
		 $this->date=$date;
	}
	function insertRow()
	{
	
                $insertData=array(
                    'category'=>$this->category,
                    'sub_category'=>$this->sub_category,	 	 
                    'upper_pic_path'=>$this->upper_pic_path,
                    'lower_pic_path'=>$this->lower_pic_path,
                    'user_type'=>$this->user_type,
                    'created_by'=>$this->created_by
		);
		return $this->CI->m_trait_categories->insertRow($insertData);
	}
        
        function update_category($category,$category_update_value)
        {
            
            $updatedata=array(
                'category'=>$category_update_value,
                'created_by'=>$this->created_by,
                'created_date'=>date('y-m-d')
		    );
            return $this->CI->m_trait_categories->updateRow($updatedata,$category);
        }
        function update_color_class()
        {
            
            $updatedata=array(
		'color_class'=>$this->color_class,
	 	'created_date'=>date('y-m-d')
		);
            return  $this->CI->m_trait_categories->updateRow_by_id($updatedata,$this->id);
        }
        function update_sub_category($id,$sub_category)
        {
            
            
            $updatedata=array(
                'sub_category'=>$sub_category,
                'created_by'=>$this->created_by,
                'created_date'=>date('y-m-d')
                );
            return  $this->CI->m_trait_categories->updateRow_subcategory($updatedata,$id);
        }
        function  getId_by_category_AND_subcategory()
        {
            return  $this->CI->m_trait_categories->get_id_by_category_sub_category($this->category,$this->sub_category);
        }
        function sub_category_is_exits()
        {
            return  $this->CI->m_trait_categories->is_sub_category_exits($this->category,$this->sub_category);
        }
        function is_sub_category_exits_other($id,$category,$sub_category)
        {
             return  $this->CI->m_trait_categories->is_sub_category_exits_other($id,$category,$sub_category);
        }
        //From c_trait_users
        function get_all_trait_box_in_order_by_user_id($user_id,$privacy=false){
            $this->CI->load->model('m_trait_categories');
            $trait_box=array();
            $temp_array=array();
            $i=0;
            $j=0;
            $temp_category="";
            foreach($this->CI->m_trait_categories->get_all_by_user_id($user_id) as $rowData){

               if( $temp_category==""){

                   $temp_category=$rowData->category;

               }

               if($temp_category == $rowData->category){
                   $temp_array[$i][0]=$rowData->id;
                   $temp_array[$i][1]=$rowData->trait_categories_id;
                   $temp_array[$i][2]=$rowData->category;
                   $temp_array[$i][3]=$rowData->sub_category_value;
                   $temp_array[$i][4]=$rowData->sub_category_hidden;
                   $temp_array[$i][5]=$rowData->sub_category_avg_point;
                   
                   if(intval($rowData->sub_category_avg_point)<0){
                        $temp_array[$i][6]="i_bar_red";
                   }else{
                        $temp_array[$i][6]=$rowData->color_class;
                   }
                   $temp_array[$i][7]=$privacy;
                   $i++;
               }else{
                   $i=0;
                   $trait_box[$j++]=$temp_array;
                   
                   $temp_array=null;
                   
                   $temp_category=$rowData->category;
                   
                   $temp_array[$i][0]=$rowData->id;
                   $temp_array[$i][1]=$rowData->trait_categories_id;
                   $temp_array[$i][2]=$rowData->category;
                   $temp_array[$i][3]=$rowData->sub_category_value;
                   $temp_array[$i][4]=$rowData->sub_category_hidden;
                   $temp_array[$i][5]=$rowData->sub_category_avg_point;
                   if(intval($rowData->sub_category_avg_point)<0){
                        $temp_array[$i][6]="i_bar_red";
                   }else{
                        $temp_array[$i][6]=$rowData->color_class;
                   }

                   $temp_array[$i][7]=$privacy;

                   $i++;

               }
            }
            if($temp_array!=null){
                   $trait_box[$j++]=$temp_array;
                 
            }
            return $trait_box;
     }
        function get_all_trait_box_in_order(){
             $this->CI->load->model('m_trait_categories');
             $trait_box=array();
             $temp_array=array();
             $i=0;
             $j=0;
             $temp_category="";
             foreach($this->CI->m_trait_categories->get_traits_all() as $rowData){
                if( $temp_category==""){
                    $temp_category=$rowData->category;
                }
                if($temp_category==$rowData->category){
                    $temp_array[$i][0]=$rowData->id;
                    $temp_array[$i][1]=$rowData->category;
                    $temp_array[$i][2]=$rowData->sub_category;
                    $i++;
                }else{
                    $i=0;
                    $trait_box[$j++]=$temp_array;
                    
                    $temp_array=null;
                  
                    $temp_category=$rowData->category;
                    $temp_array[$i][0]=$rowData->id;
                    $temp_array[$i][1]=$rowData->category;
                    $temp_array[$i][2]=$rowData->sub_category;
                    $i++;
                }
             }
             if($temp_array!=null){
                    $trait_box[$j++]=$temp_array;
             }
             
             return $trait_box;
        }
        function get_sub_category_by_id($id){
            $this->CI->load->model('m_trait_categories');
             return  $this->CI->m_trait_categories->get_sub_category_by_id($id);
        }
        function update_trait_picture_by_categories_id(){
            $this->CI->load->model('m_trait_categories');
          
            if($this->lower_pic_path!="")
                 $updateData['lower_pic_path']=$this->lower_pic_path;
            if($this->upper_pic_path!="")
                $updateData['upper_pic_path']=$this->upper_pic_path;
            if($this->id!=""){
                if($this->lower_pic_path!=""){
                    $prev_path=$this->m_trait_categories->get_lower_picture_by_id($this->id);
               }
               if($this->upper_pic_path!=""){
                     $prev_path=$this->m_trait_categories->get_upper_picture_by_id($this->id);
               }
               if($this->m_trait_categories->update_picture_by_category($updateData,$this->id)){
                    if($prev_path!=""){
                        unlink( getcwd()."/uploads/".$prev_path);
                    }
                    return true;
               }
               return false;
            }
            return false;
        }
}