<div class="top_best_sub" style="margin-left: 45px;">	<div class="heading">		<span class="head_large_span">Highest Traited</span>	</div>	<?php if(!empty($highestTraitMember)):?>	<?php		$userImage =  base_url().'images/user.png';		if(isset($highestTraitMember[0]->pic_path) && !empty($highestTraitMember[0]->pic_path)) {			$userImage = base_url().'uploads/'.$highestTraitMember[0]->pic_path;		}		$w = 0;		$avgPoint = $highestTraitMember[0]->sub_category_avg_point;		$w = abs($avgPoint).'%';		if($avgPoint < 0) {			$cname = 'i_bar_red';		}else {			$cname = $highestTraitMember[0]->color_class;		}	?>	<div class="personality">		<input type="hidden" name="user_id" value="<?php echo $encryptObj->get_encrypted_code($highestTraitMember[0]->u_id); ?>">		<a style="text-decoration: none;" href="<?php echo base_url().'profile/view/'.$highestTraitMember[0]->u_id;?>">			<img src="<?php echo $userImage; ?>" height="100" width="70" />		</a>		<div class="personality_info">			<a style="text-decoration: none;" href="<?php echo base_url().'profile/view/'.$highestTraitMember[0]->u_id;?>">				<span class="plarge_span"><?php echo str_truncate_words($highestTraitMember[0]->f_name.' '.$highestTraitMember[0]->l_name, 8); ?></span>			</a>			<span class="psmall_span"><?php echo $highestTraitMember[0]->current_location_1; ?> &nbsp; <?php echo date('m/d/Y',strtotime($highestTraitMember[0]->birthday));?></span>			<div class="progressbar">				<!--Violet-->				<div class="bottom_bar"></div>				<?php					$userAggrigates = $c_Aggrigates_obj->getAggrigatesInPercentages($highestTraitMember[0]->u_id);				?>				<div class="i_bar_p"					style="border-right: 1px solid #111; width: <?php echo $userAggrigates['rankPercantage']; ?>%;">					<span class="inside-middle"></span>				</div>				<div class="top_inf">					<span class="span_name">Rank </span><span class="span_score"><span						class="span_score"><?php echo $highestTraitMember[0]->rank; ?></span> </span>				</div>			</div>			<div class="progressbar">				<!--green-->				<div class="bottom_bar"></div>				<div class="<?php echo $cname; ?>" style="border-right: 1px solid #111; width: <?php echo $w; ?>;">					<span class="inside-middle"></span>				</div>				<div class="top_inf">					<span class="span_name"><?php echo $highestTraitMember[0]->sub_category_value; ?></span>					<span class="span_score">						<span class="span_score"><?php echo $avgPoint; ?></span> 					</span>				</div>			</div>		</div>	</div>	<div class="pe_button_container"		style="width: 260px; margin-top: 7px;">		<button class="pe_btn" style="margin-left: 20px;"  onclick="add_to_favourite(this,'<?php echo $highestTraitMember[0]->u_email;?>')">			<span>Add Favourites</span>		</button>		<button class="pe_btn"  onclick="redirectForNewGossip(<?php echo $highestTraitMember[0]->u_id;?>)" >			<span>New Gossip</span>		</button>	</div>	<?php endif;?></div>