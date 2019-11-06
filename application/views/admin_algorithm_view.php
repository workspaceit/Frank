<?php include 'admin_header.php' ?>
<?php include 'admin_dashboard.php' ?>
    <!--[if IE 6]>
	   <style type="text/css">
	       html, body { height: 100%; overflow: auto; }
	       #sidebar { position: absolute; }
	       #page-wrap { margin-top: -5px; }
	       #ie6-wrap { position: relative; height: 100%; overflow: auto; width: 100%; }
	   </style>
    <![endif]-->
    
    <!--[if IE 7]>
	   <style type="text/css">
	       #sidebar { margin-top: -10px;  }
	       #page-wrap { margin-top: -5px; }
	   </style>
    <![endif]-->
    <script type="text/javascript" src="<?php echo base_url().'js/admin_algo_procedure.js';?> " ></script>
     <intput type="hidden" id="operator_stack" value="" />
<div class="admin_panel">
	<?php include 'top_container.php' ?>
	<div class="infoBar" style="height:20px;"><p>Admin Page</p></div>
	<div class="admin_container">
		<div class="criteria" style="padding:15px 0 0 0;">
			<div class="head_div">
				<p class="head_div_desc">Individual Profile Algorithms</p>
			</div>
			<div class="traits">
				<div class="trait_container">
					<div class=" trait_p_large">
					</div>
					<div style="text-align:center;" class="trait_i_large">
						<p style="font-size:16px;">Aggregates</p>
						
					</div>
				</div>
                               
                                  <?php foreach($algo_equation as $rowData){ ?>
                                    <div class="trait_container">
					<div class="trait_p_large" onclick="push_algo_process_queue('<?php echo $rowData->component; ?>_equ',this)">
						<p id="<?php echo $rowData->component; ?>_equ_p" ><?php echo $rowData->component; ?></p>
					</div>
					<div class="trait_i_large">
						<input id="<?php echo $rowData->component; ?>_equ" 
                                                       component="<?php echo $rowData->component; ?>"  
                                                       type="text" 
                                                       readonly 
                                                       equ="<?php echo $rowData->equation_str ; ?>" 
                                                       value="<?php echo $rowData->exposed_str ; ?>"
                                                       onchange="show_save_btn('<?php echo $rowData->component; ?>_equ')" 
                                                       e_id="<?php echo $rowData->id ; ?>" >
						<div class="trait_i_icon" style="display:none;" onclick="submit_equation(this,'<?php echo $rowData->component; ?>_equ')"></div>
						<div class="trait_i_load" style="display:none;"></div>
						<div class="trait_i_tick" style="display:none;"></div>
						<div class="trait_i_cross" style="display:none;"></div>
					</div>
                                     </div>
                                  <?php } ?>
				
				<!-- Averages of trait score -->
				<div class="trait_container">
					<div class=" trait_p_large">
					</div>
					<div style="text-align:center;" class="trait_i_large" >
						<p style="font-size:16px;">Averages of trait score</p>
						
					</div>
				</div>
				<div class="trait_container">
					<div class=" trait_p_large">
						<p>Average virtues:</p>
					</div>
					<div class="trait_i_large">
						<input type="text">
					</div>
				</div>
				<div class="trait_container">
					<div class=" trait_p_large">
						<p>Average Traits:</p>
					</div>
					<div class="trait_i_large">
						<input type="text">
					</div>
				</div>
				<div class="trait_container">
					<div class=" trait_p_large">
						<p>Average Skills:</p>
					</div>
					<div class="trait_i_large">
						<input type="text">
					</div>
				</div>
				<div class="trait_container">
					<div class=" trait_p_large">
						<p>Average Regard:</p>
					</div>
					<div class="trait_i_large">
						<input type="text">
					</div>
				</div>
				<div class="trait_container">
					<div class=" trait_p_large">
						<p style="font-size:11px;">Average Apperance:</p>
					</div>
					<div class="trait_i_large">
						<input type="text">
					</div>
				</div>
				<!-- Weighting factors -->
				<div class="trait_container">
					<div class=" trait_p_large">
					</div>
					<div style="text-align:center;" class="trait_i_large">
						<p style="font-size:16px;">Weighting factors</p>
						
					</div>
				</div>
				<div class="trait_container">
					<div class=" trait_p_large">
						<p>Relationship:</p>
					</div>
					<div class="trait_i_large">
						<input type="text">
					</div>
				</div>
				<div class="trait_container">
					<div class=" trait_p_large">
						<p>Integrity:</p>
					</div>
					<div class="trait_i_large">
						<input type="text">
					</div>
				</div>
				<div class="trait_container">
					<div class=" trait_p_large">
						<p>Own trait score</p>
					</div>
					<div class="trait_i_large">
						<input type="text">
					</div>
				</div>
				<div class="trait_container">
					<div class=" trait_p_large">
						<p>Confidance</p>
					</div>
					<div class="trait_i_large">
						<input type="text">
					</div>
				</div>
				<div class="trait_container">
					<div class=" trait_p_large">
						<p>Anomaly</p>
					</div>
					<div class="trait_i_large">
						<input type="text">
					</div>
				</div>
				<div class="trait_container">
					<div class=" trait_p_large">
						<p>Profile vrification</p>
					</div>
					<div class="trait_i_large">
						<input type="text">
					</div>
				</div>
				<div class="trait_container">
					<div class=" trait_p_large">
						<p>Popularity</p>
					</div>
					<div class="trait_i_large">
						<input type="text">
					</div>
				</div>
				<!-- Other Algorithms -->
				<div class="trait_container">
					<div class=" trait_p_large">
					</div>
					<div style="text-align:center;" class="trait_i_large">
						<p style="font-size:16px;">Other Algorithms</p>
						
					</div>
				</div>
				<div class="trait_container">
					<div class=" trait_p_large">
						<p>Average Integrity</p>
					</div>
					<div class="trait_i_large">
						<input type="text">
					</div>
				</div>
				<div class="trait_container">
					<div class=" trait_p_large">
						<p>Confidance</p>
					</div>
					<div class="trait_i_large">
						<input type="text">
					</div>
				</div>
				<div class="trait_container">
					<div class=" trait_p_large">
						<p style="font-size:10px;">Profile Authentication</p>
					</div>
					<div class="trait_i_large">
						<input type="text">
					</div>
				</div>
				<div class="trait_container">
					<div class=" trait_p_large">
						<p>Comment Likes</p>
					</div>
					<div class="trait_i_large">
						<input type="text">
					</div>
				</div>
			</div>
		</div>
		<div class="criteria" style="padding:15px 0 0 0;">
			<div class="head_div">
				<p class="head_div_desc">Group Profile Algorithms</p>
			</div>
			<div class="traits">
				<div class="trait_container">
					<div class=" trait_p_large">
					</div>
					<div style="text-align:center;" class="trait_i_large">
						<p style="font-size:16px;">Aggregates</p>
						
					</div>
				</div>
				<div class="trait_container">
					<div class=" trait_p_large">
						<p>Rank:</p>
					</div>
					<div class="trait_i_large">
						<input type="text">
					</div>
				</div>
				<div class="trait_container">
					<div class=" trait_p_large">
						<p>Reputation:</p>
					</div>
					<div class="trait_i_large">
						<input type="text">
					</div>
				</div>
				<div class="trait_container">
					<div class=" trait_p_large">
						<p>Popularity:</p>
					</div>
					<div class="trait_i_large">
						<input type="text">
					</div>
				</div>
				<!-- Averages of trait score -->
				<div class="trait_container">
					<div class=" trait_p_large">
					</div>
					<div style="text-align:center;" class="trait_i_large">
						<p style="font-size:16px;">Averages of trait score</p>
						
					</div>
				</div>
				<div class="trait_container">
					<div class=" trait_p_large">
						<p>Average virtues:</p>
					</div>
					<div class="trait_i_large">
						<input type="text">
					</div>
				</div>
				<div class="trait_container">
					<div class=" trait_p_large">
						<p>Average Traits:</p>
					</div>
					<div class="trait_i_large">
						<input type="text">
					</div>
				</div>
				<div class="trait_container">
					<div class=" trait_p_large">
						<p>Average Skills:</p>
					</div>
					<div class="trait_i_large">
						<input type="text">
					</div>
				</div>
				<div class="trait_container">
					<div class=" trait_p_large">
						<p>Average Regard:</p>
					</div>
					<div class="trait_i_large">
						<input type="text">
					</div>
				</div>
				<div class="trait_container">
					<div class=" trait_p_large">
						<p style="font-size:11px;">Average Apperance:</p>
					</div>
					<div class="trait_i_large">
						<input type="text">
					</div>
				</div>
				<!-- Other Algorithms -->
				<div class="trait_container">
					<div class=" trait_p_large">
					</div>
					<div style="text-align:center;" class="trait_i_large">
						<p style="font-size:16px;">Other Algorithms</p>
						
					</div>
				</div>
				<div class="trait_container">
					<div class=" trait_p_large">
						<p>Average Integrity</p>
					</div>
					<div class="trait_i_large">
						<input type="text">
					</div>
				</div>
				<div class="trait_container">
					<div class=" trait_p_large">
						<p>Confidence</p>
					</div>
					<div class="trait_i_large">
						<input type="text">
					</div>
				</div>
			</div>
		</div>	


	</div>
