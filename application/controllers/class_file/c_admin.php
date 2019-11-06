<?php
class  c_admin extends CI_Controller
{
    private $old_password;
    private $new_password;
    private $pageData;
    private $u_id;
    private $site_title;
    private $homepage_title;
    private $site_url;
    private $admin_email_address;
    private $site_description;
    function __construct() {
        parent::__construct();
        $this->old_password='y';
        $this->new_password='hhh';
        $this->u_id='';
        $this->pageData=array();
        $this->site_title='';
        $this->homepage_title='';
        $this->site_url='';
        $this->admin_email_address='';
        $this->site_description='';
    }
   
   function set_old_password($old_password)
   {
       $this->old_password=$old_password;   
   }
   function set_new_password($new_password)
   {
       $this->new_password=$new_password;
   }
   function set_site_title($site_title)
   {
       $this->site_title=$site_title;
   }
   function set_homepage_title($homepage_title)
   {
       $this->homepage_title=$homepage_title;
   }
   function set_site_url($site_url)
   {
       $this->site_url=$site_url;
   }
   function set_admin_email_address($admin_email_address)
   {
       $this->admin_email_address=$admin_email_address;
   }
   function set_site_description($site_description)
   {
       $this->site_description=$site_description;
   }
   function check_password($u_id)
   {
       
       $this->load->model('m_admin_login');
       if($this->old_password!='')
       {
          return $this->m_admin_login->is_password_correct($u_id,$this->old_password);
       }
       return false;
   }
   
   function update_admin_password($u_id)
   {
       $this->load->model('m_admin_login');
       if($this->new_password!='')
       {
               $this->pageData=array(
                   'password'=>$this->new_password
                    );
              return   $this->m_admin_login->update_password($u_id,$this->pageData);
       }
       return false;
   }
   function get_dashboard($u_id)
   {
       $this->load->model('m_admin_login'); 
       $this->pageData['total_member']=$this->m_admin_login->get_all_rows($u_id);
       return $this->pageData;
   }
   function website_settings_submit_update_data()
   {
       $this->load->model('m_site_settings');
       $this->pageData=array();
       if($this->site_title!='')
       {
           $this->pageData['site_title']=$this->site_title;
       }
       if($this->homepage_title!='')
       {
           $this->pageData['homepage_title']=$this->homepage_title;
       }
       if($this->site_url!='')
       {
           $this->pageData['site_url']=$this->site_url; 
       }
       if($this->admin_email_address!='')
       {
           $this->pageData['admin_email_address']=$this->admin_email_address;
       }
       if($this->site_description!='')
       {
           $this->pageData['site_description']=$this->site_description;
       }
       return $this->m_site_settings->updateRow($this->pageData);
       
       
       
   }
   
}