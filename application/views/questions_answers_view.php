			<style type="text/css">
				.span_name{font-size: 11px;font-weight: normal;}
				.span_score{font-size: 10px;font-weight: normal;}
			</style>
			<div class="head_div">
				<p class="head_div_desc">Gossip trait score Questions and answers</p>
			</div>
			<div class="traits">
				<div class="trait_container">
					<div class="trait_p">
						<p>Trait:</p>
					</div>
                                    
                                     <?php foreach ($category as $rowData) {?>
					<div class="trait_i">
                                            <input  type="text" id="trait_sub_category" name="trait_sub_category" value="<?php echo $rowData->sub_category;?>">
                                            <input type="hidden" id="trait_category_id" name="trait_category_id" value="<?php echo $rowData->id;?>">
					</div>
                                     <?php }?>
					<a style="color:#fff;" href="#"><div class="btn_trait" style="margin: 9px 0 0 5px;"><span>Input</span></div></a>
					<a style="color:#fff;" href="javascript:update_trait_q_a()"><div class="btn_trait" style="float:right;margin: 9px 35px 0 5px;"><span>Save Edit</span></div></a>
				</div>
				<div class="trait_container">
					<div class="pic_upload_div">
						<div class="pic_upload_fake">
                                           <?php if($trait_lower_picture!=""){ ?>
                                                <img id="minus_img"  src="<?php echo base_url().'uploads/'.$trait_lower_picture; ?>">
                                           <?php }else{ ?>
                                                <img id="minus_img"  src="">
                                           <?php } ?>
                                           </div>
						<div class="file_browse_wrap_nxt" style="float:left;">
                                                    <form id="minus_picture_form" enctype="multipart/form-data" >
							<input id="minus_picture" name="minus_picture" type='file' class="file_browse_minus" />
                                                    </form>
                                                </div>
					     <div class="progressbar" style="float:left;margin:9px 0 0 3px;"><!--Green-->
							<div class="bottom_bar"></div>
							<div id="minus_picture_progress" class="i_bar_s" style="border-right:1px solid #111;width:0%"><span class="inside-middle"></span></div>
							<div class="top_inf"><span class="span_name">Upload Progress</span><span class="span_score"><span id="minus_picture_progress_span" class="span_score">0%</span></span></div>
                                             </div>
					</div>
					<div class="pic_upload_info">
                                            <div style="float:left;">Choose The Color For Trait Progress Bar [Have Effect In User Profile]</div>
                                            <div style="clear: both;"></div>
                                            <style type="text/css">
												.colorBox{float:left;margin:9px 0 0 3px;box-shadow:0px 0px 6px #000;}
                                            </style>
                                            <select class="colorBox" id="traitColorSelect" onchange="change_color_class(this)">
                                                <option value="i_bar_s">Blue</option>
                                                <option value="i_bar_g">Green</option>
                                                <option value="i_bar_y">Yellow</option>
                                                <option value="i_bar_o">Orange</option>
												<option value="i_bar_m">Magenta</option>

                                            </select>
                                            <?php foreach ($category as $rowData) {?>
                                                <div class="progressbar" style="float:left;margin:9px 0 0 3px;"><!--Green-->
                                                            <div class="bottom_bar"></div>
                                                            <div class="<?php echo $rowData->color_class;?>" style="border-right:1px solid #111;width:70%"><span class="inside-middle"></span></div>
                                                            <div class="top_inf"><span class="span_name"></span><span class="span_score"><span  class="span_score">70</span></span></div>
                                                			<input type="hidden" id="current_trait_color_class" value="<?php echo $rowData->color_class;?>" />
												</div>
                                            <?php } ?>
					</div>
					<div class="pic_upload_div" style="float:right;margin:5px 35px 0 0;">
						<div class="pic_upload_fake">
                                                    <?php if($trait_upper_picture!=""){ ?>
                                                         <img id="plus_img" src="<?php echo base_url().'uploads/'.$trait_upper_picture; ?>">
                                                     <?php }else{ ?>
                                                         <img id="plus_img"  src="">
                                                    <?php } ?> 
                                            </div>
                                             <div class="file_browse_wrap" style="float:left;">
                                                 <form id="plus_picture_form" enctype="multipart/form-data" onsubmit="return false">
                                                    <input id="plus_picture" name="plus_picture" type='file' class="file_browse_plus" />
                                                 </form>
					     </div>
					      <div class="progressbar" style="float:left;margin:9px 0 0 3px;"><!--Green-->
							<div class="bottom_bar"></div>
							<div id="plus_picture_progress" class="i_bar_s" style="border-right:1px solid #111;width:0%"><span class="inside-middle"></span></div>
							<div class="top_inf"><span class="span_name">Upload Progress</span><span class="span_score"><span id="plus_picture_progress_span" class="span_score">0%</span></span></div>
						</div>
					</div>
				</div>
				
                            <?php
                            $question=true;
                            $dynamic_value=1;
                            foreach ($trait_q_a as $rowData) {?>
                            <?php if($question) {?>
                            <div class="trait_container">
					<div class="trait_p">
						<p>Question:</p>
					</div>
					<div class="trait_i_large">
                                            <input type="text" id="question_value" value="<?php echo $rowData->ques;?>">
                                            <input type="hidden" id="question_id" value="<?php echo $rowData->trait_categories_id;?>">
					</div>
				</div>
                             <?php if($rowData->point>0){?>
				<div class="trait_container">
                                    <div class="trait_p" >
						<p> Answer +<?php echo $rowData->point; ?></p> 
					</div>
					<div class="trait_i_large">
                                            <input type="text" id="answer_<?php echo $dynamic_value; ?>_value" value="<?php echo $rowData->ans;?>" onchange="push_id_in_answer_process_queue(<?php echo $dynamic_value;?>)">
                                            <input type="hidden" id="answer_<?php echo $dynamic_value; ?>_id" value="<?php echo $rowData->id; ?>">
					</div>
				</div>
                             <?php } else {?>
                                        <div class="trait_container">
					<div class="trait_p">
						<p> Answer <?php echo $rowData->point; ?></p>
					</div>
					<div class="trait_i_large">
                                            <input type="text" value="<?php echo $rowData->ans;?>">
					</div>
				</div>
                            <?php } 
                                $question=false;
                             } else {?>
                                   <?php if($rowData->point>0){?>
				<div class="trait_container">
					<div class="trait_p">
						<p> Answer +<?php echo $rowData->point; ?></p>
					</div>
					<div class="trait_i_large">
                                           <input type="text" id="answer_<?php echo $dynamic_value; ?>_value" value="<?php echo $rowData->ans;?>" onchange="push_id_in_answer_process_queue(<?php echo $dynamic_value;?>)">
                                           <input type="hidden" id="answer_<?php echo $dynamic_value; ?>_id" value="<?php echo $rowData->id; ?>">
					</div>
				</div>
                             <?php } else {?>
                                        <div class="trait_container">
					<div class="trait_p">
						<p> Answer <?php echo $rowData->point; ?></p>
					</div>
					<div class="trait_i_large">
                                           <input type="text" id="answer_<?php echo $dynamic_value; ?>_value" value="<?php echo $rowData->ans;?>" onchange="push_id_in_answer_process_queue(<?php echo $dynamic_value;?>)">
                                           <input type="hidden" id="answer_<?php echo $dynamic_value; ?>_id" value="<?php echo $rowData->id; ?>">
					</div>
				</div>
                            <?php }
								}
								$dynamic_value++;

							}
							?>
		
			
			</div>
		<input type="hidden" id="answer_process_queue" value="">
        <input type="hidden" id="trait_color_class" value="">
<script>
	$('#traitColorSelect').val($('#current_trait_color_class').val());
</script>