<?php include 'admin_header.php' ?>
<script type="text/javascript" src="<?php echo base_url(); ?>jQuery/jHtml/scripts/jquery-ui-1.7.2.custom.min.js"></script>
<link rel="Stylesheet" type="text/css" href="<?php echo base_url(); ?>jQuery/jHtml/style/jqueryui/ui-lightness/jquery-ui-1.7.2.custom.css" />
<script type="text/javascript" src="<?php echo base_url(); ?>jQuery/jHtml/scripts/jHtmlArea-0.7.5.js"></script>
<link rel="Stylesheet" type="text/css" href="<?php echo base_url(); ?>jQuery/jHtml/style/jHtmlArea.css" />
<script>
    function richTextArea(id){

     // You can do this to perform a global override of any of the "default" options
     // jHtmlArea.fn.defaultOptions.css = "jHtmlArea.Editor.css";

        $(function() {
            //$("textarea").htmlarea(); // Initialize all TextArea's as jHtmlArea's with default values

            $(id).htmlarea(); // Initialize jHtmlArea's with all default values

            $(id).htmlarea({
                // Override/Specify the Toolbar buttons to show
                toolbar: [
                    ["bold", "italic", "underline", "|", "forecolor"],
                    ["p", "h1", "h2", "h3", "h4", "h5", "h6"],
                    [{
                        // This is how to add a completely custom Toolbar Button
                        css: "custom_disk_button",
                        text: "Save",
                        action: function(btn) {
                            // 'this' = jHtmlArea object
                            // 'btn' = jQuery object that represents the <A> "anchor" tag for the Toolbar Button
                            alert('SAVE!\n\n' + this.toHtmlString());
                        }
                    }]
                ],

                // Override any of the toolbarText values - these are the Alt Text / Tooltips shown
                // when the user hovers the mouse over the Toolbar Buttons
                // Here are a couple translated to German, thanks to Google Translate.
                toolbarText: $.extend({}, jHtmlArea.defaultOptions.toolbarText, {
                        "bold": "fett",
                        "italic": "kursiv",
                        "underline": "unterstreichen"
                    }),

                // Specify a specific CSS file to use for the Editor
                css: "style//jHtmlArea.Editor.css",

                // Do something once the editor has finished loading
                loaded: function() {
                    //// 'this' is equal to the jHtmlArea object
                    //alert("jHtmlArea has loaded!");
                    //this.showHTMLView(); // show the HTML view once the editor has finished loading
                }
            });
        });

   }
    function under_construction(){
        alert('Under Construction');
    }
    function cancel_send_email(){
        $('#user_mail').fadeOut(500,function(){
                $('#user_mail').html("");
         });  
         $("input[id^='user_inf_check_box']:checked").each(
                                function(){
                                    $(this).fadeOut(500,function(){
                                     $(this).removeAttr("checked");
                                        $(this).fadeIn(500,function(){

                                        });
                                    });

                }
            );
    }
    
    function load_email_content(){
        
         if($('input[id="user_inf_check_box[]"]:checked').length>0){
            load_notification_bar("loading....");
            set_effect_on_content("member_parent_div");
              $('input[id="user_inf_check_box[]"]:checked').each(function(){
                 var prefix=$(this).val();
                 var u_id=$('#'+prefix+"_user_id").val();
                    $.ajax({
                           type:"POST",
                           url:$('#site_url').attr("value")+"admin_user_profile/get_email_view",
                           data:{
                               u_id:u_id
                           },
                           success:function(data){
                               hide_notification_bar();
                               set_defult_effect_on_content("member_parent_div");
                               
                                $('#user_mail').hide();
                                $('#user_mail').html(data); 
                                   
                                 richTextArea("#message");
                                 $('#details_text_content').css('background-color','white');
                                 $('#details_text_content').css('height','367px');
                                 $('#details_text_content').css('margin','60px 32px 7px');
                                 $('#details_text_content').css('width','779px'); 
                                 $('iframe').css("height","300px");
                                 $('iframe').css("width","711px");
                                 $('iframe').css("margin","6px 18px 1px");
                                 $('iframe').css("padding","6px 14px 3px");
                                 $('#user_mail').fadeIn(500,function(){
                                     $('#message').focus();
                                 });
                              
                           }
                       });
                 });
         }else{
            alert("Select A User Please");
         }
        
    }
    function send_email_to_user(){
    
         if($('input[id="user_inf_check_box[]"]:checked').length>0){
             load_notification_bar("Sending Email..");
             set_effect_on_content("member_parent_div");
              $('input[id="user_inf_check_box[]"]:checked').each(function(){
                 var prefix=$(this).val();
                 var u_id=$('#'+prefix+"_user_id").val();
                 var message=$("#message").val();
                 var subject=$("#subject").val();
                    $.ajax({
                           type:"POST",
                           url:$('#site_url').attr("value")
                               +"admin_user_profile/send_email_to_selected_user",
                           data:{
                               u_id:u_id,
                               message:message,
                               subject:subject
                           },
                           success:function(data){
                               chage_notification_content("Success");
                               show_success_then_hide(3000,"")
                               set_defult_effect_on_content("member_parent_div");
                               $('#user_mail').fadeOut(500,function(){
                                   $('#user_mail').html("");
                                });
                               set_default_to_all_check_box();
                           }
                       });
                 });
         }else{
            alert("Select A User Please");
         }
        
    }
    function set_default_to_all_check_box(){
        $("input[id^='user_inf_check_box']:checked").each(
              function(){
                  $(this).fadeOut(500,function(){
                   $(this).removeAttr("checked");
                      $(this).fadeIn(500,function(){
                      });
                  });
              }
          );
    }
    function submit_suspended_select(){
        load_notification_bar("Processing...");
         if($('input[id="user_inf_check_box[]"]:checked').length>0){
             $('input[id="user_inf_check_box[]"]:checked').each(function(){
                 var prefix=$(this).val();
                 var u_id=$('#'+prefix+"_user_id").val();

                 $.ajax({
                     type:"POST",
                     url:$('#site_url').attr("value")+"admin_user_profile/suspend_user",
                     data:{
                         u_id:u_id
                     },
                     success:function(data){
                         var resp=data.split(";");
                         if(resp[1]=="True"){
                            $("input[id^='user_inf_check_box']:checked").each(
                                function(){
                                    $(this).fadeOut(500,function(){
                                     $(this).removeAttr("checked");
                                        $(this).fadeIn(500,function(){

                                        });
                                    });
                                     hide_notification_bar();
                                }
                               
                            );
                                $('#'+prefix+"_status").fadeOut(500,function(){
                                $('#'+prefix+"_status").html(resp[2]);
                               $('#'+prefix+"_status").fadeIn(500,function(){
                                });
                           });
                         }else  if(resp[1]=="False"){
                             
                         }
                     }
                 });
             });
         }
   }
    function submit_unsuspended_select(){
        load_notification_bar("Processing...");
          if($('input[id="user_inf_check_box[]"]:checked').length>0){
              $('input[id="user_inf_check_box[]"]:checked').each(function(){
                  var prefix=$(this).val();
                  var u_id=$('#'+prefix+"_user_id").val();

                  $.ajax({
                      type:"POST",
                      url:$('#site_url').attr("value")+"admin_user_profile/activate_user",
                      data:{
                          u_id:u_id
                      },
                      success:function(data){
                        var resp=data.split(";");
                        if(resp[1]=="True"){
                          $("input[id^='user_inf_check_box']:checked").each(
                                function(){
                                    $(this).fadeOut(500,function(){
                                     $(this).removeAttr("checked");
                                        $(this).fadeIn(500,function(){

                                        });
                                    });
                                   
                                }
                            );
                             hide_notification_bar();
                           $('#'+prefix+"_status").fadeOut(500,function(){
                                $('#'+prefix+"_status").html(resp[2]);
                               $('#'+prefix+"_status").fadeIn(500,function(){
                                });
                           });
                         }else  if(resp[1]=="False"){
                             
                         }
                      }
                  });
              });
          }
    }
    function submit_delete_select(){
        if($('input[id="user_inf_check_box[]"]:checked').length>0){
            doConfirm("Are you sure?", function yes()
             {
                load_notification_bar("Processing...");
                set_effect_on_content('member_parent_div');

                       $('input[id="user_inf_check_box[]"]:checked').each(function(){
                           var prefix=$(this).val();
                           var u_id=$('#'+prefix+"_user_id").val();

                           $.ajax({
                               type:"POST",
                               url:$('#site_url').attr("value")+"admin_user_profile/delet_from_frank",
                               data:{
                                   u_id:u_id
                               },
                               success:function(data){
                                 var resp=data.split(";");
                                 if(resp[1]=="True"){

                                   $("input[id^='user_inf_check_box']:checked").each(
                                         function(){
                                             $(this).fadeOut(500,function(){
                                              $(this).removeAttr("checked");
                                                 $(this).fadeIn(500,function(){
                                                     chage_notification_content("Success");
                                                     show_success_then_hide(2000,"admin/members");
                                                 });
                                             });

                                         }
                                     );
                                    $('#'+prefix+"_status").fadeOut(500,function(){
                                         $('#'+prefix+"_status").html(resp[2]);
                                        $('#'+prefix+"_status").fadeIn(500,function(){
                                         });
                                    });
                                  }else  if(resp[1]=="False"){
                                      set_defult_effect_on_content('user_inf_content_div');
                                  }
                               }
                           });
                       });

            }, function no()
            {

                                   $("input[id^='user_inf_check_box']:checked").each(
                                         function(){
                                             $(this).fadeOut(500,function(){
                                              $(this).removeAttr("checked");
                                                 $(this).fadeIn(500,function(){
                                                     chage_notification_content("Success");
                                                     show_success_then_hide(2000,"");
                                                 });
                                             });

                                         }
                                     );
                // do nothing
            });
        }else{
           alert("Select A User First");
        }
    }
   function search_user(){
      
       var term=$('#search_user_first_name_val').attr("value");
       if(term==""){
           $('#search_user_first_name_val').css("background","red").focus();
       }else{
           load_notification_bar("Searching...");
           set_effect_on_content('user_inf_content_div'); 
            $('#search_user_first_name_val').css("background","white");
            $.ajax({
                    type:"POST",
                    url:$('#site_url').attr("value")+"admin_search/get_user_row",
                    data:{term:term},
                    success:function(data){
                       hide_notification_bar();
                        $('#user_inf_content_div').fadeOut(500,function(){
                            $('#user_inf_content_div').html(data);
                            $('#user_inf_content_div').fadeIn(500,function(){});
                             set_defult_effect_on_content('user_inf_content_div');
                        });
                    }
            });
       }
   }
    function sort_row(prefix,key_word,order){
        
            if(order=="asc"){
                insertion_sort_asc(key_word,prefix);
            }else if(order=="desc"){
                insertion_sort_desc(key_word,prefix);
            }
        
    }
    function insertion_sort_asc(key_word,prefix){
        var row_size=parseInt($('#row_size').attr("value"));
        var start_row=parseInt($('#start_row').attr("value"));
        
        for(var j=start_row+1;row_size>1 && j<row_size;j++){
            
            var key=$('#'+prefix+'_'+j.toString()+'_'+key_word+'_sort').attr("value").trim();
            var key_id=$('#'+prefix+'_'+j.toString()+'_'+'id'+'_sort').attr("value").trim();
            var key_name=$('#'+prefix+'_'+j.toString()+'_'+'name'+'_sort').attr("value").trim();
            var key_location=$('#'+prefix+'_'+j.toString()+'_'+'location'+'_sort').attr("value").trim();
            var key_sign_up_date=$('#'+prefix+'_'+j.toString()+'_'+'signup_date'+'_sort').attr("value").trim();
            var key_last_active_sort=$('#'+prefix+'_'+j.toString()+'_'+'last_active'+'_sort').attr("value").trim();
            var key_log_ins=$('#'+prefix+'_'+j.toString()+'_'+'log_ins'+'_sort').attr("value").trim();
            var key_status=$('#'+prefix+'_'+j.toString()+'_'+'status'+'_sort').attr("value").trim();
            
            var key_html= $('#row'+"_"+j.toString()).html();
            
            var i=j-1;
            
            while(i>=start_row && $('#'+prefix+'_'+i.toString()+'_'+key_word+'_sort').attr("value").trim()>key){
                var k=i+1;
                $('#row'+"_"+k.toString()).html($('#row'+"_"+i.toString()).html());
                
                $('#'+prefix+'_'+k.toString()+'_'+'id'+'_sort').attr
                        (
                            "value",
                            $('#'+prefix+'_'+i.toString()+'_'+'id'+'_sort').attr("value")
                        );
                $('#'+prefix+'_'+k.toString()+'_'+'name'+'_sort').attr
                        (
                            "value",
                            $('#'+prefix+'_'+i.toString()+'_'+'name'+'_sort').attr("value")
                        );
                $('#'+prefix+'_'+k.toString()+'_'+'location'+'_sort').attr
                        (
                            "value",
                            $('#'+prefix+'_'+i.toString()+'_'+'location'+'_sort').attr("value")
                        );
                $('#'+prefix+'_'+k.toString()+'_'+'signup_date'+'_sort').attr
                        (
                            "value",
                            $('#'+prefix+'_'+i.toString()+'_'+'signup_date'+'_sort').attr("value")
                        );
                $('#'+prefix+'_'+k.toString()+'_'+'last_active'+'_sort').attr
                        (
                            "value",
                            $('#'+prefix+'_'+i.toString()+'_'+'last_active'+'_sort').attr("value")
                        );
                $('#'+prefix+'_'+k.toString()+'_'+'log_ins'+'_sort').attr
                        (
                            "value",
                            $('#'+prefix+'_'+i.toString()+'_'+'log_ins'+'_sort').attr("value")
                        );
                $('#'+prefix+'_'+k.toString()+'_'+'status'+'_sort').attr
                        (
                            "value",
                            $('#'+prefix+'_'+i.toString()+'_'+'status'+'_sort').attr("value")
                        );            
                i--;
             }
            var l=i+1;
           
            $('#row'+"_"+l.toString()).html(key_html);
            $('#'+prefix+'_'+l.toString()+'_'+'id'+'_sort').attr("value",key_id);
            $('#'+prefix+'_'+l.toString()+'_'+'name'+'_sort').attr("value",key_name);
            $('#'+prefix+'_'+l.toString()+'_'+'location'+'_sort').attr("value",key_location);
            $('#'+prefix+'_'+l.toString()+'_'+'signup_date'+'_sort').attr("value",key_sign_up_date);
            $('#'+prefix+'_'+l.toString()+'_'+'last_active'+'_sort').attr("value",key_last_active_sort);
            $('#'+prefix+'_'+l.toString()+'_'+'log_ins'+'_sort').attr("value",key_log_ins);
            $('#'+prefix+'_'+l.toString()+'_'+'status'+'_sort').attr("value",key_status);
            
        }
    
    }
    function insertion_sort_desc(key_word,prefix){
        var row_size=parseInt($('#row_size').attr("value"));
        var start_row=parseInt($('#start_row').attr("value"));
        
        for(var j=start_row+1;row_size>1 && j<row_size;j++){
            
            var key=$('#'+prefix+'_'+j.toString()+'_'+key_word+'_sort').attr("value").trim();
            var key_id=$('#'+prefix+'_'+j.toString()+'_'+'id'+'_sort').attr("value").trim();
            var key_name=$('#'+prefix+'_'+j.toString()+'_'+'name'+'_sort').attr("value").trim();
            var key_location=$('#'+prefix+'_'+j.toString()+'_'+'location'+'_sort').attr("value").trim();
            var key_sign_up_date=$('#'+prefix+'_'+j.toString()+'_'+'signup_date'+'_sort').attr("value").trim();
            var key_last_active_sort=$('#'+prefix+'_'+j.toString()+'_'+'last_active'+'_sort').attr("value").trim();
            var key_log_ins=$('#'+prefix+'_'+j.toString()+'_'+'log_ins'+'_sort').attr("value").trim();
            var key_status=$('#'+prefix+'_'+j.toString()+'_'+'status'+'_sort').attr("value").trim();
            
            var key_html= $('#row'+"_"+j.toString()).html();
            
            var i=j-1;
            
            while(i>=start_row && $('#'+prefix+'_'+i.toString()+'_'+key_word+'_sort').attr("value").trim()<key){
                var k=i+1;
                $('#row'+"_"+k.toString()).html($('#row'+"_"+i.toString()).html());
                
                $('#'+prefix+'_'+k.toString()+'_'+'id'+'_sort').attr
                        (
                            "value",
                            $('#'+prefix+'_'+i.toString()+'_'+'id'+'_sort').attr("value")
                        );
                $('#'+prefix+'_'+k.toString()+'_'+'name'+'_sort').attr
                        (
                            "value",
                            $('#'+prefix+'_'+i.toString()+'_'+'name'+'_sort').attr("value")
                        );
                $('#'+prefix+'_'+k.toString()+'_'+'location'+'_sort').attr
                        (
                            "value",
                            $('#'+prefix+'_'+i.toString()+'_'+'location'+'_sort').attr("value")
                        );
                 $('#'+prefix+'_'+k.toString()+'_'+'signup_date'+'_sort').attr
                        (
                            "value",
                            $('#'+prefix+'_'+i.toString()+'_'+'signup_date'+'_sort').attr("value")
                        );
                  $('#'+prefix+'_'+k.toString()+'_'+'last_active'+'_sort').attr
                        (
                            "value",
                            $('#'+prefix+'_'+i.toString()+'_'+'last_active'+'_sort').attr("value")
                        );
                  $('#'+prefix+'_'+k.toString()+'_'+'log_ins'+'_sort').attr
                        (
                            "value",
                            $('#'+prefix+'_'+i.toString()+'_'+'log_ins'+'_sort').attr("value")
                        );
                  $('#'+prefix+'_'+k.toString()+'_'+'status'+'_sort').attr
                        (
                            "value",
                            $('#'+prefix+'_'+i.toString()+'_'+'status'+'_sort').attr("value")
                        ); 
                i--;
             }
            var l=i+1;
           
            $('#row'+"_"+l.toString()).html(key_html);
            $('#'+prefix+'_'+l.toString()+'_'+'id'+'_sort').attr("value",key_id);
            $('#'+prefix+'_'+l.toString()+'_'+'name'+'_sort').attr("value",key_name);
            $('#'+prefix+'_'+l.toString()+'_'+'location'+'_sort').attr("value",key_location);
            $('#'+prefix+'_'+l.toString()+'_'+'signup_date'+'_sort').attr("value",key_sign_up_date);
            $('#'+prefix+'_'+l.toString()+'_'+'last_active'+'_sort').attr("value",key_last_active_sort);
            $('#'+prefix+'_'+l.toString()+'_'+'log_ins'+'_sort').attr("value",key_log_ins);
            $('#'+prefix+'_'+l.toString()+'_'+'status'+'_sort').attr("value",key_status);
        }
        
    }
    function merge_sort(){
        
    }
    function makeSense(prefix){
        console.log(prefix);
       if($('#'+prefix+'_action').val()=="edit"){
            load_user_edit_profile_view(prefix);
            
       }else if($('#'+prefix+'_action').val()=="view"){
           
            show_user_profile(prefix);
       }else if($('#'+prefix+'_action').val()==""){
           hide_edit_view(prefix);
       }
       
    }
    function hide_edit_view(prefix){
          $('#'+prefix+'_content_div').fadeOut(500,function(){
                $('#'+prefix+'_check_box').focus();
                $('#'+prefix+'_content_div').html("");
          });
    }
    function show_user_profile(prefix)
    {
         var u_id=$('#'+prefix+'_user_id').attr('value');
         var url=$('#site_url').val()+"admin/view_user_profile?u_id="+u_id;
        window.open(url, '_blank');
       // window.focus();
    }
    function load_user_edit_profile_view(prefix){
        var u_id=$('#'+prefix+'_user_id').attr('value');
        $('div.cd_actions').children("select").attr("disabled","disabled");
        load_notification_bar("loading User Information ");
        set_effect_on_content("member_parent_div");

        $.ajax({
                type:"POST",
                url:$('#site_url').attr("value")+"admin_user_profile/get_user_edit_profile_view",
                data:{u_id:u_id,prefix:prefix},
                success:function(data){
                    
                    hide_notification_bar();
                    set_defult_effect_on_content("member_parent_div");
                    if($('#now_showing_div').attr("value")!=""){
                        $('#'+$('#now_showing_div').attr("value")+"_content_div").fadeOut(100,function(){
                            $('#'+$('#now_showing_div').attr("value")+"_content_div").html("");
                            $('#'+prefix+'_content_div').hide();
                            $('#'+prefix+'_content_div').html(data);
                            $('#'+prefix+'_content_div').fadeIn(500,function(){
                                $('#'+prefix+'_check_box').focus();
                                if($('#now_showing_div').attr("value")!=prefix){
                                    $('#'+$('#now_showing_div').attr("value")+"_action").val('0');
                                }
                                $('#now_showing_div').attr("value",prefix);
                                 $('div.cd_actions').children("select").removeAttr("disabled","disabled");
                            });
                            
                           
                        });
                       
                    }else{
                        $('#'+$('#now_showing_div').attr("value")).html("");
                        $('#'+prefix+'_content_div').hide();
                        $('#'+prefix+'_content_div').html(data);
                        $('#'+prefix+'_content_div').fadeIn(500,function(){
                             $('#'+prefix+'_check_box').focus();
                        });
                        $('#now_showing_div').attr("value",prefix);
                        $('div.cd_actions').children("select").removeAttr("disabled","disabled");
                    }
                }
        });
    }
