(function () {
	var input = document.getElementById("uploadbtn"), 
		formdata = false;

	function showUploadedItem (source) {
		$('#profile_uploaded_pic').hide();
		var img = document.getElementById("profile_uploaded_pic");
  		img.src = source;
  		$('#profile_uploaded_pic').fadeIn(1000,function(){
		});
		
	}   

	if (window.FormData) {
  		formdata = new FormData();
  		//document.getElementById("btn").style.display = "none";
	}
	$('#images').change(function(){
            $('#pic_path_name').attr("value",$('#images').val());
        });
 	input.addEventListener("click", function (evt) {
 		//var img = document.getElementById("profile_uploaded_pic");
  		//img.src = $('#base_url').attr("value")+"images/upload.gif";
                
                
 		$('#uploadbtn').attr("disabled", "disabled");
 		$('#submit_basic_info_btn').attr("disabled", "disabled");
 		var i = 0, len =  document.getElementById("images").files.length, img, reader, file;
	
		for ( ; i < len; i++ ) {
			file =  document.getElementById("images").files[i];
	
			if (!!file.type.match(/image.*/)) {
				if ( window.FileReader ) {
					reader = new FileReader();
					reader.onloadend = function (e) { 
						
					};
					reader.readAsDataURL(file);
				}
				if (formdata) {
					formdata.append("images", file);
				}
			}	
		}
		if($('#images').val()!=""){
		 			
		 		
				if (formdata) {
					load_notification_bar("Uploading Image...");
                                        set_effect_on_content("upload_content_div");
                                        set_effect_on_content("submit_basic_info_btn");
                                        disable_all_element('upload_content_div','input');
                                        $('#submit_basic_info_btn').attr("disabled");
                                        
					var img = document.getElementById("profile_uploaded_pic");
					
				
					
					$('#profile_uploaded_pic').fadeIn(500,function(){
						//img.src = $('#base_url').attr("value")+"images/upload_file.gif";
					});
			  		
					
					$.ajax({
						url: $('#base_url').val()+"signup/upload_file",
						type: "POST",
						data: formdata,
						processData: false,
						contentType: false,
						success: function (data) {
                                                        set_defult_effect_on_content("upload_content_div");
                                                        set_defult_effect_on_content("submit_basic_info_btn");
                                                        enable_all_element('upload_content_div','input');
                                                        $('#submit_basic_info_btn').removeAttr("disabled");
							var resp=data.split(";");
							if(resp[1]=="True"){
								
                                                                chage_notification_content("Sucess");
                                                                show_success_then_hide(5000,"");
								var picPath=resp[2];
								$('#submit_basic_info_btn').removeAttr("disabled");
								$('#pic_path').attr("value",picPath);
								$('#uploadbtn').removeAttr("disabled");
								for (i = 0 ; i < len; i++ ) {
									file =  document.getElementById("images").files[i];
							
									if (!!file.type.match(/image.*/)) {
										if ( window.FileReader ) {
											reader = new FileReader();
											reader.onloadend = function (e) { 
												showUploadedItem(e.target.result, file.fileName);
											};
											reader.readAsDataURL(file);
										}
										if (formdata) {
											formdata.append("images", file);
										}
									}	
								}
							}else if(resp[1]=="False"){

								chage_notification_content(resp[2]);
								show_error_then_hide(10000,"");
								
								$('#submit_basic_info_btn').removeAttr("disabled");
								$('#pic_path').attr("value","");
								$('#submit_basic_info_btn').removeAttr("disabled");
                                                                $('#profile_uploaded_pic').fadeOut(500,function(){});
                                                                $('#uploadbtn').removeAttr("disabled");
                                                                $('#profile_uploaded_pic').fadeOut(500,function(){});
							}
						
							
						},
						 error: function(jqXHR, textStatus, errorThrown) {
			                console.log('error');
			                console.log(errorThrown);
			                console.log(jqXHR);
			                $('#submit_basic_info_btn').removeAttr("disabled");
			                $('#profile_uploaded_pic').fadeOut(1000,function(){
							});
			                $('#uploadbtn').removeAttr("disabled");
			                $('#profile_uploaded_pic').fadeOut(500,function(){});
			            }
					});
				}
			}else{
				
				$('#uploadbtn').removeAttr("disabled");
			}
	}, false);
}());
