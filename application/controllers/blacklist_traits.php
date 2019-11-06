<?php
class blacklist_traits extends CI_Controller
{
    private $pageData;
    function __construct() {
        parent::__construct();
        $this->pageData=array();
    }
    function get_update_view()
    {
        $this->load->model('m_blacklist_traits');
        $sub_category_id=$this->input->post('sub_category_id');
        $this->pageData['black_list']=$this->m_blacklist_traits->get_black_list_by_category_id($sub_category_id);
        
        $this->load->view('blacklist_view',$this->pageData);
    }
  function submit_insert_balck_list_data()
      {
           $this->load->model('m_blacklist_traits');
           $trait_categories_id=$this->input->post('trait_category_id');
           $value=$this->input->post('balck_list_value');
             $insert_data=array(
             'trait_categories_id'=>$trait_categories_id,
             'value'=>$value
             );
             
            if($this->m_blacklist_traits->insert_balck_list_data($insert_data))
            {
                echo ";True;".$this->m_blacklist_traits->get_id_by_category_id_and_value($value,$trait_categories_id).";";
              
            }
      }
       function submit_update_balck_list_data()
      {
           $this->load->model('m_blacklist_traits');
           $id=$this->input->post('balck_list_id');
           $value=$this->input->post('balck_list_value');
             $insert_data=array(
             'value'=>$value
             );
             if($this->m_blacklist_traits->update_balck_list_data($insert_data,$id))
             {
                 echo ";True;";
             }
             else 
                 echo ";Flase;";
      }
    
}

?>
