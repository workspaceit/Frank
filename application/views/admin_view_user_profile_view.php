<?php include 'header.php' ?>
<!--For Tabs-->

<script type="text/javascript" src="<?php echo base_url(); ?>jQuery/tytabs.jquery.min.js"></script>
<style>
	.editBioDataDiv{
		color:black;
		text-align:left;
		background:white;border: 1px solid #111111;
		float: left;
		weight: 17px;
		height: 20px;
		margin: 0;
		width: 175px;
                
											    
	}
</style>
<!--  By Tanveer -->
<script type="text/javascript">
$(document).ready(function() {
      // hides the slickbox as soon as the DOM is ready
      $('.quality_tabbed').animate({height: '112px'});
  $('.down').click(function(){
         $(this).parent().find('.quality_tabbed').each(function(){
                $(this).attr("class");
                if($(this).css("height") == "112px") {
                $(this).animate({height: "100%"}, 1000);

                } else {
                    $(this).animate({height: "112px"}, 500);
                    }
                    return false;
                 });
          });
        
        });
</script>    
<script type="text/javascript">
$(document).ready(function() {
      // hides the slickbox as soon as the DOM is ready
      $('.demo_radio').animate({height: '80px'});
      $('#gossip_intenders_content_div').animate({height: '80px'});
      $('.hide_content').hide();
      $('#show_up').hide();
      $('#show_up1').hide();
  $('.icon').click(function(){
        if($(".demo_radio").css("height") == "80px") {
          $("#something").animate({height: "100%"}, 1000);
          $('#part1').show();
          $('#show_down').hide();
          $('#show_up').show();

        } else {
          $(".demo_radio").animate({height: "80px"}, 500);
          $('#part1').hide();
          $('#show_down').show();
          $('#show_up').hide();

        }
        return false;
    });
    $('.icon1').click(function(){
        if($("#gossip_intenders_content_div").css("height") == "80px") {
          $("#gossip_intenders_content_div").animate({height: "100%"}, 1000);
          $('#part2').show();
          $('#show_down1').hide();
          $('#show_up1').show();

        } else {
          $(".demo_radio").animate({height: "80px"}, 500);
          $('#part2').hide();
          $('#show_down1').show();
          $('#show_up1').hide();

        }
        return false;
    });
  });
</script>
<script type="text/javascript">
  //   $(function() {
  //  $(".center").height($(".tab_content").height()+150);
  // });  
</script>
<script type="text/javascript">
     $(document).ready(function() {
           $(".center").height($("#tab1").height()+150);    
          $('#content1').click(function(){
            $(".center").height($("#tab1").height()+150);
           });
          $('#content2').click(function(){
            $(".center").height($("#tab2").height()+150);
           });
          $('#content3').click(function(){
            $(".center").height($("#tab3").height()+75);
           });
          $('#content4').click(function(){
            $(".center").height($("#tab4").height()+150);
           });
     });
</script>
<script type="text/javascript">
</script>
 <script>
    $(document).ready(function() {
        $('.tabs > li > a').click(function(event){
        event.preventDefault();//stop browser to take action for clicked anchor
 
        //get displaying tab content jQuery selector
        var active_tab_selector = $('.tabs > li.active > a').attr('href');                  
 
        //find actived navigation and remove 'active' css
        var actived_nav = $('.tabs > li.active');
        actived_nav.removeClass('active');
 
        //add 'active' css into clicked navigation
        $(this).parents('li').addClass('active');
 
        //hide displaying tab content
        $(active_tab_selector).removeClass('active');
        $(active_tab_selector).addClass('hide');
 
        //show target tab content
        var target_tab_selector = $(this).attr('href');
        $(target_tab_selector).removeClass('hide');
        $(target_tab_selector).addClass('active');
         });
      });
 </script>
 <script type="text/javascript">
$(document).ready(function() {
      // hides the slickbox as soon as the DOM is ready
      $('.block1').animate({height: '116px'});
  $('.show').click(function(){
         $(this).parents().find('.block1').each(function(){
                $(this).attr("class");
                if($(this).css("height") == "116px") {
                    $(this).animate({height: "100%"}, 1000);
                    

                } else {
                    $(this).animate({height: "116px"}, 500);
                    }
                    return false;
                 });
          });
        
        });
</script>  
<script type="text/javascript">
  $(document).ready(function(){
      $('.right_slider').animate({width:'15px'});
      $('.right_slider').css('backgroundPosition', '-188px 9px');
      $('.right_show').click(function(){
            if($('.right_slider').css("width") == "15px") {
                    $('.right_slider').animate({width: "200px"}, 300);
                     $('#appearence_right').show({width: "175px"},300);
                     $('.right_slider').css('backgroundPosition', '-4px 9px');

                } else {
                    $('.right_slider').animate({width: "15px"}, 300);
                     $('.right_show').show();
                     $('#appearence_right').hide({width: "175px"},300);
                     $('.right_slider').css('backgroundPosition', '-188px 9px');
                    }
                    return false;
                 });
  });
</script>
                <!-- E of by tanveer -->
