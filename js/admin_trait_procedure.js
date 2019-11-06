function upload_file(){
    $('#minus_picture').change(function(){

        var formData = new FormData($('#minus_picture_form')[0]);
        $.ajax({
            url: $('#base_url').val()+"trait_categories/upload_trait_minus_picture",  
            type: 'POST',
            success:function(data){
                var resp=data.split(";");

                if(resp[1]=="True"){
                    $('#minus_picture_progress').css("width","100%");
                    $('#minus_picture_progress_span').html("100%");
                    update_trait_picture_by_category(resp[2],"");
                }else if(resp[1]=="False"){
                      load_notification_bar(resp[2]);
                      show_error_then_hide(5000,"")
                      set_effect_on_content("place_holder");
                      set_defult_effect_on_content_by_element(3000, "#place_holder");
                      $('#minus_picture_progress').css("width","0%");
                      $('#minus_picture_progress_span').html("0%");
                }
            },
            xhr: function() {  // custom xhr
            myXhr = $.ajaxSettings.xhr();
            if(myXhr.upload){ // check if upload property exists
                myXhr.upload.addEventListener('progress',progressHandlingForMinusFunction, false); 
            }

            return myXhr;
            },

            data: formData,
            cache: false,
            contentType: false,
            processData: false
        });
    });
    $('#plus_picture').change(function(){
        $('.progressbar').show();
        var formData = new FormData($('#plus_picture_form')[0]);
        $.ajax({
            url: $('#base_url').val()+"trait_categories/upload_trait_plus_picture",
            type: 'POST',
            success:function(data){
                var resp=data.split(";");
                if(resp[1]=="True"){
                    $('#plus_picture_progress').css("width","100%");
                    $('#plus_picture_progress_span').html("100%");
                    update_trait_picture_by_category("",resp[2]);
                }else if(resp[1]=="False"){
                      load_notification_bar(resp[2]);
                      show_error_then_hide(5000,"")
                      set_effect_on_content("place_holder");
                      set_defult_effect_on_content_by_element(3000, "#place_holder");
                      $('#plus_picture_progress').css("width","0%");
                      $('#plus_picture_progress_span').html("0%");
                }
            },
            xhr: function() {  // custom xhr
            myXhr = $.ajaxSettings.xhr();
            if(myXhr.upload){ // check if upload property exists
                myXhr.upload.addEventListener('progress',progressHandlingForPlusFunction, false); // for handling the progress of the upload
            }

            return myXhr;
            },

            data: formData,
            cache: false,
            contentType: false,
            processData: false
        });
    });
}
function progressHandlingForMinusFunction(e){
    var percent=(e.loaded/e.total)*100;

    $('#minus_picture_progress').css("width",Math.ceil(percent)+"%");
    $('#minus_picture_progress_span').html(Math.ceil(percent)+"%");
}
function progressHandlingForPlusFunction(e){
    var percent=(e.loaded/e.total)*100;

    $('#plus_picture_progress').css("width",Math.ceil(percent)+"%");
    $('#plus_picture_progress_span').html(Math.ceil(percent)+"%");
}
function update_trait_picture_by_category(lower_pic_path,upper_pic_path){
    // update only one or both picture. null paremter will not be updated
    var url=$('#base_url').val()+"trait_categories/submit_update_tarit_picture";
    var trait_category_id=$('#trait_category_id').val();
    $.ajax({
            url: url,  
            type: 'POST',
            data:{
                lower_pic_path:lower_pic_path,
                upper_pic_path:upper_pic_path,
                trait_category_id:trait_category_id
            },
            success:function(data){
                var resp=data.split(";");
                if(resp[1]=="True"){
                    if(lower_pic_path!=""){
                        $('#minus_img').fadeOut(500,function(){
                            show_picture("minus_picture","minus_img");
                            $(this).load(function(){
                                 $(this).fadeIn(500,function(){
                                    $('#minus_picture_progress').css("width","0%");
                                    $('#minus_picture_progress_span').html("0%");
                                 });
                             });
                         });

                    }else if(upper_pic_path!=""){
                        $('#plus_img').fadeOut(500,function(){
                             show_picture("plus_picture","plus_img");
                             $(this).attr("src",$('#base_url').val()+"uploads/"+upper_pic_path);
                             $(this).load(function(){
                                 $(this).fadeIn(500,function(){
                                     $('#plus_picture_progress').css("width","0%");
                                     $('#plus_picture_progress_span').html("0%");
                                 });
                             });
                        });
                    }
                }else if(resp[1]=="False"){

                }
            },error:function(err){

            }
        });
}
function show_picture(file_tag_id,sorce_id){
    var file=document.getElementById(file_tag_id).files[0];
    if (!!file.type.match(/image.*/)) {
        if ( window.FileReader ) {
                var reader = new FileReader();
                reader.onloadend = function (e) { 
                      $('#'+sorce_id).attr("src",e.target.result);
                };
                reader.readAsDataURL(file);
        }
    }	
}
function get_col_category(col){
    var i=0;
    var category_id="";
    $('#col_'+col).find('input:text').each(function(){
    i++;
    var temp_array=$(this).attr("id").split("_");

    if(temp_array[0]=="category"){
        category_id=$(this).val();

    }

    });
    return category_id;
}
function get_row_size(col){
    var i=0;
    $('div#col_'+col).find("input:text").each(function(){
        i++;
    });
    return i;
}
function get_traits_row_size(col){
    var i=0;
    $('div#col_'+col).find("input:text").each(function(){
        i++;
    });
    if(i==0)
        return i;
    return i-1;
}
function get_new_row_val(col){
    var i=0;
    var row_val=new Array();
    $('div#col_child_'+col).find("input:text").each(function(){

        var temp_id=$(this).attr("id").split("_");
        temp_id.pop();
        temp_id.push("id");
        if($(this).val().trim()!="" &&  $('#'+temp_id[0]+"_"
                                             +temp_id[1]+"_"
                                             +temp_id[2]+"_"
                                             +temp_id[3]).attr("value")==""){
            var temp_id_array=$(this).attr("id").split("_");
            row_val.push($(this).val()+"#"+temp_id_array[2]);
        }

        i++;
    });
    return row_val;
}

