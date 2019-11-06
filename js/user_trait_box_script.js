 //User Trait Boxes Script
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
 //Slide Right [Show 5th Trait Box]
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