<body>
    <!-- Hidden Tags -->
       <input type="hidden"id="site_url" value="<?php echo $site_url; ?>" /> 
    <!-- -->    
 <?php include 'advertise_left.php' ?>
 <?php include 'advertise_right.php' ?>
		<!--<div id="contentwrap">-->
				<div class="uni_content">
					<div class="infoBar">
						<p>My Profile</p>
					</div>
					<div class="mp2_top_container">
						<div class="profile_pic_div"><!--Profile Picture-->
						<?php foreach ($basic_info_all as $basic_data){?>
							<div class="pic_div">
								<span><?php echo $basic_data->f_name; ?>&nbsp &nbsp<?php echo $basic_data->l_name;?></span><br>
                                                                <?php if($basic_data->pic_path!=""){ ?>
                                                                    <img id="user_profile_picture" src="<?php echo base_url().'uploads/'.$basic_data->pic_path;?>" height="154" width="125"/>
                                                                <?php }else{ ?>
                                                                    <img id="user_profile_picture" src="<?php echo base_url().'images/user.png'; ?>" height="154" width="125"/>
                                                                <?php } ?>
							</div>
							<?php }?>
							<div class="pp_progress">
								<div class="progressbar" style="margin: 7px 0 2px 0px;"><!--green-->
									<div class="bottom_bar"></div>
									<div class="i_bar" style="border-right:1px solid #111;background:#00A650;width:85%;"><span class="inside-middle"></span></div>
									<div class="top_inf"><span class="span_name">Hardworking</span><span class="span_score"><span class="span_score">85</span></span></div>
							</div> 
								
							</div>
						</div>
						<?php foreach ($basic_info_all as $basic_data_one){?>
                                                 <div class="bio_data">
							<span>Bio Data</span>
							<div class="bio_info">
								<div class="bi_span">
									<span class="span_bi">Gender:</span>
								</div>
								<div class="bi_input">
                                                                         <?php
                                                                           if($gender==0) {
                                                                            ?>
									 <div class="small_circle" id="gender_hidden">
                                                                             <a href="javascript:void(0)"><span  class="span_scircle">H</span></a>
									</div>
                                                                    <?php }?>
                                                                    <?php
                                                                    if($gender==1){
                                                                            ?>
									 <div class="small_circle_grey" id="gender_hidden">
                                                                             <a href="javascript:void(0)"><span  class="span_scircle">H</span></a>
									</div>
                                                                    <?php }?>
                                                                   
									<div class="editBioDataDiv">
										
										<div id="get_gender_value" style="float: left;"><?php echo $basic_data_one->gender;?></div>
										<a class="bio_data_edit_anchor" style="float:right;display:none;" id="get_gender_anchor" href="javascript:load_content('get_gender')" >
											<img id="get_gender_loader" style="width:10px;height:10px;"  src="<?php echo base_url().'images/edit.png';?>"/>
										</a>
										<img class="bio_data_process" id="get_gender_process" style="width:10px;height:10px;float:right;display:none;"  src="<?php echo base_url().'images/process.gif';?>"/>
									</div>
                                    <?php 
                                    $rowData=explode("-",$basic_data_one->birthday);
	    	                        $year=$rowData[0];
		                            $month=$rowData[1];
		                            $day=$rowData[2];
                                    ?>
								</div>
							</div>
							<div class="bio_info">
								<div class="bi_span">
									<span class="span_bi">Birthday:</span>
								</div>
								<div class="bi_input">
                                                                      <?php if($birthday==0) {?>
									<div class="small_circle" id="birthday_hidden">
                                                                            <a href="javascript:void(0)"><span  class="span_scircle">H</span></a>
									</div>
                                                                    <?php }?>
                                                                    <?php if($birthday==1) {?>
									<div class="small_circle_grey" id="birthday_hidden">
                                                                            <a href="javascript:void(0)"><span  class="span_scircle">H</span></a>
									</div>
                                                                    <?php }?>
									<div class="editBioDataDiv">
										
										<div id="get_birthday_value" style="float: left;"><?php echo $day.'/'.$month.'/'.substr($year,2,2)?></div>
										<a class="bio_data_edit_anchor" style="float:right;display:none;" id="get_birthday_anchor" href="javascript:load_content('get_birthday')" >
											<img id="get_birthday_loader" style="width:10px;height:10px;"  src="<?php echo base_url().'images/edit.png';?>"/>
										</a>
										<img class="bio_data_process" id="get_birthday_process" style="width:10px;height:10px;float:right;display:none;"  src="<?php echo base_url().'images/process.gif';?>"/>
									</div>
									

								</div>
							</div>
							<?php }?>
							<?php foreach ($user_profile_data_all as $profile_data){?>
							<div class="bio_info">
								<div class="bi_span">
									<span class="span_bi">Location:</span>
								</div>
								<div class="bi_input">
                                                                    <?php if($location==0){?>
									<div class="small_circle" id="location_hidden">
                                                                            <a href="javascript:void(0)"><span  class="span_scircle">H</span></a>
									</div>
                                                                    <?php }?>
                                                                     <?php if($location==1){?>
									<div class="small_circle_grey" id="location_hidden">
                                                                            <a href="javascript:void(0)"><span  class="span_scircle">H</span></a>
									</div>
                                                                    <?php }?>
									<div class="editBioDataDiv">
										
										<div id="get_location_value" style="float: left;">
                                                                                   <?php 
                                                                                        if($profile_data->current_location_1!="" && $profile_data->current_location_2!=""){
                                                                                            echo  substr($profile_data->current_location_1,0,9);
                                                                                            if(strlen($profile_data->current_location_1)>9){
                                                                                                echo '...';
                                                                                            }
                                                                                            echo ' & ';
                                                                                            echo  substr($profile_data->current_location_2,0,9);
                                                                                            if(strlen($profile_data->current_location_2)>9){
                                                                                                echo '...';
                                                                                            }
                                                                                        }elseif($profile_data->current_location_1!=""){
                                                                                            echo  substr($profile_data->current_location_1,0,25);
                                                                                            if(strlen($profile_data->current_location_1)>25){
                                                                                                echo '...';
                                                                                            }
                                                                                        }elseif($profile_data->current_location_2!=""){
                                                                                            echo  substr($profile_data->current_location_2,0,25);
                                                                                            if(strlen($profile_data->current_location_2)>25){
                                                                                                echo '...';
                                                                                            }
                                                                                        }
                                                                                   ?>
                                                                                         
                                                                                </div>
										<a class="bio_data_edit_anchor" style="float:right;display:none;" id="get_location_anchor" href="javascript:load_content_of_user_profile_data('get_location')" >
											<img id="get_location_loader" style="width:10px;height:10px;"  src="<?php echo base_url().'images/edit.png';?>"/>
										</a>
										<img class="bio_data_process" id="get_location_process" style="width:10px;height:10px;float:right;display:none;"  src="<?php echo base_url().'images/process.gif';?>"/>
									</div>
								</div>
							</div>
							<div class="bio_info">
								<div class="bi_span">
									<span class="span_bi">Home Town:</span>
								</div>
								<div class="bi_input">
                                                                    <?php if($home_town==0){?>
									<div class="small_circle" id="home_town_hidden">
                                                                            <a href="javascript:void(0)"><span  class="span_scircle">H</span></a>
									</div>
                                                                    <?php }?>
                                                                     <?php if($home_town==1){?>
									<div class="small_circle_grey" id="home_town_hidden">
										<a href="javascript:void(0)"><span  class="span_scircle">H</span></a>
									</div>
                                                                    <?php }?>
									<div class="editBioDataDiv">
										
										<div id="get_home_town_value" style="float: left;">
                                                                                   <?php 
                                                                                        
                                                                                        if($profile_data->home_town_1!="" && $profile_data->home_town_2!=""){
                                                                                            echo  substr($profile_data->home_town_1,0,10);
                                                                                            if(strlen($profile_data->home_town_1)>10){
                                                                                               echo '...';
                                                                                            }
                                                                                            echo ' & ';
                                                                                            echo  substr($profile_data->home_town_2,0,10);
                                                                                            if(strlen($profile_data->home_town_2)>10){
                                                                                                echo '...';
                                                                                            }
                                                                                        }elseif($profile_data->home_town_1!=""){
                                                                                            echo  substr($profile_data->home_town_1,0,25);
                                                                                            if(strlen($profile_data->home_town_1)>10){
                                                                                               echo '...';
                                                                                            }
                                                                                        }elseif($profile_data->home_town_2!=""){
                                                                                             echo  substr($profile_data->home_town_1,0,25);
                                                                                            if(strlen($profile_data->home_town_1)>10){
                                                                                               echo '...';
                                                                                            }
                                                                                        }
                                                                                   ?>
                                                                                         
                                                                                </div>
										<a class="bio_data_edit_anchor" style="float:right;display:none;" id="get_home_town_anchor" href="javascript:load_content_of_user_profile_data('get_home_town')" >
											<img id="get_home_town_loader" style="width:10px;height:10px;"  src="<?php echo base_url().'images/edit.png';?>"/>
										</a>
										<img class="bio_data_process" id="get_home_town_process" style="width:10px;height:10px;float:right;display:none;"  src="<?php echo base_url().'images/process.gif';?>"/>
									</div>
								</div>
							</div>
							<div class="bio_info">
								<div class="bi_span">
									<span class="span_bi">High School:</span>
								</div>
								<div class="bi_input">
                                                                    <?php if($high_school==0){ ?>
									<div class="small_circle" id="high_school_hidden">
                                                                            <a href="javascript:void(0)"><span  class="span_scircle">H</span></a>
									</div>
                                                                    <?php }?>
                                                                     <?php if($high_school==1){ ?>
									<div class="small_circle_grey" id="high_school_hidden">
										<a href="javascript:void(0)"><span  class="span_scircle">H</span></a>
									</div>
                                                                    <?php }?>
									<div class="editBioDataDiv">
										
										<div id="get_high_school_value" style="float: left;">
                                                                                   <?php  echo  substr($profile_data->high_school,0,25);
                                                                                          if(strlen($profile_data->high_school)>25){
                                                                                              echo '....';
                                                                                          }  
                                                                                   ?>
                                                                                         
                                                                                </div>
										<a class="bio_data_edit_anchor" style="float:right;display:none;" id="get_high_school_anchor" href="javascript:load_content_of_user_profile_data('get_high_school')" >
											<img id="get_high_school_loader" style="width:10px;height:10px;"  src="<?php echo base_url().'images/edit.png';?>"/>
										</a>
										<img class="bio_data_process" id="get_high_school_process" style="width:10px;height:10px;float:right;display:none;"  src="<?php echo base_url().'images/process.gif';?>"/>
									</div>
								</div>
							</div>
							<div class="bio_info">
								<div class="bi_span">
									<span class="span_bi">Higher Ed:</span>
								</div>
								<div class="bi_input">
                                                                    <?php if($higher_education==0){?>
									<div class="small_circle" id="higher_education_hidden">
                                                                            <a href="javascript:void(0)"><span  class="span_scircle">H</span></a>
									</div>
                                                                    <?php }?>
                                                                     <?php if($higher_education==1){?>
									<div class="small_circle_grey" id="higher_education_hidden">
										<a href="javascript:void(0)"><span  class="span_scircle">H</span></a>
									</div>
                                                                    <?php }?>
									<div class="editBioDataDiv">
										
										<div id="get_higher_education_value" style="float: left;">
                                                                                   <?php 
                                                                                        if($profile_data->higher_education_1!="" && $profile_data->higher_education_2!=""){
                                                                                          echo  substr($profile_data->higher_education_1,0,10);
                                                                                          if(strlen($profile_data->higher_education_1)>10){
                                                                                              echo '..';
                                                                                          }
                                                                                          echo ' & ';
                                                                                          echo  substr($profile_data->higher_education_2,0,10);
                                                                                          if(strlen($profile_data->higher_education_2)>10){
                                                                                             echo '..';
                                                                                          } 
                                                                                         
                                                                                        }elseif($profile_data->higher_education_1!=""){
                                                                                            echo  $profile_data->higher_education_1;
                                                                                        }elseif($profile_data->higher_education_2!=""){
                                                                                            echo  $profile_data->higher_education_2;
                                                                                        }
                                                                                   ?>
                                                                                         
                                                                                </div>
										<a class="bio_data_edit_anchor" style="float:right;display:none;" id="get_higher_education_anchor" href="javascript:load_content_of_user_profile_data('get_higher_education')" >
											<img id="get_higher_education_loader" style="width:10px;height:10px;"  src="<?php echo base_url().'images/edit.png';?>"/>
										</a>
										<img class="bio_data_process" id="get_higher_education_process" style="width:10px;height:10px;float:right;display:none;"  src="<?php echo base_url().'images/process.gif';?>"/>
									</div>
								</div>
							</div>
							<div class="bio_info">
								<div class="bi_span">
									<span class="span_bi">Work Place:</span>
								</div>
								<div class="bi_input">
                                                                     <?php if($work_place==0){?>
									<div class="small_circle" id="work_place_hidden">
                                                                            <a href="javascript:void(0)"><span  class="span_scircle">H</span></a>
									</div>
                                                                    <?php }?>
                                                                     <?php if($work_place==1){?>
									<div class="small_circle_grey" id="work_place_hidden">
                                                                            <a href="javascript:void(0)"><span  class="span_scircle">H</span></a>
									</div>
                                                                    <?php }?>
									<div class="editBioDataDiv">
										
										<div id="get_workplace_value" style="float: left;">
                                                                                   <?php 
                                                                                        if($profile_data->workplace_1!="" && $profile_data->workplace_2!=""){
                                                                                          echo  substr($profile_data->workplace_1,0,10);
                                                                                          if(strlen($profile_data->workplace_1)>10){
                                                                                              echo '...';
                                                                                          }
                                                                                          echo ' & ';
                                                                                          echo  substr($profile_data->workplace_2,0,10);
                                                                                          if(strlen($profile_data->workplace_2)>10){
                                                                                             echo '...';
                                                                                          } 
                                                                                        }elseif($profile_data->workplace_1!=""){
                                                                                            echo  substr($profile_data->workplace_1,0,10);
                                                                                            if(strlen($profile_data->workplace_1)>10){
                                                                                                echo '...';
                                                                                            }
                                                                                        }elseif($profile_data->workplace_2!=""){
                                                                                          echo  substr($profile_data->workplace_2,0,10);
                                                                                          if(strlen($profile_data->workplace_2)>10){
                                                                                              echo '...';
                                                                                          }
                                                                                        }
                                                                                   ?>
                                                                                         
                                                                                </div>
										<a class="bio_data_edit_anchor" style="float:right;display:none;" id="get_workplace_anchor" href="javascript:load_content_of_user_profile_data('get_workplace')" >
											<img id="get_workplace_loader" style="width:10px;height:10px;"  src="<?php echo base_url().'images/edit.png';?>"/>
										</a>
										<img class="bio_data_process" id="get_workplace_process" style="width:10px;height:10px;float:right;display:none;"  src="<?php echo base_url().'images/process.gif';?>"/>
									</div>
								</div>
							</div>
							<div class="bio_info">
								<div class="bi_span">
									<span class="span_bi">Organization:</span>
								</div>
								<div class="bi_input">
                                                                    <?php if($organization==0){?>
									<div class="small_circle" id="organzation_hidden">
                                                                            <a href="javascript:void(0)"><span  class="span_scircle">H</span></a>
									</div>
                                                                    <?php }?>
                                                                    <?php if($organization==1){?>
									<div class="small_circle_grey" id="organzation_hidden">
                                                                            <a href="javascript:void(0)"><span  class="span_scircle">H</span></a>
									</div>
                                                                    <?php }?>
                                                                    <div class="editBioDataDiv">
										
										<div id="get_organization_value" style="float: left;">
                                                                                   <?php 
                                                                                        if($profile_data->organization_1!="" && $profile_data->organization_2!=""){
                                                                                            echo  substr($profile_data->organization_1,0,10);
                                                                                          if(strlen($profile_data->organization_1)>10){
                                                                                              echo '...';
                                                                                          }
                                                                                          echo ' & ';
                                                                                          echo  substr($profile_data->organization_2,0,10);
                                                                                          if(strlen($profile_data->organization_2)>10){
                                                                                             echo '...';
                                                                                          } 
                                                                                        }elseif($profile_data->organization_1!=""){
                                                                                            echo  substr($profile_data->organization_1,0,10);
                                                                                            if(strlen($profile_data->organization_1)>10){
                                                                                               echo '...';
                                                                                            } 
                                                                                        }elseif($profile_data->organization_2!=""){
                                                                                            echo  substr($profile_data->organization_2,0,10);
                                                                                            if(strlen($profile_data->organization_2)>10){
                                                                                               echo '...';
                                                                                            } 
                                                                                        }
                                                                                   ?>
                                                                                         
                                                                                </div>
										<a class="bio_data_edit_anchor" style="float:right;display:none;" id="get_home_town_anchor" href="javascript:load_content_of_user_profile_data('get_organization')" >
											<img id="get_organization_town_loader" style="width:10px;height:10px;"  src="<?php echo base_url().'images/edit.png';?>"/>
										</a>
										<img class="bio_data_process" id="get_organization_town_process" style="width:10px;height:10px;float:right;display:none;"  src="<?php echo base_url().'images/process.gif';?>"/>
									</div>
															</div>
							</div>
						</div>
						<?php }?>
						<?php $user_about_all_count=0; foreach ($user_about_all as $about_me_data){?>
                                                    <div class="about_me">
                                                                    <span>About Me</span>
                                                          
                                                            <div id="user_about_me_content" style="color:black;background:white;width:277px;height:190px;margin: 5px 5px 0px ; padding: 6px;border-radius: 5px 5px 5px 5px;"><?php echo $about_me_data->about_me; ?></div>

                                                    </div>
						<?php $user_about_all_count++; }?>
                                                <?php if($user_about_all_count==0){ ?>
                                                        <div class="about_me">
                                                                        <span>About Me</span>
                                                                <a  href="javascript:load_user_about_me_update_view()" style="float:right;" >Edit</a>
                                                                <div  id="user_about_me_content" style="color:black;
                                                                     background:white;
                                                                     width:277px;
                                                                     height:190px;
                                                                     margin: 5px 5px 0px ; 
                                                                     padding: 6px;
                                                                     border-radius: 5px 5px 5px 5px;"
                                                                 >
                                                                    
                                                                </div>


                                                        </div>
                                                <?php } ?>
						<div class="stats">
							<span >Stats</span><br>
							<div class="progressbar" style="margin:10px 0;"><!--Blue-->
									<div class="bottom_bar"></div>
									<div class="i_bar" style="border-right:1px solid #111;background:#3973C2;"><span class="inside-middle"></span></div>
									<div class="top_inf"><span class="span_name">Sports</span><span class="span_score"><span class="span_score">85</span></span></div>
							</div> 
							<div class="progressbar" style="margin:10px 0;"><!--Blue-->
									<div class="bottom_bar"></div>
									<div class="i_bar" style="border-right:1px solid #111;background:#3973C2;"><span class="inside-middle"></span></div>
									<div class="top_inf"><span class="span_name">Sports</span><span class="span_score"><span class="span_score">85</span></span></div>
							</div>
							<div class="progressbar" style="margin:10px 0;"><!--Blue-->
									<div class="bottom_bar"></div>
									<div class="i_bar" style="border-right:1px solid #111;background:#3973C2;"><span class="inside-middle"></span></div>
									<div class="top_inf"><span class="span_name">Sports</span><span class="span_score"><span class="span_score">85</span></span></div>
							</div>
							<div class="progressbar" style="margin:10px 0;"><!--Blue-->
									<div class="bottom_bar"></div>
									<div class="i_bar" style="border-right:1px solid #111;background:#3973C2;"><span class="inside-middle"></span></div>
									<div class="top_inf"><span class="span_name">Sports</span><span class="span_score"><span class="span_score">85</span></span></div>
							</div>
							<div class="progressbar" style="margin:10px 0;"><!--Blue-->
									<div class="bottom_bar"></div>
									<div class="i_bar" style="border-right:1px solid #111;background:#3973C2;"><span class="inside-middle"></span></div>
									<div class="top_inf"><span class="span_name">Sports</span><span class="span_score"><span class="span_score">85</span></span></div>
							</div>
						</div>
					</div>
					<!-- static -->
					<div class="top3_container" style="overflow:visible;">
            			<div class="quality">
                            <span class="ag_span">Aggrigates</span><br>
                            <div class="round_div_violet">
                                <p class="round_diff">84%</p>
                            </div>
                            <div class="progressbar_l" style="background:#fff;"><!--violet-->
                                <div class="bottom_bar_l"></div>
                                <div id="t" class="i_bar_l_v" style="border-right:1px solid #111;width:70%;"><span class="inside-middle"></span></div>
                                <div class="top_inf_l"><span class="span_name">Rank Score</span><span class="span_score"><span class="span_score">750</span></span></div>
                            </div><br>
                            <div class="round_div_purple">
                                <p class="round_diff">70%</p>
                            </div>
                            <div class="progressbar_l" style="background:#fff;"><!--pink-->
                                <div class="bottom_bar_l"></div>
                                <div id="t" class="i_bar_l_p" style="border-right:1px solid #111;width:75%;"><span class="inside-middle"></span></div>
                                <div class="top_inf_l"><span class="span_name">Reputation</span><span class="span_score"><span class="span_score">75</span></span></div>
                            </div> <br>
                            <div class="round_div_orange">
                                <p class="round_diff">75%</p>
                            </div>
                            <div class="progressbar_l" style="background:#fff;"><!--orange-->
                                <div class="bottom_bar_l"></div>
                                <div id="t" class="i_bar_l_o" style="border-right:1px solid #111;width:85%"><span class="inside-middle"></span></div>
                                <div class="top_inf_l"><span class="span_name">Popularity</span><span class="span_score"><span class="span_score">100</span></span></div>
                            </div>
                        </div>
                          <div class="quality">
                            <span class="tr_span">Virtues</span><br>
                            <div class="block1" style="width:160px;">
                              <div class="hide_container">
                                <div class="small_circle" style="margin:5px 0 0 5px;">
                                  <span><a href="">H</a></span>
                                </div>
                                <div class="progressbar" style="margin: 4px 0 2px 0px;float:left;"><!--green-->
                                    <div class="bottom_bar"></div>
                                    <div class="i_bar_s" style="border-right:1px solid #111;width:85%;"><span class="inside-middle"></span></div>
                                    <div class="top_inf"><span class="span_name">Hardworking</span><span class="span_score"><span class="span_score">85</span></span></div>
                                </div>
                              </div> 
                              <div class="hide_container">
                                <div class="small_circle" style="margin:5px 0 0 5px;">
                                  <span><a href="">H</a></span>
                                </div>
                                <div class="progressbar" style="margin: 4px 0 2px 0px;float:left;"><!--green-->
                                    <div class="bottom_bar"></div>
                                    <div class="i_bar_s" style="border-right:1px solid #111;width:85%;"><span class="inside-middle"></span></div>
                                    <div class="top_inf"><span class="span_name">Hardworking</span><span class="span_score"><span class="span_score">85</span></span></div>
                                </div>
                              </div>
                              <div class="hide_container">
                                <div class="small_circle" style="margin:5px 0 0 5px;">
                                  <span><a href="">H</a></span>
                                </div>
                                <div class="progressbar" style="margin: 4px 0 2px 0px;float:left;"><!--green-->
                                    <div class="bottom_bar"></div>
                                    <div class="i_bar_s" style="border-right:1px solid #111;width:85%;"><span class="inside-middle"></span></div>
                                    <div class="top_inf"><span class="span_name">Hardworking</span><span class="span_score"><span class="span_score">85</span></span></div>
                                </div>
                              </div>
                              <div class="hide_container">
                                <div class="small_circle" style="margin:5px 0 0 5px;">
                                  <span><a href="">H</a></span>
                                </div>
                                <div class="progressbar" style="margin: 4px 0 2px 0px;float:left;"><!--green-->
                                    <div class="bottom_bar"></div>
                                    <div class="i_bar_s" style="border-right:1px solid #111;width:85%;"><span class="inside-middle"></span></div>
                                    <div class="top_inf"><span class="span_name">Hardworking</span><span class="span_score"><span class="span_score">85</span></span></div>
                                </div>
                              </div>
                              <div class="hide_container">
                                <div class="small_circle" style="margin:5px 0 0 5px;">
                                  <span><a href="">H</a></span>
                                </div>
                                <div class="progressbar" style="margin: 4px 0 2px 0px;float:left;"><!--green-->
                                    <div class="bottom_bar"></div>
                                    <div class="i_bar_s" style="border-right:1px solid #111;width:85%;"><span class="inside-middle"></span></div>
                                    <div class="top_inf"><span class="span_name">Hardworking</span><span class="span_score"><span class="span_score">85</span></span></div>
                                </div>
                              </div>
                            </div>
                            <div class="block3" id="toggle1">
                                <img id="show_img" class="show" style="margin:0 auto;" src="<?php echo base_url(); ?>images/downarw.png" height="25" width="25">
                                <img id="show_img_up" class="show" style="margin:0 auto;display:none;" src="<?php echo base_url(); ?>images/uparrow.png" height="25" width="25">
                            </div>
                        </div>
                       <div class="quality">
                            <span class="tr_span">Traits</span><br>
                            <div class="block1">
                              <div class="hide_container">
                                <div class="small_circle" style="margin:5px 0 0 5px;">
                                  <span><a href="">H</a></span>
                                </div>
                                <div class="progressbar" style="margin: 4px 0 2px 0px;float:left;"><!--green-->
                                    <div class="bottom_bar"></div>
                                    <div class="i_bar_g" style="border-right:1px solid #111;width:85%;"><span class="inside-middle"></span></div>
                                    <div class="top_inf"><span class="span_name">Hardworking</span><span class="span_score"><span class="span_score">85</span></span></div>
                                </div>
                              </div> 
                              <div class="hide_container">
                                <div class="small_circle" style="margin:5px 0 0 5px;">
                                  <span><a href="">H</a></span>
                                </div>
                                <div class="progressbar" style="margin: 4px 0 2px 0px;float:left;"><!--green-->
                                    <div class="bottom_bar"></div>
                                    <div class="i_bar_g" style="border-right:1px solid #111;width:85%;"><span class="inside-middle"></span></div>
                                    <div class="top_inf"><span class="span_name">Hardworking</span><span class="span_score"><span class="span_score">85</span></span></div>
                                </div>
                              </div>
                              <div class="hide_container">
                                <div class="small_circle" style="margin:5px 0 0 5px;">
                                  <span><a href="">H</a></span>
                                </div>
                                <div class="progressbar" style="margin: 4px 0 2px 0px;float:left;"><!--green-->
                                    <div class="bottom_bar"></div>
                                    <div class="i_bar_g" style="border-right:1px solid #111;width:85%;"><span class="inside-middle"></span></div>
                                    <div class="top_inf"><span class="span_name">Hardworking</span><span class="span_score"><span class="span_score">85</span></span></div>
                                </div>
                              </div>
                              <div class="hide_container">
                                <div class="small_circle" style="margin:5px 0 0 5px;">
                                  <span><a href="">H</a></span>
                                </div>
                                <div class="progressbar" style="margin: 4px 0 2px 0px;float:left;"><!--green-->
                                    <div class="bottom_bar"></div>
                                    <div class="i_bar_g" style="border-right:1px solid #111;width:85%;"><span class="inside-middle"></span></div>
                                    <div class="top_inf"><span class="span_name">Hardworking</span><span class="span_score"><span class="span_score">85</span></span></div>
                                </div>
                              </div>
                              <div class="hide_container">
                                <div class="small_circle" style="margin:5px 0 0 5px;">
                                  <span><a href="">H</a></span>
                                </div>
                                <div class="progressbar" style="margin: 4px 0 2px 0px;float:left;"><!--green-->
                                    <div class="bottom_bar"></div>
                                    <div class="i_bar_g" style="border-right:1px solid #111;width:85%;"><span class="inside-middle"></span></div>
                                    <div class="top_inf"><span class="span_name">Hardworking</span><span class="span_score"><span class="span_score">85</span></span></div>
                                </div>
                              </div>
                            </div>
                            <div class="block3" id="toggle1">
                                <img id="show_img" class="show" style="margin:0 auto;" src="<?php echo base_url(); ?>images/downarw.png" height="25" width="25">
                                <img id="show_img_up" class="show" style="margin:0 auto;display:none;" src="<?php echo base_url(); ?>images/uparrow.png" height="25" width="25">
                            </div>
                        </div>
                     <div class="quality">
                            <span class="tr_span">Skills</span><br>
                            <div class="block1">
                              <div class="hide_container">
                                <div class="small_circle" style="margin:5px 0 0 5px;">
                                  <span><a href="">H</a></span>
                                </div>
                                <div class="progressbar" style="margin: 4px 0 2px 0px;float:left;"><!--green-->
                                    <div class="bottom_bar"></div>
                                    <div class="i_bar_y" style="border-right:1px solid #111;width:85%;"><span class="inside-middle"></span></div>
                                    <div class="top_inf"><span class="span_name">Hardworking</span><span class="span_score"><span class="span_score">85</span></span></div>
                                </div>
                              </div> 
                              <div class="hide_container">
                                <div class="small_circle" style="margin:5px 0 0 5px;">
                                  <span><a href="">H</a></span>
                                </div>
                                <div class="progressbar" style="margin: 4px 0 2px 0px;float:left;"><!--green-->
                                    <div class="bottom_bar"></div>
                                    <div class="i_bar_y" style="border-right:1px solid #111;width:85%;"><span class="inside-middle"></span></div>
                                    <div class="top_inf"><span class="span_name">Hardworking</span><span class="span_score"><span class="span_score">85</span></span></div>
                                </div>
                              </div>
                              <div class="hide_container">
                                <div class="small_circle" style="margin:5px 0 0 5px;">
                                  <span><a href="">H</a></span>
                                </div>
                                <div class="progressbar" style="margin: 4px 0 2px 0px;float:left;"><!--green-->
                                    <div class="bottom_bar"></div>
                                    <div class="i_bar_y" style="border-right:1px solid #111;width:85%;"><span class="inside-middle"></span></div>
                                    <div class="top_inf"><span class="span_name">Hardworking</span><span class="span_score"><span class="span_score">85</span></span></div>
                                </div>
                              </div>
                              <div class="hide_container">
                                <div class="small_circle" style="margin:5px 0 0 5px;">
                                  <span><a href="">H</a></span>
                                </div>
                                <div class="progressbar" style="margin: 4px 0 2px 0px;float:left;"><!--green-->
                                    <div class="bottom_bar"></div>
                                    <div class="i_bar_y" style="border-right:1px solid #111;width:85%;"><span class="inside-middle"></span></div>
                                    <div class="top_inf"><span class="span_name">Hardworking</span><span class="span_score"><span class="span_score">85</span></span></div>
                                </div>
                              </div>
                              <div class="hide_container">
                                <div class="small_circle" style="margin:5px 0 0 5px;">
                                  <span><a href="">H</a></span>
                                </div>
                                <div class="progressbar" style="margin: 4px 0 2px 0px;float:left;"><!--green-->
                                    <div class="bottom_bar"></div>
                                    <div class="i_bar_y" style="border-right:1px solid #111;width:85%;"><span class="inside-middle"></span></div>
                                    <div class="top_inf"><span class="span_name">Hardworking</span><span class="span_score"><span class="span_score">85</span></span></div>
                                </div>
                              </div>
                            </div>
                            <div class="block3" id="toggle1">
                                <img id="show_img" class="show" style="margin:0 auto;" src="<?php echo base_url(); ?>images/downarw.png" height="25" width="25">
                                <img id="show_img_up" class="show" style="margin:0 auto;display:none;" src="<?php echo base_url(); ?>images/uparrow.png" height="25" width="25">
                            </div>
                        </div>
                    <div class="quality">
                            <span class="tr_span">Regard</span><br>
                            <div class="block1">
                              <div class="hide_container">
                                <div class="small_circle" style="margin:5px 0 0 5px;">
                                  <span><a href="">H</a></span>
                                </div>
                                <div class="progressbar" style="margin: 4px 0 2px 0px;float:left;"><!--green-->
                                    <div class="bottom_bar"></div>
                                    <div class="i_bar_o" style="border-right:1px solid #111;width:85%;"><span class="inside-middle"></span></div>
                                    <div class="top_inf"><span class="span_name">Hardworking</span><span class="span_score"><span class="span_score">85</span></span></div>
                                </div>
                              </div> 
                              <div class="hide_container">
                                <div class="small_circle" style="margin:5px 0 0 5px;">
                                  <span><a href="">H</a></span>
                                </div>
                                <div class="progressbar" style="margin: 4px 0 2px 0px;float:left;"><!--green-->
                                    <div class="bottom_bar"></div>
                                    <div class="i_bar_o" style="border-right:1px solid #111;width:85%;"><span class="inside-middle"></span></div>
                                    <div class="top_inf"><span class="span_name">Hardworking</span><span class="span_score"><span class="span_score">85</span></span></div>
                                </div>
                              </div>
                              <div class="hide_container">
                                <div class="small_circle" style="margin:5px 0 0 5px;">
                                  <span><a href="">H</a></span>
                                </div>
                                <div class="progressbar" style="margin: 4px 0 2px 0px;float:left;"><!--green-->
                                    <div class="bottom_bar"></div>
                                    <div class="i_bar_o" style="border-right:1px solid #111;width:85%;"><span class="inside-middle"></span></div>
                                    <div class="top_inf"><span class="span_name">Hardworking</span><span class="span_score"><span class="span_score">85</span></span></div>
                                </div>
                              </div>
                              <div class="hide_container">
                                <div class="small_circle" style="margin:5px 0 0 5px;">
                                  <span><a href="">H</a></span>
                                </div>
                                <div class="progressbar" style="margin: 4px 0 2px 0px;float:left;"><!--green-->
                                    <div class="bottom_bar"></div>
                                    <div class="i_bar_o" style="border-right:1px solid #111;width:85%;"><span class="inside-middle"></span></div>
                                    <div class="top_inf"><span class="span_name">Hardworking</span><span class="span_score"><span class="span_score">85</span></span></div>
                                </div>
                              </div>
                              <div class="hide_container">
                                <div class="small_circle" style="margin:5px 0 0 5px;">
                                  <span><a href="">H</a></span>
                                </div>
                                <div class="progressbar" style="margin: 4px 0 2px 0px;float:left;"><!--green-->
                                    <div class="bottom_bar"></div>
                                    <div class="i_bar_o" style="border-right:1px solid #111;width:85%;"><span class="inside-middle"></span></div>
                                    <div class="top_inf"><span class="span_name">Hardworking</span><span class="span_score"><span class="span_score">85</span></span></div>
                                </div>
                              </div>
                            </div>
                            <div class="block3" id="toggle1">
                                <img id="show_img" class="show" style="margin:0 auto;" src="<?php echo base_url(); ?>images/downarw.png" height="25" width="25">
                                <img id="show_img_up" class="show" style="margin:0 auto;display:none;" src="<?php echo base_url(); ?>images/uparrow.png" height="25" width="25">
                            </div>
                        </div>
                        <div class="right_slider">
                          <div id="appearence_right" class="quality" style="margin-left:4px;display:none;">
                            <span class="tr_span">Apperence</span><br>
                            <div class="block1">
                              <div class="hide_container">
                                <div class="small_circle" style="margin:5px 0 0 5px;">
                                  <span><a href="">H</a></span>
                                </div>
                                <div class="progressbar" style="margin: 4px 0 2px 0px;float:left;"><!--green-->
                                    <div class="bottom_bar"></div>
                                    <div class="i_bar_s" style="border-right:1px solid #111;width:85%;"><span class="inside-middle"></span></div>
                                    <div class="top_inf"><span class="span_name">Hardworking</span><span class="span_score"><span class="span_score">85</span></span></div>
                                </div>
                              </div> 
                              <div class="hide_container">
                                <div class="small_circle" style="margin:5px 0 0 5px;">
                                  <span><a href="">H</a></span>
                                </div>
                                <div class="progressbar" style="margin: 4px 0 2px 0px;float:left;"><!--green-->
                                    <div class="bottom_bar"></div>
                                    <div class="i_bar_s" style="border-right:1px solid #111;width:85%;"><span class="inside-middle"></span></div>
                                    <div class="top_inf"><span class="span_name">Hardworking</span><span class="span_score"><span class="span_score">85</span></span></div>
                                </div>
                              </div>
                              <div class="hide_container">
                                <div class="small_circle" style="margin:5px 0 0 5px;">
                                  <span><a href="">H</a></span>
                                </div>
                                <div class="progressbar" style="margin: 4px 0 2px 0px;float:left;"><!--green-->
                                    <div class="bottom_bar"></div>
                                    <div class="i_bar_s" style="border-right:1px solid #111;width:85%;"><span class="inside-middle"></span></div>
                                    <div class="top_inf"><span class="span_name">Hardworking</span><span class="span_score"><span class="span_score">85</span></span></div>
                                </div>
                              </div>
                              <div class="hide_container">
                                <div class="small_circle" style="margin:5px 0 0 5px;">
                                  <span><a href="">H</a></span>
                                </div>
                                <div class="progressbar" style="margin: 4px 0 2px 0px;float:left;"><!--green-->
                                    <div class="bottom_bar"></div>
                                    <div class="i_bar_s" style="border-right:1px solid #111;width:85%;"><span class="inside-middle"></span></div>
                                    <div class="top_inf"><span class="span_name">Hardworking</span><span class="span_score"><span class="span_score">85</span></span></div>
                                </div>
                              </div>
                              <div class="hide_container">
                                <div class="small_circle" style="margin:5px 0 0 5px;">
                                  <span><a href="">H</a></span>
                                </div>
                                <div class="progressbar" style="margin: 4px 0 2px 0px;float:left;"><!--green-->
                                    <div class="bottom_bar"></div>
                                    <div class="i_bar_s" style="border-right:1px solid #111;width:85%;"><span class="inside-middle"></span></div>
                                    <div class="top_inf"><span class="span_name">Hardworking</span><span class="span_score"><span class="span_score">85</span></span></div>
                                </div>
                              </div>
                            </div>
                            <div class="block3" id="toggle1">
                                <img id="show_img" class="show" style="margin:0 auto;" src="<?php echo base_url(); ?>images/downarw.png" height="25" width="25">
                                <img id="show_img_up" class="show" style="margin:0 auto;display:none;" src="<?php echo base_url(); ?>images/uparrow.png" height="25" width="25">
                            </div>
                        </div>
                        <img class="right_show" style="float:right;" src="<?php echo base_url(); ?>images/side_arrow.png" height="15" width="15">
                        </div>
                    </div>
                    <!-- static -->   
          <div class="center" style="min-height: 700px;" >
              <p>&nbsp;</p>
              <!-- Tabs -->
                <div id="tabDiv" style="width:940px;margin:20px auto;position:relative;min-height:600px;">
                      <ul class="tabs">
                          <li class="active">
                              <a class="tab_a" id="content1" href="#tab1"><p class="tab_p">Gossip For Him</p></a>
                          </li>
                          <li>
                              <a class="tab_a" id="content2" href="#tab2"><p class="tab_p">Gossip From Him</p></a>
                          </li>
                          <li>
                              <a class="tab_a" id="content3" href="#tab3"><p class="tab_p">Make Gossip</p></a>
                          </li>
                          <li>
                              <a class="tab_a" id="content4" href="#tab4"><p class="tab_p">His Chat Room</p></a>
                          </li>
              
                      </ul>
                      <div id="tab1" class="tab_content active">
                        <!-- things to copy -->
                        <div class="gfm_search">
                          <div class="gfm_sdiv">
                            <p>Traits</p>
                            <select>
                              <option>Hardworking</option>
                            </select>
                          </div>
                          <div class="gfm_sdiv">
                            <p>Relationship</p>
                            <select>
                              <option>Any</option>
                            </select>
                          </div>
                          <div class="gfm_sdiv">
                            <p>Order</p>
                            <select>
                              <option>Newest</option>
                            </select>
                          </div>
                          <div class="gfm_sdiv">
                            <p>Person Search</p>
                            <input type="text">
                          </div>
                          <div class="gfm_sbtn"><a href="">Submit</a></div>
                        </div>
                        <div class="gfm_extended">
                          <div class="gossiper_comm_ex">
                              <div class="spec_circle_purple" style="margin:45px 0 0 -10px;">
                                <p class="round_span_small">9/18/10</p>
                                <p class="round_span_small">5:55 PM</p>
                              </div>
                              <div class="goss_teller">
                                <img src="<?php echo base_url(); ?>images/neil_p_harris.png">
                                <div class="goss_tell_inf">
                                  <p>Darry Hall</p>
                                  <span>New York</span><span>12-3-2013</span>
                                </div>
                                <div class="goss_tell_prog">
                                  <div class="progressbar"><!--Green-->
                                        <div class="bottom_bar"></div>
                                        <div class="i_bar_g" style="border-right:1px solid #111;width:90%"><span class="inside-middle"></span></div>
                                        <div class="top_inf"><span class="span_name">Hardworking</span><span class="span_score"><span class="span_score">75</span></span></div>
                                    </div>
                                    <div class="progressbar"><!--violet-->
                                        <div class="bottom_bar"></div>
                                        <div class="i_bar_p" style="border-right:1px solid #111;width:75%"><span class="inside-middle"></span></div>
                                        <div class="top_inf"><span class="span_name">Rank</span><span class="span_score"><span class="span_score">1875</span></span></div>
                                  </div> 
                                </div>
                              </div>
                              <div class="goss_small_comment">
                                <div class="spec_circle_purple" style="margin:15px 0 0 -10px;">
                                  <p class="round_span_small">9/18/10</p>
                                  <p class="round_span_small">5:55 PM</p>
                                </div>
                                <div class="goss_teller_small">
                                  <img src="<?php echo base_url(); ?>images/neil_p_harris.png">
                                  <div class="goss_teller_small_inf">
                                    <p>Gary Thomson</p><span>New York</span>
                                  </div>
                                  <div class="goss_teller_small_prog">
                                    <div class="progressbar" style="margin:10px auto;"><!--violet-->
                                        <div class="bottom_bar"></div>
                                        <div class="i_bar_p" style="border-right:1px solid #111;width:75%"><span class="inside-middle"></span></div>
                                        <div class="top_inf"><span class="span_name">Rank</span><span class="span_score"><span class="span_score">1875</span></span></div>
                                    </div> 
                                  </div>
                                </div>
                              </div> 
                              <div class="goss_small_comment">
                                <div class="spec_circle_purple" style="margin:15px 0 0 -10px;">
                                  <p class="round_span_small">9/18/10</p>
                                  <p class="round_span_small">5:55 PM</p>
                                </div>
                                <div class="goss_teller_small">
                                  <img src="<?php echo base_url(); ?>images/neil_p_harris.png">
                                  <div class="goss_teller_small_inf">
                                    <p>Gary Thomson</p><span>New York</span>
                                  </div>
                                  <div class="goss_teller_small_prog">
                                    <div class="progressbar" style="margin:10px auto;"><!--violet-->
                                        <div class="bottom_bar"></div>
                                        <div class="i_bar_p" style="border-right:1px solid #111;width:75%"><span class="inside-middle"></span></div>
                                        <div class="top_inf"><span class="span_name">Rank</span><span class="span_score"><span class="span_score">1875</span></span></div>
                                    </div> 
                                  </div>
                                </div>
                              </div>
                              <div class="goss_small_comment">
                                <div class="spec_circle_purple" style="margin:15px 0 0 -10px;">
                                  <p class="round_span_small">9/18/10</p>
                                  <p class="round_span_small">5:55 PM</p>
                                </div>
                                <div class="goss_teller_small">
                                  <img src="<?php echo base_url(); ?>images/neil_p_harris.png">
                                  <div class="goss_teller_small_inf">
                                    <p>Gary Thomson</p><span>New York</span>
                                  </div>
                                  <div class="goss_teller_small_prog">
                                    <div class="progressbar" style="margin:10px auto;"><!--violet-->
                                        <div class="bottom_bar"></div>
                                        <div class="i_bar_p" style="border-right:1px solid #111;width:75%"><span class="inside-middle"></span></div>
                                        <div class="top_inf"><span class="span_name">Rank</span><span class="span_score"><span class="span_score">1875</span></span></div>
                                    </div> 
                                  </div>
                                </div>
                              </div>
                              <div class="goss_small_comment">
                                <div class="spec_circle_purple" style="margin:15px 0 0 -10px;">
                                  <p class="round_span_small">9/18/10</p>
                                  <p class="round_span_small">5:55 PM</p>
                                </div>
                                <div class="goss_teller_small">
                                  <img src="<?php echo base_url(); ?>images/neil_p_harris.png">
                                  <div class="goss_teller_small_inf">
                                    <p>Gary Thomson</p><span>New York</span>
                                  </div>
                                  <div class="goss_teller_small_prog">
                                    <div class="progressbar" style="margin:10px auto;"><!--violet-->
                                        <div class="bottom_bar"></div>
                                        <div class="i_bar_p" style="border-right:1px solid #111;width:75%"><span class="inside-middle"></span></div>
                                        <div class="top_inf"><span class="span_name">Rank</span><span class="span_score"><span class="span_score">1875</span></span></div>
                                    </div> 
                                  </div>
                                </div>
                              </div>
                          </div>
                          <div class="goss_topic_extended">
                              <div style="width:335px;height:125px;float:left;">  
                                <div class="gossip_thread">
                                  <span class="head_large_span" style="float:left;margin-top:4px;">Gossip Thread:</span>
                                  <div class="gossip_th_input"></div>
                                  <div class="goss_txt_large" style="float:left;"></div>
                                </div>
                              </div>
                              <div style="width:25px;height:125px;float:left;"> 
                                <div id="like_div" style="cursor:pointer;"><img src="http://www.workspaceit.com/frank/images/tup.png" style="margin-top:2px;"></div>
                                <div class="progressbar_h">
                                    <div class="bottom_bar_h"></div>
                                    <div id="like_val" class="i_bar_h" style="border-right:2px solid #111;background:#00A650;"><span class="inside-middle_h"></span></div>
                                    <div class="top_info_h"></div>
                                </div> 
                                <div id="dislike_div" style="cursor:pointer;"><img src="http://www.workspaceit.com/frank/images/tdown.png"></div>
                              </div>
                              <!-- Small textarea container --> 
                                <div class="goss_txt_small_container">
                                  <div class="goss_txt_small"></div>
                                    <div style="width:25px;height:65px;float:left;margin-left:10px;"> 
                                      <div id="like_div" style="cursor:pointer;"><img src="http://www.workspaceit.com/frank/images/tup.png" width='20' height='20' style="margin-top:2px;margin-left:2px;"></div>
                                      <div class="progressbar_h_small">
                                          <div class="bottom_bar_h"></div>
                                          <div id="like_val" class="i_bar_h_small" style="border-right:2px solid #111;background:#00A650;"><span class="inside-middle_h_small"></span></div>
                                          <div class="top_info_h_small"></div>
                                      </div> 
                                      <div id="dislike_div" style="cursor:pointer;"><img src="http://www.workspaceit.com/frank/images/tdown.png" width='20' height='20' style="margin-left:2px;"></div>
                                    </div>
                                </div>
                                <div class="goss_txt_small_container">
                                  <div class="goss_txt_small"></div>
                                    <div style="width:25px;height:65px;float:left;margin-left:10px;"> 
                                      <div id="like_div" style="cursor:pointer;"><img src="http://www.workspaceit.com/frank/images/tup.png" width='20' height='20' style="margin-top:2px;margin-left:2px;"></div>
                                      <div class="progressbar_h_small">
                                          <div class="bottom_bar_h"></div>
                                          <div id="like_val" class="i_bar_h_small" style="border-right:2px solid #111;background:#00A650;"><span class="inside-middle_h_small"></span></div>
                                          <div class="top_info_h_small"></div>
                                      </div> 
                                      <div id="dislike_div" style="cursor:pointer;"><img src="http://www.workspaceit.com/frank/images/tdown.png" width='20' height='20' style="margin-left:2px;"></div>
                                    </div>
                                </div>
                                <div class="goss_txt_small_container">
                                  <div class="goss_txt_small"></div>
                                    <div style="width:25px;height:65px;float:left;margin-left:10px;"> 
                                      <div id="like_div" style="cursor:pointer;"><img src="http://www.workspaceit.com/frank/images/tup.png" width='20' height='20' style="margin-top:2px;margin-left:2px;"></div>
                                      <div class="progressbar_h_small">
                                          <div class="bottom_bar_h"></div>
                                          <div id="like_val" class="i_bar_h_small" style="border-right:2px solid #111;background:#00A650;"><span class="inside-middle_h_small"></span></div>
                                          <div class="top_info_h_small"></div>
                                      </div> 
                                      <div id="dislike_div" style="cursor:pointer;"><img src="http://www.workspaceit.com/frank/images/tdown.png" width='20' height='20' style="margin-left:2px;"></div>
                                    </div>
                                </div>
                                <div class="goss_txt_small_container">
                                  <div class="goss_txt_small"></div>
                                    <div style="width:25px;height:65px;float:left;margin-left:10px;"> 
                                      <div id="like_div" style="cursor:pointer;"><img src="http://www.workspaceit.com/frank/images/tup.png" width='20' height='20' style="margin-top:2px;margin-left:2px;"></div>
                                      <div class="progressbar_h_small">
                                          <div class="bottom_bar_h"></div>
                                          <div id="like_val" class="i_bar_h_small" style="border-right:2px solid #111;background:#00A650;"><span class="inside-middle_h_small"></span></div>
                                          <div class="top_info_h_small"></div>
                                      </div> 
                                      <div id="dislike_div" style="cursor:pointer;"><img src="http://www.workspaceit.com/frank/images/tdown.png" width='20' height='20' style="margin-left:2px;"></div>
                                    </div>
                                </div>
                              <!-- Small textarea container --> 
                          </div>
                          <div class="goss_reply_ex">
                              <div class="goss_tell_prog_con">
                                <p>Gossip Scores</p>
                                <div class="progressbar"><!--Green-->
                                      <div class="bottom_bar"></div>
                                      <div class="i_bar_g" style="border-right:1px solid #111;width:90%"><span class="inside-middle"></span></div>
                                      <div class="top_inf"><span class="span_name">Hardworking</span><span class="span_score"><span class="span_score">75</span></span></div>
                                  </div>
                                  <div class="progressbar"><!--violet-->
                                      <div class="bottom_bar"></div>
                                      <div class="i_bar_p" style="border-right:1px solid #111;width:75%"><span class="inside-middle"></span></div>
                                      <div class="top_inf"><span class="span_name">Rank</span><span class="span_score"><span class="span_score">1875</span></span></div>
                                </div> 
                              </div> 
                              <div class="goss_tell_sp"><img src="<?php echo base_url(); ?>images/neil_p_harris.png"></div>
                              <div class="goss_reply_btn">
                                <div class="reply_btn"><a href="">Reply to comment</a></div>
                              </div>
                              <div class="goss_reply_btn">
                                <div class="reply_btn"><a href="">Reply to comment</a></div>
                              </div>
                              <div class="goss_reply_btn">
                                <div class="reply_btn"><a href="">Reply to comment</a></div>
                              </div>
                              <div class="goss_reply_btn">
                                <div class="reply_btn"><a href="">Reply to comment</a></div>
                              </div>
                          </div>
                        </div>
                        <div class="gfm_quality">
                            <div class="q_tab_container">
                            <div class="quality_tabbed" > <!--onclick="this.style.height=(this.style.height=='165px'?'auto':'165px');"-->
                                <span class="vi_span">Virtues</span><br>
                                    <div class="block1">
                                        <div class="progressbar" style="margin: 7px 0 2px 10px;"><!--Red-->
                                            <div class="bottom_bar"></div>
                                            <div class="i_bar_s" style="border-right:1px solid #111;width:85%;"><span class="inside-middle"></span></div>
                                            <div class="top_inf"><span class="span_name">Human being</span><span class="span_score"><span class="span_score">85</span></span></div>
                                        </div> 
                                        <div class="progressbar" style="margin: 7px 0 2px 10px;"><!--Red-->
                                            <div class="bottom_bar"></div>
                                            <div class="i_bar_s" style="border-right:1px solid #111;width:85%;"><span class="inside-middle"></span></div>
                                            <div class="top_inf"><span class="span_name">Human being</span><span class="span_score"><span class="span_score">85</span></span></div>
                                        </div>
                                        <div class="progressbar" style="margin: 7px 0 2px 10px;"><!--Red-->
                                            <div class="bottom_bar"></div>
                                            <div class="i_bar_s" style="border-right:1px solid #111;width:85%;"><span class="inside-middle"></span></div>
                                            <div class="top_inf"><span class="span_name">Human being</span><span class="span_score"><span class="span_score">85</span></span></div>
                                        </div>             
                                    </div>
                            </div>
                            <div class="down">
                              <img style="margin:3px 0 0 70px;"  src="<?php echo base_url(); ?>images/downarw.png">
                            </div>
                        </div>
                          <div class="q_tab_container" style="margin-left:190px;">
                              <div class="quality_tabbed" > <!--onclick="this.style.height=(this.style.height=='165px'?'auto':'165px');"-->
                                <span class="vi_span">Traits</span><br>
                                    <div class="block1">
                                        <div class="progressbar" style="margin: 7px 0 2px 10px;"><!--Red-->
                                            <div class="bottom_bar"></div>
                                            <div class="i_bar_g" style="border-right:1px solid #111;width:85%;"><span class="inside-middle"></span></div>
                                            <div class="top_inf"><span class="span_name">Human being</span><span class="span_score"><span class="span_score">85</span></span></div>
                                        </div> 
                                        <div class="progressbar" style="margin: 7px 0 2px 10px;"><!--Red-->
                                            <div class="bottom_bar"></div>
                                            <div class="i_bar_g" style="border-right:1px solid #111;width:85%;"><span class="inside-middle"></span></div>
                                            <div class="top_inf"><span class="span_name">Human being</span><span class="span_score"><span class="span_score">85</span></span></div>
                                        </div>
                                        <div class="progressbar" style="margin: 7px 0 2px 10px;"><!--Red-->
                                            <div class="bottom_bar"></div>
                                            <div class="i_bar_g" style="border-right:1px solid #111;width:85%;"><span class="inside-middle"></span></div>
                                            <div class="top_inf"><span class="span_name">Human being</span><span class="span_score"><span class="span_score">85</span></span></div>
                                        </div>             
                                    </div>
                            </div>
                            <div class="down">
                              <img style="margin:3px 0 0 70px;"  src="<?php echo base_url(); ?>images/downarw.png">
                            </div>
                            </div>  
                          <div class="q_tab_container" style="margin-left:370px;">
                                <div class="quality_tabbed" > <!--onclick="this.style.height=(this.style.height=='165px'?'auto':'165px');"-->
                                <span class="vi_span">Skills</span><br>
                                    <div class="block1">
                                        <div class="progressbar" style="margin: 7px 0 2px 10px;"><!--Red-->
                                            <div class="bottom_bar"></div>
                                            <div class="i_bar_y" style="border-right:1px solid #111;width:85%;"><span class="inside-middle"></span></div>
                                            <div class="top_inf"><span class="span_name">Human being</span><span class="span_score"><span class="span_score">85</span></span></div>
                                        </div> 
                                        <div class="progressbar" style="margin: 7px 0 2px 10px;"><!--Red-->
                                            <div class="bottom_bar"></div>
                                            <div class="i_bar_y" style="border-right:1px solid #111;width:85%;"><span class="inside-middle"></span></div>
                                            <div class="top_inf"><span class="span_name">Human being</span><span class="span_score"><span class="span_score">85</span></span></div>
                                        </div>
                                        <div class="progressbar" style="margin: 7px 0 2px 10px;"><!--Red-->
                                            <div class="bottom_bar"></div>
                                            <div class="i_bar_red" style="border-right:1px solid #111;width:35%;"><span class="inside-middle"></span></div>
                                            <div class="top_inf"><span class="span_name">Human being</span><span class="span_score"><span class="span_score">35</span></span></div>
                                        </div>             
                                    </div>
                            </div>
                            <div class="down">
                              <img style="margin:3px 0 0 70px;"  src="<?php echo base_url(); ?>images/downarw.png">
                            </div>
                            </div>
                            <div class="q_tab_container" style="margin-left:550px;">    
                                <div class="quality_tabbed" > <!--onclick="this.style.height=(this.style.height=='165px'?'auto':'165px');"-->
                                <span class="vi_span">Regard</span><br>
                                    <div class="block1">
                                        <div class="progressbar" style="margin: 7px 0 2px 10px;"><!--Red-->
                                            <div class="bottom_bar"></div>
                                            <div class="i_bar_o" style="border-right:1px solid #111;width:85%;"><span class="inside-middle"></span></div>
                                            <div class="top_inf"><span class="span_name">Human being</span><span class="span_score"><span class="span_score">85</span></span></div>
                                        </div> 
                                        <div class="progressbar" style="margin: 7px 0 2px 10px;"><!--Red-->
                                            <div class="bottom_bar"></div>
                                            <div class="i_bar_o" style="border-right:1px solid #111;width:85%;"><span class="inside-middle"></span></div>
                                            <div class="top_inf"><span class="span_name">Human being</span><span class="span_score"><span class="span_score">85</span></span></div>
                                        </div>
                                        <div class="progressbar" style="margin: 7px 0 2px 10px;"><!--Red-->
                                            <div class="bottom_bar"></div>
                                            <div class="i_bar_o" style="border-right:1px solid #111;width:85%;"><span class="inside-middle"></span></div>
                                            <div class="top_inf"><span class="span_name">Human being</span><span class="span_score"><span class="span_score">85</span></span></div>
                                        </div>             
                                    </div>
                            </div>
                            <div class="down">
                              <img style="margin:3px 0 0 70px;"  src="<?php echo base_url(); ?>images/downarw.png">
                            </div>
                            </div>
                            <div class="q_tab_container" style="margin-left:730px;">    
                                <div class="quality_tabbed" > <!--onclick="this.style.height=(this.style.height=='165px'?'auto':'165px');"-->
                                <span class="vi_span">Looks</span><br>
                                    <div class="block1">
                                        <div class="progressbar" style="margin: 7px 0 2px 10px;"><!--Red-->
                                            <div class="bottom_bar"></div>
                                            <div class="i_bar_p" style="border-right:1px solid #111;width:85%;"><span class="inside-middle"></span></div>
                                            <div class="top_inf"><span class="span_name">Human being</span><span class="span_score"><span class="span_score">85</span></span></div>
                                        </div> 
                                        <div class="progressbar" style="margin: 7px 0 2px 10px;"><!--Red-->
                                            <div class="bottom_bar"></div>
                                            <div class="i_bar_p" style="border-right:1px solid #111;width:85%;"><span class="inside-middle"></span></div>
                                            <div class="top_inf"><span class="span_name">Human being</span><span class="span_score"><span class="span_score">85</span></span></div>
                                        </div>
                                        <div class="progressbar" style="margin: 7px 0 2px 10px;"><!--Red-->
                                            <div class="bottom_bar"></div>
                                            <div class="i_bar_p" style="border-right:1px solid #111;width:85%;"><span class="inside-middle"></span></div>
                                            <div class="top_inf"><span class="span_name">Human being</span><span class="span_score"><span class="span_score">85</span></span></div>
                                        </div> 

                                    </div>
                            </div>
                            <div class="down">
                              <img style="margin:3px 0 0 70px;"  src="<?php echo base_url(); ?>images/downarw.png">
                            </div>
                             </div>
                              <div style="height:150px;width:5px;float:left;"></div>
                        </div>
                        <div class="gfm_info">
                          <div class="gfm_info_rel">
                            <p>Relationship</p>
                            <div class="gfm_s_rel"></div>
                            <div class="gfm_accepted"><a href="">Accepted</a></div>
                            <div class="gfm_s_rel"></div>
                            <div class="gfm_accepted"><a href="">Disputd</a></div>
                          </div>
                          <div class="gfm_info_genuine">
                            <p>Genuine Scores</p>
                            <div class="progressbar" style="margin:9px 15px 0 0; float:right;"><!--Green-->
                                    <div class="bottom_bar"></div>
                                    <div class="i_bar_s" style="border-right:1px solid #111;width:90%"><span class="inside-middle"></span></div>
                                    <div class="top_inf"><span class="span_name">Integrity</span><span class="span_score"><span class="span_score">75</span></span></div>
                                </div>
                          </div>
                           <div class="goss_tell_btn_div">
                              <div class="goss_tell_add" >
                                <div class="goss_tell_btn" style="display:none;">
                                  <span><a href="">Add Favourites</a></span>
                                </div>
                                <div class="goss_tell_btn" style="margin-left:10px;display:none;">
                                  <span><a href="">New gossip</a></span>
                                </div>
                              </div>
                              <div class="goss_tell_other">
                                <div class="goss_tell_replies">
                                  <span>Gossip replies:</span><span>7</span>
                                </div>
                                <div class="goss_tell_btn" style="margin-left:120px;">
                                  <span><a href="">View all gossip</a></span>
                                </div>
                                <div class="goss_tell_btn" style="margin-left:10px;">
                                  <span><a href="">Reply to all gossip</a></span>
                                </div>
                              </div>  
                            </div>
                        </div>
                        <!--  Ajax part -->
                        <div class="gfm_graph" style="display:none;">
                          <div class="gfm_hd"></div>
                          <div class="gfm_hd"></div>
                        </div>
                        <div class="gfm_goss" style="display:none;">
                          <div class="spec_circle_purple" style="margin:45px 0 0 -10px;">
                            <p class="round_span_small">9/18/10</p>
                            <p class="round_span_small">5:55 PM</p>
                          </div>
                          <div class="goss_teller">
                            <img src="<?php echo base_url(); ?>images/neil_p_harris.png">
                            <div class="goss_tell_inf">
                              <p>Darry Hall</p>
                              <span>New York</span><span>12-3-2013</span>
                            </div>
                            <div class="goss_tell_prog">
                              <div class="progressbar"><!--Green-->
                                    <div class="bottom_bar"></div>
                                    <div class="i_bar_g" style="border-right:1px solid #111;width:90%"><span class="inside-middle"></span></div>
                                    <div class="top_inf"><span class="span_name">Hardworking</span><span class="span_score"><span class="span_score">75</span></span></div>
                                </div>
                                <div class="progressbar"><!--violet-->
                                    <div class="bottom_bar"></div>
                                    <div class="i_bar_p" style="border-right:1px solid #111;width:75%"><span class="inside-middle"></span></div>
                                    <div class="top_inf"><span class="span_name">Rank</span><span class="span_score"><span class="span_score">1875</span></span></div>
                              </div> 
                            </div>
                          </div>
                            <div class="gossip_topic">
                              <div style="width:335px;height:125px;float:left;">  
                                <div class="gossip_thread">
                                  <span class="head_large_span" style="float:left;margin-top:4px;">Gossip Thread:</span>
                                  <input type="text" style="float:left;">
                                  <textarea></textarea>
                                </div>
                              </div>
                              <div style="width:25px;height:125px;float:left;"> 
                                <div id="like_div" style="cursor:pointer;"><img src="http://www.workspaceit.com/frank/images/tup.png" style="margin-top:2px;"></div>
                                <div class="progressbar_h">
                                    <div class="bottom_bar_h"></div>
                                    <div id="like_val" class="i_bar_h" style="border-right:2px solid #111;background:#00A650;"><span class="inside-middle_h"></span></div>
                                    <div class="top_info_h"></div>
                                </div> 
                                <div id="dislike_div" style="cursor:pointer;"><img src="http://www.workspaceit.com/frank/images/tdown.png"></div>
                              </div> 
                            </div>
                            <div class="goss_tell_prog_con">
                              <p>Gossip Scores</p>
                              <div class="progressbar"><!--Green-->
                                    <div class="bottom_bar"></div>
                                    <div class="i_bar_g" style="border-right:1px solid #111;width:90%"><span class="inside-middle"></span></div>
                                    <div class="top_inf"><span class="span_name">Hardworking</span><span class="span_score"><span class="span_score">75</span></span></div>
                                </div>
                                <div class="progressbar"><!--violet-->
                                    <div class="bottom_bar"></div>
                                    <div class="i_bar_p" style="border-right:1px solid #111;width:75%"><span class="inside-middle"></span></div>
                                    <div class="top_inf"><span class="span_name">Rank</span><span class="span_score"><span class="span_score">1875</span></span></div>
                              </div> 
                            </div> 
                            <div class="goss_tell_sp"><img src="<?php echo base_url(); ?>images/neil_p_harris.png"></div>  
                            <div class="goss_tell_btn_div">
                              <div class="goss_tell_replies">
                                <span>Gossip replies:</span><span>7</span>
                              </div>
                              <div class="goss_tell_btn">
                                <span><a href="">View all gossip</a></span>
                              </div>
                              <div class="goss_tell_btn" style="margin-left:10px;">
                                <span><a href="">Reply to all gossip</a></span>
                              </div>
                            </div>   
                        </div>
                        <!--  Ajax part -->
                        <!-- things to copy -->
                      </div>
                      <div id="tab2" class="tab_content inactive hide">
                        <!-- things to copy -->
                        <div class="gfm_search">
                          <div class="gfm_sdiv">
                            <p>Traits</p>
                            <select>
                              <option>Hardworking</option>
                            </select>
                          </div>
                          <div class="gfm_sdiv">
                            <p>Relationship</p>
                            <select>
                              <option>Any</option>
                            </select>
                          </div>
                          <div class="gfm_sdiv">
                            <p>Order</p>
                            <select>
                              <option>Newest</option>
                            </select>
                          </div>
                          <div class="gfm_sdiv">
                            <p>Person Search</p>
                            <input type="text">
                          </div>
                          <div class="gfm_sbtn"><a href="">Submit</a></div>
                        </div>
                        <div class="gfm_extended" style="display:none;">
                          <div class="gossiper_comm_ex">
                              <div class="spec_circle_purple" style="margin:45px 0 0 -10px;">
                                <p class="round_span_small">9/18/10</p>
                                <p class="round_span_small">5:55 PM</p>
                              </div>
                              <div class="goss_tell_prog_con">
                                <p>Gossip Scores</p>
                                <div class="progressbar"><!--Green-->
                                      <div class="bottom_bar"></div>
                                      <div class="i_bar_g" style="border-right:1px solid #111;width:90%"><span class="inside-middle"></span></div>
                                      <div class="top_inf"><span class="span_name">Hardworking</span><span class="span_score"><span class="span_score">75</span></span></div>
                                  </div>
                                  <div class="progressbar"><!--violet-->
                                      <div class="bottom_bar"></div>
                                      <div class="i_bar_p" style="border-right:1px solid #111;width:75%"><span class="inside-middle"></span></div>
                                      <div class="top_inf"><span class="span_name">Rank</span><span class="span_score"><span class="span_score">1875</span></span></div>
                                </div> 
                              </div> 
                              <div class="goss_tell_sp"><img src="<?php echo base_url(); ?>images/neil_p_harris.png"></div>
                              <div class="goss_small_comment">
                                <div class="spec_circle_purple" style="margin:15px 0 0 -10px;">
                                  <p class="round_span_small">9/18/10</p>
                                  <p class="round_span_small">5:55 PM</p>
                                </div>
                                <div class="goss_teller_small">
                                  <img src="<?php echo base_url(); ?>images/neil_p_harris.png">
                                  <div class="goss_teller_small_inf">
                                    <p>Gary Thomson</p><span>New York</span>
                                  </div>
                                  <div class="goss_teller_small_prog">
                                    <div class="progressbar" style="margin:10px auto;"><!--violet-->
                                        <div class="bottom_bar"></div>
                                        <div class="i_bar_p" style="border-right:1px solid #111;width:75%"><span class="inside-middle"></span></div>
                                        <div class="top_inf"><span class="span_name">Rank</span><span class="span_score"><span class="span_score">1875</span></span></div>
                                    </div> 
                                  </div>
                                </div>
                              </div> 
                              <div class="goss_small_comment">
                                <div class="spec_circle_purple" style="margin:15px 0 0 -10px;">
                                  <p class="round_span_small">9/18/10</p>
                                  <p class="round_span_small">5:55 PM</p>
                                </div>
                                <div class="goss_teller_small">
                                  <img src="<?php echo base_url(); ?>images/neil_p_harris.png">
                                  <div class="goss_teller_small_inf">
                                    <p>Gary Thomson</p><span>New York</span>
                                  </div>
                                  <div class="goss_teller_small_prog">
                                    <div class="progressbar" style="margin:10px auto;"><!--violet-->
                                        <div class="bottom_bar"></div>
                                        <div class="i_bar_p" style="border-right:1px solid #111;width:75%"><span class="inside-middle"></span></div>
                                        <div class="top_inf"><span class="span_name">Rank</span><span class="span_score"><span class="span_score">1875</span></span></div>
                                    </div> 
                                  </div>
                                </div>
                              </div>
                              <div class="goss_small_comment">
                                <div class="spec_circle_purple" style="margin:15px 0 0 -10px;">
                                  <p class="round_span_small">9/18/10</p>
                                  <p class="round_span_small">5:55 PM</p>
                                </div>
                                <div class="goss_teller_small">
                                  <img src="<?php echo base_url(); ?>images/neil_p_harris.png">
                                  <div class="goss_teller_small_inf">
                                    <p>Gary Thomson</p><span>New York</span>
                                  </div>
                                  <div class="goss_teller_small_prog">
                                    <div class="progressbar" style="margin:10px auto;"><!--violet-->
                                        <div class="bottom_bar"></div>
                                        <div class="i_bar_p" style="border-right:1px solid #111;width:75%"><span class="inside-middle"></span></div>
                                        <div class="top_inf"><span class="span_name">Rank</span><span class="span_score"><span class="span_score">1875</span></span></div>
                                    </div> 
                                  </div>
                                </div>
                              </div>
                              <div class="goss_small_comment">
                                <div class="spec_circle_purple" style="margin:15px 0 0 -10px;">
                                  <p class="round_span_small">9/18/10</p>
                                  <p class="round_span_small">5:55 PM</p>
                                </div>
                                <div class="goss_teller_small">
                                  <img src="<?php echo base_url(); ?>images/neil_p_harris.png">
                                  <div class="goss_teller_small_inf">
                                    <p>Gary Thomson</p><span>New York</span>
                                  </div>
                                  <div class="goss_teller_small_prog">
                                    <div class="progressbar" style="margin:10px auto;"><!--violet-->
                                        <div class="bottom_bar"></div>
                                        <div class="i_bar_p" style="border-right:1px solid #111;width:75%"><span class="inside-middle"></span></div>
                                        <div class="top_inf"><span class="span_name">Rank</span><span class="span_score"><span class="span_score">1875</span></span></div>
                                    </div> 
                                  </div>
                                </div>
                              </div>
                          </div>
                          <div class="goss_topic_extended">
                              <div style="width:335px;height:125px;float:left;">  
                                <div class="gossip_thread">
                                  <span class="head_large_span" style="float:left;margin-top:4px;">Gossip Thread:</span>
                                  <div class="gossip_th_input"></div>
                                  <div class="goss_txt_large" style="float:left;"></div>
                                </div>
                              </div>
                              <div style="width:25px;height:125px;float:left;"> 
                                <div id="like_div" style="cursor:pointer;"><img src="http://www.workspaceit.com/frank/images/tup.png" style="margin-top:2px;"></div>
                                <div class="progressbar_h">
                                    <div class="bottom_bar_h"></div>
                                    <div id="like_val" class="i_bar_h" style="border-right:2px solid #111;background:#00A650;"><span class="inside-middle_h"></span></div>
                                    <div class="top_info_h"></div>
                                </div> 
                                <div id="dislike_div" style="cursor:pointer;"><img src="http://www.workspaceit.com/frank/images/tdown.png"></div>
                              </div>
                              <!-- Small textarea container --> 
                                <div class="goss_txt_small_container">
                                  <div class="goss_txt_small"></div>
                                    <div style="width:25px;height:65px;float:left;margin-left:10px;"> 
                                      <div id="like_div" style="cursor:pointer;"><img src="http://www.workspaceit.com/frank/images/tup.png" width='20' height='20' style="margin-top:2px;margin-left:2px;"></div>
                                      <div class="progressbar_h_small">
                                          <div class="bottom_bar_h"></div>
                                          <div id="like_val" class="i_bar_h_small" style="border-right:2px solid #111;background:#00A650;"><span class="inside-middle_h_small"></span></div>
                                          <div class="top_info_h_small"></div>
                                      </div> 
                                      <div id="dislike_div" style="cursor:pointer;"><img src="http://www.workspaceit.com/frank/images/tdown.png" width='20' height='20' style="margin-left:2px;"></div>
                                    </div>
                                </div>
                                <div class="goss_txt_small_container">
                                  <div class="goss_txt_small"></div>
                                    <div style="width:25px;height:65px;float:left;margin-left:10px;"> 
                                      <div id="like_div" style="cursor:pointer;"><img src="http://www.workspaceit.com/frank/images/tup.png" width='20' height='20' style="margin-top:2px;margin-left:2px;"></div>
                                      <div class="progressbar_h_small">
                                          <div class="bottom_bar_h"></div>
                                          <div id="like_val" class="i_bar_h_small" style="border-right:2px solid #111;background:#00A650;"><span class="inside-middle_h_small"></span></div>
                                          <div class="top_info_h_small"></div>
                                      </div> 
                                      <div id="dislike_div" style="cursor:pointer;"><img src="http://www.workspaceit.com/frank/images/tdown.png" width='20' height='20' style="margin-left:2px;"></div>
                                    </div>
                                </div>
                                <div class="goss_txt_small_container">
                                  <div class="goss_txt_small"></div>
                                    <div style="width:25px;height:65px;float:left;margin-left:10px;"> 
                                      <div id="like_div" style="cursor:pointer;"><img src="http://www.workspaceit.com/frank/images/tup.png" width='20' height='20' style="margin-top:2px;margin-left:2px;"></div>
                                      <div class="progressbar_h_small">
                                          <div class="bottom_bar_h"></div>
                                          <div id="like_val" class="i_bar_h_small" style="border-right:2px solid #111;background:#00A650;"><span class="inside-middle_h_small"></span></div>
                                          <div class="top_info_h_small"></div>
                                      </div> 
                                      <div id="dislike_div" style="cursor:pointer;"><img src="http://www.workspaceit.com/frank/images/tdown.png" width='20' height='20' style="margin-left:2px;"></div>
                                    </div>
                                </div>
                                <div class="goss_txt_small_container">
                                  <div class="goss_txt_small"></div>
                                    <div style="width:25px;height:65px;float:left;margin-left:10px;"> 
                                      <div id="like_div" style="cursor:pointer;"><img src="http://www.workspaceit.com/frank/images/tup.png" width='20' height='20' style="margin-top:2px;margin-left:2px;"></div>
                                      <div class="progressbar_h_small">
                                          <div class="bottom_bar_h"></div>
                                          <div id="like_val" class="i_bar_h_small" style="border-right:2px solid #111;background:#00A650;"><span class="inside-middle_h_small"></span></div>
                                          <div class="top_info_h_small"></div>
                                      </div> 
                                      <div id="dislike_div" style="cursor:pointer;"><img src="http://www.workspaceit.com/frank/images/tdown.png" width='20' height='20' style="margin-left:2px;"></div>
                                    </div>
                                </div>
                              <!-- Small textarea container --> 
                          </div>
                          <div class="goss_reply_ex">
                              <div class="goss_teller">
                                <img src="<?php echo base_url(); ?>images/neil_p_harris.png">
                                <div class="goss_tell_inf">
                                  <p>Darry Hall</p>
                                  <span>New York</span><span>12-3-2013</span>
                                </div>
                                <div class="goss_tell_prog">
                                  <div class="progressbar"><!--Green-->
                                        <div class="bottom_bar"></div>
                                        <div class="i_bar_g" style="border-right:1px solid #111;width:90%"><span class="inside-middle"></span></div>
                                        <div class="top_inf"><span class="span_name">Hardworking</span><span class="span_score"><span class="span_score">75</span></span></div>
                                    </div>
                                    <div class="progressbar"><!--violet-->
                                        <div class="bottom_bar"></div>
                                        <div class="i_bar_p" style="border-right:1px solid #111;width:75%"><span class="inside-middle"></span></div>
                                        <div class="top_inf"><span class="span_name">Rank</span><span class="span_score"><span class="span_score">1875</span></span></div>
                                  </div> 
                                </div>
                              </div>
                              <div class="goss_reply_btn">
                                <div class="reply_btn"><a href="">Reply to comment</a></div>
                              </div>
                              <div class="goss_reply_btn">
                                <div class="reply_btn"><a href="">Reply to comment</a></div>
                              </div>
                              <div class="goss_reply_btn">
                                <div class="reply_btn"><a href="">Reply to comment</a></div>
                              </div>
                              <div class="goss_reply_btn">
                                <div class="reply_btn"><a href="">Reply to comment</a></div>
                              </div>
                          </div>
                        </div>
                        <!--  Ajax part -->
                        <div class="gfm_graph" >
                          <div class="gfm_hd"></div>
                          <div class="gfm_hd"></div>
                        </div>
                        <div class="gfm_goss" >
                          <div class="spec_circle_purple" style="margin:45px 0 0 -10px;">
                            <p class="round_span_small">9/18/10</p>
                            <p class="round_span_small">5:55 PM</p>
                          </div>
                          <div class="goss_tell_sp"><img src="<?php echo base_url(); ?>images/neil_p_harris.png"></div> 
                          <div class="goss_tell_prog_con">
                              <p>Gossip Scores</p>
                              <div class="progressbar"><!--Green-->
                                    <div class="bottom_bar"></div>
                                    <div class="i_bar_g" style="border-right:1px solid #111;width:90%"><span class="inside-middle"></span></div>
                                    <div class="top_inf"><span class="span_name">Hardworking</span><span class="span_score"><span class="span_score">75</span></span></div>
                                </div>
                                <div class="progressbar"><!--violet-->
                                    <div class="bottom_bar"></div>
                                    <div class="i_bar_p" style="border-right:1px solid #111;width:75%"><span class="inside-middle"></span></div>
                                    <div class="top_inf"><span class="span_name">Rank</span><span class="span_score"><span class="span_score">1875</span></span></div>
                              </div> 
                            </div> 
                            <div class="gossip_topic">
                              <div style="width:335px;height:125px;float:left;">  
                                <div class="gossip_thread">
                                  <span class="head_large_span" style="float:left;margin-top:4px;">Gossip Thread:</span>
                                  <input type="text" style="float:left;">
                                  <textarea></textarea>
                                </div>
                              </div>
                              <div style="width:25px;height:125px;float:left;"> 
                                <div id="like_div" style="cursor:pointer;"><img src="http://www.workspaceit.com/frank/images/tup.png" style="margin-top:2px;"></div>
                                <div class="progressbar_h">
                                    <div class="bottom_bar_h"></div>
                                    <div id="like_val" class="i_bar_h" style="border-right:2px solid #111;background:#00A650;"><span class="inside-middle_h"></span></div>
                                    <div class="top_info_h"></div>
                                </div> 
                                <div id="dislike_div" style="cursor:pointer;"><img src="http://www.workspaceit.com/frank/images/tdown.png"></div>
                              </div> 
                            </div>
                            <div class="goss_teller">
                            <img src="<?php echo base_url(); ?>images/neil_p_harris.png">
                            <div class="goss_tell_inf">
                              <p>Darry Hall</p>
                              <span>New York</span><span>12-3-2013</span>
                            </div>
                            <div class="goss_tell_prog">
                              <div class="progressbar"><!--Green-->
                                    <div class="bottom_bar"></div>
                                    <div class="i_bar_g" style="border-right:1px solid #111;width:90%"><span class="inside-middle"></span></div>
                                    <div class="top_inf"><span class="span_name">Hardworking</span><span class="span_score"><span class="span_score">75</span></span></div>
                                </div>
                                <div class="progressbar"><!--violet-->
                                    <div class="bottom_bar"></div>
                                    <div class="i_bar_p" style="border-right:1px solid #111;width:75%"><span class="inside-middle"></span></div>
                                    <div class="top_inf"><span class="span_name">Rank</span><span class="span_score"><span class="span_score">1875</span></span></div>
                              </div> 
                            </div>
                          </div>  
                            <div class="goss_tell_btn_div" style="width:875px;">
                              <div class="goss_tell_replies" style="margin-left:262px;">
                                <span>Gossip replies:</span><span>7</span>
                              </div>
                              <div class="goss_tell_btn" style="margin-left:10px;">
                                <span><a href="">View all gossip</a></span>
                              </div>
                              <div class="goss_tell_btn" style="margin-left:10px;">
                                <span><a href="">Reply to all gossip</a></span>
                              </div>
                              <div class="goss_tell_btn" style="float:right;margin-left:10px;">
                                <span><a href="">New Gossip</a></span>
                              </div>
                              <div class="goss_tell_btn" style="float:right">
                                <span><a href="">Add to favourites</a></span>
                              </div>
                            </div>   
                        </div>
                        <!--  Ajax part -->
                        <div class="gfm_quality">
                            <div class="q_tab_container">
                            <div class="quality_tabbed" > <!--onclick="this.style.height=(this.style.height=='165px'?'auto':'165px');"-->
                                <span class="vi_span">Virtues</span><br>
                                    <div class="block1">
                                        <div class="progressbar" style="margin: 7px 0 2px 10px;"><!--Red-->
                                            <div class="bottom_bar"></div>
                                            <div class="i_bar_s" style="border-right:1px solid #111;width:85%;"><span class="inside-middle"></span></div>
                                            <div class="top_inf"><span class="span_name">Human being</span><span class="span_score"><span class="span_score">85</span></span></div>
                                        </div> 
                                        <div class="progressbar" style="margin: 7px 0 2px 10px;"><!--Red-->
                                            <div class="bottom_bar"></div>
                                            <div class="i_bar_s" style="border-right:1px solid #111;width:85%;"><span class="inside-middle"></span></div>
                                            <div class="top_inf"><span class="span_name">Human being</span><span class="span_score"><span class="span_score">85</span></span></div>
                                        </div>
                                        <div class="progressbar" style="margin: 7px 0 2px 10px;"><!--Red-->
                                            <div class="bottom_bar"></div>
                                            <div class="i_bar_s" style="border-right:1px solid #111;width:85%;"><span class="inside-middle"></span></div>
                                            <div class="top_inf"><span class="span_name">Human being</span><span class="span_score"><span class="span_score">85</span></span></div>
                                        </div>             
                                    </div>
                            </div>
                            <div class="down">
                              <img style="margin:3px 0 0 70px;"  src="<?php echo base_url(); ?>images/downarw.png">
                            </div>
                          </div>
                          <div class="q_tab_container" style="margin-left:190px;">
                              <div class="quality_tabbed" > <!--onclick="this.style.height=(this.style.height=='165px'?'auto':'165px');"-->
                                <span class="vi_span">Traits</span><br>
                                    <div class="block1">
                                        <div class="progressbar" style="margin: 7px 0 2px 10px;"><!--Red-->
                                            <div class="bottom_bar"></div>
                                            <div class="i_bar_g" style="border-right:1px solid #111;width:85%;"><span class="inside-middle"></span></div>
                                            <div class="top_inf"><span class="span_name">Human being</span><span class="span_score"><span class="span_score">85</span></span></div>
                                        </div> 
                                        <div class="progressbar" style="margin: 7px 0 2px 10px;"><!--Red-->
                                            <div class="bottom_bar"></div>
                                            <div class="i_bar_g" style="border-right:1px solid #111;width:85%;"><span class="inside-middle"></span></div>
                                            <div class="top_inf"><span class="span_name">Human being</span><span class="span_score"><span class="span_score">85</span></span></div>
                                        </div>
                                        <div class="progressbar" style="margin: 7px 0 2px 10px;"><!--Red-->
                                            <div class="bottom_bar"></div>
                                            <div class="i_bar_g" style="border-right:1px solid #111;width:85%;"><span class="inside-middle"></span></div>
                                            <div class="top_inf"><span class="span_name">Human being</span><span class="span_score"><span class="span_score">85</span></span></div>
                                        </div>             
                                    </div>
                            </div>
                            <div class="down">
                              <img style="margin:3px 0 0 70px;"  src="<?php echo base_url(); ?>images/downarw.png">
                            </div>
                            </div>  
                          <div class="q_tab_container" style="margin-left:370px;">
                                <div class="quality_tabbed" > <!--onclick="this.style.height=(this.style.height=='165px'?'auto':'165px');"-->
                                <span class="vi_span">Skills</span><br>
                                    <div class="block1">
                                        <div class="progressbar" style="margin: 7px 0 2px 10px;"><!--Red-->
                                            <div class="bottom_bar"></div>
                                            <div class="i_bar_y" style="border-right:1px solid #111;width:85%;"><span class="inside-middle"></span></div>
                                            <div class="top_inf"><span class="span_name">Human being</span><span class="span_score"><span class="span_score">85</span></span></div>
                                        </div> 
                                        <div class="progressbar" style="margin: 7px 0 2px 10px;"><!--Red-->
                                            <div class="bottom_bar"></div>
                                            <div class="i_bar_y" style="border-right:1px solid #111;width:85%;"><span class="inside-middle"></span></div>
                                            <div class="top_inf"><span class="span_name">Human being</span><span class="span_score"><span class="span_score">85</span></span></div>
                                        </div>
                                        <div class="progressbar" style="margin: 7px 0 2px 10px;"><!--Red-->
                                            <div class="bottom_bar"></div>
                                            <div class="i_bar_red" style="border-right:1px solid #111;width:35%;"><span class="inside-middle"></span></div>
                                            <div class="top_inf"><span class="span_name">Human being</span><span class="span_score"><span class="span_score">35</span></span></div>
                                        </div>             
                                    </div>
                            </div>
                            <div class="down">
                              <img style="margin:3px 0 0 70px;"  src="<?php echo base_url(); ?>images/downarw.png">
                            </div>
                            </div>
                            <div class="q_tab_container" style="margin-left:550px;">    
                                <div class="quality_tabbed" > <!--onclick="this.style.height=(this.style.height=='165px'?'auto':'165px');"-->
                                <span class="vi_span">Regard</span><br>
                                    <div class="block1">
                                        <div class="progressbar" style="margin: 7px 0 2px 10px;"><!--Red-->
                                            <div class="bottom_bar"></div>
                                            <div class="i_bar_o" style="border-right:1px solid #111;width:85%;"><span class="inside-middle"></span></div>
                                            <div class="top_inf"><span class="span_name">Human being</span><span class="span_score"><span class="span_score">85</span></span></div>
                                        </div> 
                                        <div class="progressbar" style="margin: 7px 0 2px 10px;"><!--Red-->
                                            <div class="bottom_bar"></div>
                                            <div class="i_bar_o" style="border-right:1px solid #111;width:85%;"><span class="inside-middle"></span></div>
                                            <div class="top_inf"><span class="span_name">Human being</span><span class="span_score"><span class="span_score">85</span></span></div>
                                        </div>
                                        <div class="progressbar" style="margin: 7px 0 2px 10px;"><!--Red-->
                                            <div class="bottom_bar"></div>
                                            <div class="i_bar_o" style="border-right:1px solid #111;width:85%;"><span class="inside-middle"></span></div>
                                            <div class="top_inf"><span class="span_name">Human being</span><span class="span_score"><span class="span_score">85</span></span></div>
                                        </div>             
                                    </div>
                            </div>
                            <div class="down">
                              <img style="margin:3px 0 0 70px;"  src="<?php echo base_url(); ?>images/downarw.png">
                            </div>
                            </div>
                            <div class="q_tab_container" style="margin-left:730px;">    
                                <div class="quality_tabbed" > <!--onclick="this.style.height=(this.style.height=='165px'?'auto':'165px');"-->
                                <span class="vi_span">Looks</span><br>
                                    <div class="block1">
                                        <div class="progressbar" style="margin: 7px 0 2px 10px;"><!--Red-->
                                            <div class="bottom_bar"></div>
                                            <div class="i_bar_p" style="border-right:1px solid #111;width:85%;"><span class="inside-middle"></span></div>
                                            <div class="top_inf"><span class="span_name">Human being</span><span class="span_score"><span class="span_score">85</span></span></div>
                                        </div> 
                                        <div class="progressbar" style="margin: 7px 0 2px 10px;"><!--Red-->
                                            <div class="bottom_bar"></div>
                                            <div class="i_bar_p" style="border-right:1px solid #111;width:85%;"><span class="inside-middle"></span></div>
                                            <div class="top_inf"><span class="span_name">Human being</span><span class="span_score"><span class="span_score">85</span></span></div>
                                        </div>
                                        <div class="progressbar" style="margin: 7px 0 2px 10px;"><!--Red-->
                                            <div class="bottom_bar"></div>
                                            <div class="i_bar_p" style="border-right:1px solid #111;width:85%;"><span class="inside-middle"></span></div>
                                            <div class="top_inf"><span class="span_name">Human being</span><span class="span_score"><span class="span_score">85</span></span></div>
                                        </div> 

                                    </div>
                            </div>
                            <div class="down">
                              <img style="margin:3px 0 0 70px;"  src="<?php echo base_url(); ?>images/downarw.png">
                            </div>
                             </div>
                              <div style="height:150px;width:5px;float:left;"></div>
                        </div>
                        <div class="gfm_info">
                          <div class="gfm_info_rel" style="width:888px;">
                            <p>Relationship</p>
                            <div class="gfm_s_rel"></div>
                            <div class="gfm_accepted"><a href="">Accepted</a></div>
                            <div class="gfm_s_rel"></div>
                            <div class="gfm_accepted"><a href="">Disputd</a></div>
                          </div>
                          <div class="gfrm_s_container">
                            <div class="gfrm_iden">
                              <label>Identity</label>
                              <div class="gfrm_iden_info"><p></p></div>
                            </div>
                            <div class="gfrm_iden">
                              <label>Visibility</label>
                              <div class="gfrm_iden_info"><p></p></div>
                            </div>
                            <div class="gfrm_iden" style="margin-right:0px;">
                              <label>Fake Scores</label>
                              <div class="gfrm_iden_info"><p></p></div>
                            </div>
                          </div>
                          <div class="gfrm_s_container">
                            <div class="gfrm_iden" style="margin-right:0px;width:886px">
                              <label style="width:127px;">Who you gossip to:</label>
                              <div class="gfrm_iden_info" style="width:738px;"><p></p></div>
                            </div>
                          </div>
                           <div class="goss_tell_btn_div">
                              <div class="goss_tell_other" style="margin-left:75px;">
                                <div class="goss_tell_replies">
                                  <span>Gossip replies:</span><span>7</span>
                                </div>
                                <div class="goss_tell_btn" style="margin-left:120px;">
                                  <span><a href="">View all gossip</a></span>
                                </div>
                                <div class="goss_tell_btn" style="margin-left:10px;">
                                  <span><a href="">Reply to all gossip</a></span>
                                </div>
                              </div> 
                              <div class="goss_tell_add" >
                                <div class="goss_tell_btn" >
                                  <span><a href="">Add Favourites</a></span>
                                </div>
                                <div class="goss_tell_btn" style="margin-left:10px;">
                                  <span><a href="">New gossip</a></span>
                                </div>
                              </div> 
                            </div>
                        </div>
                        <!-- things to copy -->
                      </div>
                      <div id="tab3" class="tab_content inactive hide">
                        <div class="mg_container1">
                            <div class="mg_pic" style="margin-left:22px;">
                              <img src="<?php echo base_url(); ?>images/neil_p_harris.png">
                            </div>
                            <div class="mg_relationship">
                              <p>Relationship</p>
                              <div class="demo_radio" id="something">
                                 <input type="radio">Family<br>
                                 <input type="radio">love Partner<br>
                                 <input type="radio">Family<br>
                                 <input type="radio">Family<br>
                                 <input type="radio">Family<br>
                                 <input type="radio">Family<br>
                                 <input type="radio">Family<br>
                               
                              </div>
                              <div class="hide_content" id="part1">
                                <input class="mg_radio" type="radio"><input class="mg_input" type="text"> 
                                <a href=""><div class="btn_s_add">Add</div></a>
                              </div>
                              <a href="" class="icon"><img id="show_down" src="<?php echo base_url(); ?>images/down_small.png"></a>
                              <a href="" class="icon"><img id="show_up" src="<?php echo base_url(); ?>images/up_small.png"></a>
                            </div>
                            <div class="mg_gossip">
                              <p>Gossip thread</p>
                              <input type="text" id="gossip_thread_value">
                              <textarea id="gossip_text"></textarea>
                            </div>
                            <div class="mg_intender">
                              <p>Gossip Intenders</p>
                                <div id="gossip_intenders_content_div"class="demo_radio">
                                 <input type="radio">Family<br>
                                 <input type="radio">love Partner<br>
                                 <input type="radio">Family<br>
                                 <input type="radio">Family<br>
                                 <input type="radio">Family<br>
                                 <input type="radio">Family<br>
                                 <input type="radio">Family<br>
                                  
                                </div>
                              <div class="hide_content" id="part2">
                                <input class="mg_radio" type="radio"><input class="mg_input" type="text"> 
                                <a href=""><div class="btn_s_add">Add</div></a>
                              </div>
                              <a href="" class="icon1"><img id="show_down1" src="<?php echo base_url(); ?>images/down_small.png"></a>
                              <a href="" class="icon1"><img id="show_up1" src="<?php echo base_url(); ?>images/up_small.png"></a>
                            </div>
                            <div class="mg_pic" style="margin-left:675px;">
                              <img src="<?php echo base_url(); ?>images/neil_p_harris.png">
                            </div>

                        </div>
                        <div class="mg_container2">
                            <div class="q_tab_container">
                            <div class="quality_tabbed" > <!--onclick="this.style.height=(this.style.height=='165px'?'auto':'165px');"-->
                                 
                                <span class="vi_span">Virtues</span><br>
                                    <div class="block1">
                                        <div class="plus_container">
				                             <div class="progressbar" style="margin: 7px 0 2px 10px;float:left;"><!--Blue-->
				                                <div class="bottom_bar"></div>
				                                <div   class="i_bar_s" style="border-right:1px solid #111;width:15%;"><span class="inside-middle"></span></div>
				                                <div class="top_inf"><span class="span_name">Hardworking</span><span class="span_score">12%<span class="triat_point_dummy span_score"></span></span></div>
				                            </div>
				                            <a href="">
				                                <div class="plus plus_inactive">
				                                    <input type="hidden"  /> <!-- Dynamic Id -->
				                                    <input type="hidden" /> <!-- Trait Category Id -->
				                                </div>
				                            </a>
				                        </div> 
				                        <div class="plus_container">
				                             <div class="progressbar" style="margin: 7px 0 2px 10px;float:left;"><!--Blue-->
				                                <div class="bottom_bar"></div>
				                                <div   class="i_bar_s" style="border-right:1px solid #111;width:15%;"><span class="inside-middle"></span></div>
				                                <div class="top_inf"><span class="span_name">Hardworking</span><span class="span_score">12%<span class="triat_point_dummy span_score"></span></span></div>
				                            </div>
				                            <a href="">
				                                <div class="plus plus_inactive">
				                                    <input type="hidden"  /> <!-- Dynamic Id -->
				                                    <input type="hidden" /> <!-- Trait Category Id -->
				                                </div>
				                            </a>
				                        </div> 
				                        <div class="plus_container">
				                             <div class="progressbar" style="margin: 7px 0 2px 10px;float:left;"><!--Blue-->
				                                <div class="bottom_bar"></div>
				                                <div   class="i_bar_s" style="border-right:1px solid #111;width:15%;"><span class="inside-middle"></span></div>
				                                <div class="top_inf"><span class="span_name">Hardworking</span><span class="span_score">12%<span class="triat_point_dummy span_score"></span></span></div>
				                            </div>
				                            <a href="">
				                                <div class="plus plus_inactive">
				                                    <input type="hidden"  /> <!-- Dynamic Id -->
				                                    <input type="hidden" /> <!-- Trait Category Id -->
				                                </div>
				                            </a>
				                        </div> 
				                        <div class="plus_container">
				                             <div class="progressbar" style="margin: 7px 0 2px 10px;float:left;"><!--Blue-->
				                                <div class="bottom_bar"></div>
				                                <div   class="i_bar_s" style="border-right:1px solid #111;width:15%;"><span class="inside-middle"></span></div>
				                                <div class="top_inf"><span class="span_name">Hardworking</span><span class="span_score">12%<span class="triat_point_dummy span_score"></span></span></div>
				                            </div>
				                            <a href="">
				                                <div class="plus plus_inactive">
				                                    <input type="hidden"  /> <!-- Dynamic Id -->
				                                    <input type="hidden" /> <!-- Trait Category Id -->
				                                </div>
				                            </a>
				                        </div> 
                                    </div>
                            </div>
                            <a href=""><div class="btn_add">Add New Virtue</div></a>
                            <div class="down">
                              <img  src="<?php echo base_url(); ?>images/downarw.png">
                            </div>
                          </div>
                          <div class="q_tab_container" style="margin-left:190px;">
                              <div class="quality_tabbed" > <!--onclick="this.style.height=(this.style.height=='165px'?'auto':'165px');"-->
                                      
                                    <span class="vi_span">Traits</span><br>
                                    <div class="block1">
                                        <div class="plus_container">
				                             <div class="progressbar" style="margin: 7px 0 2px 10px;float:left;"><!--Blue-->
				                                <div class="bottom_bar"></div>
				                                <div   class="i_bar_g" style="border-right:1px solid #111;width:15%;"><span class="inside-middle"></span></div>
				                                <div class="top_inf"><span class="span_name">Hardworking</span><span class="span_score">12%<span class="triat_point_dummy span_score"></span></span></div>
				                            </div>
				                            <a href="">
				                                <div class="plus plus_inactive">
				                                    <input type="hidden"  /> <!-- Dynamic Id -->
				                                    <input type="hidden" /> <!-- Trait Category Id -->
				                                </div>
				                            </a>
				                        </div>
				                    </div>    
                              </div>
                                <a href=""><div class="btn_add">Add New Virtue</div></a>
                                <div class="down"><img src="<?php echo base_url(); ?>images/downarw.png"></div>
                            </div>  
                          <div class="q_tab_container" style="margin-left:370px;">
                                 <div class="quality_tabbed" > <!--onclick="this.style.height=(this.style.height=='165px'?'auto':'165px');"-->
                                      
                                    <span class="vi_span">Skills</span><br>
                                    <div class="block1">
                                        <div class="plus_container">
				                             <div class="progressbar" style="margin: 7px 0 2px 10px;float:left;"><!--Blue-->
				                                <div class="bottom_bar"></div>
				                                <div   class="i_bar_y" style="border-right:1px solid #111;width:15%;"><span class="inside-middle"></span></div>
				                                <div class="top_inf"><span class="span_name">Hardworking</span><span class="span_score">12%<span class="triat_point_dummy span_score"></span></span></div>
				                            </div>
				                            <a href="">
				                                <div class="plus plus_inactive">
				                                    <input type="hidden"  /> <!-- Dynamic Id -->
				                                    <input type="hidden" /> <!-- Trait Category Id -->
				                                </div>
				                            </a>
				                        </div>
				                    </div>    
                              </div>
                                <a href=""><div class="btn_add">Add New Virtue</div></a>
                                <div class="down"><img src="<?php echo base_url(); ?>images/downarw.png"></div>
                            </div>
                            <div class="q_tab_container" style="margin-left:550px;">    
                                 <div class="quality_tabbed" > <!--onclick="this.style.height=(this.style.height=='165px'?'auto':'165px');"-->
                                      
                                    <span class="vi_span">Respect</span><br>
                                    <div class="block1">
                                        <div class="plus_container">
				                             <div class="progressbar" style="margin: 7px 0 2px 10px;float:left;"><!--Blue-->
				                                <div class="bottom_bar"></div>
				                                <div   class="i_bar_o" style="border-right:1px solid #111;width:15%;"><span class="inside-middle"></span></div>
				                                <div class="top_inf"><span class="span_name">Hardworking</span><span class="span_score">12%<span class="triat_point_dummy span_score"></span></span></div>
				                            </div>
				                            <a href="">
				                                <div class="plus plus_inactive">
				                                    <input type="hidden"  /> <!-- Dynamic Id -->
				                                    <input type="hidden" /> <!-- Trait Category Id -->
				                                </div>
				                            </a>
				                        </div>
				                    </div>    
                              </div>
                                <a href=""><div class="btn_add">Add New Virtue</div></a>
                                <div class="down"><img src="<?php echo base_url(); ?>images/downarw.png"></div>
                            </div>
                            <div class="q_tab_container" style="margin-left:730px;">    
                                 <div class="quality_tabbed" > <!--onclick="this.style.height=(this.style.height=='165px'?'auto':'165px');"-->
                                      
                                    <span class="vi_span">Apperence</span><br>
                                    <div class="block1">
                                        <div class="plus_container">
				                             <div class="progressbar" style="margin: 7px 0 2px 10px;float:left;"><!--Blue-->
				                                <div class="bottom_bar"></div>
				                                <div   class="i_bar_s" style="border-right:1px solid #111;width:15%;"><span class="inside-middle"></span></div>
				                                <div class="top_inf"><span class="span_name">Hardworking</span><span class="span_score">12%<span class="triat_point_dummy span_score"></span></span></div>
				                            </div>
				                            <a href="">
				                                <div class="plus plus_inactive">
				                                    <input type="hidden"  /> <!-- Dynamic Id -->
				                                    <input type="hidden" /> <!-- Trait Category Id -->
				                                </div>
				                            </a>
				                        </div>
				                    </div>    
                              </div>
                                <a href=""><div class="btn_add">Add New Virtue</div></a>
                                <div class="down"><img src="<?php echo base_url(); ?>images/downarw.png"></div>
                             </div>
                              <div style="height:150px;width:5px;float:left;"></div>
                        </div>
                        
                        <div id="trait_slide_bar_content_div" >
                            
                        </div>
                        <!-- Receipent container -->
                        <div class="mg_container3">
                          <div class="email_gossip">
                            <p>Email Gossip to</p>
                            <input type="text">
                          </div>
                          <div class="select_rec">
                            <p>Select receipents</p>
                            <input class="rec_input" type="text">
                            <input class="rec_input" type="text">
                            <a href=""><div class="btn_rec">Add</div></a>
                          </div>
                          <div class="email_gossip" style="margin:20px 0 0 25px;">
                            <p>Profile Authentication</p>
                            <input type="text">
                          </div>
                          <div class="genuine_scores">
                            <p>Genuine Scores</p>
                             <div class="progressbar"><!--Blue-->
                                <div class="bottom_bar"></div>
                                <div id="gossip_genuine_score" class="i_bar_s" style="border-right:1px solid #111;width:75%;"><span class="inside-middle"></span></div>
                                <div class="top_inf"><span class="span_name">Integrity</span><span class="span_score"><span class="span_score" id="gossip_genuine_score_span">75%</span></span></div>
                            </div>
                          </div>
                          <a href=""><div class="btn_s_gossip">Submit Gossip</div></a>
                        </div>
                      </div>
                      <div id="tab4" class="tab_content inactive">
                      </div>
        </div>                
              <!-- /Tabs -->
          </div> 
          </div>  
			<input type="hidden" id="base_url" value="<?php echo base_url();?>"</input>		
				</div>
				
		
 <?php include 'footer.php' ?>
