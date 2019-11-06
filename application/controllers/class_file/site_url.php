<?php
	 $urlArr=explode("/",$_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"]);
         $this->protocol =(!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
         $this->site_url=$this->protocol.$_SERVER['HTTP_HOST'];
         $this->pageData['site_url']=$this->site_url.'/frank/';