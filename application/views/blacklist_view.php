
			<div class="head_div">
				<p class="head_div_desc">Trait Categories titles</p>
			</div>
			<div class="traits">
				<div id="balck_list_container_div" class="trait_container">
                                    <?php 
                                    $trait_id=1;
                                    $dynamic_id=1;
                                    foreach ($black_list as $rowData) {?>
                                        <div class="trait_p_small">
                                                <p>Trait<?php echo " ".$trait_id;?>:</p>
                                        </div>
                                        <div  class="trait_i">
                                            <input type="text" id="black_list_<?php echo $dynamic_id;?>_value" value="<?php echo $rowData->value;?>" onchange='push_black_list_update_element("<?php echo $dynamic_id;?>")' >
                                            <input type="hidden" id="black_list_<?php echo $dynamic_id;?>_id" value="<?php echo $rowData->id; ?>"> 
                                        </div>
                                    <?php $trait_id++; $dynamic_id++; }?>
                                    
                                    <?php if(sizeof($black_list)<=0){ ?>
                                        <div class="trait_p_small">
						<p>Trait 1:</p>
					</div>
					<div  class="trait_i">
                                            <input type="text" id="black_list_1_value" value="" onchange="push_black_list_insert_element('1')">
                                            <input type="hidden" id="black_list_1_id" value="" > 
					</div>
                                    <?php  $dynamic_id++; } ?>
                                    
                                    <div id="new_black_list" ></div>
				</div>
                            <div class="trait_container">
                                         <a style="color:#fff;" href="javascript:get_submit_insert_balck_list_data()"><div class="btn_trait" style="float:right;margin: 13px 30px 0 5px;float:right;"><span>Save Edit</span></div></a>
					<a style="color:#fff;" href="javascript:add_black_list_cell()"><div class="btn_trait" style="margin: 13px 0 0 5px;float:right;"><span>Add Trait</span></div></a>
                            </div>
			</div>
<!-- Hidden Tags !-->
<input type="hidden" id="black_list_process_queue" value=""  />
<input type="hidden" id="black_list_insert_process_queue" value=""  />
<input type="hidden" id="black_list_update_process_queue" value=""  />
<input type="hidden" id="black_list_size" value="<?php echo $dynamic_id; ?>"  />