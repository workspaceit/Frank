<img src="<?php echo base_url().'uploads/'.$userData[0]->pic_path; ?>" height="50" width="50" /><div class="pe_details">	<span class="pe_span_large"><?php echo $userData[0]->f_name .' '.$userData[0]->l_name?></span>	<span class="pe_span_small"><?php echo $userData[0]->current_location_1;?></span>	<span class="pe_span_small"><?php echo date('m/d/Y',strtotime($userData[0]->birthday))?></span></div><div class="pe_progress_container">	<div class="progressbar" style="float: right; margin: 5px 5px 0 0px;">		<!--Violet-->		<div class="bottom_bar"></div>		<div class="i_bar_p" style="border-right: 1px solid #111; width: 70%;">			<span class="inside-middle"></span>		</div>		<div class="top_inf">			<span class="span_name">Rank</span>			<span class="span_score"><span class="span_score"><?php echo $userData[0]->rank; ?></span> </span>		</div>	</div>	<?php		$avgPoint = $userData[0]->sub_category_avg_point;		$w = abs($avgPoint).'%';		if($avgPoint < 0) {			$cname = 'i_bar_red';		}else {			//$cname = $userData[0]->color_class;			$cname = 'i_bar_g';		}	?>	<div class="progressbar" style="float: right; margin: 5px 5px 0 0px;">		<!--green-->		<div class="bottom_bar"></div>		<div class="<?php echo $cname; ?>" style="border-right: 1px solid #111; width: <?php echo $w;?>;">			<span class="inside-middle"></span>		</div>		<div class="top_inf">			<span class="span_name"><?php echo $userData[0]->sub_category_value; ?></span><span class="span_score">			<span class="span_score"><?php echo $avgPoint; ?></span> </span>		</div>	</div></div>