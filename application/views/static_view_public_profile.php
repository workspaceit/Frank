<?php include 'header.php' ?>
<link rel="stylesheet" href="<?php echo base_url(); ?>css/thin_slider.css" />
<script type="text/javascript" src="<?php echo base_url()."js/make_gossip_procedure.js"; ?>" ></script>
<script type="text/javascript" src="<?php echo base_url().'js/gossip_procedure.js'; ?>" ></script>
<?php function trait_box($i,$id,$sub_category,$length,$encrypt_tbl_primary_key_obj_local){ ?>
                        <div class="plus_container">
                             <div class="progressbar" style="margin: 7px 0 2px 10px;float:left;"><!--Blue-->
                                <div class="bottom_bar"></div>
                                <div  id="traits_progress_bar_<?php echo $i; ?>" class="i_bar_s" style="border-right:1px solid #111;width:0%;"><span class="inside-middle"></span></div>
                                <div class="top_inf"><span class="span_name"><?php  echo $sub_category; ?></span><span class="span_score"><span class="triat_point_dummy span_score"></span></span></div>
                            </div>
                            <a href="javascript:void(0)">
                                <div class="plus plus_inactive">
                                    <input type="hidden" value="<?php echo $i; ?>" /> <!-- Dynamic Id -->
                                    <input type="hidden" value="<?php echo $encrypt_tbl_primary_key_obj_local->get_encrypted_code($id); ?>" /> <!-- Trait Category Id -->
                                </div>
                            </a>
                        </div>
<?php  } ?>
<!--For Tabs-->
<link rel="stylesheet" href="<?php echo base_url(); ?>css/jquery-ui.css" />
<script type="text/javascript" src="<?php echo base_url(); ?>jQuery/tytabs.jquery.min.js"></script>

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
<script type="text/javascript">
$(document).ready(function() {
  // hides the slickbox as soon as the DOM is ready
  $('.demo_radio').animate({height: '80px'});
  $('.hide_content').hide();
  $('#show_up').hide();
  $('#show_up1').hide();

  $('.icon').click(function(e){
    e.preventDefault();
    var $this = $(this);
    
    var parentDiv = $this.parent();
    var demoRadio = parentDiv.find('.demo_radio');
        hideContent = parentDiv.find('.hide_content');
    
      if(demoRadio.css("height") == "80px") {
        demoRadio.animate({height: "100%"}, 1000);
        hideContent.show();
        $('#show_down').hide();
        $('#show_up').show();

      } else {
        demoRadio.animate({height: "80px"}, 1000);
        hideContent.hide();
        $('#show_down').show();
        $('#show_up').hide();

      }
      //return false;
      
  });

    $('.icon1').click(function(p){
      p.preventDefault();
      var $this = $(this),
          parentDiv= $this.parent(),
          demoRadio = parentDiv.find('.demo_radio');
          hideContent = parentDiv.find('.hide_content');
        if(demoRadio.css("height") == "80px") {
          demoRadio.animate({height: "100%"}, 1000);
          hideContent.show();
          $('#show_down1').hide();
          $('#show_up1').show();
        } else {
          console.log('hide');
          demoRadio.animate({height: "80px"}, 1000);
          hideContent.hide();
          $('#show_down1').show();
          $('#show_up1').hide();
        }
        // return false;
    });
  });