</div>	
<div class="sidebar">
	<p>Operators</p>
	<div class="op_image">
		<a href="javascript:push_operator('+','');push_operator_for_equ('','+','')"><img src="<?php echo base_url(); ?>images/math_operator/p.png" title="Addition" ></a>
		<a href="javascript:push_operator('-','');push_operator_for_equ('','-','')"><img src="<?php echo base_url(); ?>images/math_operator/m.png" title="Subtruction" ></a>
		<a href="javascript:push_operator('x','');push_operator_for_equ('','x','')"><img src="<?php echo base_url(); ?>images/math_operator/ma.png" title="Multiplication" ></a>
		<a href="javascript:push_operator('/','');push_operator_for_equ('','/','')"><img src="<?php echo base_url(); ?>images/math_operator/d.png" title="division" ></a>
<!--                
                <a href="javascript:push_operator('(','')"><img src="<?php echo base_url(); ?>images/math_operator/first_braket_s.png" ></a>
                <a href="javascript:push_operator(')','')"><img src="<?php echo base_url(); ?>images/math_operator/first_braket_e.png"  ></a>
                -->
                <a href="javascript:void(0)" onclick="pop_operator();pop_from_view();pop_operator_for_equ()"><img src="<?php echo base_url(); ?>images/math_operator/delete_operator.png" title="Delet Last" ></a>
                
	</div>
        <div style="clear: both;"></div>
       
	<div class="op_image">
            
             
                    <div class="btn_side">
                        <input type="text" id="float_value" placeholder="Numaric" style="height: 14px;width: 72px;"/>
                    </div>
                    <input type="button" value="Insert" class="btn_insert" style="float:left;" onclick="push_operator(eval($('#float_value').val()),'');push_operator_for_equ('',eval($('#float_value').val()),'')" />
	</div>