<script type="text/javascript">
<!--
$(document).ready(function(){
  $("#tabsholder").tytabs({
              tabinit:"2",
              fadespeed:"slow"
              });
  $("#tabsholder2").tytabs({
              prefixtabs:"tabz",
              prefixcontent:"contentz",
              classcontent:"tabscontent",
              tabinit:"3",
              catchget:"tab2",
              fadespeed:"slow"
              });
});
-->
</script>
<!-- End Tabs-->
<script type="text/javascript">

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
	$(function()
	{
		 $("div#toggle").click(function()
                {
                        $("#show_img").fadeOut(1000,function(){

                                $("#head_slide").slideToggle();
                                       $("#show_img").show();
                               return false;
                        });

                }); 

	});
	$(function()
	{
		 $("div#toggle1").click(function()
                {
                        $("#show_img1").fadeOut(1000,function(){

                                $("#head_slide1").slideToggle();
                                $("#show_img1").show();
                               return false;
                        });

                }); 
	});
	$(function()
	{
		 $("div#toggle2").click(function()
                {
                        $("#show_img2").fadeOut(1000,function(){

                                $("#head_slide2").slideToggle();
                                       $("#show_img2").show();
                               return false;
                        });

                }); 
	});
	$(function()
	{
		 $("div#toggle3").click(function()
                {
                        $("#show_img3").fadeOut(1000,function(){

                                $("#head_slide3").slideToggle();
                                $("#show_img3").show();
                               return false;
                        });

                }); 

	});
</script>

<script>
		function like(){
	var current_val=Math.round($('#like_val').height()/$('#like_val').parent().height() * 100);
	if(current_val<100){
		var c_height=$('#like_val').height();
		c_height++;
		$('#like_val').height(c_height);
		
	}
}
function dislike(){
	var current_val=Math.round($('#like_val').height()/$('#like_val').parent().height() * 100);
	if(current_val>0){
		var c_height=$('#like_val').height();
		c_height--;
		$('#like_val').height(c_height);
		
	}
}
$(function(){
	var timeout_like, clicker_like = $('#like_div');
	
	clicker_like.mousedown(function(){
			timeout_like = setInterval(function(){
					like();
			},85);
	
			return false;
	});
	
	$(document).mouseup(function(){
			clearInterval(timeout_like);
			return false;
	});
	var timeout_dislike, clicker_dislike = $('#dislike_div');
	
	clicker_dislike.mousedown(function(){
		timeout_dislike = setInterval(function(){
					dislike();
			},85);
	
			return false;
	});
	
	$(document).mouseup(function(){
			clearInterval(timeout_dislike);
			return false;
	});
});


</script>