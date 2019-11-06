<?php include 'admin_header.php' ?>

<script src="<?php echo base_url().'js/admin_trait_procedure.js'; ?>" ></script>
<script>
    function change_color_class(element){
        var newClass=$(element).val();
        var i=1;
        var span_score=$(element).next().find(".span_score");
        $(element).next().children().each(function(){
            if(i==2){
                $(this).fadeOut(500,function(){
                    $(this).css("width","0%");
                    $(this).attr("class","");
                    $(this).addClass(newClass);
                    $(this).fadeIn(500,function(){
                        $(this).css("width","70%");
                        $('#trait_color_class').attr("value",newClass);
                        
                    });
                });
               
                
            }
            i++;
        });
    }
</script>
<?php include 'admin_dashboard.php' ?>
<div class="admin_panel">
	<?php include 'top_container.php' ?>
	<div class="infoBar" style="height:20px;"><p>Admin Page</p></div>
	<div id="place_holder" class="admin_container">
		<div  class="criteria">
			<div class="head_div">
				<p class="head_div_desc">Trait Categories titles</p>
			</div>
			<div class="traits">
				<div class="trait_container">
                                       <?php 
                                            $i=1;
                                            foreach($trait_value as $rowData){ ?>
                                           
                                                <?php if($i==1){ ?>
                                                    <div class="trait_s">
                                                        <div class="trait_p">
                                                                <p>Category:</p>
                                                        </div>
                                                        <div class="trait_i">
                                                                <div class="trait_fake"><input type="text" value="<?php echo $rowData->category; ?>"></div>
                                                        </div>
                                                   </div>
                                                    <div class="trait_s">
                                                        <div class="trait_p">
                                                                <p>Trait <?php echo $i; ?>:</p>
                                                        </div>
                                                        <div class="trait_i">
                                                                <div class="trait_fake"><input type="text" value="<?php echo $rowData->value; ?>"></div>
                                                        </div>
                                                   </div>
                                               <?php }else{ ?>
                                                        <div class="trait_s">
                                                            <div class="trait_p">
                                                                    <p>Trait <?php echo $i; ?>:</p>
                                                            </div>
                                                            <div class="trait_i">
                                                                    <div class="trait_fake"><input type="text" value="<?php echo $rowData->value; ?>"></div>
                                                            </div>
                                                       </div>
                                               <?php } ?>
                                           
                                         <?php  
                                               $i++;
                                             }     
                                         ?>
					<br>
					<div class="trait_s_large">
						<div id="static_traits_col_1" class="trait_p_seq">
							<div class="trait_p">
								<p>Category:</p>
							</div>
						</div>
                                             <?php 
                                                $temp_category='';
                                                $i=0;
                                                $col_size=1;
                                                $max_lenght=0;
                                                $temp_lenght=0;
                                                $dynamic_id=1;
                                                
                                                
                                                
                                                foreach($all_data as $RowData) { 
                                                
                                                    
                                                  if($temp_category==$RowData->category) { 
                                                      $temp_lenght++;
                                              ?>
                                                            <div class="trait_i">
                                                                   <div class="trait_fake"> <input type="text" value="<?php echo $RowData->sub_category; ?>" id="sub_category_<?php echo $dynamic_id;?>_value"  onclick="initiate_sub_category(<?php echo $dynamic_id;?>,<?php echo $col_size;?>)"></div>
                                                                   <input type="hidden" value="<?php echo $RowData->id; ?>" id="sub_category_<?php echo $dynamic_id;?>_id">
                                                                   
                                                            </div>
                                               <?php  } else { 
                                                    if($max_lenght<=$temp_lenght) {
                                                        $max_lenght=$temp_lenght;
                                                    }   
                                                         $temp_lenght=0;
                                                         
                                                   if($temp_category!=""){ ?>
                                                           
                                                            <div id="col_child_<?php echo $col_size;?>" >
                                                                
                                                            </div>
                                                            
                                                            <div class="trait_i" >
                                                                    <a href="javascript:add_trait_to_col(<?php echo $col_size;?>)"><div class="btn_trait"><span>Add Trait</span></div></a>
                                                                    <a href="javascript:update_data(<?php echo $col_size;?>)"><div class="btn_trait"><span>Save Edit</span></div></a>
                                                            </div>
                                                   </div>
                                            <?php $col_size++;?>
                                                <?php  } ?>
                                                <?php 
                                                    $temp_category=$RowData->category;
                                                    
                                                ?>
                                          
                                                        <div class="trait_seq" id="col_<?php echo $col_size;?>" >
                                                            <div class="trait_i"  >
                                                                <div class="trait_fake"><input type="text" value="<?php echo $RowData->category; ?>" id="category_<?php echo $dynamic_id;?>_value"  onclick="initiate_category(<?php echo $dynamic_id;?>,<?php echo $col_size;?>)"></div>
                                                                <input type="hidden" value="<?php echo $RowData->category; ?>" id="category_<?php echo $dynamic_id;?>_id">
                                                                

                                                            </div>
                                                        <?php $dynamic_id++;?>
                                                            <div class="trait_i">
                                                               <div class="trait_fake"><input type="text" value="<?php echo $RowData->sub_category;?>" id="sub_category_<?php echo $dynamic_id;?>_value" onclick="initiate_sub_category(<?php echo $dynamic_id;?>,<?php echo $col_size;?>)"></div> 
                                                              <input type="hidden" value="<?php echo $RowData->id; ?>" id="sub_category_<?php echo $dynamic_id;?>_id">

                                                            </div>
                                                           
                                                           
                                                    
                                                <?php  } ?>
                                                 <?php if($i==sizeof($all_data)-1){ ?>
                                                       <div id="col_child_<?php echo $col_size;?>" >
                                                                
                                                        </div>
                                                        <div class="trait_i" id="col_<?php echo $col_size;?>">
                                                                    <a href="javascript:add_trait_to_col(<?php echo $col_size;?>)"><div class="btn_trait"><span>Add Trait</span></div></a>
                                                                    <a href="javascript:update_data(<?php echo $col_size;?>)"><div class="btn_trait"><span>Save Edit</span></div></a>
                                                            </div>
                                                        </div>
                                             
                                               <?php  }  ?>
                                                 
                                             <?php $i++; $dynamic_id++; } ?>
