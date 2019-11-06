<?php

	$this->load->model('m_site_settings');
	
	if(!$this->m_site_settings->is_site_active()){
		redirect(base_url().'under_construction');		
	}
	
	foreach($this->m_site_settings->get_all() as $rowData){
		$this->pageData['profile_default_pic_path']=$rowData->profile_default_pic_path;
        $this->pageData['site_title']=$rowData->site_title;
		$this->pageData['site_logo']=$rowData->site_logo;
		$this->pageData['site_down_text']=$rowData->site_down_text;
        $this->pageData['site_description']=$rowData->site_description;
	}
	
	
?>