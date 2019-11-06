<?php include 'header.php' ?>
<?php include 'advertise_left.php' ?>
<?php include 'advertise_right.php' ?>
  
 <script>
     
         function submit_invite_friend(){
           
                var sender_first_name=$('#f_name').val();
                var i=0;
                load_notification_bar("Processing Data....");
                disable_all_element('invite_friends_content_div','input');
                $("input[id^='friend_name']").each(function(){
                    var friend_name=$(this).val();
                    var friend_email=$(this).next().val();
                    if(friend_name!="" && friend_email!=""){
                        i++;
                        $.ajax({
                            type:"post",
                            url:$('#base_url').val()+"user_invitation",
                            data:{
                                friend_name:friend_name,
                                friend_email:friend_email,
                                sender_first_name:sender_first_name
                            },
                            success:function(data){
                                complete_submit_invite_friends_data();
                                enable_all_element('invite_friends_content_div','input');
                               
                            }
                        });
                        
                     }
                });
                if(i==0){
                    enable_all_element('invite_friends_content_div','input');
                    hide_notification_bar();
                }
         }
         function load_invite_friend_row(){
             var size=$('#invite_friend_row_size').val();
             $('#invite_friend_row_size').attr("value",++size);
             $.ajax({
                 type:"post",
                 data:{size:size},
                 url:$('#base_url').val()+"user_invitation/load_invitation_row_for_signup",
                 success:function(data){
                       $('#invite_friends_content_div').append(data);
                       $('.invite_friend_row').fadeIn(500);
                 }
             });
           
         }
	 function show_login_form(){	
			$('#search_form_div').fadeOut(500,function(){
				$('#login_form_div').fadeIn(500,function(){});
				$('#sign_in_btn_span').fadeOut(500,function(){
					$('#search_btn_span').fadeIn(500,function(){});
				});
			});
			
	}
	 function show_search_form(){	
			$('#login_form_div').fadeOut(500,function(){
			$('#search_form_div').fadeIn(500,function(){});
			$('#search_btn_span').fadeOut(500,function(){
				$('#sign_in_btn_span').fadeIn(500,function(){});
			});
	});
	
	}
	$(function() {
		$("input#current_location_1" ).autocomplete({
			source: function(request, response) {
				$.ajax({ url:$('#base_url').val()+'suggestion/get_current_location_from_user_profile_data',
				data: { term: $("#current_location_1").val()},
				dataType: "json",
				type: "POST",
				success: function(data){
					response(data);
				}
			});
		},
		minLength: 1
		});
		
	});
	$(function() {
		$("input#current_location_2" ).autocomplete({
			source: function(request, response) {
				$.ajax({ url:$('#base_url').val()+'suggestion/get_current_location_from_user_profile_data',
				data: { term: $("#current_location_2").val()},
				dataType: "json",
				type: "POST",
				success: function(data){
					response(data);
				}
			});
		},
		minLength: 1
		});
		
	});
	$(function() {
		$("input#home_town_1" ).autocomplete({
			source: function(request, response) {
				$.ajax({ url:$('#base_url').val()+'suggestion/get_home_town_suggestion_from_user_profile_data',
				data: { term: $("#home_town_1").val()},
				dataType: "json",
				type: "POST",
				success: function(data){
					response(data);
				}
			});
		},
		minLength: 1
		});
		
	});
	$(function() {
		$("input#home_town_2" ).autocomplete({
			source: function(request, response) {
				$.ajax({ url:$('#base_url').val()+'suggestion/get_home_town_suggestion_from_user_profile_data',
				data: { term: $("#home_town_2").val()},
				dataType: "json",
				type: "POST",
				success: function(data){
					response(data);
				}
			});
		},
		minLength: 1
		});
		
	});
	$(function() {
		$("input#organization_1" ).autocomplete({
			source: function(request, response) {
				$.ajax({ url:$('#base_url').val()+'suggestion/get_organization_suggestion_from_user_profile_data',
				data: { term: $("#organization_1").val()},
				dataType: "json",
				type: "POST",
				success: function(data){
					response(data);
				}
			});
		},
		minLength: 1
		});
		
	});
	$(function() {
		$("input#organization_2" ).autocomplete({
			source: function(request, response) {
				$.ajax({ url:$('#base_url').val()+'suggestion/get_organization_suggestion_from_user_profile_data',
				data: { term: $("#organization_2").val()},
				dataType: "json",
				type: "POST",
				success: function(data){
					response(data);
				}
			});
		},
		minLength: 1
		});
		
	});
	$(function() {
		$("input#high_school" ).autocomplete({
			source: function(request, response) {
				$.ajax({ url:$('#base_url').val()+'suggestion/get_high_school_suggestion_from_user_profile_data',
				data: { term: $("#high_school").val()},
				dataType: "json",
				type: "POST",
				success: function(data){
					response(data);
				}
			});
		},
		minLength: 1
		});
		
	});
	$(function() {
		$("input#higher_education_1" ).autocomplete({
			source: function(request, response) {
				$.ajax({ url:$('#base_url').val()+'suggestion/get_higher_education_suggestion_from_user_profile_data',
				data: { term: $("#higher_education_1").val()},
				dataType: "json",
				type: "POST",
				success: function(data){
					response(data);
				}
			});
		},
		minLength: 1
		});
		
	});
	$(function() {
		$("input#higher_education_2" ).autocomplete({
			source: function(request, response) {
				$.ajax({ url:$('#base_url').val()+'suggestion/get_higher_education_suggestion_from_user_profile_data',
				data: { term: $("#higher_education_2").val()},
				dataType: "json",
				type: "POST",
				success: function(data){
					response(data);
				}
			});
		},
		minLength: 1
		});
		
	});
	$(function() {
		$("input#workplace_1" ).autocomplete({
			source: function(request, response) {
				$.ajax({ url:$('#base_url').val()+'suggestion/get_workplace_suggestion_from_user_profile_data',
				data: { term: $("#workplace_1").val()},
				dataType: "json",
				type: "POST",
				success: function(data){
					response(data);
				}
			});
		},
		minLength: 1
		});
		
	});
	$(function() {
		$("input#workplace_2" ).autocomplete({
			source: function(request, response) {
				$.ajax({ url:$('#base_url').val()+'suggestion/get_workplace_suggestion_from_user_profile_data',
				data: { term: $("#workplace_2").val()},
				dataType: "json",
				type: "POST",
				success: function(data){
					response(data);
				}
			});
		},
		minLength: 1
		});
		
	});
