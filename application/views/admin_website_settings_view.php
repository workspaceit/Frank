<?php include 'admin_header.php' ?>
<?php include 'admin_dashboard.php' ?>
<div class="admin_panel">
	<?php include 'top_container.php' ?>
    <div class="infoBar" style="height:20px;"><p>Admin Page</p></div>
    <script type="text/javascript">
        function check_null()
        {
                                      if($('#old_password').val()==''){
                                          
				        $('#old_password').css("background","Red").focus();
                                             return false;
                                     }else{
                                         $('#old_password').css("background","white");
                                         
                                     }
                                      if($('#new_password').val()==''){
                                          
				        $('#new_password').css("background","Red").focus();
                                             return false;
                                     }else{
                                         if($('#new_password').val().length<6){
                                              $('#new_password').css("background","Red").focus();
                                              $('#new_password_error').css("background","yellow");
                                              $('#new_password_error').html("At Least 6 haracter Required");
                                              return false;
                                         }else{
                                              $('#new_password').css("background","white").focus();
                                            
                                              $('#new_password_error').fadeOut(500,function(){
                                                    $('#new_password_error').css("background","white");
                                                   $('#new_password_error').html("");
                                              });
                                             
                                         }
                                        
                                     }
                                     if($('#re_new_password').val()==''){
                                          
				        $('#re_new_password').css("background","Red").focus();
                                             return false;
                                     }else{
                                         $('#re_new_password').css("background","white");
                                     }
                                     if($('#re_new_password').val()!=$('#new_password').val()){
                                           
                                            $('#re_new_password').css("background","Red").focus();
                                            
                                             $('#re_new_password_error').html("Password mismatched");
                                             $('#re_new_password_error').css("background","yellow");
                                             return false;
                                     }else{
                                         
                                          $('#re_new_password').css("background","white");
                                          $('#re_new_password_error').fadeOut(500,function(){
                                               $('#re_new_password_error').css("background","white");
                                               $('#re_new_password_error').html("");
                                          });
                                         
                                      }
                                         
                                      return true;
        }
        function submit_change_password()
        {

             if(check_null()){
                  $('input,textarea').attr("disabled","disabled");
                $.ajax({
                url:$('#base_url').val()+'admin_login/update_submit_admin_password',
                data:{old_password:$('#old_password').val(),new_password:$('#new_password').val()},
                type:"POST",
                 success:function(data)
                 {
                    var resp=data.split(";");
                    if(resp[1]=="True"){
                        
                        $('input,textarea').removeAttr("disabled");
                        $('#old_password').css("background","white");
                        $('#'+resp[2]).html(resp[3]);
                        $('#'+resp[2]).css("background","yellow");
                        $('#'+resp[2]).fadeIn(500,function(){}).delay(2000).fadeOut(500,function(){
                            $('#'+resp[2]).html("");
                            $('#'+resp[2]).css("background","white");
                        });
                        $('#old_password_error').fadeOut(500,function(){
                             $('#old_password_error').css("background","white");
                             $('#old_password_error').html("");
                        });
                       
                        $('#old_password').attr("value","");
                        $('#new_password').attr("value","");
                        $('#re_new_password').attr("value","");
                    }else if(resp[1]=="False"){
                        console.log(resp[2]);
                        $('#'+resp[2]).css("background","red").focus();
                        $('#'+resp[2]+"_error").css("background","yellow");
                        $('#'+resp[2]+"_error").html(resp[3]);
                        $('input,textarea').removeAttr("disabled");
                    }
                 }
                });
             }
            }
        function wesite_setting_null_check()
        {
            if($('#site_title').val()=='')
                {
                     $('#site_title').css("background","Red").focus();
                     return false;
                }
            else
                {
                   $('#site_title').css("background","white");  
                }
            if($('#homepage_title').val()=='')
                {
                    $('#homepage_title').css("background","Red").focus();
                    return false;
                }
            else
                {
                     $('#homepage_title').css("background","white");
                }
            if($('#site_url').val()=='')
                {
                    $('#site_url').css("background","red").focus();
                    return false;
                }
            else
                {
                     $('#site_url').css("background","white");
                }
            if($('#admin_email_address').val()=='')
                {
                    $('#admin_email_address').css("background","red").focus();
                    return false;
                }
            else
                {
                     $('#admin_email_address').css("background","white");
                }
            if($('#site_description').val()=='')
                {
                    $('#site_description').css("background","red").focus();
                    return false;
                }
            else
                {
                     $('#site_description').css("background","white");
                }
              return true;
        }
     
        function website_settings_submit_update_data()
        {
             if(wesite_setting_null_check()){
                 
             $('input,textarea').attr("disabled","disabled");
             $.ajax({
                url:$('#base_url').val()+'admin/website_settings_submit_update_data',
                data:{site_title:$('#site_title').val(),homepage_title:$('#homepage_title').val(),site_url:$('#site_url').val(),admin_email_address:$('#admin_email_address').val(),site_description:$('#site_description').val()},
                type:"POST",
                 success:function(data)
                 {
                    var resp=data.split(";"); 
                    if(resp[1]=="True"){
                        $('input,textarea').removeAttr("disabled");
                         $('#'+resp[2]).html(resp[3]);
                        $('#'+resp[2]).css("background","yellow");
                        $('#'+resp[2]).fadeIn(500,function(){}).delay(2000).fadeOut(500,function(){
                            $('#'+resp[2]).html("");
                            $('#'+resp[2]).css("background","white");
                        });
                    }else if(resp[1]=="False"){
                        $('input,textarea').removeAttr("disabled");
                    }
                 }
                });
             }
        }

     </script>
	<div class="admin_container">
		<div class="criteria">
			<div class="head_div">
                            <input type="hidden" id="base_url" value="<?php echo $ci_site_url;?>">
				<p class="head_div_desc">Website Settings</p>
			</div>
			<div class="web_settings">
                            <?php foreach ($total_member as $rowData) ?>
				<form style="height:auto;overflow:hidden;">
						<div class="web_form_left">
							<div class="a_form_all">
								<p>Site title:</p>
                                                                <input type="text" id="site_title" value="<?php echo $rowData->site_title; ?> ">
							</div>
							<div class="a_form_all">
								<p>Homepage Title:</p>
                                                                <input type="text" id="homepage_title" value="<?php echo $rowData->homepage_title; ?>">
							</div>
							<div class="a_form_all">
								<p>Site URL:</p>
                                                                <input type="text" id="site_url" value="<?php echo $rowData->site_url; ?>">
							</div>
							<div class="a_form_all">
								<p>Admin Email address:</p>
                                                                <input type="text" id="admin_email_address" value="<?php echo $rowData->admin_email_address;  ?>">
							</div>
							<div class="a_form_large">
								<p>Site Description:</p>
                                                                <textarea id="site_description"><?php echo  $rowData->site_description; ?></textarea>
							</div>
							<a style="text-decoration:none;color:#fff;" href="javascript:website_settings_submit_update_data()"><div class="btn_web_save">
								<span>Save Settings</span>
							</div></a>
						</div>
				</form>
                            <?php ?>
				<form style="height:auto;overflow:hidden;">
                                    
                                    <div style="width: 400px; margin: 0 auto; overflow: hidden">
                                        <p style="float: left; margin: 0px 8px 0px;">Change Admin Panel Password</p><br><br>
                                        <span id="global_notification" style="float: left;display:none;"></span>
                                    </div>
					<div class="web_form_left">
                        <div class="a_form_message">
    						<div class="a_form_all" style="float:left;">
    								<p>Old password:</p>
                                                                    <input type="password" value="" id="old_password" name="old_password">
                                                                    <!-- <div id="old_password_error" style="float:right;" ></div> -->
    						</div>
                            <div id="old_password_error" style="float:right;" ></div>
                        </div>

                                                <div id="form_message"></div>
                        <div class="a_form_message">                        
    						<div class="a_form_all" style="float:left;">
    								<p>New password:</p>
                                                                    <input type="password" value="" id="new_password" name="new_password">
                                                                    <!-- <div id="new_password_error" style="float:right;" ></div> -->
    						</div> 
                            <div id="new_password_error" style="float:right;" ></div>
                        </div>
                        <div class="a_form_message">
    						<div class="a_form_all" style="float:left;">
    								<p>Re-Type password:</p>
                                                                    <input type="password" value="" id="re_new_password" name="re_new_password">
                                                                   <!--  <div id="re_new_password_error" style="float:right;" ></div> -->
    						</div>
                             <div id="re_new_password_error" style="float:right;" ></div>
                            
                         </div>
						<a style="text-decoration:none;color:#fff;" href="javascript:submit_change_password()"><div class="btn_web_save">
								<span>Save password</span>
						</div></a>
					</div>
				</form>

				<form style="height:auto;overflow:hidden;">
					<p style="margin:10px 0 5px 200px;">Google Analytics</p>
					<div class="web_form_left">
						<div class="a_form_all">
								<p>Tracking ID:</p>
								<input type="text">
						</div>
						<a style="text-decoration:none;color:#fff;" href=""><div class="btn_web_save">
								<span>Save settings</span>
						</div></a>
					</div>
				</form>
			</div>

		</div>


	</div>
</div>	
<?php include 'footer.php' ?>