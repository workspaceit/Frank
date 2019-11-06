<?php include 'header.php' ?>
<!--For Tabs-->
<link rel="stylesheet" href="<?php echo base_url(); ?>css/jquery-ui.css" />
  <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
  <script src="http://code.jquery.com/ui/1.10.2/jquery-ui.js"></script>
  <script>
  $(function() {
    $( "#slider-range-min" ).slider({
      range: "min",
      value: 37,
      min: 1,
      max: 700,
      slide: function( event, ui ) {
        $( "#amount" ).val( "$" + ui.value );
      }
    });
    $( "#amount" ).val( "$" + $( "#slider-range-min" ).slider( "value" ) );
  });
  </script>
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
    div.tab_content.active{overflow:;}
</style>
<script type="text/javascript">
    $(function() {
   $(".center").height($("#tab3").height()+150);
  });
    

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
                                                    if($("#head_slide").css('display')=="block"){
                                                            $("#show_img_up").fadeOut(500,function(){
                                                                 $("#show_img").fadeIn();
                                                                  $("#head_slide").slideToggle(); 
                                                            });
                                                         }
                                                         else{
                                                               $("#show_img").fadeOut(500,function(){
                                                                     $("#show_img_up").fadeIn();
                                                                      $("#head_slide").slideToggle(); 
                                                                });
                                                            }   
                                                     
            
           });
    });
    $(function()
    {
         $("div#toggle1").click(function()
                                                  {
                                                    if($("#head_slide1").css('display')=="block"){
                                                            $("#show_img_up1").fadeOut(500,function(){
                                                                 $("#show_img1").fadeIn();
                                                                  $("#head_slide1").slideToggle(); 
                                                            });
                                                         }
                                                         else{
                                                               $("#show_img1").fadeOut(500,function(){
                                                                     $("#show_img_up1").fadeIn();
                                                                      $("#head_slide1").slideToggle(); 
                                                                });
                                                            }   
                                                     
            
           });
    });
    $(function()
    {
         $("div#toggle2").click(function()
                                                  {
                                                    if($("#head_slide2").css('display')=="block"){
                                                            $("#show_img_up2").fadeOut(500,function(){
                                                                 $("#show_img2").fadeIn();
                                                                  $("#head_slide2").slideToggle(); 
                                                            });
                                                         }
                                                         else{
                                                               $("#show_img2").fadeOut(500,function(){
                                                                     $("#show_img_up2").fadeIn();
                                                                      $("#head_slide2").slideToggle(); 
                                                                });
                                                            }   
                                                     
            
           });
    });
    $(function()
    {
         $("div#toggle3").click(function()
                                                  {
                                                    if($("#head_slide3").css('display')=="block"){
                                                            $("#show_img_up3").fadeOut(500,function(){
                                                                 $("#show_img3").fadeIn();
                                                                  $("#head_slide3").slideToggle(); 
                                                            });
                                                         }
                                                         else{
                                                               $("#show_img3").fadeOut(500,function(){
                                                                     $("#show_img_up3").fadeIn();
                                                                      $("#head_slide3").slideToggle(); 
                                                                });
                                                            }   
                                                     
            
           });
    });
