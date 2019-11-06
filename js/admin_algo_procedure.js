
        function is_operator(operator_value){
           
            if(!is_trait_value(operator_value) && isNaN(operator_value)){
                return true;
            }
            return false;
        }
        function is_trait_value(operator_value){
            var traits_value_array=$('#traits_value').attr("value").split(" ");
            traits_value_array.pop();
            if(traits_value_array.indexOf(operator_value)<0){
                return false;
            }else{
                return true;
            }
        }
        
        function equation_syntex_error(){
            var operator_array=  $('#operator_stack').attr("value");
            var i=0;
            var equation_queue="";console.log(operator_array.length);
            if(operator_array.length>=1 || is_operator(operator_array[0])){
                equation_queue+="<span style='background:red;'>"+operator_array[i]+" "+"</span>";
                while(++i<operator_array.length){
                    equation_queue+=operator_array[i]+" ";
                }
               $('#syntex_error_string').attr("value",equation_queue);
               return false;
            }
            while(i<operator_array.length){
               
                if(is_operator(operator_array[i])){
                        if(i+1<operator_array.length){
                             if(is_operator(operator_array[i+1])){
                                 console.log("From If");
                                 equation_queue+="<span style='background:red;'>"+operator_array[i]+" "+"</span>";
                                  while(++i<operator_array.length){
                                      equation_queue+=operator_array[i]+" ";
                                  }
                                 $('#syntex_error_string').attr("value",equation_queue);
                                 return false;
                             }
                        }else{
                            while(++i<operator_array.length){
                                equation_queue+=operator_array[i]+" ";
                            }
                            $('#syntex_error_string').attr("value",equation_queue);
                            return false;
                        }
                }
                equation_queue+=operator_array[i]+" ";
               
                i++;
            }
            return true;
            
        }
        function push_algo_process_queue(id,element){
            if($('#current_component_id').attr("value")!=""){
             //   submit_equation($('#current_component_id').attr("value"));
            }
            $('#current_component_id').attr("value",id);
            empty_operator_stack(); //Clean the Stack
            initialize_operator_stack($('#'+id).attr("value"));
            $('#'+id).addClass("slected_algo_text");
            $('#process_element').attr("value",id);
            $(element).children("p").addClass("selected_algo");
            $('#algo_process_queue').attr("value",id);
        }
        function pop_algo_process_queue(){
            return $('#algo_process_queue').attr("value");
        }
        function initialize_operator_stack(operator_string){
            var operator_array=operator_string.split(" ");
            operator_array.splice(operator_array.length-1,1);
            $('#operator_stack').attr("value",operator_array);
        }
        function push_operator(operator,modifier_id){
        
         
         var showed_operator=operator;
         var showed_field_id=pop_algo_process_queue();
         if(modifier_id!=""){
            if($(modifier_id+' option:selected').text()=="default"){
                showed_operator=showed_operator;
            }else if($(modifier_id).val()!=""){
                showed_operator=$(modifier_id+' option:selected').text()+"("+ showed_operator+")";
            }
         }
         if(showed_field_id!=""){
             
            if(operator=="x"){
                showed_operator="x";
            }
            $("#"+showed_field_id).val($("#"+showed_field_id).val()+showed_operator+" ");
              if($('#operator_stack').attr("value")!=""){
                 var stack_array=$('#operator_stack').attr("value");
              }else{
                 var stack_array =new Array();
              }
              stack_array.push(operator);
              $('#operator_stack').attr("value",stack_array);
             
         }else{
              alert("Please Select Element First");
         }
        }
        function pop_operator(){
              var stack_array=$('#operator_stack').attr("value");
              if(stack_array!==""){
                stack_array.pop();
                $('#operator_stack').attr("value",stack_array);
              }
        }
        function empty_operator_stack(){
            var element_id=$('#process_element').attr("value");
            $("#"+element_id+"_p").removeClass("selected_algo");
            $("#"+element_id).removeClass("slected_algo_text");
            $('#operator_stack').attr("value","");
        }
        function pop_from_view(){
            var id=$('#process_element').attr("value");
            if(id!==""){
                var operators=$('#'+id).val().split(" ");
                var temp_val="";
                var i=0;
                console.log(operators);
                operators.splice(operators.length-2,1);
                //operators.pop();
                //operators.push(" ");
                console.log(operators);
                temp_val=operators.join(" ");
                
                $('#'+id).attr("value",temp_val);
            }
        }
        function manipulate(){
             var stack_array=$('#operator_stack').attr("value");
         
             if(equation_syntex_error()){
                    
                  var result=show_result(stack_array);
                  console.log(result);
                  $('#testing_result').attr("value",result);
             }else{
                 console.log("Error Else");
                 $('#error_log').html($('#syntex_error_string').attr("value"));
                  $('#error_log_container').fadeIn(500,function(){});
             }
            
             
             
        }
        function show_result(equation_array){
            var i=0;
             var result=0;
            while(i<equation_array.length){
                if(equation_array[i]=="x"){
                   result=parseFloat(equation_array[i-1])*parseFloat(equation_array[i+1]);
                   equation_array.splice(i-1,3,result.toFixed(2));
                   i=0;
                }else{
                    i++;
                }
                
            }
            i=0;
            while(i<equation_array.length){
                if(equation_array[i]=="/"){
                   result =parseFloat(equation_array[i-1])/parseFloat(equation_array[i+1]);
                   equation_array.splice(i-1,3,result.toFixed(2));
                   i=0;
                }else{
                    i++;
                }
            }
            i=0;
            while(i<equation_array.length){
                if(equation_array[i]=="+"){
                   result =parseFloat(equation_array[i-1])+parseFloat(equation_array[i+1]);
                   equation_array.splice(i-1,3,result.toFixed(2));
                   i=0;
                }else{
                    i++;
                }
            }
            i=0;
            while(i<equation_array.length){
                if(equation_array[i]=="-"){
                   result =parseFloat(equation_array[i-1])-parseFloat(equation_array[i+1]);
                   equation_array.splice(i-1,3,result.toFixed(2));
                   i=0;
                }else{
                    i++;
                }
            }
            return result;
            
        }
        function submit_equation(element,id){
            var e_id=$('#'+id).attr("e_id");console.log(e_id);
            var component=$('#'+id).attr("component");
            var equation_str=$('#'+id).attr("equ");
            var exposed_str= $('#'+id).attr("value");
            var url=$('#site_url').val()+"dynamic_algo_equation/submit_update_data";
            var process_icn= $(element).next();
            $(element).prev().attr("disabled","disabled");
            $(element).fadeOut(100,function(){
                   $(process_icn).fadeIn(100);
            });
            $.ajax({
                url:url,
                type:"post",
                data:{
                    e_id:e_id,
                    component:component,
                    equation_str:equation_str,
                    exposed_str:exposed_str                    
                },
                success:function(data){
                    
                   var resp=JSON.parse(data);
                   if(resp.status="true"){
                        $(element).prev().removeAttr("disabled");
                        $(process_icn).fadeOut(500,function(){console.log( $(process_icn).next());
                            $(process_icn).next().fadeIn(500).delay(1000).fadeOut(500);
                        });
                        
                   }
                  
                }
            });
        }
       
        $(document).ready(function(){
            $('#float_value').keypress(function(e){
                var c=parseInt(e.charCode);
                var valid_character=/^0-9]$/;
                var re=valid_character.test(c);
                console.log(re);
            });
        });
        function pop_operator_for_equ(){
            
            var id=$('#current_component_id').val();
            if(id!==""){
                 show_save_btn();
                var equ_stack_str=$('#'+id).attr("equ");
                var equ_stack=equ_stack_str.split("~");
                equ_stack.splice(equ_stack.length-2,1);
                var new_equ_stack=equ_stack.join("~");
                $('#'+id).attr("equ",new_equ_stack);
                console.log(new_equ_stack);
            }
        }
        function push_operator_for_equ(element_id,id,modifier_id){
            show_save_btn();
            var showed_field_id="#"+pop_algo_process_queue();
            var equ_val=$(showed_field_id).attr("equ");
            var modifier_val="";
            if(modifier_id!="" && $(modifier_id).val()!=""){
                modifier_val=","+$(modifier_id).val();
            }
            $(showed_field_id).attr("equ",equ_val+id+modifier_val+"~");
             console.log(showed_field_id);
        }
        function show_save_btn(){
            var id=$('#current_component_id').val();
            $("#"+id).next().fadeIn(500);
        }