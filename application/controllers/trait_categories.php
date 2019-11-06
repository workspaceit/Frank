<?php 
class trait_categories extends CI_Controller
{
        private $pageData;
	function __construct(){
		parent::__construct();
               $pageData=array();
               $this->load->helper('url');
               
	}
	function submit_create_data()
	{
		include_once(APPPATH.'controllers/class_file/c_trait_categories.php');
		$catagory=trim($this->input->post('category'));
                $sub_catagory=trim($this->input->post('sub_category'));
		$trait_categories_ob=new c_trait_categories();
		
		$user_type=1; //admin
		$trait_categories_ob->set_category($catagory);
		$trait_categories_ob->set_sub_category($sub_catagory);
		 $trait_categories_ob->set_user_type($user_type);
                if($trait_categories_ob->sub_category_is_exits())
                {
                    echo ";False;Sub_category already exits;";
                }
               else 
                {
                 if($trait_categories_ob->insertRow())
                {
               echo  ";True;".$trait_categories_ob->getId_by_category_AND_subcategory().";";
                }
		
             }
		
		unset($trait_categories_ob);
	
	}
        function get_traits_slide_bar(){
            $this->load->model('m_developer_gossip_insider');
            $this->load->model('m_trait_categories');
            include_once(APPPATH.'controllers/class_file/encrypt_tbl_primary_key.php');

            $encrypt_tbl_primary_key_obj=new encrypt_tbl_primary_key();
            
            $trait_category_id=$encrypt_tbl_primary_key_obj->get_plain_text(trim($this->input->post('trait_category_id')));
            $gossip_intender_id=$encrypt_tbl_primary_key_obj->get_plain_text(trim($this->input->post('gossip_insider_id')));
            $dynamic_id=trim($this->input->post('dynamic_id'));
            $sub_category=$this->m_trait_categories->get_sub_category_by_id($trait_category_id);
            $gossip_intender_point=$this->m_developer_gossip_insider->get_point_by_id($gossip_intender_id);
            $lower_picture=$this->m_trait_categories->get_lower_picture_by_id($trait_category_id);
            $upper_picture=$this->m_trait_categories->get_upper_picture_by_id($trait_category_id);
            
            $this->pageData['gossip_intender_point']=$gossip_intender_point;
            $this->pageData['sub_category']=$sub_category;
            $this->pageData['lower_picture']=$lower_picture;
            $this->pageData['upper_picture']=$upper_picture;
            $this->pageData['dynamic_id']=$dynamic_id;
            $this->pageData['trait_category_id']=$trait_category_id;
            $this->pageData['encrypt_tbl_primary_key_obj']=$encrypt_tbl_primary_key_obj;
            $this->load->view("trait_slide_bar",$this->pageData);
        }
        function get_gossip_reply_traits_slide_bar(){
            
            //This Feature Not Required For This Version
            
            $this->load->model('m_trait_v_a_value');
            $this->load->model('m_trait_categories');
            
            include_once(APPPATH.'controllers/class_file/encrypt_tbl_primary_key.php');

            $encrypt_tbl_primary_key_obj=new encrypt_tbl_primary_key();
            $gossip_id=$encrypt_tbl_primary_key_obj->get_plain_text(trim($this->input->post("gossip_id"))); 
            $comment_id=$encrypt_tbl_primary_key_obj->get_plain_text(trim($this->input->post("comment_id"))); 
            
            $i=0;
            $trait_data=array();
            foreach($this->m_trait_v_a_value->get_trait_categories_id_by_gossip_id($gossip_id) as $rowData){
                
                $trait_data[$i++]=$this->m_trait_categories->get_all_by_id($rowData->trait_categories_id);
            }
            $this->pageData['encrypt_tbl_primary_key_obj']=$encrypt_tbl_primary_key_obj;
            
            $this->pageData['trait_data']=$trait_data;
            if(intval($_REQUEST['comment'])==0){
                $this->pageData['id']=$gossip_id;
                $this->pageData['submit_action']=(string)"submit_gossip_reply(this)";
            }else{
                $this->pageData['id']=$comment_id;
                $this->pageData['submit_action']=(string)"submit_gossip_comment_reply(this)";
            }
            $this->pageData['gossip_id']=$gossip_id;
            $this->load->view("gossip_reply_traits_slide_bar",$this->pageData);
        }
        function submit_update_color_class()
        {
            $trait_category_id=trim($this->input->post('trait_category_id'));
            $trait_color_class=trim($this->input->post('trait_color_class'));
            
            
            include_once(APPPATH.'controllers/class_file/c_trait_categories.php');
            $trait_categories_obj=new c_trait_categories();
            $trait_categories_obj->set_id($trait_category_id);
            $trait_categories_obj->set_color_class($trait_color_class);
            if($trait_categories_obj->update_color_class())
            {
                echo ";True;";
            }
            else
                echo ";False;";
            
        }
        function submit_update_category()
        {
            $category=$this->input->post('category');
            $category_update_value=$this->input->post('category_update_value');
            
            include_once(APPPATH.'controllers/class_file/c_trait_categories.php');
            $trait_categories_ob=new c_trait_categories();
            if($trait_categories_ob->update_category($category,$category_update_value))
            {
                echo ";True;";
            }
            else
                echo ";False;";
            
        }
        