</div>
<div id="error_log_container" class="sidebar" style="top:402px;opacity: 1;display: none;">
        <p style="float: left;">Error Log</p>
        <br>
        <span style="float: left;">You have a Syntex Error at red bar bellow</span>
        <div id="error_log">
            
        </div>
	<div class="op_image">
          </div>
</div>
     <!-- [Hidden Field] Process Queue -->
        <input type="hidden" id="site_url" value="<?php echo $site_url;?>" />
        <input type="hidden" id="algo_process_queue" value="" />
        <input type="hidden" id="process_element" value="" />
        <input type="hidden" id="syntex_error_string" value="" />
        <input type="hidden" id="current_component_id" value="" />
        <input type="hidden" id="traits_value" value="" />
        
        
        
     <!-- Ends -->
  
<?php include 'footer.php' ?>

<script>
    set_postion_fixed();
    initialize_notification_bar("42%","31%");
</script>

<!-- Admin panel Extended Algorithm -->
<script type="text/javascript">
  $(document).ready(function(){
      $('.slider-bottom').animate({height:'25px'});
      // $('.slider-bottom').css('opacity', '0.3');
      $('.slider-arrow').click(function(){
            if($('.slider-bottom').css("height") == "25px") {
                    $('.slider-bottom').animate({height: "400px"}, 300);
                     $('.slider-arrow').css('backgroundPosition', '0px -30px');
                     // $('.slider-bottom').css('opacity', '1');

                } else {
                    $('.slider-bottom').animate({height: "25px"}, 300);
                     $('.slider-arrow').css('backgroundPosition', '0px -5px');
                     // $('.slider-bottom').css('opacity', '0.3');
                    }
                    return false;
                 });
  });
</script>

 <div class="slider-bottom">
			<div class="slider-arrow-container">
			<div class="slider-arrow">

			</div>
			</div>
     
			<div class="slider-content">
				<?php for($i=0;$i<sizeof($algo_variable);$i++){ 
                                        
                                        $algo_variable_id=$algo_variable[$i][0];
                                        $algo_variable_val=$algo_variable[$i][1];
                                ?>
                                        <div class="slider-content-small">
                                            <div class="slider-input">
                                                    <div class="slider-small-show" id="<?php echo $algo_variable_val; ?>" ><?php  echo $algo_variable_val; ?></div>
                                            </div>
                                            <div class="slider-input">
                                                <select id="<?php echo $algo_variable_val; ?>_modifier">
                                                    <?php $modifier_array=$algo_modifier[$algo_variable_id]; 
                                                          for($j=0;$j<sizeof($modifier_array);$j++){ 
                                                    ?>
                                                         <option value='m<?php echo $modifier_array[$j][0];?>'><?php echo $modifier_array[$j][1]; ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                            <div class="slider-btn" 
                                                 onclick="push_operator('<?php echo $algo_variable_val;?>','#<?php echo $algo_variable_val; ?>_modifier');
                                                          push_operator_for_equ('#<?php echo $algo_variable_val; ?>','id<?php echo $algo_variable_id; ?>','#<?php echo $algo_variable_val; ?>_modifier')  
                                                 ">
                                            </div>
                                         </div>
                                  <?php } ?>
			</div>
		</div>