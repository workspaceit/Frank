<?php include 'header.php' ?>
 <?php include 'advertise_left.php' ?>
 <?php include 'advertise_right.php' ?>
 <script type="text/javascript">
				function is_valid_email(email){
				    var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
				    if (!filter.test(email)) 
				           return false;
				    else
				        return true;
				}
								
				function submit_update_basic_info()
				{
				
					if(basic_info_validation()){
						$.ajax({
						    url:$('#base_url').val()+'update/submit_update_basic_information',
							data: {f_name:$("#f_name").val(),l_name:$("#l_name").val(),gender:$("#gender").val(),month:$("#month").val(),day:$("#day").val(),year:$("#year").val(),pic_path:$('#pic_path').val()},
							type: "POST",
							success: function(data){
								var resp=data.split(";");
								if(resp[1]=="True"){

									$('#basic_info_div').hide();
									$('#basic_info_span_head').addClass("span_head").removeClass("span_head_bold");
									$('#profile_data_step').addClass("step").removeClass("step_blur");
									$('#profile_data_span_head').addClass("span_head_bold").removeClass("span_head");	
									$('#profile_data_div').show();
									
								}else if(resp[1]=="False"){
										$('#'+resp[2]).css('background','yellow');
										$('#error_div').html(resp[3]);
								}
							}
						});
					}
				}
				
				function submit_update_profile_data()
				{
					
					$.ajax({
                       url:$('#base_url').val()+'update/update_profile_data',
                       data:{current_location_1:$('#current_location_1').val(),current_location_2:$('#current_location_2').val(),home_town_1:$('#home_town_1').val(),home_town_2:$('#home_town_2').val(),organization_1:$('#organization_1').val(),organization_2:$('#organization_2').val(),high_school:$('#high_school').val(),higher_education_1:$('#higher_education_1').val(),higher_education_2:$('#higher_education_2').val(),workplace_1:$('#workplace_1').val(),workplace_2:$('#workplace_2').val()},
                       type:"POST",
                       success: function(data){
                    	   	$('#profile_data_div').hide();
                    	   	$('#preference_settings_div').show();
                    	   	$('#preference_settings_step').addClass("step").removeClass("step_blur");
							$('#profile_data_span_head').addClass("span_head").removeClass("span_head_bold");	
							$('#preference_settings_span_head').addClass("span_head_bold").removeClass("span_head");	
							
						}
					});
				}
				function skip_update_profile_data()
				{
					$('#profile_data_div').hide();
            	   	$('#preference_settings_div').show();
            	   	$('#preference_settings_step').addClass("step").removeClass("step_blur");
					$('#profile_data_span_head').addClass("span_head").removeClass("span_head_bold");	
					$('#preference_settings_span_head').addClass("span_head_bold").removeClass("span_head");	
									
								
				}
				
				function submit_update_perference_settings()
				{
					$.ajax({
					url:$('#base_url').val()+'update/update_preference_strring',
					data:{birthday_hidden:$('#birthday_hidden').val(),home_page:$('#home_page').val(),security:$('#security').val(),gossip:$('#gossip').val(),notification:$('#notification').val()},
					type:"POST",
					 success:function(data){
						 $('#preference_settings_div').hide();
						 $('#preference_settings_span_head').addClass("span_head").removeClass("span_head_bold");	
						 $('#invite_friends_span_head').addClass("span_head_bold").removeClass("span_head");	
						 $('#invite_friends_step').addClass("step").removeClass("step_blur");		
						 $('#invite_friends_div').show();
					}
					});
				}
				function skip_update_preference_strring()
				{
					$('#preference_settings_div').hide();
					$('#preference_settings_span_head').addClass("span_head").removeClass("span_head_bold");	
					$('#invite_friends_span_head').addClass("span_head_bold").removeClass("span_head");	
					$('#invite_friends_step').addClass("step").removeClass("step_blur");		
					$('#invite_friends_div').show();
				}
				
				function submit_update_invite_friends_data()
				{
					$.ajax({
                        url:'signup/update_invite_friends_data',
                        data:{friend_name:$('#friend_name').val(),friend_email:$('#friend_email').val()},
                        type:"POST",
                        success:function(data){
                        	$('#invite_friends_div').hide();
        					$('#registration_success_mail_account').html("<b>"+$('#u_email').attr("value")+"<b>");
        					$('#registration_success_mail_account').show();
    					}
						});
				}
				function skip_update_invite_friends_data()
				{
					$('#invite_friends_div').hide();
					$('#registration_success_mail_account').html("<b>"+$('#u_email').attr("value")+"<b>");
					$('#registration_success').show();
					
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
                                     
					
					
                                    
				
					
					return true;
                                     
				}
				</script>
				<div class="registration">
					<input type="hidden" id="base_url" value="<?php echo base_url();?>">
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
									<?php foreach ($basic_info_all as $rowData) {?>
										<div class="reg_field">
											<span class="reg_field_span">First name :</span>
											<input type="text" class="reg_input_large" value="<?php echo $rowData->f_name;?>" name="f_name" id="f_name">
										</div>
										<div class="reg_field">
											<span class="reg_field_span">Last Name :</span>
											<input type="text" class="reg_input_large" value="<?php echo $rowData->l_name;?>" name="l_name" id="l_name">
										</div>
										<div class="reg_field">
											<span class="reg_field_span">Gender :</span>
	                                                                                <select class="reg_select_large" name="gender" id="gender">
	                                                                                <?php 
	                                                                                   $gender_name;
	                                                                                   foreach ($user_all_gender as $rowdata){
	                                                                                   $gender_name=$rowdata->gender;
	                                                                                   if ($rowData->gender==$gender_name){
	                                                                                 ?>
	                                                                                 <option selected="selected" value="<?php echo $gender_name; ?>"><?php echo $gender_name; ?></option>
	                                                                                 <?php } 
	                                                                                 else {
	                                                                                 ?>
	                                                                                 <option  value="<?php echo $gender_name; ?>"><?php echo $gender_name; ?></option>
	                                                                                <?php }
	                                                                                 }?> 
	                                                                                </select>
										</div>
										
										
										<div class="reg_field">
											<span class="reg_field_span">Birthday :</span>
											 <select class="reg_select_small" name="day" id="day">
											                                        <?php
											                                        $dob_day='';
											                                        foreach ($day_name as $rowData){
											                                        $dob_day=$rowData->name;
											                                        }
											                                       	?>
											                                       	<?php foreach ($day_name_all as $rowdata){
											                                       	 if ($dob_day==$rowdata->name){
											                                       		?>
	                                                                                   <option selected="selected" value="<?php echo $rowdata->name;?>"><?php echo $rowdata->name;?></option>
	                                                                                   <?php } else {?>
	                                                                                   <option value="<?php echo $rowdata->name;?>"><?php echo $rowdata->name;?></option>
	                                                                                   <?php }
	                                                                                   }?>
	                                          </select>       
	                                        
	                                          <select class="reg_select_small" name="month" id="month">
	                                                              
	                                                                                   <?php 
	                                                                                    $dob_month='';
	                                                                                    foreach ($month_data_all as $rowData)
	                                                                                    {
	                                                                                    	 $dob_month=$rowData->name;
	                                                                                    	 echo $dob_month;
	                                                                                    	
	                                                                                    } ?>
	                                                                                    <?php foreach ($date_name_all as $rowdata){?>
	                                                                                   <?php if($dob_month==$rowdata->name){?>
	                                                                                    <option selected="selected" value="<?php echo $rowdata->id;?>"><?php echo $rowdata->name;?></option>
	                                                                                    <?php } else{ ?>
	                                                                                    
	                                                                                     <option  value="<?php echo $rowdata->id;?>"><?php echo $rowdata->name;?></option>
	                                                                                    <?php }
	                                                                                    }?>
	                                         </select>                                         
											<select class="reg_select_small" name="year" id="year">
	                                                                                   <?php 
	                                                                                   $dob_year='';
	                                                                                   foreach ($year_name as $rowData)
	                                                                                   {
	                                                                                         $dob_year=$rowData->name;
 	                                                                                   }
	                                                                                   ?>
	                                                                                   <?php foreach ($year_name_all as $rowdata){
	                                                                                   
	                                                                                   	if($dob_year==$rowdata->name)
	                                                                                   	{
	                                                                                   	?>
	                                                                                    <option selected="selected" value="<?php echo $rowdata->name;?>"><?php echo $rowdata->name;?></option>
	                                                                                    <?php }else {?>
	                                                                                      <option value="<?php echo $rowdata->name;?>"><?php echo $rowdata->name;?></option>
	                                                                                    <?php }
	                                                                                    }?>
	                                      </select> 
	                  
										</div>
										<?php }?>
										
										<div class="reg_field">
											<span class="reg_field_span">Captcha :</span>
											<input class="reg_input_small" type="text" />
											<input class="reg_input_small" type="text" />
										</div>
									</div>
									<?php foreach ($basic_info_all as $rowData) {?>
									<div class="upload_div">
										<span>Upload Profile Photo</span>
										<div class="photo_div" >
											<img id="profile_uploaded_pic" style="height: 149px;width: 149px;" src="<?php echo base_url().'uploads/'.$rowData->pic_path;?>" >
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
											<input class="path_area" type="text">
											<div class="upload">
												<input type="button" class="upload_btn" id="uploadbtn" value="upload_file"  />
											</div>
	
										</div>
									</div>
									<?php }?>
									<input id="submit_basic_info_btn" onclick="submit_update_basic_info()" type="button" class="submit_btn" value="Submit">
								</form>
							</div>
							<div id="profile_data_div" style="display:none">
							
								<form class="reg_form">
								<?php foreach ($user_profile_data_all as $rowData){?>
									<div class="reg_content">
										<div class="reg_field">
											<span class="reg_field_span">Current location :</span>
											<input class="reg_input_small" type="text" value="<?php echo $rowData->current_location_1;?>" name="current_location_1" id="current_location_1" />
											<input class="reg_input_small" type="text" value="<?php echo $rowData->current_location_2;?>" name="current_location_2" id="current_location_2" />
										</div>
										<div class="reg_field">
											<span class="reg_field_span">Hometown :</span>
											<input class="reg_input_small" type="text" value="<?php echo $rowData->home_town_1;?>" name="home_town_1" id="home_town_1" />
											<input class="reg_input_small" type="text" value="<?php echo $rowData->home_town_2;?>" name="home_town_2" id="home_town_2" />
										</div>
										<div class="reg_field">
											<span class="reg_field_span">Organization 1 :</span>
											<input class="reg_input_large" type="text" value="<?php echo $rowData->organization_1;?>" name="organization_1" id="organization_1" />
										</div>
										<div class="reg_field">
											<span class="reg_field_span">Organization 2 :</span>
											<input class="reg_input_large" type="text" value="<?php echo $rowData->organization_2;?>" name="organization_2" id="organization_2" />
										</div>
										<div class="reg_field">
											<span class="reg_field_span">High School :</span>
											<input class="reg_input_large" type="text" value="<?php echo $rowData->high_school;?>" name="high_school" id="high_school" />
										</div>
										<div class="reg_field">
											<span class="reg_field_span">Higher Education 1 :</span>
											<input class="reg_input_large" type="text" value="<?php echo $rowData->higher_education_1;?>" name="higher_education_1" id="higher_education_1"  />
										</div>
										<div class="reg_field">
											<span class="reg_field_span">Higher Education 2 :</span>
											<input class="reg_input_large" type="text" value="<?php echo $rowData->higher_education_2?>" name="higher_education_2" id="higher_education_2"/>
										</div>
										<div class="reg_field">
											<span class="reg_field_span">Work place 1 :</span>
											<input class="reg_input_large" type="text" value="<?php echo $rowData->workplace_1;?>" name="workplace_1" id="workplace_1" />
										</div>
										<div class="reg_field">
											<span class="reg_field_span">Work place1 :</span>
											<input class="reg_input_large" type="text" value="<?php echo $rowData->workplace_2;?>" name="workplace_2" id="workplace_2" />
										</div>
									</div>
									<?php }?>
									<div class="sub_div2">
										<input type="button" class="submit_btn" value="Submit" onclick="submit_update_profile_data()" >
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
                                                                                        <option value="3">Never email me.</option>
										</select>
									</div>
								</div>
								<div class="sub_div3">
									<input type="button" class="submit_btn" value="Submit" onclick="submit_update_perference_settings()" >
									<span class="skip_span"><a href="javascript:skip_update_preference_strring()">(skip step)</a></span>
								</div>
								
							</form>
                        </div>
                        <div id="invite_friends_div" style="display:none;">
                        	<form class="reg_form">
								<div class="reg_content_large">
									<div class="reg_field_large">
										<span class="reg_field_span">1.Friend :</span>
										<input class="reg_input_elarge" type="text" placeholder="Name" id="friend_name[]" name="friend_name[]" />
										<input class="reg_input_elarge" type="text" placeholder="Email" id="friend_email[]" name="friend_email[]" />
									</div>
									<div class="reg_field_large">
										<span class="reg_field_span">2.Friend :</span>
										<input class="reg_input_elarge" type="text" placeholder="Name" id="friend_name[]" name="friend_name[]" />
										<input class="reg_input_elarge" type="text" placeholder="Email" />
									</div>
									<div class="reg_field_large">
										<span class="reg_field_span">3.Friend :</span>
										<input class="reg_input_elarge" type="text" placeholder="Name" id="friend_name[]" name="friend_name[]" />
										<input class="reg_input_elarge" type="text" placeholder="Email" />
									</div>
									<div class="reg_field_large">
										<span class="reg_field_span">4.Friend :</span>
										<input class="reg_input_elarge" type="text" placeholder="Name" id="friend_name[]" name="friend_name[]" />
										<input class="reg_input_elarge" type="text" placeholder="Email" />
									</div>
									<div class="reg_field_large">
										<span class="reg_field_span">5.Friend :</span>
										<input class="reg_input_elarge" type="text" placeholder="Name" id="friend_name[]" name="friend_name[]" />
										<input class="reg_input_elarge" type="text" placeholder="Email" />
									</div>
									<div class="add_contact">
										<input type="submit" class="add_contact_btn" value="Add Contact">
									</div>
									<div class="email_div">
										<textarea></textarea>
									</div>
									<div class="sub_div4">
										<input type="button" class="submit_btn" value="Submit" onclick="update_invite_friends_data()" >
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


