 function resizeTabHeight(){
    var height = $('.tab_content').parent().find('div.active').height();
    var newHeight=height+130;
    $('.center').height(newHeight);
  }
 $(document).ready(function() {
    $('.plus').on('click',function(e){
      resizeTabHeight();
      e.preventDefault();         
      //var height = $('.tab_content').parents().find('div.active').height();
      // console.log('inactive@'+height);
      //$('.center').height(height);
    });
 });
$(document).ready(function() {
   $(".center").height($("#tab1").height()+150);    
  $('#content1').click(function(){
    $(".center").height($("#tab1").height()+150);
   });
  $('#content2').click(function(){
    $(".center").height($("#tab2").height()+150);
   });
  $('#content3').click(function(){
    $(".center").height($("#tab3").height()+150);
   });
  $('#content4').click(function(){
    $(".center").height($("#tab4").height()+150);
   });
 });
 
 $(document).ready(function() {
      // hides the slickbox as soon as the DOM is ready
     activate_trait_slide_down();
  });
  
  function activate_trait_slide_down(){
       $('.quality_tabbed').animate({height: '112px'});
        $('.down').click(function(){
            $this = $(this);
         $(this).parent().find('.quality_tabbed').each(function(){
                $(this).attr("class");
                if($(this).css("height") == "112px" ) {
                    $(this).animate({height: "100%"}, 1000);
                    $this.css('backgroundPosition', '1px 8px');
                } else {
                    $(this).animate({height: "112px"}, 500);
                    $this.css('backgroundPosition', '1px -45px');
                    }
                    return false;
                 });
          });
  }
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
        $('.scrollbar_large').tinyscrollbar();
        $('.scrollbar_small').tinyscrollbar();
        $('.scrollbar1').tinyscrollbar();
    
         });
         $('#content1').trigger("click");
      });
 function initiateTabScript(){
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
         $('.scrollbar_large').tinyscrollbar();
         $('.scrollbar_small').tinyscrollbar();
         $('.scrollbar1').tinyscrollbar();

     });
     $('#content1').trigger("click");
 }