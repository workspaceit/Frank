<?php include 'header.php' ?>
<link rel="stylesheet" href="<?php echo base_url(); ?>css/thin_slider.css" />
<script type="text/javascript" src="<?php echo base_url()."js/make_gossip_procedure.js"; ?>" ></script>

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
      $('.hide_content').hide();
      $('#show_up').hide();
      $('#show_up1').hide();
  $('.icon').click(function(){
        if($(".demo_radio").css("height") == "80px") {
          $(".demo_radio").animate({height: "100%"}, 1000);
          $('.hide_content').show();
          $('#show_down').hide();
          $('#show_up').show();

        } else {
          $(".demo_radio").animate({height: "80px"}, 1000);
          $('.hide_content').hide();
          $('#show_down').show();
          $('#show_up').hide();

        }
        return false;
    });
    $('.icon1').click(function(){
        if($(".demo_radio").css("height") == "80px") {
          $(".demo_radio").animate({height: "100%"}, 1000);
          $('.hide_content').show();
          $('#show_down1').hide();
          $('#show_up1').show();

        } else {
          $(".demo_radio").animate({height: "80px"}, 1000);
          $('.hide_content').hide();
          $('#show_down1').show();
          $('#show_up1').hide();

        }
        return false;
    });
  });
</script>
<script type="text/javascript">
    $(function() {
   $(".center").height($(".tab_content").height()+150);
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
 <script>
       var bar=0;
       var t=0;
       function is_null(element){
            var element_ref=$(element);
            if( element_ref.val()!=""){
                element_ref.css("background","white");
                element_ref.css("box-shadow","");
                return false;
            }else{
                element_ref.css("background","#f32e2e");
                element_ref.css("box-shadow","0px 0px 7px black inset");
                return true;
            }
       }
       function set_invalid_color(element){
            var element_ref=$(element);
            element_ref.css("background","#f32e2e");
            element_ref.css("box-shadow","0px 0px 7px black inset");
       }
       function set_valid_color(element){
            var element_ref=$(element);
            element_ref.css("background","white");
            element_ref.css("box-shadow","");
       }
       function is_valid_email(email){
            var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
            if (!filter.test(email)) 
                   return false;
            else
                return true;
        }
				
        function add_recipient(){
            if(!is_null('#make_gossip_receipent_name') && !is_null('#make_gossip_receipent_email')){
                var name=$('#make_gossip_receipent_name');
                var email=$('#make_gossip_receipent_email');
                if(is_valid_email(email.val())){
                    var recipient_inf=get_recipient_inf(name.val(),email.val());
                    push_recipient_queue(recipient_inf);
                }else{
                    set_invalid_color('#make_gossip_receipent_email');
                }
                name.attr("value","");
                email.attr("value","");
                set_recipient_sugession_index(-1);
            }
        }
        function auto_suggestion(){
            $(function() {
            $("input#make_gossip_receipent_name" ).autocomplete({
                source: function(request, response) {
                    $.ajax(
                        { 
                            url:$('#site_url').val()+'suggestion/get_name_for_make_gossip',
                            data: { term: $("#make_gossip_receipent_name").val()},
                            dataType: "json",
                            type: "POST",
                            success: function(data){
                                var name=JSON.stringify(data.name);
                                var email=JSON.stringify(data.email);
                                $("#make_gossip_receipent_name").val();
                                $("#suggested_email").attr("value",email);
                                push_and_repalce_recipient_sugession(data);
                                response(JSON.parse(name));

                                $('a.ui-corner-all').mouseover(function(){
                                   
                                    var i=0;
                                    var c_element_id=$(this).attr("id");
                                    $('a.ui-corner-all').each(function(){
                                        if( c_element_id == $(this).attr("id") ){
                                           
                                            set_recipient_sugession_index(i);
                                            var email=get_recipient_sugession_email_by_index();
                                            $('#make_gossip_receipent_email').attr("value",email);
                                        }
                                            i++;
                                    }); 
                                });

                            }
                        });
                },
                minLength: 1
                });

            });
        }
        $(document).ready(function(){
            auto_suggestion();
            $('#make_gossip_receipent_name').focus(
                function(){
                    var email=get_recipient_sugession_email_by_index();
                    $('#make_gossip_receipent_email').attr("value",email);
                }
            );
        });
       $(document).ready(function(){
           $('.btn_add').click(function(){
               var element_height=$(this).parent().next('.down').parent().find('.quality_tabbed').css("height");
               
               var new_row_html=$('#dummy_trait_progress_text_row').html();
               
               var children_number=$(this).parent().parent().find('.plus_container').length;
             
                if( element_height == "112px" &&  children_number >=3 ) {
                     $(this).parent().next('.down').trigger('click');
                        $(this).parent().next('.down').fadeIn(500,function(){
                        
                        });
                } 
                $(this).parent().parent().find(".block1").append(new_row_html).find('.new_trait').last().focus();
                $(this).parent().parent().find('.new_trait_plus').last().click(function(){
                    var current_row=$(this).parent().parent();
                    var trait_category = $(this).closest(".block1").parent().find(".vi_span").html();
                    var trait_sub_category = $(this).parent().prev(); 
                    if(trait_sub_category.val()!=""){
                        trait_sub_category.css("background","white");
                        trait_sub_category.css("box-shadow", "");
                        trait_sub_category.focus();
                       
                        var url=$('#site_url').val()+"gossip/create_new_trait";
                        var category=trait_category;
                        var sub_category=trait_sub_category.val();
                        var trait_dynamic_id=get_trait_dynamic_id();
                        // Ajax will be fired to insert new trait value
                        $.ajax({
                            url:$('#site_url').val()+"gossip/create_new_trait",
                            type:"post",
                            data:{
                               category:category,
                               sub_category:sub_category,
                               trait_dynamic_id:trait_dynamic_id
                            },
                            success:function(data){
                             
                                 if(data[0]=="{"){
                                     
                                 
                                 }else{
                                    increase_trait_dynamic_id();
                                    current_row.fadeOut(500,function(){
                                        $(this).html(data);
                                        $(this).fadeIn(500);
                                        de_initialize_plus_trait();
                                        initialize_plus_trait();
                                    });
                                 }
                                
                            },
                            error:function(){}
                        });
                        
                    }else{
                        trait_sub_category.css("background","none repeat scroll 0 0 #F32E2E");
                        trait_sub_category.css("box-shadow", "0 0 7px black inset");
                        trait_sub_category.focus();
                    }
                    
               });
           });
           
       });
      $(document).ready(function(){
       
          manipulate_progess_bar('gossip_genuine_score',0);
          $('#gossip_genuine_score').css({
              "transition-property": "width",
              "transition-duration": "1s",
              "transition-timing-function": "linear",
              "transition-delay": "0.1s" }
          );  
       
          $("input:radio[name=static_gossip_insider]").click(function(){
               var a=$(this).val();
               var b=JSON.parse(a);
               var point=b.point
               manipulate_progess_bar('gossip_genuine_score',point);
               if(point==100){
                    $('.sliding_point').parent().fadeOut(500,function(){
                        
                    });
               }else{
                    $('.sliding_point').parent().fadeIn(500,function(){
                        
                    });
               }
              
//               clear_trait_queue();
//               clear_trait_content_div();
//               set_trait_add_button_inactive();
          });
         
      });
      $(document).ready(function(){
        initialize_plus_trait();
      });
      function de_initialize_plus_trait(){
          $('.plus').unbind('click');
      }
      function initialize_plus_trait(){
          $('.plus').click(function(){
                if($(this).attr("class")=="plus plus_inactive"){
                    $(this).removeClass('plus_inactive');
                    $(this).addClass('plus_active');
                    //call Ajax To Load Traits Slide Bar
                    var dynamic_values=new Array();
                    $(this).find("input:hidden").each(function(){
                            dynamic_values.push($(this).val());
                    });
                 
                    var trait_id=dynamic_values.pop();
                    var dynamic_id=dynamic_values.pop();
                    var gossip_intender=get_gossip_intender();   
                    load_trait_slide_bar(trait_id,dynamic_id,gossip_intender.id);
                    
                }else if($(this).attr("class")=="plus plus_active"){
                    $(this).removeClass('plus_active');
                    $(this).addClass('plus_inactive');
                    //delete the corrosponded div
                    var dynamic_values=new Array();
                    $(this).find("input:hidden").each(function(){
                         dynamic_values.push($(this).val());
                    });
                    
                    var trait_id=dynamic_values.pop();
                    var dynamic_id=dynamic_values.pop();
                    var trait_category_id=$('#slider_parent_'+dynamic_id).find("input:hidden.trait_category_id").val();
                    remove_from_trait_queue(trait_category_id);
                    manipulate_make_gossip_triat_progress_bar(dynamic_id,0,true);    
                    $('#slider_parent_'+dynamic_id).fadeOut(500,function(){
                        $('#slider_parent_'+dynamic_id).remove("");
//                        $('#slider_parent_'+dynamic_id). removeAttr("id");
                    });
                }
            });
      }
      function initialize_fake_point_slider(dynamic_id){
           dynamic_id="slider_parent_"+dynamic_id;
           $('#'+dynamic_id).find('.sliding_point_fake').each(function(){
              $(this).css("left","50.6438%");
           });
           $('#'+dynamic_id).find('.sliding_point_fake').html("0"); 
           $('#'+dynamic_id).find('.sliding_point_fake').mouseup(function(){
                var sliding_point=parseInt($(this).css("left").replace(/px$/, ''));
                var sliding_parent=parseInt($(this).parent().css("width").replace(/px$/, ''));
                var percentage_point=(100*sliding_point)/sliding_parent;
                var point=0;
              
                if(percentage_point==0 || percentage_point>97){
                    point=Math.floor(2*percentage_point-100);
                   
                }else{
                    point=Math.floor(2*percentage_point-100-1);
                }
                $(this).html(point); 
               
                var trait_categories_id=$('#'+dynamic_id).find('.trait_category_id').val();
                var question_id=get_trait_queue_question_id_by_trait_category(get_trait_queue(),trait_categories_id);
                var fake_traits_point=point;
                var trait_inf=get_trait_inf(trait_categories_id, question_id, fake_traits_point);
                
                push_trait_queue(trait_inf);
          });
          $('.sliding_point_fake').mousemove(function(){
                var sliding_point=parseInt($(this).css("left").replace(/px$/, ''));
                var sliding_parent=parseInt($(this).parent().css("width").replace(/px$/, ''));
                var percentage_point=(100*sliding_point)/sliding_parent;
                var point=0;
                
                if(Math.floor(percentage_point)==0 || Math.floor(percentage_point)==100){
                    point=Math.floor(2*percentage_point-100);
                }else{
                    point=Math.floor(2*percentage_point-100-1);
                }
                $(this).html(point); 
          });  
      }
      function manipulate_make_gossip_triat_progress_bar(dynamic_id,point,empty){
            if(empty){
                $('#traits_progress_bar_'+dynamic_id).css("width","0%");
                $('#traits_progress_bar_'+dynamic_id).next().find(".triat_point_dummy").html("");
                return false;
            }
            if(point>0){
                $('#traits_progress_bar_'+dynamic_id).css("width",point+"%");
                $('#traits_progress_bar_'+dynamic_id).next().find(".triat_point_dummy").html(point);
            }else{
                point=0;
                $('#traits_progress_bar_'+dynamic_id).css("width",point+"%");
                $('#traits_progress_bar_'+dynamic_id).next().find(".triat_point_dummy").html(point);
            }
            return true;
      }
      function ready_sliding_point(dynamic_id){
         
          if(is_fake_point_exist(dynamic_id)){
              initialize_fake_point_slider(dynamic_id);
          }
          var dynamic_str_id="slider_parent_"+dynamic_id;
          var temp_trait_category_id=$('#'+dynamic_str_id).find('.trait_category_inf').find("input:hidden.trait_category_id").val();
        
          $('#'+dynamic_str_id).find('.sliding_point').each(function(){
              $(this).css("left","50.6438%");
          });
          $('#'+dynamic_str_id).find('.sliding_point').html("0"); 
          
          // Initialize the sliding bar with question and answer with point 0 [Block 1 ]
          /* Block 1 [Start] */
          var temp_q_element=new Array(); 
                 $('#'+dynamic_str_id).find("div.range_qa").each(function(){
                    temp_q_element.push($(this));
                   
                });
          manipulate_make_gossip_triat_progress_bar(dynamic_id,0,false);     
          get_trait_question_answer(temp_trait_category_id,dynamic_id,0,temp_q_element);
          /* Block 1 [End] */
          
          $('#'+dynamic_str_id).find('.sliding_point').mouseup(function(){
              
                var sliding_point=parseInt($(this).css("left").replace(/px$/, ''));
                var sliding_parent=parseInt($(this).parent().css("width").replace(/px$/, ''));
                var percentage_point=(100*sliding_point)/sliding_parent;
                var point=0;
              
                if(percentage_point==0 || percentage_point>97){
                    point=Math.floor(2*percentage_point-100);
                   
                }else{
                    point=Math.floor(2*percentage_point-100-1);
                }
                $(this).html(point); 
                var requested_point=point;
                var trait_category_id=$('#'+dynamic_str_id).find('.trait_category_inf').find("input:hidden.trait_category_id").val();
                var q_element=new Array(); 
                 $('#'+dynamic_str_id).find("div.range_qa").each(function(){
                    q_element.push($(this));
                });
                manipulate_make_gossip_triat_progress_bar(dynamic_id,point,false);    
                get_trait_question_answer(trait_category_id,dynamic_id,requested_point,q_element);
                             
          });
          $('.sliding_point').mousemove(function(){
                var sliding_point=parseInt($(this).css("left").replace(/px$/, ''));
                var sliding_parent=parseInt($(this).parent().css("width").replace(/px$/, ''));
                var percentage_point=(100*sliding_point)/sliding_parent;
                var point=0;
                
                if(Math.floor(percentage_point)==0 || Math.floor(percentage_point)==100){
                    point=Math.floor(2*percentage_point-100);
                }else{
                    point=Math.floor(2*percentage_point-100-1);
                }
                $(this).html(point); 
          });  
      }
      function set_plus_active(){
      
      }
      function set_plus_inactive(){
      
      }
      function get_element_width_in_percentage(element){
            var width=$(element).width();
            var parentWidth = $(element).offsetParent().width();
            var percent = 100*width/parentWidth;
            return Math.ceil(percent);
      }
      function manipulate_progess_bar(id,point){
          
           $('#'+id).width(point+'%');
          var r=$('#'+id+'_span').html().split("%");
          t=parseInt(r[0]);
          var sign=point-r[0];
          var interval=Math.abs(sign);
          var interValTime=Math.ceil(2000/(interval+1))-10;
       
          if(interValTime!=2000 && interValTime>0)
            bar=setInterval ( "doSomething('"+sign+"','"+point+"','"+id+"')", interValTime);
            
      }
      
      function doSomething(sign,point,id){
          
          if(sign<=0){
              if(t<point){
                    clearInterval ( bar );
                    t=0;  
              }else{
                   $('#'+id+'_span').delay(5000).html(t+'%');
                   t--;
              }
          }else{
               if(t>point){
                    clearInterval ( bar );
                    t=0;  
              }else{
                   $('#'+id+'_span').delay(5000).html(t+'%');
                   t++;
              }
              
          }
          
      }
     function load_trait_slide_bar(trait_category_id,dynamic_id,gossip_insider_id){
     
      $.ajax({
            url:$('#site_url').val()+"trait_categories/get_traits_slide_bar",
            type:"post",
            data:{
                trait_category_id:trait_category_id,
                dynamic_id:dynamic_id,
                gossip_insider_id:gossip_insider_id
                },
            success:function(data){
                $('#trait_slide_bar_content_div').prepend(data);
                  
                $("#slider_parent_"+dynamic_id).find(".slider-range-min" ).slider({
                          range: "min",
                          value: 37,
                          min: 1,
                          max: 700,
                          slide: function( event, ui ) {
                          }
                        });
                        
                    ready_sliding_point(dynamic_id);
                      
            },
            error:function(){}
        });
    }
    function get_trait_question_answer(trait_category_id,dynamic_id,point,q_element){
        
        $.ajax({
            url:$('#site_url').val()+"trait_q_a/get_q_a_by_trait_category_id_and_point",
            type:"post",
            data:{
                trait_category_id:trait_category_id,
                point:point
                },
            success:function(data){
                
                var resp=JSON.parse(data); /*  from response data Contains below object
                                            {   "id":,
                                                "trait_categories_id":,
                                                "question":,
                                                "ans":,
                                                "real_point":,
                                                "fake_point":}
                                            */
                var question=q_element.pop();
                var answer=q_element.pop();
                answer.html(resp.question);
                question.html(resp.ans);
               
                var question_id=resp.id;
                var trait_categories_id=resp.trait_categories_id;
               
                
                if(is_fake_point_exist(dynamic_id)){
                     var fake_traits_point=get_fake_point(dynamic_id);
                    
                }else{
                   
                    var fake_traits_point=resp.fake_point;
                    
                }
                var question_id=resp.id;
                
                var trait_inf=get_trait_inf(trait_categories_id, question_id, fake_traits_point);
                
                push_trait_queue(trait_inf);
                //var point=parseInt($('#slider_parent_0').find('a.sliding_point').html().trim());
                var trait_category_id=$('#slider_parent_0').find('input.trait_category_id').val();
                
                
            },
            error:function(data){
                
            }
        });
    }
    </script>
    <script type="text/javascript">
    
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
                            <div class="change_picture">
                                      <!-- <input type="hidden" id="pic_path" name="pic_path" value=""/> -->
                                      <input id="change_profile_picture" name="change_profile_picture" class="change_file_browse" type="file">
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
                                <?php $i=0; foreach($traits_user as $rowData){ ?> <!-- Only One Block is Dynamic rest is static -->
                                     <?php if($i<3){ ?>
                                        <div class="progressbar" style="margin: 7px 0 2px 10px;"><!--Blue-->
                                            <div class="bottom_bar"></div>
                                            <div class="i_bar_s" style="border-right:1px solid #111;width:<?php echo ($rowData->sub_category_hidden==1) ? "0%": $rowData->sub_category_avg_point."%";?>;"><span class="inside-middle"></span></div>
                                            <div class="top_inf"><span class="span_name"><?php  echo $rowData->sub_category_value; ?></span><span class="span_score"><span class="span_score"><?php echo ($rowData->sub_category_hidden==1) ? "": $rowData->sub_category_avg_point;?></span></span></div>
                                        </div>
                                     <?php }elseif($i==3){ ?>
                                            
                                                <div id="head_slide" class="block2" style="display:none;">
                                                    <div class="progressbar" style="margin: 7px 0 2px 10px;"><!--Blue-->
                                                       <div class="bottom_bar"></div>
                                                       <div class="i_bar_s" style="border-right:1px solid #111;width:<?php echo ($rowData->sub_category_hidden==1) ? "0%": $rowData->sub_category_avg_point."%";?>;"><span class="inside-middle"></span></div>
                                                       <div class="top_inf"><span class="span_name"><?php  echo $rowData->sub_category_value; ?></span><span class="span_score"><span class="span_score"><?php echo ($rowData->sub_category_hidden==1) ? "": $rowData->sub_category_avg_point;?></span></span></div>
                                                   </div>
                                             <?php if(sizeof($traits_user)==4){ ?>
                                                </div>
                                            <?php } ?>
                                            
                                            
                                     <?php }else{?>
                                                <div class="progressbar" style="margin: 7px 0 2px 10px;"><!--Blue-->
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
                                <img id="show_img1" style="margin:0 auto;" src="<?php echo base_url(); ?>images/downarw.png" height="25" width="25">
                                <img id="show_img_up1" style="margin:0 auto;display:none;" src="<?php echo base_url(); ?>images/uparrow.png" height="25" width="25">
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
                                <img id="show_img2" style="margin:0 auto;" src="<?php echo base_url(); ?>images/downarw.png" height="25" width="25">
                                <img id="show_img_up2" style="margin:0 auto;display:none;" src="<?php echo base_url(); ?>images/uparrow.png" height="25" width="25">
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
                                <img id="show_img3" style="margin:0 auto;" src="<?php echo base_url(); ?>images/downarw.png" height="25" width="25">
                                <img id="show_img_up3" style="margin:0 auto;display:none;" src="<?php echo base_url(); ?>images/uparrow.png" height="25" width="25">
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
                      <div id="tab2" class="tab_content inactive hide">
                      </div>
                      <div id="tab3" class="tab_content inactive hide">
                        <div class="mg_container1">
                            <div class="mg_pic" style="margin-left:22px;">
                                 <?php if($gossiper_profile_pic!=""){ ?>
                                     <img id="user_profile_picture" src="<?php echo base_url().'uploads/'.$gossiper_profile_pic;?>" height="154" width="125"/>
                                 <?php }else{ ?>
                                     <img id="user_profile_picture" src="<?php echo base_url().'images/user.png'; ?>" height="154" width="125"/>
                                 <?php } ?>
                            
                            </div>
                            <div class="mg_relationship">
                              <p>Relationship</p>
                              <div class="demo_radio">
                                 <?php foreach($static_gossip_relationship as $rowData){ ?>
                                  <?php $temp_arr=array(
                                                        'id'=>$encrypt_tbl_primary_key_obj->get_encrypted_code($rowData->id),
                                                        'value'=>$rowData->value,
                                                        'point'=>$rowData->point);
                                   ?>
                                    <input type="radio" value='<?php  echo json_encode($temp_arr); ?>' name="static_gossip_relationship" ><?php echo $rowData->value; ?><br>
                                <?php } ?>
                              </div>
                              <div class="hide_content">
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
                                      <?php foreach($static_gossip_insider as $rowData){ ?>
                                        <?php $temp_arr=array(
                                                           'id'=>$encrypt_tbl_primary_key_obj->get_encrypted_code($rowData->id),
                                                           'value'=>$rowData->value,
                                                           'point'=>$rowData->point);
                                        ?>
                                        <input type="radio" value='<?php echo json_encode($temp_arr); ?>' name="static_gossip_insider" ><?php echo $rowData->value; ?><br>
                                    <?php } ?>
                                  
                                </div>
                              <div class="hide_content">
                                <input class="mg_radio" type="radio"><input class="mg_input" type="text"> 
                                <a href=""><div class="btn_s_add">Add</div></a>
                              </div>
                              <a href="" class="icon1"><img id="show_down1" src="<?php echo base_url(); ?>images/down_small.png"></a>
                              <a href="" class="icon1"><img id="show_up1" src="<?php echo base_url(); ?>images/up_small.png"></a>
                            </div>
                            <div class="mg_pic" style="margin-left:675px;">
                                 <?php if($basic_data->pic_path!=""){ ?>
                                     <img id="user_profile_picture" src="<?php echo base_url().'uploads/'.$basic_data->pic_path;?>" height="154" width="125"/>
                                 <?php }else{ ?>
                                     <img id="user_profile_picture" src="<?php echo base_url().'images/user.png'; ?>" height="154" width="125"/>
                                 <?php } ?>
                            </div>

                        </div>
                        <div class="mg_container2">
                            <div class="q_tab_container">
                            <div class="quality_tabbed" > <!--onclick="this.style.height=(this.style.height=='165px'?'auto':'165px');"-->
                                     <?php
                                            $temp_static_traits=$static_traits[0]; 
                                            $array_size=sizeof($temp_static_traits);
                                            
                                     ?>
                                <span class="vi_span"><?php echo $temp_static_traits[0][1]; ?></span><br>
                                    <div class="block1">
                                        <?php  for($i=0;$i<$array_size;$i++){ ?> <!-- Only One Block is Dynamic rest is static -->
                                                   <?php  trait_box($i+$trait_dynamic_id,$temp_static_traits[$i][0],$temp_static_traits[$i][2],$array_size,$encrypt_tbl_primary_key_obj); ?> 
                                        <?php }  ?>
                                        <?php  $trait_dynamic_id=$trait_dynamic_id+$array_size; ?>
                                    </div>
                            </div>
                            <a href="javascript:void(0)" ><div class="btn_add">Add New Virtue</div></a>
                            <div class="down" style="display:none;">
                                  <img  src="<?php echo base_url(); ?>images/downarw.png">
                              </div>
                            <?php if($array_size>3){ ?>
                                <div class="down">
                                  <img  src="<?php echo base_url(); ?>images/downarw.png">
                                </div>
                            <?php }else{ ?>
                                <div class="down" style="display:none;" >
                                  <img  src="<?php echo base_url(); ?>images/downarw.png">
                                </div>
                            <?php } ?>
                                
                            
                          </div>
                          <div class="q_tab_container" style="margin-left:190px;">
                              <div class="quality_tabbed" > <!--onclick="this.style.height=(this.style.height=='165px'?'auto':'165px');"-->
                                      
                                          <?php
                                              $temp_static_traits=$static_traits[1]; 
                                              $array_size=sizeof($temp_static_traits);
                                          ?>
                                  <span class="vi_span"><?php echo $temp_static_traits[0][1]; ?></span><br>
                                      <div class="block1">
                                          <?php  for($i=0;$i<$array_size;$i++){ ?> <!-- Only One Block is Dynamic rest is static -->
                                                     <?php  trait_box($i+$trait_dynamic_id,$temp_static_traits[$i][0],$temp_static_traits[$i][2],$array_size,$encrypt_tbl_primary_key_obj); ?> 
                                          <?php }  ?>
                                          <?php  $trait_dynamic_id=$trait_dynamic_id+$array_size; ?>
                                      </div>
                              </div>
                                <a href="javascript:void(0)" ><div class="btn_add">Add New Virtue</div></a>
                                <?php if($array_size>3){ ?>
                                    <div class="down">
                                      <img  src="<?php echo base_url(); ?>images/downarw.png">
                                    </div>
                               <?php }else{ ?>
                                    <div class="down" style="display:none;" >
                                      <img  src="<?php echo base_url(); ?>images/downarw.png">
                                    </div>
                                <?php } ?>
                            </div>  
                          <div class="q_tab_container" style="margin-left:370px;">
                                <div class="quality_tabbed" > <!--onclick="this.style.height=(this.style.height=='165px'?'auto':'165px');"-->
                                        
                                            <?php
                                                $temp_static_traits=$static_traits[2]; 
                                                $array_size=sizeof($temp_static_traits);
                                                $trait_dynamic_id=$trait_dynamic_id+$array_size;
                                            ?>
                                    <span class="vi_span"><?php echo $temp_static_traits[0][1]; ?></span><br>
                                        <div class="block1">
                                            <?php  for($i=0;$i<$array_size;$i++){ ?> <!-- Only One Block is Dynamic rest is static -->
                                                       <?php  trait_box($i+$trait_dynamic_id,$temp_static_traits[$i][0],$temp_static_traits[$i][2],$array_size,$encrypt_tbl_primary_key_obj); ?> 
                                            <?php }  ?>
                                             <?php  $trait_dynamic_id=$trait_dynamic_id+$array_size; ?>
                                        </div>
                                </div>
                                <a href="javascript:void(0)" ><div class="btn_add">Add New Virtue</div></a>
                                 <?php if($array_size>3){ ?>
                                    <div class="down">
                                      <img  src="<?php echo base_url(); ?>images/downarw.png">
                                    </div>
                                <?php }else{ ?>
                                    <div class="down" style="display:none;" >
                                      <img  src="<?php echo base_url(); ?>images/downarw.png">
                                    </div>
                                <?php } ?>
                            </div>
                            <div class="q_tab_container" style="margin-left:550px;">    
                                <div class="quality_tabbed" > <!--onclick="this.style.height=(this.style.height=='165px'?'auto':'165px');"-->
                                        
                                            <?php
                                                $temp_static_traits=$static_traits[3]; 
                                                $array_size=sizeof($temp_static_traits);
                                                $trait_dynamic_id=$trait_dynamic_id+$array_size;
                                            ?>
                                    <span class="vi_span"><?php echo $temp_static_traits[0][1]; ?></span><br>
                                        <div class="block1">
                                            <?php  for($i=0;$i<$array_size;$i++){ ?> <!-- Only One Block is Dynamic rest is static -->
                                                       <?php  trait_box($i+$trait_dynamic_id,$temp_static_traits[$i][0],$temp_static_traits[$i][2],$array_size,$encrypt_tbl_primary_key_obj); ?> 
                                            <?php }  ?>
                                            <?php  $trait_dynamic_id=$trait_dynamic_id+$array_size; ?>
                                        </div>
                                </div>
                                <a href="javascript:void(0)" ><div class="btn_add">Add New Virtue</div></a>
                                 <?php if($array_size>3){ ?>
                                    <div class="down">
                                      <img  src="<?php echo base_url(); ?>images/downarw.png">
                                    </div>
                                <?php }else{ ?>
                                    <div class="down" style="display:none;" >
                                      <img  src="<?php echo base_url(); ?>images/downarw.png">
                                    </div>
                                <?php } ?>
                            </div>
                            <div class="q_tab_container" style="margin-left:730px;">    
                                <div class="quality_tabbed" > <!--onclick="this.style.height=(this.style.height=='165px'?'auto':'165px');"-->
                                        
                                            <?php
                                                $temp_static_traits=$static_traits[4]; 
                                                $array_size=sizeof($temp_static_traits);
                                                $trait_dynamic_id=$trait_dynamic_id+$array_size;
                                            ?>
                                    <span class="vi_span"><?php echo $temp_static_traits[0][1]; ?></span><br>
                                        <div class="block1">
                                            <?php  for($i=0;$i<$array_size;$i++){ ?> <!-- Only One Block is Dynamic rest is static -->
                                                       <?php  trait_box($i+$trait_dynamic_id,$temp_static_traits[$i][0],$temp_static_traits[$i][2],$array_size,$encrypt_tbl_primary_key_obj); ?> 
                                            <?php }  ?>
                                            <?php  $trait_dynamic_id=$trait_dynamic_id+$array_size; ?>
                                        </div>
                                </div>
                                <a href="javascript:void(0)" ><div class="btn_add">Add New Virtue</div></a>
                                 <?php if($array_size>3){ ?>
                                    <div class="down">
                                      <img  src="<?php echo base_url(); ?>images/downarw.png">
                                    </div>
                                <?php }else{ ?>
                                    <div class="down" style="display:none;" >
                                      <img  src="<?php echo base_url(); ?>images/downarw.png">
                                    </div>
                                <?php } ?>
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
                            <input id="make_gossip_receipent_name" class="rec_input" type="text" placeholder="Name" index="" >
                            <input id="make_gossip_receipent_email" class="rec_input" type="text" placeholder="Email" >
                            <a href="javascript:add_recipient()"><div class="btn_rec">Add</div></a>
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
                          <a href="javascript:submit_gossip_main_all_data()"><div class="btn_s_gossip">Submit Gossip</div></a>
                        </div>
                      </div>
                      <div id="tab4" class="tab_content inactive">
                      </div>
        </div>                
              <!-- /Tabs -->
          </div> 
          </div>  
        
        
    <!--</div>-->
        <!--Footer>-->
        
        <input type="hidden" id="trait_queue" value="" />
        <input type="hidden" id="target_id" value="<?php echo $target_id; ?>" />
        <input type="hidden" id="trait_dynamic_id" value="<?php echo $trait_dynamic_id; ?>" />
        <input type="hidden" id="recipient_queue" value="" />
        <input type="hidden" id="recipient_sugession" value="" />
        <input type="hidden" id="recipient_sugession_index" value="-1" />
        
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
<?php include 'footer.php' ?>
<script>
    set_postion_fixed();
    initialize_notification_bar("40px","304px");
</script>