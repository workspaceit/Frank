<?phpif(!empty($userList)):	$traitId = $trait_id;	$userSize = sizeof($userList);	$leftColSize = 0;	$rightColSize = 0;	$leftColSize = ($userSize>=15)?($userSize * 50/100):7;	$rightColSize = $userSize - $leftColSize;	$lcExecute = false;	$rcExecute = false;	$lc=1;	$rc=1;	?>	<div style="float: left;width: 50%;" >	<?php	foreach ($userList as $key=>$data):		$aggrigates = $data->aggrigate;		?>		<div class="pe_container">			<div class="pe_circle_purple">				<p class="p_multi"><?php echo $startNumber++; ?></p>			</div>			<div class="progress_extended">				<?php				$userImage =  base_url().'images/user.png';				if(!is_null($data->pic_path)) {					$userImage = base_url().'uploads/'.$data->pic_path;				}				?>				<a href="javascript:show_login_form()"><img src="<?php echo $userImage; ?>" height="50" width="50" /></a>				<div class="pe_details">					<a href="javascript:show_login_form()" style="text-decoration: none;">						<span class="pe_span_large"><?php echo $data->f_name.' '.$data->l_name; ?></span>					</a>					<span class="pe_span_small"><?php echo $data->current_location_1; ?></span>					<span class="pe_span_small"><?php echo date('m/d/Y',strtotime($data->birthday))?></span>				</div>				<div class="pe_progress_container">					<?php if($traitId > 0)					{ ?>						<div class="progressbar" style="float: right; margin: 5px 5px 0 0px;">							<!--green-->							<div class="bottom_bar"></div>							<?php							$avgPoint = $data->sub_category_avg_point;							$w = abs($avgPoint).'%';							if($avgPoint < 0) {								$cname = 'i_bar_red';							}else {								$cname = $data->color_class;							}							?>							<div class="<?php echo $cname; ?>" style="border-right: 1px solid #111; width: <?php echo $w; ?>;">								<span class="inside-middle"></span>							</div>							<div class="top_inf">								<span class="span_name"><?php echo $data->sub_category_value; ?></span><span class="span_score"><span										class="span_score"><?php echo $data->sub_category_avg_point; ?></span> </span>							</div>						</div>					<?php }else{if($traitId == -2){?>						<div class="progressbar" style="float: right; margin: 5px 5px 0 0px;">							<!--Violet-->							<div class="bottom_bar"></div>							<div class="<?php echo $aggrigates['reputationCssCls']; ?>"								 style="border-right: 1px solid #111; width: <?php echo abs($data->reputation); ?>%;">								<span class="inside-middle"></span>							</div>							<div class="top_inf">								<span class="span_name">Reputation</span><span class="span_score"><span										class="span_score"><?php echo $data->reputation; ?></span> </span>							</div>						</div>					<?php }else{?>						<div class="progressbar" style="float: right; margin: 5px 5px 0 0px;">							<!--Violet-->							<div class="bottom_bar"></div>							<div class="i_bar_o"								 style="border-right: 1px solid #111; width:<?php echo $aggrigates['popularityPercantage']; ?>%;">								<span class="inside-middle"></span>							</div>							<div class="top_inf">								<span class="span_name">Popularity</span><span class="span_score"><span										class="span_score"><?php echo $data->popularity; ?></span> </span>							</div>						</div>					<?php }}?>					<div class="progressbar" style="float: right; margin: 5px 5px 0 0px;">						<!--Violet-->						<div class="bottom_bar"></div>						<div class="i_bar_p"							 style="border-right: 1px solid #111; width: <?php echo $aggrigates['rankPercantage']; ?>%;">							<span class="inside-middle"></span>						</div>						<div class="top_inf">							<span class="span_name">Rank</span><span class="span_score"><span									class="span_score"><?php echo $data->rank; ?></span> </span>						</div>					</div>				</div>			</div>		</div>		<?php if(!$lcExecute && $lc++>=$leftColSize){ ?>		</div>		<div style="float: left;width: 50%;" >		<?php		$lcExecute = true;	}	endforeach;	?>	</div><?phpendif;?>