</script>
<!-- For Suggestion[Ends] -->
 <script type="text/javascript">
 				function upload_data_complete_div_style(){
 					$('#error_div').fadeOut(500, function(){
						$('#submit_data_process').html("");
						$('#submit_data_process').hide("");
						$('#submit_data_process_img').hide();
						
						$('#submit_data_error').html("");
						$('#submit_data_error').hide("");
						$('#submit_data_error_img').hide();
					});
 	 			}
 	 			function uploading_data_div_style(){
 	 				$('#submit_data_process').html("Uploading Data...");
					$('#submit_data_process').show();
					$('#submit_data_process_img').show();
								
					$('#submit_data_error').html("");
					$('#submit_data_error_img').hide();
					$('#error_div').fadeIn(500, function(){});
 	 	 		}
 	 	 		function uploading_data_error_div_style(resp){
 	 	 			$('#submit_data_process').html("");
					$('#submit_data_process_img').hide();
					
					$('#submit_data_error').html(resp);
					$('#submit_data_error').show();
					$('#submit_data_error_img').show();
				
					$('#error_div').fadeIn(500, function(){});
 	 	 	 	}
				function is_valid_email(email){
				    var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
				    if (!filter.test(email)) 
				           return false;
				    else
				        return true;
				}
								
				function submit_basic_info()
				{
					
					if(basic_info_validation()){
						
						load_notification_bar("Processing Data....");
                                                disable_all_element('basic_info_div','input');
						$('#basic_info_div').fadeIn(3000, function() {

							// Animation complete
							$('select').attr('disabled','disabled');
							$('input').attr('disabled','disabled');
						});
						
						$.ajax({
						    url:'signup/submit_basic_info',
							data: {	
									u_email:$("#u_email").val(),
									password:$("#password").val(),
									f_name:$("#f_name").val(),
									l_name:$("#l_name").val(),
									gender:$("#gender").val(),
									month:$("#month").val(),
									day:$("#day").val(),
									year:$("#year").val(),
									pic_path:$("#pic_path").val()
                                                                },
							type: "POST",
							success: function(data){
								var resp=data.split(";");
								if(resp[1]=="True"){
									enable_all_element('basic_info_div','input');
                                                                        hide_notification_bar();
									$('#basic_info_div').fadeOut(1000, function() {

										// Animation complete
										$('select').removeAttr('disabled');
										$('input').removeAttr('disabled');
										$('#basic_info_span_head').addClass("span_head").removeClass("span_head_bold");
										$('#profile_data_step').addClass("step").removeClass("step_blur");
										$('#profile_data_span_head').addClass("span_head_bold").removeClass("span_head");	
										$('#profile_data_div').fadeIn(1000, function(){});
                                                                                
									});
									
									
								}else if(resp[1]=="False"){
									
									enable_all_element('basic_info_div','input');
									$('#basic_info_div').fadeIn(3000, function() {

										// Animation complete
										$('select').removeAttr('disabled');
										$('input').removeAttr('disabled');
									});
										$('#'+resp[2]).css('background','yellow');
                                                                                chage_notification_content(resp[3]);
                                                                                show_error_then_hide(5000,"");
								}
							},
							error: function (error) {
                                                                enable_all_element('basic_info_div','input');
								$('#basic_info_div').fadeIn(3000, function() {

									// Animation complete
									$('select').removeAttr('disabled');
									$('input').removeAttr('disabled');
								});
                                                                chage_notification_content("Internet Connection Lost")
								show_error_then_hide(5000,"");
				              }
						});
					}
				}
				
				function update_profile_data()
				{
					load_notification_bar("Processing Data...");
					disable_all_element('profile_data_div','input');
					$('#profile_data_div').fadeIn(3000, function() {

						// Animation complete
						$('select').attr('disabled','disabled');
						$('input').attr('disabled','disabled');
					});
					$.ajax({
                                                url:'signup/update_profile_data',
                                                data:{
                                                        current_location_1:$('#current_location_1').val(),
                                                        current_location_2:$('#current_location_2').val(),
                                                        home_town_1:$('#home_town_1').val(),
                                                        home_town_2:$('#home_town_2').val(),
                                                        organization_1:$('#organization_1').val(),
                                                        organization_2:$('#organization_2').val(),
                                                        high_school:$('#high_school').val(),
                                                        higher_education_1:$('#higher_education_1').val(),
                                                        higher_education_2:$('#higher_education_2').val(),
                                                        workplace_1:$('#workplace_1').val(),
                                                        workplace_2:$('#workplace_2').val()
                                                    },
                                                type:"POST",
                                                success: function(data){
                                                    var resp=data.split(";");
							if(resp[1]=="True"){
                                                                enable_all_element('profile_data_div','input');
                                                                hide_notification_bar();
                                                                $('#profile_data_div').fadeOut(1000, function() {

                                                                                        $('select').removeAttr('disabled');
                                                                                        $('input').removeAttr('disabled');
                                                                $('#preference_settings_step').addClass("step").removeClass("step_blur");
                                                                                        $('#profile_data_span_head').addClass("span_head").removeClass("span_head_bold");	
                                                                                        $('#preference_settings_span_head').addClass("span_head_bold").removeClass("span_head");	
                                                                                        $('#preference_settings_div').fadeIn(1000, function(){});
                                                                                        upload_data_complete_div_style();
                                                                        });
							}else if(resp[1]=="False"){
                                                                enable_all_element('profile_data_div','input');
                                                                hide_notification_bar();
								$('#profile_data_div').fadeIn(3000, function() {
									$('select').removeAttr('disabled');
									$('input').removeAttr('disabled');
									
									
								});
								uploading_data_error_div_style("Server Error");
							}
						},
						error: function(jqXHR, textStatus, errorThrown) {
							 
							enable_all_element('profile_data_div','input');
                                                        hide_notification_bar();
							$('#profile_data_div').fadeIn(3000, function() {
								$('select').removeAttr('disabled');
								$('input').removeAttr('disabled');
							});
							uploading_data_error_div_style("Internet Connection Lost");
			                
			              }
					});
				}
				function skip_update_profile_data()
				{
				   	$('#profile_data_div').fadeOut(1000, function() {
				   		
						// Animation complete
							$('select').removeAttr('disabled');
							$('input').removeAttr('disabled');
            	   			$('#preference_settings_step').addClass("step").removeClass("step_blur");
							$('#profile_data_span_head').addClass("span_head").removeClass("span_head_bold");	
							$('#preference_settings_span_head').addClass("span_head_bold").removeClass("span_head");	
					 		$('#preference_settings_div').fadeIn(1000, function(){});
                		});			
								
				}
				
				function update_preference_setting()
				{
					load_notification_bar("Processing Data...");
					disable_all_element('preference_settings_div','input');
	
					$('#preference_settings_div').fadeIn(1000, function() {

						// Animation complete
						$('select').attr('disabled','disabled');
						$('input').attr('disabled','disabled');
					});
					$.ajax({
						url:'signup/update_preference_strring',
						data:{birthday_hidden:$('#birthday_hidden').val(),home_page:$('#home_page').val(),security:$('#security').val(),gossip:$('#gossip').val(),notification:$('#notification').val()},
						type:"POST",
						 success:function(data){
							 var resp=data.split(";");
								if(resp[1]=="True"){
                                                                    enable_all_element('preference_settings_div','input');
                                                                    hide_notification_bar();
									 $('#preference_settings_div').fadeOut(1000, function() {
										 $('select').removeAttr('disabled');
										$('input').removeAttr('disabled');
										 $('#preference_settings_span_head').addClass("span_head").removeClass("span_head_bold");	
										 $('#invite_friends_span_head').addClass("span_head_bold").removeClass("span_head");	
										 $('#invite_friends_step').addClass("step").removeClass("step_blur");		
										 $('#invite_friends_div').fadeIn(1000, function(){});
									 });
									 upload_data_complete_div_style();
								}else if(resp[1]=="False"){
                                                                    enable_all_element('preference_settings_div','input');
                                                                    hide_notification_bar();
									$('#preference_settings_div').fadeIn(1000, function() {
	
										// Animation complete
										$('select').removeAttr('disabled');
										$('input').removeAttr('disabled');
										alert('Server Error');
										uploading_data_error_div_style("Server Error");
									});
								}
						},error: function(jqXHR, textStatus, errorThrown) {
							 
							enable_all_element('preference_settings_div','input');
                                                        hide_notification_bar();
							$('#preference_settings_div').fadeIn(3000, function() {

								// Animation complete
								$('select').removeAttr('disabled');
								$('input').removeAttr('disabled');
							});
							uploading_data_error_div_style("Internet Connection Lost");
			                
			              }
					});
				
				}
				function skip_update_preference_setting()
				{
					 $('#preference_settings_div').fadeOut(1000, function() {
						 $('select').removeAttr('disabled');
						$('input').removeAttr('disabled');
						 $('#preference_settings_span_head').addClass("span_head").removeClass("span_head_bold");	
						 $('#invite_friends_span_head').addClass("span_head_bold").removeClass("span_head");	
						 $('#invite_friends_step').addClass("step").removeClass("step_blur");		
						 $('#invite_friends_div').fadeIn(1000, function(){});
					 });
				}
				
				function complete_submit_invite_friends_data()
				{
					chage_notification_content("Registration Complete");
                                        show_success_then_hide(5000,"");
                                        $('select').removeAttr('disabled');
					$('input').removeAttr('disabled');
					$('#invite_friends_div').fadeOut(3000, function() {});
					$('#registration_success_mail_account').html("<b>"+$('#u_email').attr("value")+"<b>");
					$('#registration_success').fadeIn(3000, function() {});
				}
				function skip_update_invite_friends_data()
				{
                                        chage_notification_content("Registration Complete");
                                        show_success_then_hide(5000,"");
					$('select').removeAttr('disabled');
					$('input').removeAttr('disabled');
					$('#invite_friends_div').fadeOut(500, function() {});
					$('#registration_success_mail_account').html("<b>"+$('#u_email').attr("value")+"<b>");
					$('#registration_success').fadeIn(500, function() {});
					
				}
				function is_valid_email(value){
					
					   var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
					   if (!filter.test(value)) 
						return false;
					   else
						return true;
				}
				
				function check_email(value)
				{
					var email_one=$("#password").val().length;
					//var email_two=$("#r_password").val().length;
					if(email_one!=value)
					{
						alert('Email address must be same');
					}
				}
				
				function basic_info_validation()
				{
					if($('#f_name').val()==''){
						$('#f_name').css("background","Red").focus();
                                             return false;
                                     }else
                                         $('#f_name').css("background","white");
                                     
					
                                     if($('#l_name').val()==''){
						$('#l_name').css("background","Red").focus();
                                             return false;
                                     }else
                                        $('#l_name').css("background","white");
					
					if($('#gender').val()==''){
                                         $('#gender').css("background","Red").focus();
                                         return false;
                                     }else
                                         $('#gender').css("background","white");
					
					if($('#year').val()==''){
						$('#year').css('background','Red').focus();
                                             return false;
                                     }else
                                         $('#year').css("background","white");

					if($('#month').val()==''){
                        $('#month').css('background','Red').focus();
                        return false;
                    }else
                        $('#month').css("background","white");
                    
                                     
					if($('#day').val()==''){
						$('#day').css('background','Red').focus();
                                             return false;
                                     }else
                                         $('#day').css("background","white");
                                     
					
					
                                     if($('#u_email').val()==''){
						$('#u_email').css('background','Red').focus();
                                             return false;
                                     }else{
                                         $('#u_email').css("background","white");
                                         if(!is_valid_email($('#u_email').attr("value"))){
                                             alert('Email is not Valid');
                                             return false;
                                         }
                                      } 
								if($('#r_u_email').val()==''){
                                         $('#r_u_email').css('background','Red').focus();
                                          return false;
                                     }else{
                                       
                                          
                                          if($('#u_email').attr("value")!=$('#r_u_email').attr("value")){
                                             $('#r_u_email').css("background","Red").focus();
                                             $('#u_email').css("background","Red");
                                             alert('Email Missmatched');
                                             return false;
                                          }else{
                                             $('#r_u_email').css("background","white");
                                             $('#u_email').css("background","white");
                                          }
                                      }
                                      
									if($('#password').val()==''){
                                         $('#password').css('background','Red').focus();
                                         return false;
                                     }else{
                                         
                                         if($("#password").val().length<6){
											alert('Password minimum 6 character');
                                             $('#password').css('background','Red').focus();
                                             return false;
                                         }else
                                               $('#password').css("background","white");
                                      }
					return true;
                                     
				}
				</script>
				<div class="registration">
					<input type="hidden" id="base_url" value="<?php echo $site_url;?>">
					<div class="top_container">
						<div class="top_info">
							<div class="top_p">
								<p style="padding:3px; line-height:17px;" >
									This is a site for everyone brave enough to put that mirror</br>
									in fornt of you and be hudge, not on your skill or your </br>
									worldview, just how you are as a frined and a member of </br>
									society. Fell Free to browse and look at anyones reputation </br>
									but remember, if you want to judge, you have to be open </br>
									to be judge too. Leave somthing good about a family </br>
									member or somthing nasty about a classmate,
								</p>
								
							</div>
						</div>
						
						<div class="top_status">
							<div class="status1">
								<div class="statePara">
									<span>25,5455,24 People</span>
								</div>
							</div>
							<div class="status2">
								<div class="statePara">
									<span>25,5455,24 People</span>
								</div>
							</div>
							<div class="status3">
								<div class="statePara">
									<span>25,5455,24 People</span>
								</div>
							</div>
						
						</div>
						
						<div class="top_best">
							<div class="heading">
							</div>
							<div class="personality">
								<img src="<?php echo base_url(); ?>images/george_clooney.png" height="100" width="70" />
									<div class="personality_info">
									<span class="plarge_span">George Clooney</span>
									<span class="psmall_span">New York &nbsp 1/15/11</span>
										<div id="szlider">
											<div id="szliderbar">
											</div>
											<div id="szazalek">
											</div>
										</div>
										<div id="szlider">
											<div id="szliderbar">
											</div>
											<div id="szazalek">
											</div>
										</div>
									</div>	
							</div>
						</div>
					</div>
					<div class="signupwrap">
						<div class="signup_head">
							<div class="span_head">
								<span id="basic_info_span_head" class="span_head_bold">Basic Info</span>
							</div>
							<div class="span_head">
								<span id="profile_data_span_head" class="span_head">Profile Data</span>
							</div>	
							<div class="span_head">
								<span id="preference_settings_span_head" class="span_head">Preference Settings</span>
							</div>
							<div  class="span_head">
								<span id="invite_friends_span_head" class="span_head">Invite Friend</span>
							</div><br>
							<div id="error_container" style="width:940px;height:35px;margin:0 auto;overflow:hidden;">
								<div id="error_div" class="error_notify" style="display:none;">
									<img id="submit_data_process_img" style="float:left; display:none;" src="<?php echo base_url().'images/process_data.gif'; ?>" />
									<img id="submit_data_error_img" style="float:left; display:none;" src="<?php echo base_url().'images/cross.png'; ?>" width="16" height="16" />
									<div id="submit_data_process" style="display:none;"></div>
									<div id="submit_data_error" style="display:none;"></div>
								</div>
							</div>
						</div>
						<div class="signup_content">
							<div class="step_wrap">
								<div id="basic_info_step" class="step">
									<span>Step1:Basic Info</span>
								</div>
								<div id="profile_data_step" class="step_blur">
									<span>Step2:Profile Data</span>
								</div>
								<div id="preference_settings_step" class="step_blur">
									<span>Step3:Preference Settings</span>
								</div>
								<div id="invite_friends_step" class="step_blur">
									<span>Step4:Invite Friend</span>
								</div>
							</div>
							
							<div id="basic_info_div">
								<form class="reg_form">
									<div class="reg_content">
										<div class="reg_field">
											<span class="reg_field_span">First name :</span>
											<input type="text" class="reg_input_large" name="f_name" id="f_name">
										</div>
										<div class="reg_field">
											<span class="reg_field_span">Last Name :</span>
											<input type="text" class="reg_input_large" name="l_name" id="l_name">
										</div>
										<div class="reg_field">
											<span class="reg_field_span">Gender :</span>
	                                                                                <select class="reg_select_large" name="gender" id="gender">
	                                                                                    <option value="">Select Gender</option>
                                                                                            <?php foreach ($all_gender as $rowData) {?>
	                                                                                    <option value="<?php echo $rowData->id;?>"><?php echo $rowData->value; ?></option>
                                                                                            <?php }?>
	                                                                                </select>
										</div>
										<div class="reg_field">
											<span class="reg_field_span">Birthday :</span>
											<div class="input_container">
											
												<select class="reg_select_small" name="year" id="year">
	                                                                                    <option value="">- Year -</option>
	                                                                                    <?php foreach ($all_year as $year_Data){?>
	                                                                                    <option value="<?php echo $year_Data->name;?>"><?php echo $year_Data->name;?></option>
	                                                                                      <?php }?>
	                                      </select>   
	                                  
	                                      <select class="reg_select_small" name="month" id="month">
	                                                                                    <option value="" >- Month -</option>
	                                                                                    <?php foreach ($all_month as $month_Data){?>
	                                                                                    <option value="<?php echo $month_Data->id;?>"><?php echo $month_Data->name;?></option>
	                                                                                   <?php }?>
	                                       </select> 
	                                       <select class="reg_select_small" name="day" id="day">
	                                                                                    <option value="" >- Day -</option>
	                                                                                    <?php foreach ($all_day as $day_Data){?>
	                                                                                    <option value="<?php echo $day_Data->name;?>"><?php echo $day_Data->name;?></option>
	                                                                                    <?php }?>
	                                          </select>                                             
											
	                                                                                
	                                      
											
											
	                                   		</div>
										</div>
										<div class="reg_field">
											<span class="reg_field_span">Email :</span>
											 <input type="text" class="reg_input_large" name="u_email" id="u_email">
										</div>
										<div class="reg_field">
											<span class="reg_field_span">Re enter Email :</span>
											<input type="text" class="reg_input_large" name="r_u_email" id="r_u_email">
										</div>
										<div class="reg_field">
											<span class="reg_field_span">Password :</span>
											<input type="password" class="reg_input_large" name="password" id="password"> 
										</div>
										<div class="reg_field">
											<span class="reg_field_span">Captcha :</span>
											<div class="input_container">
											
											<input id="txtCaptchaDiv" class="reg_input_small" type="text" />
											<input id="txtCaptcha" class="reg_input_small" type="text" />
											</div>
										</div>
									</div>
									<div class="upload_div">
										<span>Upload Profile Photo</span>
										<div class="photo_div" >
											<img id="profile_uploaded_pic" style="height: 149px;width: 149px;" >
										</div>
										<span>From:</span>
										<div class="reg_button_div">
											<div class="browse_button">
	                                                       <input type="hidden" id="pic_path" name="pic_path" value=""/>
	                                                      <input type="file" id="images" name="images"  class="file_browse" />
											</div>
											<div class="browse_button_web">
												<input type="button" class="file_browse_web" />
	                                                                                       
											</div>
											<input id="pic_path_name" class="path_area" type="text">
											<div class="upload">
												<input type="button" class="upload_btn" id="uploadbtn" value="upload_file"  />
											</div>
	
										</div>
									</div>
									<input id="submit_basic_info_btn" onclick="submit_basic_info()" type="button" class="submit_btn" value="Submit">
								</form>
							</div>
							<div id="profile_data_div" style="display:none;" >
								<form class="reg_form">
									<div class="reg_content">
										<div class="reg_field">
											<span class="reg_field_span">Current location :</span>
											<div class="input_container">
											<input class="reg_input_small" type="text"  name="current_location_1" id="current_location_1" />
											<input class="reg_input_small" type="text" name="current_location_2" id="current_location_2" />
											</div>
										</div>
										<div class="reg_field">
											<span class="reg_field_span">Hometown :</span>
											<div class="input_container">
											<input class="reg_input_small" type="text" name="home_town_1" id="home_town_1" />
											<input class="reg_input_small" type="text" name="home_town_2" id="home_town_2" />
										</div>
										</div>
										<div class="reg_field">
											<span class="reg_field_span">Organization 1 :</span>
											<input class="reg_input_large" type="text" name="organization_1" id="organization_1" />
										</div>
										<div class="reg_field">
											<span class="reg_field_span">Organization 2 :</span>
											<input class="reg_input_large" type="text" name="organization_2" id="organization_2" />
										</div>
										<div class="reg_field">
											<span class="reg_field_span">High School :</span>
											<input class="reg_input_large" type="text" name="high_school" id="high_school" />
										</div>
										<div class="reg_field">
											<span class="reg_field_span">Higher Education 1 :</span>
											<input class="reg_input_large" type="text" name="higher_education_1" id="higher_education_1" />
										</div>
										<div class="reg_field">
											<span class="reg_field_span">Higher Education 2 :</span>
											<input class="reg_input_large" type="text" name="higher_education_2" id="higher_education_2"/>
										</div>
										<div class="reg_field">
											<span class="reg_field_span">Work place 1 :</span>
											<input class="reg_input_large" type="text" name="workplace_1" id="workplace_1" />
										</div>
										<div class="reg_field">
											<span class="reg_field_span">Work place2 :</span>
											<input class="reg_input_large" type="text" name="workplace_2" id="workplace_2" />
										</div>
									</div>
									<div class="sub_div2">
										<input type="button" class="submit_btn" value="Submit" onclick="update_profile_data()" >
										<span class="skip_span"><a href="javascript:skip_update_profile_data()">(skip step)</a></span>
									</div>
									
								</form>
							</div>
							<div id="preference_settings_div" style="display:none">
							<form class="reg_form">
								<div class="reg_content">
									<div class="reg_field">
										<span class="reg_field_span">Homepage :</span>
										<select class="reg_select_large"  name="home_page" id="home_page">
											 <option value="1">"MY Account" Default Front Page</option> 
										</select>
									</div>
									<div class="reg_field">
										<span class="reg_field_span">Security :</span>
										<select class="reg_select_large" name="security" id="security" >
											 <option value="1">Keep me signed in from this computer.</option>
                                                                                         <option value="2">Don't keep me signed in.</option>
										</select>
									</div>
									<div class="reg_field">
										<span class="reg_field_span">Traits for Gossip :</span>
										<select class="reg_select_large" id="gossip" name="gossip" >
											 <option value="1">People can score on My trait</option>
                                                                                         <option value="2">All gossip is allowed except on Apperances</option>
										</select>
									</div>
									<div class="reg_field">
										<span class="reg_field_span">Notifications :</span>
										<select class="reg_select_large"  name="notification" id="notification" >
											<option value="1">Only Email Me When someone gossips about me.</option>
                                                                                        <option value="2">Email me when someone gossips about me and my favorites.</option>
                                                                                        <option value="2">Never email me.</option>
										</select>
									</div>
								</div>
								<div class="sub_div3">
									<input type="button" class="submit_btn" value="Submit" onclick="update_preference_setting()" >
									<span class="skip_span"><a href="javascript:skip_update_preference_setting()">(skip step)</a></span>
								</div>
								
							</form>
                        </div>
                        <div id="invite_friends_div"  style="display:none;">
                        	<form class="reg_form">
								<div  class="reg_content_large">
                                                                        <div id="invite_friends_content_div" >
                                                                            <div class="reg_field_large">
                                                                                    <span class="reg_field_span">1.Friend :</span>
                                                                                    <div class="input_container_l">
                                                                                    <input class="reg_input_elarge" type="text" placeholder="Name" id="friend_name[]" name="friend_name[]" />
                                                                                    <input class="reg_input_elarge" type="text" placeholder="Email" id="friend_email[]" name="friend_email[]" />
                                                                                    </div>
                                                                            </div>
                                                                            <div class="reg_field_large">
                                                                                    <span class="reg_field_span">2.Friend :</span>
                                                                                    <div class="input_container_l">
                                                                                    <input class="reg_input_elarge" type="text" placeholder="Name" id="friend_name[]" name="friend_name[]" />
                                                                                    <input class="reg_input_elarge" type="text" placeholder="Email" />
                                                                                    </div>
                                                                            </div>
                                                                            <div class="reg_field_large">
                                                                                    <span class="reg_field_span">3.Friend :</span>
                                                                                    <div class="input_container_l">
                                                                                    <input class="reg_input_elarge" type="text" placeholder="Name" id="friend_name[]" name="friend_name[]" />
                                                                                    <input class="reg_input_elarge" type="text" placeholder="Email" />
                                                                                    </div>
                                                                            </div>
                                                                            <div class="reg_field_large">
                                                                                    <span class="reg_field_span">4.Friend :</span>
                                                                                    <div class="input_container_l">
                                                                                    <input class="reg_input_elarge" type="text" placeholder="Name" id="friend_name[]" name="friend_name[]" />
                                                                                    <input class="reg_input_elarge" type="text" placeholder="Email" />
                                                                                    </div>
                                                                            </div>
                                                                            <div class="reg_field_large">
                                                                                    <span class="reg_field_span">5.Friend :</span>
                                                                                    <div class="input_container_l">
                                                                                    <input class="reg_input_elarge" type="text" placeholder="Name" id="friend_name[]" name="friend_name[]" />
                                                                                    <input class="reg_input_elarge" type="text" placeholder="Email" />
                                                                                    </div>
                                                                            </div>
                                                                            <!--Hidden Tags[Starts] -->
                                                                                <input type="hidden" id="invite_friend_row_size" value="5" />
                                                                            <!--Hidden Tags[Ends] -->
                                                                        </div>
									<div class="add_contact">
										<input type="button" class="add_contact_btn" onclick="load_invite_friend_row()" value="Add Contact">
									</div>
									<div class="email_div">
										<span style="margin:0 0 0 15px;font-weight:bold;"> Invitation Mail</span>
                                                                                  <div style="  background-color: white;
                                                                                                border: 2px solid black;
                                                                                                color: black;
                                                                                                margin: 13px 14px;
                                                                                                padding: 7px 8px 13px 17px;
                                                                                            }">
                                                                                        Hello{fried_name},<br>
                                                                                        Your Friend{first_name} wants to invite you to register on our cashback site.
                                                                                        <br>pelase click here to accept his invitation.
                                                                                        <br>Best Regards,{first_name}
                                                                                </div>
									</div>
									<div class="sub_div4">
										<input type="button" class="submit_btn" value="Submit" onclick="submit_invite_friend()" >
										<span class="skip_span"><a href="javascript:skip_update_invite_friends_data()">(skip step)</a></span>
								</div>
								</div>

							</form>
                        </div>
                        <div  id="registration_success" style="display:none;">
                       		<form class="reg_form" >
                        		<div>
                        			<h3>To Activate Your Account Please Check Your Email at <label id="registration_success_mail_account"></label></h3> 
                        		</div>
                        	</form>
                        </div>
                       
						</div>
					</div>
				</div>
		<!--</div>-->
			<!--Footer>-->
			<script type="text/javascript" src="<?php echo base_url();?>js/upload.js" > </script>
 <?php include 'footer.php' ?>

