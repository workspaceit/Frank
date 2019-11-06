   function initialize_notification_bar(top,left){
            $('#all_notification').css('top',top);
            $('#all_notification').css('left',left);
    }
    function load_notification_bar(content){

           $('#all_notification_content').html(content);
           $('#all_notification').fadeIn(10,function(){
               $('#all_notification_content').html(content);
           });
       }
       function chage_notification_content(content){
            $('#all_notification_content').html(content);
       }
       function hide_notification_bar(){

           $('#all_notification').fadeOut(500,function(){
               $('#all_notification_loading_img').show();
               $('#all_notification_notify_done_img').hide();
               $('#all_notification_error_img').hide();
               $('#all_notification_content').html("");
           });
       }
       function delay_and_hide_notification_bar(duration){
        
           $('#all_notification').fadeIn(500).delay(duration).fadeOut(500,function(){
               $('#all_notification_loading_img').show();
               $('#all_notification_notify_done_img').hide();
               $('#all_notification_error_img').hide();
               $('#all_notification_content').html("");
           });
       }
       function show_success_then_hide(duration,url){
            $('#all_notification_loading_img').hide();
            $('#all_notification_notify_done_img').fadeIn(500,function(){
                if(url=="")
                    delay_and_hide_notification_bar(duration);
                else
                    delay_hide_and_redirect_notification_bar(duration,url);
            });
       }
       function show_success_then_redirect(duration,adsolute_url){
            $('#all_notification_loading_img').hide();
            $('#all_notification_notify_done_img').fadeIn(500,function(){
                if(adsolute_url=="")
                    delay_and_hide_notification_bar(duration);
                else
                    delay_hide_and_redirect(duration,adsolute_url);
            });
       }
       function show_error_then_hide(duration,url){
            $('#all_notification_loading_img').hide();
            $('#all_notification_error_img').fadeIn(500,function(){
                if(url=="")
                    delay_and_hide_notification_bar(duration);
                else
                    delay_hide_and_redirect_notification_bar(duration,url);
            });
       }
      function delay_hide_and_redirect(duration,url){

           $('#all_notification').fadeIn(500).delay(duration).fadeOut(500,function(){
               $('#all_notification_loading_img').show();
               $('#all_notification_notify_done_img').hide();
               $('#all_notification_error_img').hide();
               $('#all_notification_content').html("");
               window.location=url;
           });
       }
       function delay_hide_and_redirect_notification_bar(duration,url){

           $('#all_notification').fadeIn(500).delay(duration).fadeOut(500,function(){
               $('#all_notification_loading_img').show();
               $('#all_notification_notify_done_img').hide();
               $('#all_notification_error_img').hide();
               $('#all_notification_content').html("");
               window.location=$('#site_url').val()+url;
           });
       }
       function set_effect_on_content(id){
            $('#'+id).animate({
                opacity: 0.25
            }, 500, function() {
                
            });
       }
       function set_defult_effect_on_content(id){
            $('#'+id).animate({
                opacity: 1
            }, 500, function() {
                
            });
       }
       function set_effect_on_content_by_element(id){
            $(id).animate({
                opacity: 0.25
            }, 500, function() {
                
            });
       }
       function set_defult_effect_on_content_by_element(duration,element){
            $(element).delay(duration).animate({
                opacity: 1
            }, 500, function() {
                
            });
       }
       function disable_all_element(id,element){
           $('#'+id).find(element).each(function(){
               $(this).attr("disabled","disabled");
           });  
       }
       function enable_all_element(id,element){
           $('#'+id).find(element).each(function(){
               $(this).removeAttr("disabled","disabled");
           });  
       }
       function set_postion_fixed(){
            $('#all_notification').css('position','fixed');
       }
       function is_notification_bar_busy(){
           return $('#all_notification_error_img').is(":visible");
       }
       
       function set_background(element,color){
            $(element).css('background',color);
       }      