</script>
<!--For Updating User login ,user Basic information [Starts] -->
<script>
    
    function submit_update_basic_info(prefix){
        set_effect_on_content("member_div");
        $('input:text').attr("disabled","disabled");
        $('#save_edit_btn').attr("disabled","disabled");
        
        $('#all_notification_content').html("Updating User Information ");
        $('#all_notification').fadeIn(500,function(){
        });
        
        var u_id=$('#'+prefix+'_user_id').attr('value');
        var f_name=$("#f_name").val();
        var l_name=$("#l_name").val();
        var gender=$("#gender").val();
        var month=$("#month").val();
        var day=$("#day").val();
        var year=$("#year").val();
        var teamp_name=f_name+" "+l_name;
        var name=teamp_name.substring(0,12);
            $.ajax({
                url:$('#site_url').attr("value")+'admin_user_profile/submit_update_user_basic_info',
                data: {
                    u_id:u_id,
                    f_name:f_name,
                    l_name:l_name,
                    gender:gender,
                    day:day,
                    month:month,
                    year:year
                },
                type: "POST",
                success: function(data){
                    var resp=data.split(";");
                    if(resp[1]=="True"){
                        submit_update_profile_data(prefix);
                        $('#'+prefix+'_name').fadeOut(500,function(){
                            $('#'+prefix+'_name').html(name);
                            $('#'+prefix+'_name').fadeIn(500,function(){});
                        });
                       
                    }else if(resp[1]=="False"){
                        $('#all_notification_content').html("Internal Server Error");
                         $('#all_notification').fadeIn(500,function(){}).delay(2000).fadeOut(500,function(){
                             $('#all_notification_content').html("");
                             $('#'+prefix+'_action').val('0');
                            });
                     }
                     
                }
               
                
            });
        
    }
    function submit_update_profile_data(prefix)
    {
         var u_id=$('#'+prefix+'_user_id').attr('value');
         var current_location_1=$('#current_location_1').val();
         var current_location_2=$('#current_location_2').val();
         var home_town_1=$('#home_town_1').val();
         var home_town_2=$('#home_town_2').val();
         var organization_1=$('#organization_1').val();
         var organization_2=$('#organization_2').val();
         var high_school=$('#high_school').val();
         var higher_education_1=$('#higher_education_1').val();
         var higher_education_2=$('#higher_education_2').val();
         var workplace_1=$('#workplace_1').val();
         var workplace_2=$('#workplace_2').val();
         var teamp_location=current_location_1+","+current_location_2;
         var location=teamp_location.substring(0,12);
         
        $.ajax({
            url:$('#site_url').val()+'admin_user_profile/submit_update_profile_data',
            data:{
                u_id:u_id,
                current_location_1:current_location_1,
                current_location_2:current_location_2,
                home_town_1:home_town_1,
                home_town_2:home_town_2,
                organization_1:organization_1,
                organization_2:organization_2,
                high_school:high_school,
                higher_education_1:higher_education_1,
                higher_education_2:higher_education_2,
                workplace_1:workplace_1,
                workplace_2:workplace_2
            },
            type:"POST",
            success: function(data){
                    var resp=data.split(";");
                    if(resp[1]=="True"){
                        submit_update_user_login_data(prefix);
                        
                        $('#'+prefix+'_content_div').fadeOut(500,function(){
                                $('#'+prefix+'_check_box').focus();
                                 $('#'+prefix+'_content_div').html("");
                                 
                                 $('#'+prefix+'_location').fadeOut(500,function(){
                                    $('#'+prefix+'_location').html(location);
                                    $('#'+prefix+'_location').fadeIn(500,function(){});
                                    
                                });

                            });
                    }else if(resp[1]=="False"){
                    }
            }
	});
    }
    function submit_update_user_login_data(prefix){
         var u_id=$('#'+prefix+'_user_id').attr('value');
         var u_email=$('#u_email').val();
         var password=$('#password').val();
         $.ajax({
                type:"POST",
                url:$('#site_url').attr("value")+"admin_user_profile/submit_update_user_login_data",
                data:{
                    u_id:u_id,
                    u_email:u_email,
                    password:password
                },
                success:function(data){
                    var resp=data.split(";");
                       
                    if(resp[1]=="True"){
                        chage_notification_content("Sucess");
                        show_success_then_hide(1000,"");    
                         $('#'+prefix+'_action').val('0');

                         $('input:text').removeAttr("disabled");

                         set_defult_effect_on_content("member_div");
                           $("input[id^='user_inf_check_box']:checked").each(
                                function(){
                                    $(this).fadeOut(500,function(){
                                     $(this).removeAttr("checked");
                                        $(this).fadeIn(500,function(){

                                        });
                                    });
                                }
                            );
                    
                    }else if(resp[1]=="False"){
                    }
                }
        });
    }
    