function add_trait_to_col(col){
    if(isNaN($('#dynamic_id').val())){
        var dynamic_id=0;
    }else{
          var dynamic_id=parseInt($('#dynamic_id').val());
    }

    var htmlContent="<div class='trait_fake'>"
                    +"<input id='sub_category_"+dynamic_id+"_value' type='text' onclick='' value=''>"
                    +"</div>"
                    +"<input id='sub_category_"+dynamic_id+"_id' type='hidden' value=''>"
                    +"</div>";
    var row_size=0;
    $('#col_child_'+col).append(htmlContent);

     if(isNaN($('#max_trait').val())){
         var max_trait=0;
     }else{
         var max_trait=parseInt($('#max_trait').val());
     }
     row_size=get_traits_row_size(col);

     if(row_size>max_trait){
         max_trait=row_size;
         add_trait_to_static_col_one(row_size);
         $('#max_trait').attr("value",max_trait);
     }

    $('#dynamic_id').attr("value",++dynamic_id);
}
function add_trait_to_static_col_one(total_trait){
    var i=1;
    $('#static_traits_col_1').html("<div class='trait_p'><p>Category :</p></div>");
    while(i<=total_trait){
        var html_content="<div class='trait_p'><p>Trait "+i+" :</p></div>";
        $('#static_traits_col_1').append(html_content);
        i++;
   }
}
function add_black_list_cell()
{
    var black_list_cell=get_black_list_cell_size();
    $('#new_black_list').append(
                     "<div class='trait_p_small'>"
                    +"<p>Trait "+black_list_cell+":</p>"
                    +"</div>"
                    +"<div  class='trait_i'>"
                    +"<input type='text' id='black_list_"+black_list_cell+"_value' onchange='push_black_list_insert_element(\""+black_list_cell+"\")'>"
                    +"<input type='hidden' id='black_list_"+black_list_cell+"_id' value=''>"
                    +"</div>"
                    );
    increase_black_list_cell_size();
}
function push_black_list_insert_element(dynamic_id){

      if($('#black_list_insert_process_queue').attr("value")!=""){
        var black_list_update_array=$('#black_list_insert_process_queue').attr("value").split(";");
        if(parseInt(black_list_update_array.indexOf(dynamic_id))==-1)
            $('#black_list_insert_process_queue').attr("value",$('#black_list_insert_process_queue').val()+dynamic_id+";");
    }else{
        $('#black_list_insert_process_queue').attr("value",$('#black_list_insert_process_queue').val()+dynamic_id+";");

    }

}
function get_black_list_insert_element(){
    var black_list_insert_array=$('#black_list_insert_process_queue').attr("value").split(";");
    $('#black_list_insert_process_queue').attr("value","");
    black_list_insert_array.pop();
    return black_list_insert_array;
}
function push_black_list_update_element(dynamic_id){
     if($('#black_list_update_process_queue').attr("value")!=""){
        var black_list_update_array=$('#black_list_update_process_queue').attr("value").split(";");
        if(parseInt(black_list_update_array.indexOf(dynamic_id))==-1)
            $('#black_list_update_process_queue').attr("value",$('#black_list_update_process_queue').val()+dynamic_id+";");
    }else{
        $('#black_list_update_process_queue').attr("value",$('#black_list_update_process_queue').val()+dynamic_id+";");

    }
}
function get_black_list_update_element(){
    var black_list_insert_array=$('#black_list_update_process_queue').attr("value").split(";");
    $('#black_list_update_process_queue').attr("value","");
    black_list_insert_array.pop();
    return black_list_insert_array;
}
$(document).ready(function() {
    var max_trait=parseInt($('#max_trait').val());
    add_trait_to_static_col_one(max_trait);

});
function get_black_list_cell_size(){
    return parseInt($('#black_list_size').attr("value"));
}
function increase_black_list_cell_size(){
    var i=parseInt($('#black_list_size').attr("value"));
    $('#black_list_size').attr("value",++i);

}
function initiate_category(dynamic_id,col_id)
{

    var category_value=$("#"+"category_" + dynamic_id + "_value").val();
    var category_id=$("#"+"category_"+ dynamic_id +"_id").val();

    push_category_id_for_process(dynamic_id,col_id);

}
function initiate_sub_category(dynamic_id,col_id)
{

        load_notification_bar("Loading");
        set_effect_on_content("place_holder");
        var sub_category_value=$("#"+"sub_category_" + dynamic_id + "_value").val();
        var sub_category_id=$("#sub_category_" + dynamic_id + "_id").val();


        push_sub_category_id_for_process(dynamic_id,col_id);
        load_update_question_view(sub_category_id);
        load_black_list_view(sub_category_id);
}
function  push_category_id_for_process(id,col_id)
{
 $('#category_col_'+col_id+'_process_queue').attr("value",id);
}
function push_sub_category_id_for_process(id,col_id)
{
    $('#sub_category_col_'+col_id+'_process_queue').attr("value",id);
}