</script>
<script type="text/javascript">
  //   $(function() {
  //  $(".center").height($(".tab_content").height()+150);
  // });  
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
 <script>
    </script>
    <script type="text/javascript">
    
    // $(function()
    // {
    //      $("div#toggle").click(function()
    //                                              {
    //                                                 if($("#head_slide").css('display')=="block"){
    //                                                         $("#show_img_up").fadeOut(500,function(){
    //                                                              $("#show_img").fadeIn();
    //                                                               $("#head_slide").slideToggle(); 
    //                                                         });
    //                                                      }
    //                                                      else{
    //                                                            $("#show_img").fadeOut(500,function(){
    //                                                                  $("#show_img_up").fadeIn();
    //                                                                   $("#head_slide").slideToggle(); 
    //                                                             });
    //                                                         }   
                                                     
            
    //        });
    // });
    // $(function()
    // {
    //      $("div#toggle1").click(function()
    //                                               {
    //                                                 if($("#head_slide1").css('display')=="block"){
    //                                                         $("#show_img_up1").fadeOut(500,function(){
    //                                                              $("#show_img1").fadeIn();
    //                                                               $("#head_slide1").slideToggle(); 
    //                                                         });
    //                                                      }
    //                                                      else{
    //                                                            $("#show_img1").fadeOut(500,function(){
    //                                                                  $("#show_img_up1").fadeIn();
    //                                                                   $("#head_slide1").slideToggle(); 
    //                                                             });
    //                                                         }   
                                                     
            
    //        });
    // });
    // $(function()
    // {
    //      $("div#toggle2").click(function()
    //                                               {
    //                                                 if($("#head_slide2").css('display')=="block"){
    //                                                         $("#show_img_up2").fadeOut(500,function(){
    //                                                              $("#show_img2").fadeIn();
    //                                                               $("#head_slide2").slideToggle(); 
    //                                                         });
    //                                                      }
    //                                                      else{
    //                                                            $("#show_img2").fadeOut(500,function(){
    //                                                                  $("#show_img_up2").fadeIn();
    //                                                                   $("#head_slide2").slideToggle(); 
    //                                                             });
    //                                                         }   
                                                     
            
    //        });
    // });
    // $(function()
    // {
    //      $("div#toggle3").click(function()
    //                                               {
    //                                                 if($("#head_slide3").css('display')=="block"){
    //                                                         $("#show_img_up3").fadeOut(500,function(){
    //                                                              $("#show_img3").fadeIn();
    //                                                               $("#head_slide3").slideToggle(); 
    //                                                         });
    //                                                      }
    //                                                      else{
    //                                                            $("#show_img3").fadeOut(500,function(){
    //                                                                  $("#show_img_up3").fadeIn();
    //                                                                   $("#head_slide3").slideToggle(); 
    //                                                             });
    //                                                         }   
                                                     
            
    //        });
    // });
