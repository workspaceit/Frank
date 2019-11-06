<?php
 class c_developer_year extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('m_developer_year');
	}
	
}