</script>
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
                          <div class="pic_div">
                <span>Developer&nbsp; &nbsp;Wsit</span><br>
                                                                                                                                    <img id="user_profile_picture" src="http://localhost/frank/uploads/images_e9.jpg" height="154" width="125">
                                                                              </div>
                            <div class="pp_progress">
                <div class="progressbar" style="margin: 7px 0 2px 2px;"><!--green-->
                                <div class="bottom_bar"></div>
                                <div class="i_bar_g" style="border-right:1px solid #111;width:30%;"><span class="inside-middle"></span></div>
                                <div class="top_inf"><span class="span_name">Verified</span><span class="span_score"><span class="span_score">Disputed</span></span></div>
                            </div> 
                <div class="change_picture">
                                      <!-- <input type="hidden" id="pic_path" name="pic_path" value=""/> -->
                                      <input id="change_profile_picture" name="change_profile_picture" class="change_file_browse" type="file">
                </div> 
              </div>
            </div>
                                                             <div class="bio_data">
              <span style="margin:0 0 0 50px;font-size:15px;font-weight:bold;">Bio Data</span><a id="edit_bio_data_anchor" style="float:right;" href="javascript:edit_operation()"><div class="btn_bdedit">Edit</div></a>
              <div class="bio_info">
                <div class="bi_span">
                  <span class="span_bi">Gender:</span>
                </div>
                <div class="bi_input">
                                                                                                                                                               <div class="small_circle_grey" id="gender_hidden">
                                                                             <a href="javascript:hide_profile('gender')"><span class="span_scircle">H</span></a>
                  </div>
                                                                                                                                       
                  <div class="editBioDataDiv">
                    
                    <div id="get_gender_value" style="float: left;">male</div>
                    <a class="bio_data_edit_anchor" style="float:right;display:none;" id="get_gender_anchor" href="javascript:load_content('get_gender')">
                      <img id="get_gender_loader" style="width:10px;height:10px;" src="http://localhost/frank/images/edit.png">
                    </a>
                    <img class="bio_data_process" id="get_gender_process" style="width:10px;height:10px;float:right;display:none;" src="http://localhost/frank/images/process.gif">
                  </div>
                                                    </div>
              </div>
              <div class="bio_info">
                <div class="bi_span">
                  <span class="span_bi">Birthday:</span>
                </div>
                <div class="bi_input">
                                                                                        <div class="small_circle" id="birthday_hidden">
                                                                            <a href="javascript:hide_profile('birthday')"><span class="span_scircle">H</span></a>
                  </div>
                                                                                                                                                          <div class="editBioDataDiv">
                    
                    <div id="get_birthday_value" style="float: left;">18/08/95</div>
                    <a class="bio_data_edit_anchor" style="float:right;display:none;" id="get_birthday_anchor" href="javascript:load_content('get_birthday')">
                      <img id="get_birthday_loader" style="width:10px;height:10px;" src="http://localhost/frank/images/edit.png">
                    </a>
                    <img class="bio_data_process" id="get_birthday_process" style="width:10px;height:10px;float:right;display:none;" src="http://localhost/frank/images/process.gif">
                  </div>
                  

                </div>
              </div>
                                          <div class="bio_info">
                <div class="bi_span">
                  <span class="span_bi">Location:</span>
                </div>
                <div class="bi_input">
                                                                                      <div class="small_circle" id="location_hidden">
                                                                            <a href="javascript:hide_profile('location')"><span class="span_scircle">H</span></a>
                  </div>
                                                                                                                                                          <div class="editBioDataDiv">
                    
                    <div id="get_location_value" style="float: left;">
                                                                                   Bananisd &amp; Dhakadd                                                                                         
                                                                                </div>
                    <a class="bio_data_edit_anchor" style="float:right;display:none;" id="get_location_anchor" href="javascript:load_content_of_user_profile_data('get_location')">
                      <img id="get_location_loader" style="width:10px;height:10px;" src="http://localhost/frank/images/edit.png">
                    </a>
                    <img class="bio_data_process" id="get_location_process" style="width:10px;height:10px;float:right;display:none;" src="http://localhost/frank/images/process.gif">
                  </div>
                </div>
              </div>
              <div class="bio_info">
                <div class="bi_span">
                  <span class="span_bi">Home Town:</span>
                </div>
                <div class="bi_input">
                                                                                      <div class="small_circle" id="home_town_hidden">
                                                                            <a href="javascript:hide_profile('home_town')"><span class="span_scircle">H</span></a>
                  </div>
                                                                                                                                                          <div class="editBioDataDiv">
                    
                    <div id="get_home_town_value" style="float: left;">
                                                                                   Maejdi &amp; Noakhali                                                                                         
                                                                                </div>
                    <a class="bio_data_edit_anchor" style="float:right;display:none;" id="get_home_town_anchor" href="javascript:load_content_of_user_profile_data('get_home_town')">
                      <img id="get_home_town_loader" style="width:10px;height:10px;" src="http://localhost/frank/images/edit.png">
                    </a>
                    <img class="bio_data_process" id="get_home_town_process" style="width:10px;height:10px;float:right;display:none;" src="http://localhost/frank/images/process.gif">
                  </div>
                </div>
              </div>
              <div class="bio_info">
                <div class="bi_span">
                  <span class="span_bi">High School:</span>
                </div>
                <div class="bi_input">
                                                                                                                                                          <div class="small_circle_grey" id="high_school_hidden">
                    <a href="javascript:hide_profile('high_school')"><span class="span_scircle">H</span></a>
                  </div>
                                                                                      <div class="editBioDataDiv">
                    
                    <div id="get_high_school_value" style="float: left;">
                                                                                   NK High School                                                                                         
                                                                                </div>
                    <a class="bio_data_edit_anchor" style="float:right;display:none;" id="get_high_school_anchor" href="javascript:load_content_of_user_profile_data('get_high_school')">
                      <img id="get_high_school_loader" style="width:10px;height:10px;" src="http://localhost/frank/images/edit.png">
                    </a>
                    <img class="bio_data_process" id="get_high_school_process" style="width:10px;height:10px;float:right;display:none;" src="http://localhost/frank/images/process.gif">
                  </div>
                </div>
              </div>
              <div class="bio_info">
                <div class="bi_span">
                  <span class="span_bi">Higher Ed:</span>
                </div>
                <div class="bi_input">
                                                                                      <div class="small_circle" id="higher_education_hidden">
                                                                            <a href="javascript:hide_profile('higher_education')"><span class="span_scircle">H</span></a>
                  </div>
                                                                                                                                                          <div class="editBioDataDiv">
                    
                    <div id="get_higher_education_value" style="float: left;">
                                                                                   AIUB                                                                                         
                                                                                </div>
                    <a class="bio_data_edit_anchor" style="float:right;display:none;" id="get_higher_education_anchor" href="javascript:load_content_of_user_profile_data('get_higher_education')">
                      <img id="get_higher_education_loader" style="width:10px;height:10px;" src="http://localhost/frank/images/edit.png">
                    </a>
                    <img class="bio_data_process" id="get_higher_education_process" style="width:10px;height:10px;float:right;display:none;" src="http://localhost/frank/images/process.gif">
                  </div>
                </div>
              </div>
              <div class="bio_info">
                <div class="bi_span">
                  <span class="span_bi">Work Place:</span>
                </div>
                <div class="bi_input">
                                                                                                                                                            <div class="small_circle_grey" id="work_place_hidden">
                                                                            <a href="javascript:hide_profile('work_place')"><span class="span_scircle">H</span></a>
                  </div>
                                                                                      <div class="editBioDataDiv">
                    
                    <div id="get_workplace_value" style="float: left;">
                                                                                   Wsit                                                                                         
                                                                                </div>
                    <a class="bio_data_edit_anchor" style="float:right;display:none;" id="get_workplace_anchor" href="javascript:load_content_of_user_profile_data('get_workplace')">
                      <img id="get_workplace_loader" style="width:10px;height:10px;" src="http://localhost/frank/images/edit.png">
                    </a>
                    <img class="bio_data_process" id="get_workplace_process" style="width:10px;height:10px;float:right;display:none;" src="http://localhost/frank/images/process.gif">
                  </div>
                </div>
              </div>
              <div class="bio_info">
                <div class="bi_span">
                  <span class="span_bi">Organization:</span>
                </div>
                <div class="bi_input">
                                                                                      <div class="small_circle" id="organzation_hidden">
                                                                            <a href="javascript:hide_profile('organzation')"><span class="span_scircle">H</span></a>
                  </div>
                                                                                                                                                                                                            <div class="editBioDataDiv">
                    
                    <div id="get_organization_value" style="float: left;">
                                                                                   wsit                                                                                         
                                                                                </div>
                    <a class="bio_data_edit_anchor" style="float:right;display:none;" id="get_home_town_anchor" href="javascript:load_content_of_user_profile_data('get_organization')">
                      <img id="get_organization_town_loader" style="width:10px;height:10px;" src="http://localhost/frank/images/edit.png">
                    </a>
                    <img class="bio_data_process" id="get_organization_town_process" style="width:10px;height:10px;float:right;display:none;" src="http://localhost/frank/images/process.gif">
                  </div>
               </div>
              </div>
            </div>
              <div class="about_me">
                    <span style="margin:0 0 0 50px;font-size:15px;font-weight:bold;">About Me</span>
                    <a href="javascript:load_user_about_me_update_view()" style="float:right;"><div class="btn_bdedit">Edit</div></a>
                    <div id="user_about_me_content" style="
                                                             color:black;
                                                               background:white;
                                                                width:277px;
                                                                 height:190px;
                                                                   margin: 10px 5px 0px ; 
                                                                    padding: 6px;
                                                                       border-radius: 5px 5px 5px 5px;">This Developer Wsit .. The Page Is Under construction..</div>

                     </div>                                          
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

          <div class="top3_container">
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
            <div class="quality"> <!--onclick="this.style.height=(this.style.height=='165px'?'auto':'165px');"-->
                            <span class="vi_span">Virtues</span><br>
                            <div class="block1">
                            <div class="progressbar" style="margin: 7px 0 2px 10px;"><!--Blue-->
                                <div class="bottom_bar"></div>
                                <div class="i_bar_s" style="border-right:1px solid #111;width:85%;"><span class="inside-middle"></span></div>
                                <div class="top_inf"><span class="span_name">Reliable</span><span class="span_score"><span class="span_score">85</span></span></div>
                            </div> 
                            <div class="progressbar" style="margin: 7px 0 2px 10px;"><!--Blue-->
                                <div class="bottom_bar"></div>
                                <div class="i_bar_s" style="border-right:1px solid #111;width:75%;"><span class="inside-middle"></span></div>
                                <div class="top_inf"><span class="span_name">kind</span><span class="span_score"><span class="span_score">75</span></span></div>
                            </div> 
                            <div class="progressbar" style="margin: 7px 0 2px 10px;"><!--Blue-->
                                <div class="bottom_bar"></div>
                                <div class="i_bar_s" style="border-right:1px solid #111;width:60%;"><span class="inside-middle"></span></div>
                                <div class="top_inf"><span class="span_name">Honest</span><span class="span_score"><span class="span_score">60</span></span></div>
                            </div> 
                            <div class="progressbar" style="margin: 7px 0 2px 10px;"><!--Blue-->
                                <div class="bottom_bar"></div>
                                <div class="i_bar_s" style="border-right:1px solid #111;width:85%;"><span class="inside-middle"></span></div>
                                <div class="top_inf"><span class="span_name">Generous</span><span class="span_score"><span class="span_score">85</span></span></div>
                            </div>
                            </div> 
                            <div id="head_slide" class="block2" style="display:none;">
                            <div class="progressbar" style="margin: 7px 0 2px 10px;"><!--Blue-->
                                <div class="bottom_bar"></div>
                                <div class="i_bar_s" style="border-right:1px solid #111;width:85%;"><span class="inside-middle"></span></div>
                                <div class="top_inf"><span class="span_name">Helpful</span><span class="span_score"><span class="span_score">85</span></span></div>
                            </div> 
                            <div class="progressbar" style="margin: 7px 0 2px 10px;"><!--Blue-->
                                <div class="bottom_bar"></div>
                                <div class="i_bar_s" style="border-right:1px solid #111;width:85%;"><span class="inside-middle"></span></div>
                                <div class="top_inf"><span class="span_name">Helpful</span><span class="span_score"><span class="span_score">85</span></span></div>
                            </div> 
                            <div class="progressbar" style="margin: 7px 0 2px 10px;"><!--Blue-->
                                <div class="bottom_bar"></div>
                                <div class="i_bar_s" style="border-right:1px solid #111;width:85%;"><span class="inside-middle"></span></div>
                                <div class="top_inf"><span class="span_name">Helpful</span><span class="span_score"><span class="span_score">85</span></span></div>
                            </div> 
                            </div>
                            <div class="block3" id="toggle">
                                <img id="show_img" style="margin:0 auto;" src="http://localhost/frank/images/downarw.png" height="25" width="25">
                                <img id="show_img_up" style="margin:0 auto;display:none;" src="http://localhost/frank/images/uparrow.png" height="25" width="25">
                            </div>
                        </div>
            <div class="quality">
                            <span class="tr_span">Traits</span><br>
                            <div class="block1">
                            <div class="progressbar" style="margin: 7px 0 2px 10px;"><!--green-->
                                <div class="bottom_bar"></div>
                                <div class="i_bar_g" style="border-right:1px solid #111;width:85%;"><span class="inside-middle"></span></div>
                                <div class="top_inf"><span class="span_name">Hardworking</span><span class="span_score"><span class="span_score">85</span></span></div>
                            </div> 
                            <div class="progressbar" style="margin: 7px 0 2px 10px;"><!--green-->
                                <div class="bottom_bar"></div>
                                <div class="i_bar_g" style="border-right:1px solid #111;width:75%;"><span class="inside-middle"></span></div>
                                <div class="top_inf"><span class="span_name">Funny</span><span class="span_score"><span class="span_score">75</span></span></div>
                            </div>
                            <div class="progressbar" style="margin: 7px 0 2px 10px;"><!--green-->
                                <div class="bottom_bar"></div>
                                <div class="i_bar_g" style="border-right:1px solid #111;width:60%;"><span class="inside-middle"></span></div>
                                <div class="top_inf"><span class="span_name">Creative</span><span class="span_score"><span class="span_score">60</span></span></div>
                            </div>
                            <div class="progressbar" style="margin: 7px 0 2px 10px;"><!--green-->
                                <div class="bottom_bar"></div>
                                <div class="i_bar_g" style="border-right:1px solid #111;width:55%;"><span class="inside-middle"></span></div>
                                <div class="top_inf"><span class="span_name">Wise</span><span class="span_score"><span class="span_score">55</span></span></div>
                            </div>
                            </div>
                            <div id="head_slide1" class="block2" style="display:none;">
                            <div class="progressbar" style="margin: 7px 0 2px 10px;"><!--green-->
                                <div class="bottom_bar"></div>
                                <div class="i_bar_g" style="border-right:1px solid #111;width:50%;"><span class="inside-middle"></span></div>
                                <div class="top_inf"><span class="span_name">Talketive</span><span class="span_score"><span class="span_score">50</span></span></div>
                            </div>
                            <div class="progressbar" style="margin: 7px 0 2px 10px;"><!--green-->
                                <div class="bottom_bar"></div>
                                <div class="i_bar_g" style="border-right:1px solid #111;width:50%;"><span class="inside-middle"></span></div>
                                <div class="top_inf"><span class="span_name">Talketive</span><span class="span_score"><span class="span_score">50</span></span></div>
                            </div>
                            <div class="progressbar" style="margin: 7px 0 2px 10px;"><!--green-->
                                <div class="bottom_bar"></div>
                                <div class="i_bar_g" style="border-right:1px solid #111;width:50%;"><span class="inside-middle"></span></div>
                                <div class="top_inf"><span class="span_name">Talketive</span><span class="span_score"><span class="span_score">50</span></span></div>
                            </div>
                            <div class="progressbar" style="margin: 7px 0 2px 10px;"><!--green-->
                                <div class="bottom_bar"></div>
                                <div class="i_bar_g" style="border-right:1px solid #111;width:50%;"><span class="inside-middle"></span></div>
                                <div class="top_inf"><span class="span_name">Talketive</span><span class="span_score"><span class="span_score">50</span></span></div>
                            </div>
                            </div>
                            <div class="block3" id="toggle1">
                                <img id="show_img1" style="margin:0 auto;" src="http://localhost/frank/images/downarw.png" height="25" width="25">
                                <img id="show_img_up1" style="margin:0 auto;display:none;" src="http://localhost/frank/images/uparrow.png" height="25" width="25">
                            </div>
                        </div>
            <div class="quality">
                            <span class="sk_span">Skills</span><br>
                            <div class="block1">
                            <div class="progressbar" style="margin: 7px 0 2px 10px;"><!--Yellow-->
                                <div class="bottom_bar"></div>
                                <div id="t" class="i_bar_y" style="border-right:1px solid #111;width:75%;"><span class="inside-middle"></span></div>
                                <div class="top_inf"><span class="span_name">Sports</span><span class="span_score"><span class="span_score">75</span></span></div>
                            </div> 
                            <div class="progressbar" style="margin: 7px 0 2px 10px;"><!--Yellow-->
                                <div class="bottom_bar"></div>
                                <div id="t" class="i_bar_y" style="border-right:1px solid #111;width:90%;"><span class="inside-middle"></span></div>
                                <div class="top_inf"><span class="span_name">Maths</span><span class="span_score"><span class="span_score">90</span></span></div>
                            </div>
                            <div class="progressbar" style="margin: 7px 0 2px 10px;"><!--Yellow-->
                                <div class="bottom_bar"></div>
                                <div id="t" class="i_bar_y" style="border-right:1px solid #111;width:70%;"><span class="inside-middle"></span></div>
                                <div class="top_inf"><span class="span_name">Arts</span><span class="span_score"><span class="span_score">70</span></span></div>
                            </div>
                            <div class="progressbar" style="margin: 7px 0 2px 10px;"><!--Yellow-->
                                <div class="bottom_bar"></div>
                                <div id="t" class="i_bar_y" style="border-right:1px solid #111;width:10%;"><span class="inside-middle"></span></div>
                                <div class="top_inf"><span class="span_name">Cooking</span><span class="span_score"><span class="span_score">10</span></span></div>
                            </div>
                            </div>
                            <div id="head_slide2" class="block2" style="display:none;">
                                <div class="progressbar" style="margin: 7px 0 2px 10px;"><!--Yellow-->
                                <div class="bottom_bar"></div>
                                <div id="t" class="i_bar_y" style="border-right:1px solid #111;width:70%;"><span class="inside-middle"></span></div>
                                <div class="top_inf"><span class="span_name">Arts</span><span class="span_score"><span class="span_score">70</span></span></div>
                            </div>
                            <div class="progressbar" style="margin: 7px 0 2px 10px;"><!--Yellow-->
                                <div class="bottom_bar"></div>
                                <div id="t" class="i_bar_y" style="border-right:1px solid #111;width:10%;"><span class="inside-middle"></span></div>
                                <div class="top_inf"><span class="span_name">Cooking</span><span class="span_score"><span class="span_score">10</span></span></div>
                            </div>
                            <div class="progressbar" style="margin: 7px 0 2px 10px;"><!--Yellow-->
                                <div class="bottom_bar"></div>
                                <div id="t" class="i_bar_y" style="border-right:1px solid #111;width:70%;"><span class="inside-middle"></span></div>
                                <div class="top_inf"><span class="span_name">Arts</span><span class="span_score"><span class="span_score">70</span></span></div>
                            </div>
                            <div class="progressbar" style="margin: 7px 0 2px 10px;"><!--Yellow-->
                                <div class="bottom_bar"></div>
                                <div id="t" class="i_bar_y" style="border-right:1px solid #111;width:10%;"><span class="inside-middle"></span></div>
                                <div class="top_inf"><span class="span_name">Cooking</span><span class="span_score"><span class="span_score">10</span></span></div>
                            </div>
                            </div>
                            <div class="block3" id="toggle2">
                                <img id="show_img2" style="margin:0 auto;" src="http://localhost/frank/images/downarw.png" height="25" width="25">
                                <img id="show_img_up2" style="margin:0 auto;display:none;" src="http://localhost/frank/images/uparrow.png" height="25" width="25">
                            </div>

                        </div>
            <div class="quality">
                            <span class="re_span">Regard</span><br>
                            <div class="block1">
                            <div class="progressbar" style="margin: 7px 0 2px 10px;"><!--Red-->
                                <div class="bottom_bar"></div>
                                <div class="i_bar_o" style="border-right:1px solid #111;width:85%;"><span class="inside-middle"></span></div>
                                <div class="top_inf"><span class="span_name">Human being</span><span class="span_score"><span class="span_score">85</span></span></div>
                            </div>
                            <div class="progressbar" style="margin: 7px 0 2px 10px;"><!--Red-->
                                <div class="bottom_bar"></div>
                                <div class="i_bar_o" style="border-right:1px solid #111;width:75%;"><span class="inside-middle"></span></div>
                                <div class="top_inf"><span class="span_name">Close friend</span><span class="span_score"><span class="span_score">75</span></span></div>
                            </div>
                            <div class="progressbar" style="margin: 7px 0 2px 10px;"><!--Red-->
                                <div class="bottom_bar"></div>
                                <div class="i_bar_o" style="border-right:1px solid #111;width:80%;"><span class="inside-middle"></span></div>
                                <div class="top_inf"><span class="span_name">Classmate</span><span class="span_score"><span class="span_score">80</span></span></div>
                            </div>
                            <div class="progressbar" style="margin: 7px 0 2px 10px;"><!--Red-->
                                <div class="bottom_bar"></div>
                                <div class="i_bar_o" style="border-right:1px solid #111;width:80%;"><span class="inside-middle"></span></div>
                                <div class="top_inf"><span class="span_name">Classmate</span><span class="span_score"><span class="span_score">80</span></span></div>
                            </div>
                            </div>
                            <div id="head_slide3" class="block2" style="display:none;">
                            <div class="progressbar" style="margin: 7px 0 2px 10px;"><!--Red-->
                                <div class="bottom_bar"></div>
                                <div class="i_bar_o" style="border-right:1px solid #111;width:85%;"><span class="inside-middle"></span></div>
                                <div class="top_inf"><span class="span_name">Human being</span><span class="span_score"><span class="span_score">85</span></span></div>
                            </div>
                            <div class="progressbar" style="margin: 7px 0 2px 10px;"><!--Red-->
                                <div class="bottom_bar"></div>
                                <div class="i_bar_o" style="border-right:1px solid #111;width:75%;"><span class="inside-middle"></span></div>
                                <div class="top_inf"><span class="span_name">Close friend</span><span class="span_score"><span class="span_score">75</span></span></div>
                            </div>
                            <div class="progressbar" style="margin: 7px 0 2px 10px;"><!--Red-->
                                <div class="bottom_bar"></div>
                                <div class="i_bar_o" style="border-right:1px solid #111;width:80%;"><span class="inside-middle"></span></div>
                                <div class="top_inf"><span class="span_name">Classmate</span><span class="span_score"><span class="span_score">80</span></span></div>
                            </div>
                            <div class="progressbar" style="margin: 7px 0 2px 10px;"><!--Red-->
                                <div class="bottom_bar"></div>
                                <div class="i_bar_o" style="border-right:1px solid #111;width:80%;"><span class="inside-middle"></span></div>
                                <div class="top_inf"><span class="span_name">Classmate</span><span class="span_score"><span class="span_score">80</span></span></div>
                            </div>
                            </div>
                            <div class="block3" id="toggle3">
                                <img id="show_img3" style="margin:0 auto;" src="http://localhost/frank/images/downarw.png" height="25" width="25">
                                <img id="show_img_up3" style="margin:0 auto;display:none;" src="http://localhost/frank/images/uparrow.png" height="25" width="25">
                            </div>

                        </div>
                    </div> 
          <div style="height: 850px;" class="center">
              <p>&nbsp;</p>
              <!-- Tabs -->
              <div style="width:940px;margin:20px auto;position:relative;">
                      <ul class="tabs">
                          <li class="active">
                              <a class="tab_a" href="#tab1"><p class="tab_p">Gossip For Him</p></a>
                          </li>
                          <li>
                              <a class="tab_a" href="#tab2"><p class="tab_p">Gossip From Him</p></a>
                          </li>
                          <li>
                              <a class="tab_a" href="#tab3"><p class="tab_p">Make Gossip</p></a>
                          </li>
                          <li>
                              <a class="tab_a" href="#tab4"><p class="tab_p">His Chat Room</p></a>
                          </li>
              
                      </ul>
                      <div id="tab1" class="tab_content active">
                      </div>
                      <div id="tab2" class="tab_content inactive">
                      </div>
                      <div id="tab3" class="tab_content inactive">
                        <div class="mg_container1">
                            <div class="mg_pic" style="margin-left:22px;">
                              <img src="<?php echo base_url(); ?>images/neil_p_harris.png">
                            </div>
                            <div class="mg_relationship">
                              <p>Relationship</p>
                              <div class="demo_radio">
                                <input type="radio" >Family<br>
                                <input type="radio" >Love partner<br>
                                <input type="radio" >Close Friend<br>
                                <input type="radio" >work mate<br>
                                <input type="radio" >Class mate<br>
                                <input type="radio" >Accquientance<br>
                                <input type="radio" >Friend of friend<br>
                                <input type="radio" >Never mate<br>
                              </div>
                              <input class="mg_radio" type="radio"><input class="mg_input" type="text"> 
                              <a href=""><div class="btn_s_add">Add</div></a>
                            </div>
                            <div class="mg_gossip">
                              <p>Gossip thread</p>
                              <input type="text">
                              <textarea></textarea>
                            </div>
                            <div class="mg_intender">
                              <p>Gossip Intenders</p>
                                <div class="demo_radio">
                                <input type="radio" >Family<br>
                                <input type="radio" >Love partner<br>
                                <input type="radio" >Close Friend<br>
                                <input type="radio" >work mate<br>
                                <input type="radio" >Class mate<br>
                                <input type="radio" >Accquientance<br>
                                <input type="radio" >Friend of friend<br>
                                <input type="radio" >Never mate<br>
                              </div>
                              <input class="mg_radio" type="radio"><input class="mg_input" type="text"> 
                              <a href=""><div class="btn_s_add">Add</div></a>
                            </div>
                            <div class="mg_pic1">
                              <img src="<?php echo base_url(); ?>images/neil_p_harris.png">
                            </div>

                        </div>
                        <div class="mg_container2">
                        <div class="quality_tabbed" style="margin-left:23px;"> <!--onclick="this.style.height=(this.style.height=='165px'?'auto':'165px');"-->
                                <span class="vi_span">Virtues</span><br>
                                <div class="block1">
                                <div class="progressbar" style="margin: 7px 0 2px 10px;"><!--Blue-->
                                    <div class="bottom_bar"></div>
                                    <div class="i_bar_s" style="border-right:1px solid #111;width:85%;"><span class="inside-middle"></span></div>
                                    <div class="top_inf"><span class="span_name">Reliable</span><span class="span_score"><span class="span_score">85</span></span></div>
                                </div> 
                                <div class="progressbar" style="margin: 7px 0 2px 10px;"><!--Blue-->
                                    <div class="bottom_bar"></div>
                                    <div class="i_bar_s" style="border-right:1px solid #111;width:75%;"><span class="inside-middle"></span></div>
                                    <div class="top_inf"><span class="span_name">kind</span><span class="span_score"><span class="span_score">75</span></span></div>
                                </div> 
                                <div class="progressbar" style="margin: 7px 0 2px 10px;"><!--Blue-->
                                    <div class="bottom_bar"></div>
                                    <div class="i_bar_s" style="border-right:1px solid #111;width:60%;"><span class="inside-middle"></span></div>
                                    <div class="top_inf"><span class="span_name">Honest</span><span class="span_score"><span class="span_score">60</span></span></div>
                                </div> 
                                <div class="progressbar" style="margin: 7px 0 2px 10px;"><!--Blue-->
                                    <div class="bottom_bar"></div>
                                    <div class="i_bar_s" style="border-right:1px solid #111;width:85%;"><span class="inside-middle"></span></div>
                                    <div class="top_inf"><span class="span_name">Generous</span><span class="span_score"><span class="span_score">85</span></span></div>
                                </div>
                                </div> 
                                <div id="head_slide" class="block2" style="display:none;">
                                <div class="progressbar" style="margin: 7px 0 2px 10px;"><!--Blue-->
                                    <div class="bottom_bar"></div>
                                    <div class="i_bar_s" style="border-right:1px solid #111;width:85%;"><span class="inside-middle"></span></div>
                                    <div class="top_inf"><span class="span_name">Helpful</span><span class="span_score"><span class="span_score">85</span></span></div>
                                </div> 
                                <div class="progressbar" style="margin: 7px 0 2px 10px;"><!--Blue-->
                                    <div class="bottom_bar"></div>
                                    <div class="i_bar_s" style="border-right:1px solid #111;width:85%;"><span class="inside-middle"></span></div>
                                    <div class="top_inf"><span class="span_name">Helpful</span><span class="span_score"><span class="span_score">85</span></span></div>
                                </div> 
                                <div class="progressbar" style="margin: 7px 0 2px 10px;"><!--Blue-->
                                    <div class="bottom_bar"></div>
                                    <div class="i_bar_s" style="border-right:1px solid #111;width:85%;"><span class="inside-middle"></span></div>
                                    <div class="top_inf"><span class="span_name">Helpful</span><span class="span_score"><span class="span_score">85</span></span></div>
                                </div> 
                                </div>
                                <div class="block3" id="toggle">
                                    <img id="show_img" style="margin:0 auto;" src="http://localhost/frank/images/downarw.png" height="25" width="25">
                                    <img id="show_img_up" style="margin:0 auto;display:none;" src="http://localhost/frank/images/uparrow.png" height="25" width="25">
                                </div>
                        </div>
                        <div class="quality_tabbed">
                                <span class="tr_span">Traits</span><br>
                                <div class="block1">
                                <div class="progressbar" style="margin: 7px 0 2px 10px;"><!--green-->
                                    <div class="bottom_bar"></div>
                                    <div class="i_bar_g" style="border-right:1px solid #111;width:85%;"><span class="inside-middle"></span></div>
                                    <div class="top_inf"><span class="span_name">Hardworking</span><span class="span_score"><span class="span_score">85</span></span></div>
                                </div> 
                                <div class="progressbar" style="margin: 7px 0 2px 10px;"><!--green-->
                                    <div class="bottom_bar"></div>
                                    <div class="i_bar_g" style="border-right:1px solid #111;width:75%;"><span class="inside-middle"></span></div>
                                    <div class="top_inf"><span class="span_name">Funny</span><span class="span_score"><span class="span_score">75</span></span></div>
                                </div>
                                <div class="progressbar" style="margin: 7px 0 2px 10px;"><!--green-->
                                    <div class="bottom_bar"></div>
                                    <div class="i_bar_g" style="border-right:1px solid #111;width:60%;"><span class="inside-middle"></span></div>
                                    <div class="top_inf"><span class="span_name">Creative</span><span class="span_score"><span class="span_score">60</span></span></div>
                                </div>
                                <div class="progressbar" style="margin: 7px 0 2px 10px;"><!--green-->
                                    <div class="bottom_bar"></div>
                                    <div class="i_bar_g" style="border-right:1px solid #111;width:55%;"><span class="inside-middle"></span></div>
                                    <div class="top_inf"><span class="span_name">Wise</span><span class="span_score"><span class="span_score">55</span></span></div>
                                </div>
                                </div>
                                <div id="head_slide1" class="block2" style="display:none;">
                                <div class="progressbar" style="margin: 7px 0 2px 10px;"><!--green-->
                                    <div class="bottom_bar"></div>
                                    <div class="i_bar_g" style="border-right:1px solid #111;width:50%;"><span class="inside-middle"></span></div>
                                    <div class="top_inf"><span class="span_name">Talketive</span><span class="span_score"><span class="span_score">50</span></span></div>
                                </div>
                                <div class="progressbar" style="margin: 7px 0 2px 10px;"><!--green-->
                                    <div class="bottom_bar"></div>
                                    <div class="i_bar_g" style="border-right:1px solid #111;width:50%;"><span class="inside-middle"></span></div>
                                    <div class="top_inf"><span class="span_name">Talketive</span><span class="span_score"><span class="span_score">50</span></span></div>
                                </div>
                                <div class="progressbar" style="margin: 7px 0 2px 10px;"><!--green-->
                                    <div class="bottom_bar"></div>
                                    <div class="i_bar_g" style="border-right:1px solid #111;width:50%;"><span class="inside-middle"></span></div>
                                    <div class="top_inf"><span class="span_name">Talketive</span><span class="span_score"><span class="span_score">50</span></span></div>
                                </div>
                                <div class="progressbar" style="margin: 7px 0 2px 10px;"><!--green-->
                                    <div class="bottom_bar"></div>
                                    <div class="i_bar_g" style="border-right:1px solid #111;width:50%;"><span class="inside-middle"></span></div>
                                    <div class="top_inf"><span class="span_name">Talketive</span><span class="span_score"><span class="span_score">50</span></span></div>
                                </div>
                                </div>
                                <div class="block3" id="toggle1">
                                    <img id="show_img1" style="margin:0 auto;" src="http://localhost/frank/images/downarw.png" height="25" width="25">
                                    <img id="show_img_up1" style="margin:0 auto;display:none;" src="http://localhost/frank/images/uparrow.png" height="25" width="25">
                                </div>
                        </div>
                        <div class="quality_tabbed">
                                <span class="sk_span">Skills</span><br>
                                <div class="block1">
                                <div class="progressbar" style="margin: 7px 0 2px 10px;"><!--Yellow-->
                                    <div class="bottom_bar"></div>
                                    <div id="t" class="i_bar_y" style="border-right:1px solid #111;width:75%;"><span class="inside-middle"></span></div>
                                    <div class="top_inf"><span class="span_name">Sports</span><span class="span_score"><span class="span_score">75</span></span></div>
                                </div> 
                                <div class="progressbar" style="margin: 7px 0 2px 10px;"><!--Yellow-->
                                    <div class="bottom_bar"></div>
                                    <div id="t" class="i_bar_y" style="border-right:1px solid #111;width:90%;"><span class="inside-middle"></span></div>
                                    <div class="top_inf"><span class="span_name">Maths</span><span class="span_score"><span class="span_score">90</span></span></div>
                                </div>
                                <div class="progressbar" style="margin: 7px 0 2px 10px;"><!--Yellow-->
                                    <div class="bottom_bar"></div>
                                    <div id="t" class="i_bar_y" style="border-right:1px solid #111;width:70%;"><span class="inside-middle"></span></div>
                                    <div class="top_inf"><span class="span_name">Arts</span><span class="span_score"><span class="span_score">70</span></span></div>
                                </div>
                                <div class="progressbar" style="margin: 7px 0 2px 10px;"><!--Yellow-->
                                    <div class="bottom_bar"></div>
                                    <div id="t" class="i_bar_y" style="border-right:1px solid #111;width:10%;"><span class="inside-middle"></span></div>
                                    <div class="top_inf"><span class="span_name">Cooking</span><span class="span_score"><span class="span_score">10</span></span></div>
                                </div>
                                </div>
                                <div id="head_slide2" class="block2" style="display:none;">
                                    <div class="progressbar" style="margin: 7px 0 2px 10px;"><!--Yellow-->
                                    <div class="bottom_bar"></div>
                                    <div id="t" class="i_bar_y" style="border-right:1px solid #111;width:70%;"><span class="inside-middle"></span></div>
                                    <div class="top_inf"><span class="span_name">Arts</span><span class="span_score"><span class="span_score">70</span></span></div>
                                </div>
                                <div class="progressbar" style="margin: 7px 0 2px 10px;"><!--Yellow-->
                                    <div class="bottom_bar"></div>
                                    <div id="t" class="i_bar_y" style="border-right:1px solid #111;width:10%;"><span class="inside-middle"></span></div>
                                    <div class="top_inf"><span class="span_name">Cooking</span><span class="span_score"><span class="span_score">10</span></span></div>
                                </div>
                                <div class="progressbar" style="margin: 7px 0 2px 10px;"><!--Yellow-->
                                    <div class="bottom_bar"></div>
                                    <div id="t" class="i_bar_y" style="border-right:1px solid #111;width:70%;"><span class="inside-middle"></span></div>
                                    <div class="top_inf"><span class="span_name">Arts</span><span class="span_score"><span class="span_score">70</span></span></div>
                                </div>
                                <div class="progressbar" style="margin: 7px 0 2px 10px;"><!--Yellow-->
                                    <div class="bottom_bar"></div>
                                    <div id="t" class="i_bar_y" style="border-right:1px solid #111;width:10%;"><span class="inside-middle"></span></div>
                                    <div class="top_inf"><span class="span_name">Cooking</span><span class="span_score"><span class="span_score">10</span></span></div>
                                </div>
                                </div>
                                <div class="block3" id="toggle2">
                                    <img id="show_img2" style="margin:0 auto;" src="http://localhost/frank/images/downarw.png" height="25" width="25">
                                    <img id="show_img_up2" style="margin:0 auto;display:none;" src="http://localhost/frank/images/uparrow.png" height="25" width="25">
                                </div>

                        </div>
                        <div class="quality_tabbed">
                                <span class="re_span">Regard</span><br>
                                <div class="block1">
                                <div class="progressbar" style="margin: 7px 0 2px 10px;"><!--Red-->
                                    <div class="bottom_bar"></div>
                                    <div class="i_bar_o" style="border-right:1px solid #111;width:85%;"><span class="inside-middle"></span></div>
                                    <div class="top_inf"><span class="span_name">Human being</span><span class="span_score"><span class="span_score">85</span></span></div>
                                </div>
                                <div class="progressbar" style="margin: 7px 0 2px 10px;"><!--Red-->
                                    <div class="bottom_bar"></div>
                                    <div class="i_bar_o" style="border-right:1px solid #111;width:75%;"><span class="inside-middle"></span></div>
                                    <div class="top_inf"><span class="span_name">Close friend</span><span class="span_score"><span class="span_score">75</span></span></div>
                                </div>
                                <div class="progressbar" style="margin: 7px 0 2px 10px;"><!--Red-->
                                    <div class="bottom_bar"></div>
                                    <div class="i_bar_o" style="border-right:1px solid #111;width:80%;"><span class="inside-middle"></span></div>
                                    <div class="top_inf"><span class="span_name">Classmate</span><span class="span_score"><span class="span_score">80</span></span></div>
                                </div>
                                <div class="progressbar" style="margin: 7px 0 2px 10px;"><!--Red-->
                                    <div class="bottom_bar"></div>
                                    <div class="i_bar_o" style="border-right:1px solid #111;width:80%;"><span class="inside-middle"></span></div>
                                    <div class="top_inf"><span class="span_name">Classmate</span><span class="span_score"><span class="span_score">80</span></span></div>
                                </div>
                                </div>
                                <div id="head_slide3" class="block2" style="display:none;">
                                <div class="progressbar" style="margin: 7px 0 2px 10px;"><!--Red-->
                                    <div class="bottom_bar"></div>
                                    <div class="i_bar_o" style="border-right:1px solid #111;width:85%;"><span class="inside-middle"></span></div>
                                    <div class="top_inf"><span class="span_name">Human being</span><span class="span_score"><span class="span_score">85</span></span></div>
                                </div>
                                <div class="progressbar" style="margin: 7px 0 2px 10px;"><!--Red-->
                                    <div class="bottom_bar"></div>
                                    <div class="i_bar_o" style="border-right:1px solid #111;width:75%;"><span class="inside-middle"></span></div>
                                    <div class="top_inf"><span class="span_name">Close friend</span><span class="span_score"><span class="span_score">75</span></span></div>
                                </div>
                                <div class="progressbar" style="margin: 7px 0 2px 10px;"><!--Red-->
                                    <div class="bottom_bar"></div>
                                    <div class="i_bar_o" style="border-right:1px solid #111;width:80%;"><span class="inside-middle"></span></div>
                                    <div class="top_inf"><span class="span_name">Classmate</span><span class="span_score"><span class="span_score">80</span></span></div>
                                </div>
                                <div class="progressbar" style="margin: 7px 0 2px 10px;"><!--Red-->
                                    <div class="bottom_bar"></div>
                                    <div class="i_bar_o" style="border-right:1px solid #111;width:80%;"><span class="inside-middle"></span></div>
                                    <div class="top_inf"><span class="span_name">Classmate</span><span class="span_score"><span class="span_score">80</span></span></div>
                                </div>
                                </div>
                                <div class="block3" id="toggle3">
                                    <img id="show_img3" style="margin:0 auto;" src="http://localhost/frank/images/downarw.png" height="25" width="25">
                                    <img id="show_img_up3" style="margin:0 auto;display:none;" src="http://localhost/frank/images/uparrow.png" height="25" width="25">
                                </div>

                        </div>
                        <div class="quality_tabbed">
                                <span class="re_span">Regard</span><br>
                                <div class="block1">
                                <div class="progressbar" style="margin: 7px 0 2px 10px;"><!--Red-->
                                    <div class="bottom_bar"></div>
                                    <div class="i_bar_o" style="border-right:1px solid #111;width:85%;"><span class="inside-middle"></span></div>
                                    <div class="top_inf"><span class="span_name">Human being</span><span class="span_score"><span class="span_score">85</span></span></div>
                                </div>
                                <div class="progressbar" style="margin: 7px 0 2px 10px;"><!--Red-->
                                    <div class="bottom_bar"></div>
                                    <div class="i_bar_o" style="border-right:1px solid #111;width:75%;"><span class="inside-middle"></span></div>
                                    <div class="top_inf"><span class="span_name">Close friend</span><span class="span_score"><span class="span_score">75</span></span></div>
                                </div>
                                <div class="progressbar" style="margin: 7px 0 2px 10px;"><!--Red-->
                                    <div class="bottom_bar"></div>
                                    <div class="i_bar_o" style="border-right:1px solid #111;width:80%;"><span class="inside-middle"></span></div>
                                    <div class="top_inf"><span class="span_name">Classmate</span><span class="span_score"><span class="span_score">80</span></span></div>
                                </div>
                                <div class="progressbar" style="margin: 7px 0 2px 10px;"><!--Red-->
                                    <div class="bottom_bar"></div>
                                    <div class="i_bar_o" style="border-right:1px solid #111;width:80%;"><span class="inside-middle"></span></div>
                                    <div class="top_inf"><span class="span_name">Classmate</span><span class="span_score"><span class="span_score">80</span></span></div>
                                </div>
                                </div>
                                <div id="head_slide3" class="block2" style="display:none;">
                                <div class="progressbar" style="margin: 7px 0 2px 10px;"><!--Red-->
                                    <div class="bottom_bar"></div>
                                    <div class="i_bar_o" style="border-right:1px solid #111;width:85%;"><span class="inside-middle"></span></div>
                                    <div class="top_inf"><span class="span_name">Human being</span><span class="span_score"><span class="span_score">85</span></span></div>
                                </div>
                                <div class="progressbar" style="margin: 7px 0 2px 10px;"><!--Red-->
                                    <div class="bottom_bar"></div>
                                    <div class="i_bar_o" style="border-right:1px solid #111;width:75%;"><span class="inside-middle"></span></div>
                                    <div class="top_inf"><span class="span_name">Close friend</span><span class="span_score"><span class="span_score">75</span></span></div>
                                </div>
                                <div class="progressbar" style="margin: 7px 0 2px 10px;"><!--Red-->
                                    <div class="bottom_bar"></div>
                                    <div class="i_bar_o" style="border-right:1px solid #111;width:80%;"><span class="inside-middle"></span></div>
                                    <div class="top_inf"><span class="span_name">Classmate</span><span class="span_score"><span class="span_score">80</span></span></div>
                                </div>
                                <div class="progressbar" style="margin: 7px 0 2px 10px;"><!--Red-->
                                    <div class="bottom_bar"></div>
                                    <div class="i_bar_o" style="border-right:1px solid #111;width:80%;"><span class="inside-middle"></span></div>
                                    <div class="top_inf"><span class="span_name">Classmate</span><span class="span_score"><span class="span_score">80</span></span></div>
                                </div>
                                </div>
                                <div class="block3" id="toggle3">
                                    <img id="show_img3" style="margin:0 auto;" src="http://localhost/frank/images/downarw.png" height="25" width="25">
                                    <img id="show_img_up3" style="margin:0 auto;display:none;" src="http://localhost/frank/images/uparrow.png" height="25" width="25">
                                </div>

                        </div>
                        <a href=""><div class="btn_add">Add New Virtue</div></a>
                        <a href=""><div class="btn_add">Add New Virtue</div></a>
                        <a href=""><div class="btn_add_white">Add New Virtue</div></a>
                        <a href=""><div class="btn_add">Add New Virtue</div></a>
                        <a href=""><div class="btn_add">Add New Virtue</div></a>
                        </div>

                        <!-- Range bar container -->
                        <div class="mg_container3">
                          <div class="range_container">
                            <div class="progress_container">
                              <div class="progressbar" style="margin: 7px 0 2px 10px;"><!--Yellow-->
                                    <div class="bottom_bar"></div>
                                    <div id="t" class="i_bar_y" style="border-right:1px solid #111;width:0%;"><span class="inside-middle"></span></div>
                                    <div class="top_inf"><span class="span_name">Cooking</span><span class="span_score"></span></div>
                              </div>
                            </div>
                            <div class="range_pic1">-100</div>
                            <div class="range_bar">
                              <div style="margin:1px 0 0 0" class="label_div"><label>Question:</label><input class="range_qa" type="text"></div>
                              <div  style="margin:30px 0 0 0;"><div id="slider-range-min"></div></div>
                              <div class="label_div"><label>Answer:</label><div class="range_qa" style="height:17px;"></div></div>
                            </div>
                            <div class="range_pic2">+100</div>
                          </div>
                          <div class="range_container">
                            <div class="progress_container">
                              <div class="progressbar" style="margin: 7px 0 2px 10px;"><!--Yellow-->
                                    <div class="bottom_bar"></div>
                                    <div id="t" class="i_bar_y" style="border-right:1px solid #111;width:0%;"><span class="inside-middle"></span></div>
                                    <div class="top_inf"><span class="span_name">Cooking</span><span class="span_score"></span></div>
                              </div>
                            </div>
                            <div class="range_pic1">-100</div>
                            <div class="range_bar">
                              <div style="margin:1px 0 0 0" class="label_div"><label>Question:</label><input class="range_qa" type="text"></div>
                              <div  style="margin:30px 0 0 0;">
                                <div id="slider-range-min" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all">
                                  <div class="ui-slider-range ui-widget-header ui-corner-all ui-slider-range-min" style="width: 5.15021%;"></div>
                                  <a class="ui-slider-handle ui-state-default ui-corner-all" href="#" style="left: 12.15%;"></a>
                                </div>
                              </div>
                              <div class="label_div"><label>Answer:</label><div class="range_qa" style="height:17px;"></div></div>
                            </div>
                            <div class="range_pic2">+100</div>
                          </div>

                          <!-- range Continues -->
                          <div class="range_container">
                            <div class="progress_container">
                              <div class="progressbar" style="margin: 7px 0 2px 10px;"><!--Yellow-->
                                    <div class="bottom_bar"></div>
                                    <div id="t" class="i_bar_y" style="border-right:1px solid #111;width:0%;"><span class="inside-middle"></span></div>
                                    <div class="top_inf"><span class="span_name">Cooking</span><span class="span_score"></span></div>
                              </div>
                            </div>
                            <div class="range_pic1">-100</div>
                            <div class="range_bar">
                              <div style="margin:1px 0 0 0" class="label_div"><label>Question:</label><input class="range_qa" type="text"></div>
                              <div  style="margin:30px 0 0 0;">
                                <div id="slider-range-min" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all">
                                  <div class="ui-slider-range ui-widget-header ui-corner-all ui-slider-range-min" style="width: 5.15021%;"></div>
                                  <a class="ui-slider-handle ui-state-default ui-corner-all" href="#" style="left: 12.15%;"></a>
                                </div>
                              </div>
                              <div class="label_div"><label>Answer:</label><div class="range_qa" style="height:17px;"></div></div>
                            </div>
                            <div class="range_pic2">+100</div>
                          </div>

                          <!-- range Continues -->
                          <div class="range_container">
                            <div class="progress_container">
                              <div class="progressbar" style="margin: 7px 0 2px 10px;"><!--Yellow-->
                                    <div class="bottom_bar"></div>
                                    <div id="t" class="i_bar_y" style="border-right:1px solid #111;width:0%;"><span class="inside-middle"></span></div>
                                    <div class="top_inf"><span class="span_name">Cooking</span><span class="span_score"></span></div>
                              </div>
                            </div>
                            <div class="range_pic1">-100</div>
                            <div class="range_bar">
                              <div style="margin:1px 0 0 0" class="label_div"><label>Question:</label><input class="range_qa" type="text"></div>
                              <div  style="margin:30px 0 0 0;">
                                <div id="slider-range-min" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all">
                                  <div class="ui-slider-range ui-widget-header ui-corner-all ui-slider-range-min" style="width: 5.15021%;"></div>
                                  <a class="ui-slider-handle ui-state-default ui-corner-all" href="#" style="left: 12.15%;"></a>
                                </div>
                              </div>
                              <div class="label_div"><label>Answer:</label><div class="range_qa" style="height:17px;"></div></div>
                            </div>
                            <div class="range_pic2">+100</div>
                          </div>

                          <!-- range Continues -->
                          <div class="range_container">
                            <div class="progress_container">
                              <div class="progressbar" style="margin: 7px 0 2px 10px;"><!--Yellow-->
                                    <div class="bottom_bar"></div>
                                    <div id="t" class="i_bar_y" style="border-right:1px solid #111;width:0%;"><span class="inside-middle"></span></div>
                                    <div class="top_inf"><span class="span_name">Cooking</span><span class="span_score"></span></div>
                              </div>
                            </div>
                            <div class="range_pic1">-100</div>
                            <div class="range_bar">
                              <div style="margin:1px 0 0 0" class="label_div"><label>Question:</label><input class="range_qa" type="text"></div>
                              <div  style="margin:30px 0 0 0;">
                                <div id="slider-range-min" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all">
                                  <div class="ui-slider-range ui-widget-header ui-corner-all ui-slider-range-min" style="width: 5.15021%;"></div>
                                  <a class="ui-slider-handle ui-state-default ui-corner-all" href="#" style="left: 12.15%;"></a>
                                </div>
                              </div>
                              <div class="label_div"><label>Answer:</label><div class="range_qa" style="height:17px;"></div></div>
                            </div>
                            <div class="range_pic2">+100</div>
                          </div>

                          <!-- range Continues -->

                        </div>
                        <div class="mg_container4">
                          <div class="range_container">
                            <div class="progress_container">
                              <div class="progressbar" style="margin: 7px 0 2px 10px;"><!--Yellow-->
                                    <div class="bottom_bar"></div>
                                    <div id="t" class="i_bar_y" style="border-right:1px solid #111;width:0%;"><span class="inside-middle"></span></div>
                                    <div class="top_inf"><span class="span_name">Cooking</span><span class="span_score"></span></div>
                              </div>
                            </div>
                            <div class="range_pic1"><img style="margin-top:8px;" src="<?php echo base_url(); ?>images/dislike.png" height="60" width="60"></div>
                            <div class="range_bar">
                              <div style="margin:1px 0 0 0" class="label_div"><label>Question:</label><input class="range_qa" type="text"></div>
                              <div  style="margin:30px 0 0 0;">
                                <div id="slider-range-min" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all">
                                  <div class="ui-slider-range ui-widget-header ui-corner-all ui-slider-range-min" style="width: 5.15021%;"></div>
                                  <a class="ui-slider-handle ui-state-default ui-corner-all" href="#" style="left: 12.15%;"></a>
                                </div>
                              </div>
                              <div class="label_div"><label>Answer:</label><div class="range_qa" style="height:17px;"></div></div>
                            </div>
                            <div class="range_pic3"><img style="margin-top:1px;" src="<?php echo base_url(); ?>images/like.png" height="60" width="60"></div>
                          </div>
                        </div>
                        <!-- Receipent container -->
                        <div class="mg_container5">
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
                          <div class="email_gossip" style="margin:20px 0 0 20px;">
                            <p>Profile Authentication</p>
                            <input type="text">
                          </div>
                          <div class="genuine_scores">
                            <p>Genuine Scores</p>
                             <div class="progressbar"><!--Blue-->
                                <div class="bottom_bar"></div>
                                <div class="i_bar_s" style="border-right:1px solid #111;width:75%;"><span class="inside-middle"></span></div>
                                <div class="top_inf"><span class="span_name">Integrity</span><span class="span_score"><span class="span_score">75%</span></span></div>
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
      <input id="base_url" value="http://localhost/frank/" <="" input="" type="hidden">   
        
        
    <!--</div>-->
        <!--Footer>-->
 
<?php include 'footer.php' ?>