function pop_category_id_for_process(col_id)
{
    var category_process_queue_id=$('#category_col_'+col_id+'_process_queue').val();
    $('#category_col_'+col_id+'_process_queue').attr("value",'');
    return category_process_queue_id;
}
function pop_sub_category_id_for_process(col_id)
{
    var sub_category_process_queue=$('#sub_category_col_'+col_id+'_process_queue').val();
    $('#sub_category_col_'+col_id+'_process_queue').attr("value",'');
    return sub_category_process_queue;

}
function update_data(col_id)
{
    load_notification_bar("Procces Data");
    set_effect_on_content("place_holder");


    submit_update_sub_category(col_id);
    submit_update_category(col_id);
    var category=get_col_category(col_id);
    var sub_category=get_new_row_val(col_id);
    var i=0;
    while(i<sub_category.length)
        {
            var temp_array=sub_category[i].split('#');
            insert_submit_data(category,temp_array[0],temp_array[1],col_id);
            i++;
        }

}
function submit_update_category(col_id)
{ 

    var dynamic_id=pop_category_id_for_process(col_id);
    var category=$("#"+"category_"+ dynamic_id +"_id").val();
    var category_update_value=$("#"+"category_"+dynamic_id+"_value").val();

   if(dynamic_id=="")
   {
       return false;

   }

    $.ajax({
            type:"post",
            url:$('#base_url').val()+"trait_categories/submit_update_category",
            data:{
                category:category,
                category_update_value:category_update_value
            },
            success:function(data){
              //load_notification_bar("Success");
               var resp=data.split(";");
               if(resp[1]=="True")
                   {
                        $("#"+"category_"+dynamic_id+"_id").attr('value',category_update_value);
                        if(!is_notification_bar_busy()){
                            chage_notification_content("Succes");
                            show_success_then_hide(300,"");
                            set_defult_effect_on_content("place_holder");
                        }
                   }


            }
      });
}
function insert_submit_data(category,sub_category,dynamic_id,col)
{                

         if(dynamic_id=="")
            {
                delay_and_hide_notification_bar(300);
                return false;
            }
                $.ajax({
                type:"post",
                url:$('#base_url').val()+"trait_categories/submit_create_data",
                data:{
                    category:category,
                    sub_category:sub_category
                },
                success:function(data){
                    var resp=data.split(';');

                    if(resp[1]=="True")
                        {
                            var primary_id=resp[2];
                            $('#sub_category_'+dynamic_id+'_value').attr("onclick","initiate_sub_category("+dynamic_id+","+col+")");
                            $('#sub_category_'+dynamic_id+'_id').attr("value",primary_id);

                             if(!is_notification_bar_busy()){
                                chage_notification_content("Success");
                                show_success_then_hide(300,"");
                              }
                        }
                        else 
                            {
                                chage_notification_content("Data Already Exits");
                                show_error_then_hide(3000,"");
                            }
                            set_defult_effect_on_content("place_holder");
                }
          });
}
function submit_update_sub_category(col_id)
{

    var dynamic_id=pop_sub_category_id_for_process(col_id);
    var primary_id=$("#"+"sub_category_"+ dynamic_id +"_id").val();
    var sub_category=$("#"+"sub_category_"+dynamic_id+"_value").val();
    var category=$("#category_1_id").val();
     if(dynamic_id == "")
    {
        chage_notification_content("Data Not Selected");
        delay_and_hide_notification_bar(300);
        set_defult_effect_on_content("place_holder");
        return false;
    }

                $.ajax({
                type:"post",
                url:$('#base_url').val()+"trait_categories/submit_update_sub_category",
                data:{
                    primary_id:primary_id,
                    sub_category:sub_category,
                    category:category
                },
                success:function(data){
                    var resp=data.split(";");

                    if(resp[1]=="True")
                        {   
                            if(!is_notification_bar_busy()){
                             chage_notification_content("Successfully Updated");
                             show_success_then_hide(300,"");
                            }

                        }

                   set_defult_effect_on_content("place_holder");
                }
          });


}

