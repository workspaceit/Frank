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
       <?php if($i<=1){ ?>
                    <div id="" class="criteria_div">
                        No Result Found
                    </div>
       <?php } ?>
         <!--Hidden Tags [Starts] -->           
                    <input type="hidden" id="row_size" value="<?php echo $i; ?>" />
                    <input type="hidden" id="start_row" value="<?php echo $start_row; ?>" />
        <!--Hidden Tags [Ends] -->