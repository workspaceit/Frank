<?php

class trait_q_a extends CI_Controller
    {
    
    private $pageData;
     function __construct() {
          parent::__construct();
          $this->load->helper('url');
          $this->pageData=array();
           
         
      }
      function get_update_view()
      {
          
          $this->load->model('m_trait_q_a');
          $this->load->model('m_trait_categories');
           
          $id=$this->input->post('id');
         
          if(!$this->m_trait_q_a->is_exist_by_categoty_Id($id))
          {
                include_once(APPPATH.'controllers/class_file/c_trait_q_a.php');
                $trait_q_a_ob=new c_trait_q_a();

                $i=100;

                while ($i>=-100)
                {
                    $trait_q_a_ob->set_trait_categories_id($id);
                    $trait_q_a_ob->set_ques('');
                    $trait_q_a_ob->set_ans('');
                    $trait_q_a_ob->set_point($i);
                    $i=$i-10;
                    $trait_q_a_ob->set_created_by('');
                    $trait_q_a_ob->insertRow();
                }
                unset($trait_q_a_ob);
          }
         $this->pageData['trait_lower_picture']=$this->m_trait_categories->get_lower_picture_by_id($id);
         $this->pageData['trait_upper_picture']=$this->m_trait_categories->get_upper_picture_by_id($id);
         
         $this->pageData['trait_q_a']=$this->m_trait_q_a->get_ans_question($id);
         $this->pageData['category']=$this->m_trait_categories->get_category_by_id($id);
         $this->load->view('questions_answers_view',  $this->pageData);
      }
      function update_trait_q_a()
      {
          $this->load->model('m_trait_q_a');
          
          $id=$this->input->post('answer_id');
          $answer=$this->input->post('answer');
          
             $insert_data=array(
             'ans'=>$answer
          
             );
             if($this->m_trait_q_a->update_trait_q_a($insert_data,$id))
             {
                 echo ";True;";
             }
             else 
                 echo ";False;";
      }
      function update_question()
      {
          $this->load->model('m_trait_q_a');
          
          $question_id=$this->input->post('question_id');
          $question=$this->input->post('question');
          
             $insert_data=array(
             'ques'=>$question
             );
             if( $this->m_trait_q_a->update_trait_q_a_question($insert_data,$question_id))
             {
                 echo ";True;";
             }
             else 
                 echo ";False;";
            
      }
      function get_q_a_by_trait_category_id_and_point(){
          $this->load->model('m_trait_q_a');
          include_once(APPPATH.'controllers/class_file/encrypt_tbl_primary_key.php');

          $encrypt_tbl_primary_key_obj=new encrypt_tbl_primary_key();
          
          $trait_category_id=$encrypt_tbl_primary_key_obj->get_plain_text(trim($this->input->post("trait_category_id")));
          $req_point=intval(trim($this->input->post("point")));
          
          $point=floor($req_point)-(floor($req_point)%10);
          $q_a_array=array();
          foreach( $this->m_trait_q_a->get_all_By_trait_categories_id_and_point($trait_category_id,$point) as $rowData){
              $q_a_array['id']=$encrypt_tbl_primary_key_obj->get_encrypted_code($rowData->id);
              $q_a_array['trait_categories_id']=$encrypt_tbl_primary_key_obj->get_encrypted_code($trait_category_id);
              $q_a_array['question']=$rowData->ques;
              $q_a_array['ans']=$rowData->ans;
              $q_a_array['real_point']=$point;
              $q_a_array['fake_point']=-200;
              
          }
          echo json_encode($q_a_array);
      }
    }

?>