</script>
<script type="text/javascript" src="<?php echo base_url().'js/gossip_procedure.js'; ?>" ></script>
<body>

 <?php include 'advertise_left.php' ?>
 <?php include 'advertise_right.php' ?>
    <!--<div id="contentwrap">-->
        <div class="uni_content">
          <div class="infoBar">
            <p>Public Profile</p>
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
                            <div class="progressbar" style="margin: 7px 0 2px 2px;"><!--green-->
                                            <div class="bottom_bar"></div>
                                            <div class="i_bar_g" style="border-right:1px solid #111;width:30%;"><span class="inside-middle"></span></div>
                                            <div class="top_inf"><span class="span_name">Verified</span><span class="span_score"><span class="span_score">Disputed</span></span></div>
                                        </div> 
                    <?php if(!$is_favorite){ ?>
                             <div class="goss_tell_btn dummy_add_f_btn favourites">
                                <span><a href="javascript:void(0)" onclick="add_to_favourite(this,'<?php echo $profile_owner_email; ?>')">Add Favourites</a></span>
                             </div>
                   <?php } ?>
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
                                    <?php if($gender==0) { ?>
                                        <div style="float: left;margin: 1px 20px 0 0;"></div>
                                       <div class="editBioDataDiv">
                                               <div id="get_gender_value" style="float: left;"><?php echo $basic_data_one->gender;?></div>
                                               <a class="bio_data_edit_anchor" style="float:right;display:none;" id="get_gender_anchor" href="javascript:load_content('get_gender')" >
                                                       <img id="get_gender_loader" style="width:10px;height:10px;"  src="<?php echo base_url().'images/edit.png';?>"/>
                                               </a>
                                               <img class="bio_data_process" id="get_gender_process" style="width:10px;height:10px;float:right;display:none;"  src="<?php echo base_url().'images/process.gif';?>"/>
                                       </div>
                                   <?php }elseif($gender==1){ ?>
                                        <div class="small_circle_blue" id="gender_hidden">
                                            <a href="javascript:void(0)"><span  class="span_scircle_blue">H</span></a>
                                       </div>
                                        <div class="editBioDataDiv">

                                               <div id="get_gender_value" style="color:grey;float: left;">&nbsp;(Hidden)</div>
                                               <a class="bio_data_edit_anchor" style="float:right;display:none;" id="get_gender_anchor" href="javascript:load_content('get_gender')" >
                                                       <img id="get_gender_loader" style="width:10px;height:10px;"  src="<?php echo base_url().'images/edit.png';?>"/>
                                               </a>
                                               <img class="bio_data_process" id="get_gender_process" style="width:10px;height:10px;float:right;display:none;"  src="<?php echo base_url().'images/process.gif';?>"/>
                                       </div>                   
                                   <?php }?>

                                       
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
                                       <div style="float: left;margin: 1px 20px 0 0;"></div>
                                       <div class="editBioDataDiv">

                                               <div id="get_birthday_value" style="float: left;"><?php echo $day.'/'.$month.'/'.substr($year,2,2)?></div>
                                               <a class="bio_data_edit_anchor" style="float:right;display:none;" id="get_birthday_anchor" href="javascript:load_content('get_birthday')" >
                                                       <img id="get_birthday_loader" style="width:10px;height:10px;"  src="<?php echo base_url().'images/edit.png';?>"/>
                                               </a>
                                               <img class="bio_data_process" id="get_birthday_process" style="width:10px;height:10px;float:right;display:none;"  src="<?php echo base_url().'images/process.gif';?>"/>
                                       </div>
                                   <?php }elseif($birthday==1) {?>
                                       <div class="small_circle_blue" id="gender_hidden">
                                            <a href="javascript:void(0)"><span  class="span_scircle_blue">H</span></a>
                                       </div>
                                       <div class="editBioDataDiv" >

                                               <div id="get_birthday_value" style="color:grey;float: left;">&nbsp;(Hidden)</div>
                                               <a class="bio_data_edit_anchor" style="float:right;display:none;" id="get_birthday_anchor" href="javascript:load_content('get_birthday')" >
                                                       <img id="get_birthday_loader" style="width:10px;height:10px;"  src="<?php echo base_url().'images/edit.png';?>"/>
                                               </a>
                                               <img class="bio_data_process" id="get_birthday_process" style="width:10px;height:10px;float:right;display:none;"  src="<?php echo base_url().'images/process.gif';?>"/>
                                       </div>
                                   <?php }?>
                                       


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
                                       <div style="float: left;margin: 1px 20px 0 0;"></div>
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
                                   <?php }elseif($location==1){?>
                                       <div class="small_circle_blue" id="location_hidden">
                                           <a href="javascript:void(0)"><span  class="span_scircle_blue">H</span></a>
                                       </div>
                                       <div class="editBioDataDiv">
                                               <div id="get_location_value" style="float: left;color: grey;">&nbsp;(Hidden)</div>
                                               <a class="bio_data_edit_anchor" style="float:right;display:none;" id="get_location_anchor" href="javascript:load_content_of_user_profile_data('get_location')" >
                                                       <img id="get_location_loader" style="width:10px;height:10px;"  src="<?php echo base_url().'images/edit.png';?>"/>
                                               </a>
                                               <img class="bio_data_process" id="get_location_process" style="width:10px;height:10px;float:right;display:none;"  src="<?php echo base_url().'images/process.gif';?>"/>
                                       </div>
                                   <?php }?>
                                       
                               </div>
                       </div>
                       <div class="bio_info">
                               <div class="bi_span">
                                       <span class="span_bi">Home Town:</span>
                               </div>
                               <div class="bi_input">
                                   <?php if($home_town==0){?>
                                        <div style="float: left;margin: 1px 20px 0 0;"></div>
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
                                   <?php }elseif($home_town==1){?>
                                        <div class="small_circle_blue" id="home_town_hidden">
                                           <a href="javascript:void(0)"><span  class="span_scircle_blue">H</span></a>
                                       </div>
                                       <div class="editBioDataDiv">

                                               <div id="get_home_town_value" style="float: left;color: grey;">
                                                   &nbsp;(Hidden)
                                               </div>
                                               <a class="bio_data_edit_anchor" style="float:right;display:none;" id="get_home_town_anchor" href="javascript:load_content_of_user_profile_data('get_home_town')" >
                                                       <img id="get_home_town_loader" style="width:10px;height:10px;"  src="<?php echo base_url().'images/edit.png';?>"/>
                                               </a>
                                               <img class="bio_data_process" id="get_home_town_process" style="width:10px;height:10px;float:right;display:none;"  src="<?php echo base_url().'images/process.gif';?>"/>
                                       </div>
                                   <?php }?>
                                       
                               </div>
                       </div>
                       <div class="bio_info">
                               <div class="bi_span">
                                       <span class="span_bi">High School:</span>
                               </div>
                               <div class="bi_input">
                                   <?php if($high_school==0){ ?>
                                       <div style="float: left;margin: 1px 20px 0 0;"></div>
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
                                   <?php }elseif($high_school==1){ ?>
                                       
                                       <div class="small_circle_blue" id="high_school_hidden">
                                               <a href="javascript:void(0)"><span  class="span_scircle_blue">H</span></a>
                                       </div>
                                       <div class="editBioDataDiv">

                                               <div id="get_high_school_value" style="float: left;color:grey;">
                                                 &nbsp;(Hidden)
                                               </div>
                                               <a class="bio_data_edit_anchor" style="float:right;display:none;" id="get_high_school_anchor" href="javascript:load_content_of_user_profile_data('get_high_school')" >
                                                       <img id="get_high_school_loader" style="width:10px;height:10px;"  src="<?php echo base_url().'images/edit.png';?>"/>
                                               </a>
                                               <img class="bio_data_process" id="get_high_school_process" style="width:10px;height:10px;float:right;display:none;"  src="<?php echo base_url().'images/process.gif';?>"/>
                                       </div>
                                   <?php }?>
                                       
                               </div>
                       </div>
                       <div class="bio_info">
                               <div class="bi_span">
                                       <span class="span_bi">Higher Ed:</span>
                               </div>
                           
                               <div class="bi_input">
                                   <?php if($higher_education==0){?>
                                       <div style="float: left;margin: 1px 20px 0 0;"></div>
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
                                   <?php }?>
                                    <?php if($higher_education==1){?>
                                       <div class="small_circle_blue" id="higher_education_hidden">
                                               <a href="javascript:void(0)"><span  class="span_scircle_blue">H</span></a>
                                       </div>
                                        <div class="editBioDataDiv">

                                               <div id="get_higher_education_value" style="float: left;color:grey;">
                                                  &nbsp;(Hidden)
                                               </div>
                                               <a class="bio_data_edit_anchor" style="float:right;display:none;" id="get_higher_education_anchor" href="javascript:load_content_of_user_profile_data('get_higher_education')" >
                                                       <img id="get_higher_education_loader" style="width:10px;height:10px;"  src="<?php echo base_url().'images/edit.png';?>"/>
                                               </a>
                                               <img class="bio_data_process" id="get_higher_education_process" style="width:10px;height:10px;float:right;display:none;"  src="<?php echo base_url().'images/process.gif';?>"/>
                                       </div>
                                   <?php }?>
                               
                               </div>
                       </div>
                       <div class="bio_info">
                               <div class="bi_span">
                                       <span class="span_bi">Work Place:</span>
                               </div>
                               <div class="bi_input">
                                    <?php if($work_place==0){?>
                                       <div style="float: left;margin: 1px 20px 0 0;"></div>
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
                                   <?php }elseif($work_place==1){?>
                                       <div class="small_circle_blue" id="work_place_hidden">
                                           <a href="javascript:void(0)"><span  class="span_scircle_blue">H</span></a>
                                       </div>
                                       <div class="editBioDataDiv">

                                               <div id="get_workplace_value" style="float: left;color:grey;">
                                                   &nbsp;(Hidden)
                                               </div>
                                               <a class="bio_data_edit_anchor" style="float:right;display:none;" id="get_workplace_anchor" href="javascript:load_content_of_user_profile_data('get_workplace')" >
                                                       <img id="get_workplace_loader" style="width:10px;height:10px;"  src="<?php echo base_url().'images/edit.png';?>"/>
                                               </a>
                                               <img class="bio_data_process" id="get_workplace_process" style="width:10px;height:10px;float:right;display:none;"  src="<?php echo base_url().'images/process.gif';?>"/>
                                       </div>
                                   <?php }?>
                                       
                               </div>
                       </div>
                       <div class="bio_info">
                               <div class="bi_span">
                                       <span class="span_bi">Organization:</span>
                               </div>
                               <div class="bi_input">
                                   <?php if($organization==0){?>
                                       <div style="float: left;margin: 1px 20px 0 0;"></div>
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
                                   <?php }elseif($organization==1){?>
                                       <div class="small_circle_blue" id="organzation_hidden">
                                           <a href="javascript:void(0)"><span  class="span_scircle_blue">H</span></a>
                                       </div>
                                       <div class="editBioDataDiv">

                                               <div id="get_organization_value" style="float: left;color:grey;">
                                                 &nbsp;(Hidden)
                                               </div>
                                               <a class="bio_data_edit_anchor" style="float:right;display:none;" id="get_home_town_anchor" href="javascript:load_content_of_user_profile_data('get_organization')" >
                                                       <img id="get_organization_town_loader" style="width:10px;height:10px;"  src="<?php echo base_url().'images/edit.png';?>"/>
                                               </a>
                                               <img class="bio_data_process" id="get_organization_town_process" style="width:10px;height:10px;float:right;display:none;"  src="<?php echo base_url().'images/process.gif';?>"/>
                                       </div>
                                   <?php }?>
                            </div>
                       </div>
               </div>
               <?php }?>
                <?php $user_about_all_count=0; foreach ($user_about_all as $about_me_data){?>
                        <div class="about_me">
                                        <span>About Me</span>

                                <div id="user_about_me_content" class="about_details" ><?php echo $about_me_data->about_me; ?></div>

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
              <span>Stats</span><br>
              <div class="progressbar"><!--Blue-->
                                <div class="bottom_bar"></div>
                                <div class="i_bar_s" style="border-right:1px solid #111;width:20%;"><span class="inside-middle"></span></div>
                                <div class="top_inf"><span class="span_name">Sports</span><span class="span_score"><span class="span_score">85</span></span></div>
                            </div> 
                            <div class="progressbar"><!--Blue-->
                                <div class="bottom_bar"></div>
                                <div class="i_bar_s" style="border-right:1px solid #111;width:40%;"><span class="inside-middle"></span></div>
                                <div class="top_inf"><span class="span_name">Sports</span><span class="span_score"><span class="span_score">85</span></span></div>
                            </div>
                            <div class="progressbar"><!--Blue-->
                                <div class="bottom_bar"></div>
                                <div class="i_bar_s" style="border-right:1px solid #111;width:80%;"><span class="inside-middle"></span></div>
                                <div class="top_inf"><span class="span_name">Sports</span><span class="span_score"><span class="span_score">85</span></span></div>
                            </div>
                            <div class="progressbar"><!--Blue-->
                                <div class="bottom_bar"></div>
                                <div class="i_bar_s" style="border-right:1px solid #111;width:20%;"><span class="inside-middle"></span></div>
                                <div class="top_inf"><span class="span_name">Sports</span><span class="span_score"><span class="span_score">85</span></span></div>
                            </div>
                            <div class="progressbar"><!--Blue-->
                                <div class="bottom_bar"></div>
                                <div class="i_bar_s" style="border-right:1px solid #111;width:30%;"><span class="inside-middle"></span></div>
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
<!--                    <div class="quality"> onclick="this.style.height=(this.style.height=='165px'?'auto':'165px');"
                            <span class="vi_span">Virtues</span><br>
                            <div class="block1">
                                <?php $i=0; foreach($traits_user as $rowData){ ?>  Dynamic Block 
                                     <?php if($i<3){ ?>
                                        <div class="progressbar" style="margin: 7px 0 2px 10px;">Blue
                                            <div class="bottom_bar"></div>
                                            <div class="i_bar_s" style="border-right:1px solid #111;width:<?php echo ($rowData->sub_category_hidden==1) ? "0%": $rowData->sub_category_avg_point."%";?>;"><span class="inside-middle"></span></div>
                                            <div class="top_inf"><span class="span_name"><?php  echo $rowData->sub_category_value; ?></span><span class="span_score"><span class="span_score"><?php echo ($rowData->sub_category_hidden==1) ? "": $rowData->sub_category_avg_point;?></span></span></div>
                                        </div>
                                     <?php }elseif($i==3){ ?>
                                            
                                                <div id="head_slide" class="block2" style="display:none;">
                                                    <div class="progressbar" style="margin: 7px 0 2px 10px;">Blue
                                                       <div class="bottom_bar"></div>
                                                       <div class="i_bar_s" style="border-right:1px solid #111;width:<?php echo ($rowData->sub_category_hidden==1) ? "0%": $rowData->sub_category_avg_point."%";?>;"><span class="inside-middle"></span></div>
                                                       <div class="top_inf"><span class="span_name"><?php  echo $rowData->sub_category_value; ?></span><span class="span_score"><span class="span_score"><?php echo ($rowData->sub_category_hidden==1) ? "": $rowData->sub_category_avg_point;?></span></span></div>
                                                   </div>
                                             <?php if(sizeof($traits_user)==4){ ?>
                                                </div>
                                            <?php } ?>
                                            
                                            
                                     <?php }else{?>
                                                <div class="progressbar" style="margin: 7px 0 2px 10px;">Blue
                                                    <div class="bottom_bar"></div>
                                                    <div class="i_bar_s" style="border-right:1px solid #111;width:<?php echo ($rowData->sub_category_hidden==1) ? "0%": $rowData->sub_category_avg_point."%";?>;"><span class="inside-middle"></span></div>
                                                    <div class="top_inf"><span class="span_name"><?php  echo $rowData->sub_category_value; ?></span><span class="span_score"><span class="span_score"><?php echo ($rowData->sub_category_hidden==1) ? "": $rowData->sub_category_avg_point;?></span></span></div>
                                                </div>
                                     <?php } ?>

                                <?php $i++; } ; ?>
                            </div> 
                             <?php if($i>=4){ ?>
                                <div class="block3" id="toggle">
                                    <img id="show_img" style="margin:0 auto;" src="<?php echo base_url(); ?>images/downarw.png" height="25" width="25">
                                    <img id="show_img_up" style="margin:0 auto;display:none;" src="<?php echo base_url(); ?>images/uparrow.png" height="25" width="25">
                                </div>
                             <?php } ?>
                        </div>-->
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

            <!-- Gossip Tabs -->
            <?php include_once 'gossip_content_div.php'; ?>
          </div>  
        
        
    <!--</div>-->
        <!--Footer>-->
        
        <div id="dummy_trait_progress_row" style="display:none;">
            <div class="plus_container">
                <div style="margin: 7px 0 2px 10px;float:left;" class="progressbar"><!--Blue-->
                   <div class="bottom_bar"></div>
                   <div style="border-right:1px solid #111;width:0%;" class="i_bar_s" id="traits_progress_bar_0"><span class="inside-middle"></span></div>
                   <div class="top_inf"><span class="span_name">Smile</span><span class="span_score"><span class="triat_point_dummy span_score"></span></span></div>
               </div>
               <a href="javascript:void(0)">
                   <div class="plus plus_inactive">
                       <input type="hidden" value="0"> <!-- Dynamic Id -->
                       <input type="hidden" value="DlAbgMZYHliqBng6KEPT34rt9b3UCh+8T+moj7J5EU4="> <!-- Trait Category Id -->
                   </div>
               </a>
           </div>
       </div>
        <div id="dummy_trait_progress_text_row" style="display:none;">
            <div class="plus_container">
                <input class="new_trait" type="text" style="width:72%;margin:6px -25px 8px -16px;">
                <a href="javascript:void(0)">
                   <div class="new_trait_plus plus_inactive">
                   </div>
               </a>
            </div>
       </div>
         <script type="text/javascript">
        //   $(document).ready(function() {
        //       // hides the slickbox as soon as the DOM is read
        //        $(".center").height($(".tab_content").height()+150);
        //              $('.tab_a').click(function(){
        //               $(this).parent().find('.quality_tabbed').each(function(){
        //               $(this).attr("class");
        //               if($(this).css("height") == "112px") {
        //               $(this).animate({height: "100%"}, 1000);

        //               } else {
        //                   $(this).animate({height: "112px"}, 500);
        //                   }
        //                   return false;
        //                });
        //         });
        //   });
        </script>
        <!-- Hidden tags [Start] -->
        <input type="hidden" id="trait_queue" value="" />
        <input type="hidden" id="target_id" value="<?php echo $target_id; ?>" />
        <input type="hidden" id="trait_dynamic_id" value="<?php echo $trait_dynamic_id; ?>" />
        <input type="hidden" id="defalut_trait_dynamic_id" value="<?php echo $trait_dynamic_id; ?>" />
        <input type="hidden" id="recipient_queue" value="" />
        <input type="hidden" id="recipient_sugession" value="" />
        <input type="hidden" id="recipient_sugession_index" value="-1" />
        <!-- Hidden tags [Ends] -->
<?php include 'footer.php' ?>
<script>
    set_postion_fixed();
    initialize_notification_bar("40px","304px");
</script>