        function submit_update_sub_category()
        {
            $id=$this->input->post('primary_id');
            $sub_category=$this->input->post('sub_category');
            $category=$this->input->post('category');
         
            include_once(APPPATH.'controllers/class_file/c_trait_categories.php');
            $trait_categories_ob=new c_trait_categories();
            if($trait_categories_ob->is_sub_category_exits_other($id,$category,$sub_category))
              {
                  echo ";False;Sub_category already exits";
              }
            else{
               if($trait_categories_ob->update_sub_category($id,$sub_category)){
                  echo ";True;";
               }
               else
                  echo ";False;";
             
            }
            
            
        }
        function submit_update_tarit_picture(){
            include_once(APPPATH.'controllers/class_file/c_trait_categories.php');
            $trait_categories_obj=new c_trait_categories();
            $trait_category_id=trim($this->input->post('trait_category_id'));
            $lower_pic_path=trim($this->input->post('lower_pic_path'));
            $upper_pic_path=trim($this->input->post('upper_pic_path'));
            $trait_categories_obj->set_id($trait_category_id);
            $trait_categories_obj->set_lower_pic_path($lower_pic_path);
            $trait_categories_obj->set_upper_pic_path($upper_pic_path);
            if($trait_categories_obj->update_trait_picture_by_categories_id()){
                echo ";True;";
            }else {
                echo ";False;";
            }
        }
        
        function upload_trait_minus_picture(){
                
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'gif|png|jpeg|jpg';
		$config['max_size']	= '1024';
		$config['max_width']  = '1024';
		$config['max_height']  = '768';

		$this->load->library('upload', $config);
		$data='';
		
		if ( ! $this->upload->do_upload("minus_picture")){
				
                        $data['raw_name']='';
                        $data['file_ext']='';
                        $resp=str_replace("<p>", "", str_replace("</p>", "", $this->upload->display_errors()));
                        echo ";False;".$resp.";";
		}
		else{
                        $data=$this->upload->data();
                        $pic_path=$data['raw_name'].$data['file_ext'];
                       
                        echo ";True;".$pic_path.";";
		}
		
	}
        function upload_trait_plus_picture(){
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'gif|png|jpeg|jpg';
		$config['max_size']	= '1024';
		$config['max_width']  = '1024';
		$config['max_height']  = '768';

		$this->load->library('upload', $config);
		$data='';
		
		if ( ! $this->upload->do_upload("plus_picture")){
				
                        $data['raw_name']='';
                        $data['file_ext']='';
                        $resp=str_replace("<p>", "", str_replace("</p>", "", $this->upload->display_errors()));
                        echo ";False;".$resp.";";
		}
		else{
                        $data=$this->upload->data();
                        $pic_path=$data['raw_name'].$data['file_ext'];
                        echo ";True;".$pic_path.";";
		}
		
	}
          
        
}
	