</script> 
<?php include 'admin_dashboard.php' ?>

<div class="admin_panel">
	<?php include 'top_container.php' ?>
    <div class="infoBar" style="height:20px;"><p>Admin Page</p></div>
	<div  id="member_parent_div" class="admin_container">
            <!-- <div style="height: 50px;">
                <div id="all_notification" style="display:none; height: 21px; margin: 2px 117px 22px;width: 739px;border: 1px solid #999999;border-radius: 10px 10px 10px 10px; box-shadow: 0 0 8px rgba(0, 0, 0, 0.3);">
                         <img style="float:left;margin: 3px 16px 0;width: 20px;" src="" />
                         <div id="all_notification_content" style="float:left;color:black;">

                         </div>
                </div>
            </div>  -->                                   
		<div  id="member_div" class="criteria">
			<div class="head_div">
                            <p class="head_div_desc">Members</p><p class="head_div_count">(<?php echo sizeof($user_inf)?>)</p><input type="text" id="search_user_first_name_val" placeholder="Name Search">
				            <a style="text-decoration:none;color:#fff;" href="javascript:search_user()" ><div class="btn_src">Search</div></a>
                                
			</div>
			<div class="criteria_div">
				<div class="cd_check">
					<input type="checkbox">
				</div>
				<div class="cd_id">
					<p>ID
                                            
                                            <a href="javascript:sort_row('user_inf','id','asc')"><img src="<?php echo base_url(); ?>images/asc.png" /></a> 
                                            <a href="javascript:sort_row('user_inf','id','desc')"><img src="<?php echo base_url(); ?>images/dsc.png" /></a>
                                            
                                        </p>
				</div>
				<div class="cd_name">
					<p>Name 
                                            <a href="javascript:sort_row('user_inf','name','asc')"><img src="<?php echo base_url(); ?>images/asc.png" /></a> 
                                            <a href="javascript:sort_row('user_inf','name','desc')"><img src="<?php echo  base_url(); ?>images/dsc.png" /></a>
                                                
                                        </p>
                                        
				</div>
				<div class="cd_location">
					<p>Location
                                                 <a href="javascript:sort_row('user_inf','location','asc')"><img src="<?php echo base_url(); ?>images/asc.png" /></a> 
                                                    <a href="javascript:sort_row('user_inf','location','desc')"><img src="<?php echo base_url(); ?>images/dsc.png" /></a>
                                                
                                        </p>
				</div>
				<div class="cd_s_up_date">
					<p>Sign Up date
                                                    <a href="javascript:sort_row('user_inf','signup_date','asc')"><img src="<?php echo base_url();?>images/asc.png" /></a> 
                                                    <a href="javascript:sort_row('user_inf','signup_date','desc')"><img src="<?php echo base_url();?>images/dsc.png" /></a>
                                                
                                        </p>
				</div>
				<div class="cd_last_active">
                                    
					<p>Last Active
                                            <a href="javascript:sort_row('user_inf','last_active','asc')"><img src="<?php echo base_url(); ?>images/asc.png" /></a> 
                                            <a href="javascript:sort_row('user_inf','last_active','desc')"><img src="<?php echo base_url(); ?>images/dsc.png" /></a>
                                            
                                        </p>
				</div>
				<div class="cd_log_ins">
					<p>Log Ins
                                             <a href="javascript:sort_row('user_inf','log_ins','asc')"><img src="<?php echo base_url(); ?>images/asc.png" /></a> 
                                            <a href="javascript:sort_row('user_inf','log_ins','desc')"><img src="<?php echo base_url(); ?>images/dsc.png" /></a>
                                            
                                        </p>
				</div>
				<div class="cd_status">
					<p>Status
                                            <a href="javascript:sort_row('user_inf','status','asc')"><img src="<?php echo base_url(); ?>images/asc.png" /></a> 
                                            <a href="javascript:sort_row('user_inf','status','desc')"><img src="<?php echo base_url(); ?>images/dsc.png" /></a>
                                         </p>
				</div>
				<div class="cd_flags">
					<p>Flags</p>
				</div>
				<div class="cd_actions">
					<p>Actions</p>
				</div>
			</div>
     <div id="user_inf_content_div">
       <?php
            $i=$start_row;
            foreach($user_inf as $rowData){ ?>
                    <?php
                        list($s_date,$s_time)=explode(" ",$rowData->signup_date);
                        list($s_year,$s_month,$s_day)=explode("-",$s_date);
                    ?>
                    <?php 
                        list($last_activation_day,$last_activation_time)=  explode(" ", $rowData->last_activation);
                     ?>
                      <?php
                        list($last_activation_year,$last_activation_month,$last_activation_day)=explode("-",$last_activation_day);
                      ?>
                    	
                    <input type="hidden" id="user_inf_<?php echo $i;//$rowData->user_id;?>_user_id" value="<?php echo $rowData->user_id;?>" />
                    <input type="hidden" id="user_inf_<?php echo $i;//$rowData->user_id;?>_name_sort" value="<?php echo $rowData->name_1; ?>" />
                    <input type="hidden" id="user_inf_<?php echo $i;//$rowData->user_id;?>_id_sort" value="<?php echo $i; ?>" />
                    <input type="hidden" id="user_inf_<?php echo $i;//$rowData->user_id;?>_location_sort" value="<?php echo $rowData->location_1; ?>" />
                    <input type="hidden" id="user_inf_<?php echo $i;//$rowData->user_id;?>_signup_date_sort" value="<?php echo $s_year.'-'.$s_month.'-'.$s_day; ?>" />
                    <input type="hidden" id="user_inf_<?php echo $i;//$rowData->user_id;?>_last_active_sort" value="<?php echo $last_activation_year.'-'.$last_activation_month.'-'.$last_activation_day; ?>" />
                    <input type="hidden" id="user_inf_<?php echo $i;//$rowData->user_id;?>_log_ins_sort" value="<?php echo $login_count[$rowData->user_id]; ?>" />
                    <input type="hidden" id="user_inf_<?php echo $i;//$rowData->user_id;?>_status_sort" value="<?php echo $rowData->account_status;?>" />
		
                    <div id="row_<?php echo  $i;?>" class="criteria_div">
                        
                               <div class="cd_check">
					<input id="user_inf_check_box[]" type="checkbox" value="user_inf_<?php echo $i;//$rowData->user_id;?>">
				</div>
				<div class="cd_id">
					<p><?php echo  $i;?></p>
				</div>
				<div class="cd_name">
                                    <p id="user_inf_<?php echo $i;//$rowData->user_id;?>_name" >
                                        <?php 
                                            if($rowData->name_1!="" && $rowData->name_2!=""){
                                                    $team_name=$rowData->name_1.' '.$rowData->name_2;
                                                    echo substr($team_name,0, 12);
                                              }elseif($rowData->name_1!=""){
                                                  echo substr($rowData->name_1,0, 12);
                                              }elseif($rowData->name_2!=""){
                                                  echo substr($rowData->location_2,0, 12);
                                              }
                                         ?> 
                                    </p>
				</div>
				<div class="cd_location">
                                    <p id="user_inf_<?php echo $i;//$rowData->user_id;?>_location">
                                        <?php if($rowData->location_1!="" && $rowData->location_2!=""){
                                                    echo substr($rowData->location_1.','.$rowData->location_2 ,0, 14);
                                              }elseif($rowData->location_1!=""){
                                                  echo substr($rowData->location_1,0, 14);
                                              }elseif($rowData->location_2!=""){
                                                  echo substr($rowData->location_2,0, 14);
                                              }
                                              
                                        ?>
                                    </p>
				</div>
				<div class="cd_s_up_date">
					<p>
                                            <?php
                                                list($s_date,$s_time)=explode(" ",$rowData->signup_date);
                                                list($s_year,$s_month,$s_day)=explode("-",$s_date);
                                                echo $s_month.'/'.$s_day.'/'.$s_year;
                                            ?>
                                        </p>
				</div>
				<div class="cd_last_active">
                                    
					<?php 
                                            list($last_activation_day,$last_activation_time)=  explode(" ", $rowData->last_activation);
                                        ?>
                                        <?php
                                                list($last_activation_year,$last_activation_month,$last_activation_day)=explode("-",$last_activation_day);
                                                
                                            ?>
                                        <p id="user_inf_<?php echo $i;//$rowData->user_id;?>_last_active" ><?php echo $last_activation_month.'/'.$last_activation_day.'/'.$last_activation_year;?></p>
				</div>
				<div class="cd_log_ins">
					<p id="user_inf_<?php echo $i;//$rowData->user_id;?>_log_ins"><?php echo $login_count[$rowData->user_id]; ?></p>
				</div>
				<div class="cd_status">
					<p id="user_inf_<?php echo $i;//$rowData->user_id;?>_status" ><?php echo $rowData->account_status;?></p>
				</div>
				<div class="cd_flags">
					<p>Flags</p>
				</div>
				<div class="cd_actions">
					<select id="user_inf_<?php echo $i;//$rowData->user_id;?>_action" 
                                                onchange="makeSense('user_inf_<?php echo $i;//$rowData->user_id;?>')"
                                                >
                                                <option value="">-</option>
						<option value="edit">Edit</option>
						<option value="view">View</option>
					</select>
				</div>
                        <div class="cd_expanded"  id="user_inf_<?php echo $i;//$rowData->user_id;?>_content_div">
			</div>
			</div>
                   
                        
                   
                        <?php $i++; }?>
                          <!--Hidden Tags [Starts] -->           
                                     <input type="hidden" id="row_size" value="<?php echo $i; ?>" />
                                     <input type="hidden" id="start_row" value="<?php echo $start_row; ?>" />
                         <!--Hidden Tags [Ends] -->
                         </div>
        
			
			
		</div>
		<div style="float:right;width:auto;margin:0 10px 0 0;">
		      <a style="color:#fff;" href="javascript:load_email_content()"><div class="btn_save_edit">
				<span>Email Selected</span>
			 </div></a>
			 <a style="color:#fff;" href="javascript:submit_suspended_select()"><div class="btn_save_edit">
				<span>Suspended selected</span>
			</div></a>
			<a style="color:#fff;" href="javascript:submit_unsuspended_select()"><div class="btn_save_edit">
				<span>Unsuspended selected</span>
			</div></a>
			<a style="color:#fff;" href="javascript:submit_delete_select()"><div class="btn_save_edit" style="margin: 10px 24px 10px 20px;">
				<span>Delete selected</span>
			</div></a>
		</div>	

                <br><br><br><br>             
               
                <div class="pagination_div">
                    <?php echo $this->pagination->create_links(); ?>
               </div>
                 <div id="user_mail">

                </div>
	</div>
    <!-- <div class="pagination_div">
         
    </div>  -->    
    <div id="overlay" style="background:#000;
                             width:100%;
                             height:1000px;
                             display: none;
                             position: fixed;
                             top:0;
                             left: 0;
                             opacity: 0.25;
                             z-index: 1147483647
                             ">
        
    </div>
    <div id="confirmBox" class="noti" style="width: 400px;height: 178px;display:none;" >
        <div class="message" style="margin:14px 141px 17px;"></div>
        <span class="yes" style="margin: 2px 119px 0px;cursor: pointer;">Yes</span>
        <span class="no" style="margin:0px -42px -3px ;cursor: pointer;">No</span>
    </div>
</div>	

<?php include 'footer.php' ?>
<!--Hidden Tags [Starts] -->
<input type="hidden" id="site_url" value="<?php echo $site_url; ?>" />
<input type="hidden" id="now_showing_div" value="" />


<!--Hidden Tags [Ends] -->
<script>
 initialize_notification_bar("323px","308px");
 function doConfirm(msg, yesFn, noFn)
{
    var bW=$(window).width()/2;
    var bH=$(window).height()/2;
    
    var cW=$('#confirmBox').width()/2;
    var cH=$('#confirmBox').height()/2;
    $('#confirmBox').css({
        top:bH-cH,
        left:bW-cW,
        position:'fixed'
    });
    
    var confirmBox = $("#confirmBox");
    $('#overlay').show();
    confirmBox.find(".message").text(msg);
    confirmBox.find(".yes,.no").unbind().click(function()
    {
        confirmBox.hide();
        $('#overlay').hide();
    });
    confirmBox.find(".yes").click(yesFn);
    confirmBox.find(".no").click(noFn);
    confirmBox.show();
}

</script>