function load_update_question_view(sub_category_id)
{
        $('#question_ans').hide();
               $.ajax({
                type:"post",
                url:$('#base_url').val()+"trait_q_a/get_update_view",
                data:{
                  id:sub_category_id
                },
                success:function(data){
                    hide_notification_bar();
                    set_defult_effect_on_content("place_holder");
                    $('#question_ans').html(data);
                    $('#question_ans').fadeIn(500);
                    upload_file();
                }
          });
}
function load_black_list_view(sub_category_id)
{
     $('#black_list').hide();
   $.ajax({
                type:"post",
                url:$('#base_url').val()+"blacklist_traits/get_update_view",
                data:{
                  sub_category_id:sub_category_id
                },
                success:function(data){
               
                $('#black_list').html(data);
                $('#black_list').fadeIn(500);

                }
          });
}
function push_id_in_answer_process_queue(dynamic_id)
{
   $('#answer_process_queue').attr("value",$('#answer_process_queue').val()+dynamic_id+";");
}
function get_process_queue_element(){
    if($('#answer_process_queue').attr("value")!=""){
        var queue_array=$('#answer_process_queue').attr("value").split(";");
        queue_array.pop();
        return queue_array;
    }
    return new Array();
}
function empty_answer_process_queue()
{
   $('#answer_process_queue').attr("value","");
}
function update_trait_q_a()
{
   var id=get_process_queue_element();
   var i=0;
    update_question();
    update_color_class();
    while(i<id.length){
         var  answer=$("#"+"answer_"+id[i]+"_value").val();
         var  answer_id=$("#"+"answer_"+id[i]+"_id").val();
            $.ajax({
                type:"post",
                url:$('#base_url').val()+"trait_q_a/update_trait_q_a",
                data:{
                    answer:answer,
                    answer_id:answer_id
                },
                success:function(data){

                }
          });
          i++;
     }
    


}
function update_color_class(){
    var trait_category_id=$('#trait_category_id').val();
    var trait_color_class=$('#trait_color_class').val();
     
    
     if(trait_color_class!=""){
         $.ajax({
                type:"post",
                url:$('#base_url').val()+"trait_categories/submit_update_color_class",
                data:{
                    trait_category_id:trait_category_id,
                    trait_color_class:trait_color_class
                },
                success:function(data){

                }
          });
     }
}
function update_question()
{
   load_notification_bar("Procces Data");
    //set_effect_on_content("place_holder");
    var question=$('#question_value').val();
    var question_id=$('#question_id').val();
      
      $.ajax({
                type:"post",
                url:$('#base_url').val()+"trait_q_a/update_question",
                data:{
                    question:question,
                    question_id:question_id
                },
                success:function(data){
                   var resp=data.split(";");
                   if(resp[1]=="True")
                       {

                           if(!is_notification_bar_busy()){
                             chage_notification_content("Successfully Updated");
                             show_success_then_hide(300,"");
                            }
                       }


                }
          });
}
function get_submit_insert_balck_list_data()
{
  load_notification_bar("Procces Data");
  var insert_value=get_black_list_insert_element();
  var update_value=get_black_list_update_element();
  if(insert_value=="")
      {
      if(!is_notification_bar_busy()){
          hide_notification_bar();

               }          }
  var i=0;
  var j=0;
   while(j<update_value.length)
          {
              submit_update_balck_list_data(update_value[j]);
              j++;
          }
  while(i<insert_value.length)
      {
          submit_insert_balck_list_data(insert_value[i]);
          i++;
      }


}
function submit_insert_balck_list_data(dynamic_id)
{
     var balck_list_value=$('#black_list_'+dynamic_id+'_value').val();
     var trait_category_id=$('#trait_category_id').val();
         $.ajax({
                type:"post",
                url:$('#base_url').val()+"blacklist_traits/submit_insert_balck_list_data",
                data:{
                    trait_category_id:trait_category_id,
                    balck_list_value:balck_list_value
                },
                success:function(data){
                   var resp=data.split(';');
                   if(resp[1]=="True")
                       {
                            if(!is_notification_bar_busy()){
                             chage_notification_content("Successfully Inserted");
                             show_success_then_hide(300,"");
                            }
                           $('#black_list_'+dynamic_id+'_id').attr('value',resp[2]);
                           $('#black_list_'+dynamic_id+'_value').attr('onchange',"push_black_list_update_element(\""+dynamic_id+"\")");

                       }


                }
          });
}
function submit_update_balck_list_data(dynamic_id)
{
      var balck_list_value=$('#black_list_'+dynamic_id+'_value').val();
       var balck_list_id=$('#black_list_'+dynamic_id+'_id').val();

         $.ajax({
                type:"post",
                url:$('#base_url').val()+"blacklist_traits/submit_update_balck_list_data",
                data:{
                    balck_list_id:balck_list_id,
                    balck_list_value:balck_list_value
                },
                success:function(data){
                    var resp=data.split(";");
                    if(resp[1]=="True")
                        {
                             if(!is_notification_bar_busy()){
                                    chage_notification_content("Successfully Updated");
                                    show_success_then_hide(300,"");
                            }
                        }

                }
          });
}