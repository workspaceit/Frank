<?php
class taraits extends CI_Controller
{
    private $pageData;
    function __construct() {
        parent::__construct();
        $this->pageData=array();
    }
    function index()
    {
        $this->load->model('test');
        $this->pageData['all_data']=$this->test->get_traits_all();
        $this->load->view('traits_test_view',$this->pageData);
    }
    function get_traits_slide_bar(){
        $this->load->model('m_trait_categories');
        $trait_category_id=trim($this->input->post('trait_category_id'));
       
        $sub_category=$this->m_trait_categories->get_sub_category_by_id($trait_category_id);
        $this->pageData['sub_category']=$sub_category;
        $this->pageData['trait_category_id']=$trait_category_id;
        $this->load->view("trait_slide_bar",$this->pageData);
    }
}
?>