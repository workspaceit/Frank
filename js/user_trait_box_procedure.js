function hide_personal_trait(element){        load_notification_bar("Processing");        set_effect_on_content_by_element(".top3_container");        var trait_categories_id = $(element).attr("t_id");        var url=$("#site_url").val()+"trait_users/change_sub_category_hidden";        $.ajax({           url:url,           type:"post",           data:{               trait_categories_id:trait_categories_id           },           success:function(data){               var resp=JSON.parse(data);               if(resp.status=="true"){                   if(resp.operation==0){                       var score=Math.round(Math.abs(parseInt(resp.score)));                       $(resp.element_id).css("width",score+"%");                       $(resp.element_id+"_span_score").html(resp.score+"%");                       $(element).parents(".small_circle_grey").fadeOut(500,function(){                           $(this).removeClass("small_circle_grey").addClass("small_circle");                             $(this).fadeIn(500);                        });                                          }else if(resp.operation==1){                       var score=Math.round(Math.abs(parseInt(resp.score)));                       $(resp.element_id).css("width",score+"%");                       $(resp.element_id+"_span_score").html(resp.score+"%");                       $(element).parents(".small_circle").fadeOut(500,function(){                          $(this).removeClass("small_circle").addClass("small_circle_grey");                            $(this).fadeIn(500);                       });                   }                                      chage_notification_content(resp.msg);                   show_success_then_hide(1000, "");               }               else               {                   chage_notification_content(resp.msg);                   show_error_then_hide(1000, "");               }               set_defult_effect_on_content_by_element(0,".top3_container");                          },           error:function(){                          }        });    }