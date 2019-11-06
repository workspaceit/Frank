<?php
class m_site_settings extends CI_Model{
	function __construct(){
		parent::__construct();
	}
	function insertRow($rowData){
		if($this->db->insert('site_settings',$rowData))
			return true;
		return false;
	}
	function updateRow_BY_id($id,$rowData){
		$this->db->where('id',$id);
		if($this->db->update('site_settings',$rowData))
				return true;
			return false;
	}
        function updateRow($rowData){
		
		if($this->db->update('site_settings',$rowData))
				return true;
			return false;
	}
	function get_profile_default_pic_path(){
		$this->db->select('site_logo');
		$this->db->from('site_settings');
		$this->db->limit(1);
		
		foreach($this->db->get()->result() as $rowData){
			return $rowData->site_logo;
		}
		return '';
	}
	function get_all(){
		$this->db->select('*');
		$this->db->from('site_settings');
		$this->db->limit(1);
		
		return $this->db->get()->result();
	}
	function get_site_logo(){
		$this->db->select('site_logo');
		$this->db->from('site_settings');
		$this->db->limit(1);
		
		foreach($this->db->get()->result() as $rowData){
			return $rowData->site_logo;
		}
		return '';
	}
	function get_site_activation(){
		$this->db->select('site_activation');
		$this->db->from('site_settings');
		$this->db->where('site_activation','active');
		$this->db->limit(1);
		
		foreach($this->db->get()->result() as $rowData){
			return $rowData->site_activation;
		}
		return '';
	}
	
	
	function get_site_down_text(){
		$this->db->select('site_down_text');
		$this->db->from('site_settings');
		$this->db->limit(1);
		
		foreach($this->db->get()->result() as $rowData){
			return $rowData->site_down_text;
		}
		return '';
	}
	function is_site_active(){
		$this->db->select('site_activation');
		$this->db->from('site_settings');
		$this->db->where('site_activation','active');
		$this->db->limit(1);
		
		foreach($this->db->get()->result() as $rowData){
			if($rowData->site_activation=='active')
				return true;
			return false;
		}
		return false;
	}
}