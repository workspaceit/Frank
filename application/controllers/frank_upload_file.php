<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class frank_upload_file extends CI_Controller{
    function __construct() {
        parent::__construct();
    }
    function upload_profile_picture(){
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'gif|png|jpeg|jpg';
		$config['max_size']	= strval(1024*10);
		$config['max_width']  = strval(1024*20);
		$config['max_height']  = strval(768*20);

		$this->load->library('upload', $config);
		$data='';
		
		if ( ! $this->upload->do_upload("change_profile_picture")){
				
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
        function upload_triat_picture(){
            if ($_FILES["minus_picture"]["error"] > 0)
                {
                echo "Error: " . $_FILES["minus_picture"]["error"] . "<br>";
                }else{
                   move_uploaded_file(
                      $_FILES["minus_picture"]["tmp_name"],
                      $_SERVER['DOCUMENT_ROOT'].'/frank/uploads/'. $_FILES["minus_picture"]["name"]
                   );
                   echo ";True;".$_FILES["minus_picture"]["name"];
                  }
        }
}
?>
