<div class="as_sr" style="margin-left: 40px;">    <span style="margin:0;">Search Results</span><span>(<?php echo sizeof($search_data); ?>)</span></div><div id="search_user_list" class="as_middle_s">	<form action="#" name="form_search_user" id="form_search_user"><?php    $z=1;    if (sizeof($search_data)>0){        foreach($search_data as $rowData){			$w = 0;			$avgPoint = $rowData->sub_category_avg_point;			$w = abs($avgPoint).'%';			if($avgPoint < 0) {				$cname = 'i_bar_red';			}else {				$cname = $rowData->color_class;			} ?>        <div class="as_sr_container" id="li_<?php echo $z.$rowData->u_id.$rowData->sub_category_value;?>">        	<input class="hidden_user_id" type="hidden" name="user_id[]" value="<?php echo $encryptObj->get_encrypted_code($rowData->u_id);?>">            <div class="pe_circle_purple">                    <p class="p_multi"><?php echo $z; ?></p>            </div>            <div class="as_sr_progress">            <?php if($rowData->pic_path!=""){ ?>            	<img src="<?php echo base_url().'uploads/'.$rowData->pic_path; ?>" height="45" width="40">            <?php }else{ ?>            	<img src="<?php echo base_url().'images/user.png'; ?>" height="45" width="40">            <?php } ?>            	<span class="as_l_span">                    <a href="<?php echo base_url()."profile/view/".$rowData->u_id; ?>"><?php echo str_truncate_words($rowData->f_name." ". $rowData->l_name, 13);?></a>                </span>            	<span class="as_s_span"><?php echo $rowData->current_location_1;?></span>            	<br>            	<span class="as_s_para"><?php echo date('m/d/Y',strtotime($rowData->birthday));?></span>                <div class="progressbar" style="float:right;margin:5px 5px 0 0px;"><!--green-->                	<div class="bottom_bar"></div>                    <?php if($searchTraitId>=0){ ?>                        <div class="<?php echo $cname;?>" style="border-right:1px solid #111;width:<?php echo $w;?>;">                            <span class="inside-middle"></span>                        </div>                        <div class="top_inf"><span class="span_name"><?php echo $rowData->sub_category_value; ?></span><span class="span_score"><?php echo $avgPoint; ?></span></div>                    <?php }else{                        $aggrigates = $c_Aggrigates_obj->getAggrigatesInPercentages($rowData->u_id);                        $aggrigateHtmlVal =array();                        switch($searchTraitId){                            case -1;                                $aggrigateHtmlVal['name'] = "Rank";                                $aggrigateHtmlVal['score'] = $aggrigates['aggrigates']->rank;                                $aggrigateHtmlVal['percentage'] = $aggrigates['rankPercantage'];                                $cname = "i_bar_p";                                break;                            case -2;                                $aggrigateHtmlVal['name']  = "Reputation";                                $aggrigateHtmlVal['score'] = $aggrigates['aggrigates']->reputation;                                $aggrigateHtmlVal['percentage'] = $aggrigates['aggrigates']->reputation; // Progress For reputation is score                                $cname=( $aggrigates['aggrigates']->reputation<0)?"i_bar_red":"i_bar_pink";                                break;                            case -3;                                $aggrigateHtmlVal['name'] = "Popularity";                                $aggrigateHtmlVal['score'] = $aggrigates['aggrigates']->popularity;                                $aggrigateHtmlVal['percentage'] = $aggrigates['popularityPercantage'];                                $cname = "i_bar_o";                                break;                        }                        ?>                        <div class="<?php echo $cname;?>" style="border-right:1px solid #111;width:<?php echo abs($aggrigateHtmlVal['percentage']);?>%;">                            <span class="inside-middle"></span>                        </div>                        <div class="top_inf"><span class="span_name"><?php echo $aggrigateHtmlVal['name']; ?></span><span class="span_score"><?php echo $aggrigateHtmlVal['score']; ?></span></div>                    <?php } ?>                </div>            </div>            <div class="as_circle_plus user_select">                  <input style="display:none;" name="selected_user_id" type="checkbox" value="<?php echo $encryptObj->get_encrypted_code($rowData->u_id);?>" />            </div>        </div>    <?php               $z++;        }     }else{ ?>          <div class="as_sr">                <span style="margin:0;">  No Result Found</span>            </div>           <?php } ?>   </form></div>