<!--						<div class="trait_seq">
							<div class="trait_i">
								<input type="text" disabled="disabled">
							</div>
							<div class="trait_i">
								<input type="text" disabled="disabled">
							</div>
							<div class="trait_i">
								<input type="text" disabled="disabled">
							</div>
							<div class="trait_i">
								<a href="#"><div class="btn_trait"><span>Add Trait</span></div></a>
								<a href="#"><div class="btn_trait"><span>Save Edit</span></div></a>
							</div>
						</div>
						<div class="trait_seq">
							<div class="trait_i">
								<input type="text" disabled="disabled">
							</div>
							<div class="trait_i">
								<input type="text" disabled="disabled">
							</div>
							<div class="trait_i">
								<input type="text" disabled="disabled">
							</div>
							<div class="trait_i">
								<a href="#"><div class="btn_trait"><span>Add Trait</span></div></a>
								<a href="#"><div class="btn_trait"><span>Save Edit</span></div></a>
							</div>
						</div>-->
					</div>	
                            

				</div>
			</div>
  
		</div>
       <div class="criteria" id="question_ans" style="padding:15px 0 0 0;">
        </div>
        	
	
<div class="criteria" id="black_list" style="padding:15px 0 0 0;">
        </div>
		

	</div>

</div>	

<input type="hidden" value="" id="category_col_1_process_queue">
<input type="hidden" value="" id="category_col_2_process_queue">
<input type="hidden" value="" id="category_col_3_process_queue">
<input type="hidden" value="" id="category_col_4_process_queue">
<input type="hidden" value="" id="category_col_5_process_queue">

<input type="hidden" value="" id="sub_category_col_1_process_queue">
<input type="hidden" value="" id="sub_category_col_2_process_queue">
<input type="hidden" value="" id="sub_category_col_3_process_queue">
<input type="hidden" value="" id="sub_category_col_4_process_queue">
<input type="hidden" value="" id="sub_category_col_5_process_queue">

<input type="hidden" value="" id="col_1_element_size" value="" >
<input type="hidden" value="" id="col_2_element_size" value="" >
<input type="hidden" value="" id="col_3_element_size" value="" >
<input type="hidden" value="" id="col_4_element_size" value="" >
<input type="hidden" value="" id="col_5_element_size" value="" >

<input type="hidden" value="<?php echo $dynamic_id;?>" id="dynamic_id">
<input type="hidden" id="max_trait" name="max_trait" value="<?php echo $max_lenght+1?>">
<input type="hidden" id="base_url" value="<?php echo base_url();?>">
<?php include 'footer.php' ?>
<script>
    set_postion_fixed();
    initialize_notification_bar("40px","304px");
</script>