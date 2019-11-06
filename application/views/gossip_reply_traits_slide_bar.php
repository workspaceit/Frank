<?php if(false){ /* Not Required */?>
<?php for($i=0;$i<sizeof($trait_data);$i++){ ?>
    <?php foreach($trait_data[$i] as $rowData){ ?>
        <div class="mg_container3" style="display:none;">
                <div class="range_container">
                    <div class="progress_container">
                        <div class="progressbar" style="margin: 7px 0 2px 10px;"><!--Yellow-->
                            <div class="bottom_bar"></div>
                            <div  class="i_bar_y" style="border-right:1px solid #111;width:0%;"><span class="inside-middle"></span></div>
                            <div class="top_inf"><span class="span_name"><?php echo $rowData->sub_category; ?></span><span class="span_score"></span></div>
                        </div>
                    </div>
                    <?php if($rowData->lower_pic_path!=""){ ?>
                        <div class="range_pic1"><img src="<?php echo base_url().'uploads/'.$rowData->lower_pic_path; ?>" /></div>
                    <?php }else{ ?>
                        <div class="range_pic1">-100</div> 
                    <?php } ?>
                    <div class="range_bar">
                        <div style="margin:1px 0 0 0" class="label_div"><label>Question:</label><div class="range_qa" style="height:17px;"></div></div>
                        <div  style="margin: 35px 0px 0px;">
                                <div class="slider-range-min" >
                                    <a class="sliding_point ui-slider-handle ui-state-default ui-corner-all"
                                       style="min-width:17px; width: auto;font-size: 10px;text-decoration: none;line-height:18px;text-align: center;" 
                                       href="javascript:void(0)"
                                       onmouseup="gossip_reply_trait_point(this)"
                                       style="left: 12.15%;">
                                        
                                    </a>
                                </div>
                        </div>
                        <div  style="margin:8px 0 0 0;">
<!--                            <div class="slider-range-min ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all">
                                <div class="ui-slider-range ui-widget-header ui-corner-all ui-slider-range-min" style="width: 5.15021%;"></div>
                                <a class="sliding_point_fake ui-slider-handle ui-state-default ui-corner-all" style="display:none; min-width:17px;width: auto;font-size: 10px;text-decoration: none;line-height:18px;text-align: center; "href="javascript:void(0)" style="left: 12.15%;"></a>
                            </div>-->
                        </div>
                        <div class="label_div" style="margin:3px 0 0 0;"><label>Answer:</label><div class="range_qa" style="height:17px;"></div></div>
                    </div>
                     <?php if($rowData->upper_pic_path!=""){ ?>
                         <div class="range_pic1"><img src="<?php echo base_url().'uploads/'.$rowData->upper_pic_path; ?>" /></div>
                    <?php }else{ ?>
                         <div class="range_pic1">-100</div>
                    <?php } ?>
                </div>
                <div class="trait_category_inf">
                    <input class="trait_category_id" type="hidden" value="<?php echo $encrypt_tbl_primary_key_obj->get_encrypted_code($rowData->id); ?>"/>
                    <input class="sub_category" type="hidden" value="<?php echo $rowData->sub_category; ?>" />

                </div>
            </div>
    <?php } ?>
<?php } ?>
<?php } ?>
<?php if(sizeof($trait_data>1)){ ?>
    <div class="mg_container3">
        <a href="javascript:void(0)" onclick="<?php echo $submit_action; ?>" >
            <input type="hidden" value="<?php echo $encrypt_tbl_primary_key_obj->get_encrypted_code($id); ?>" />
            <input type="hidden" value="<?php echo $encrypt_tbl_primary_key_obj->get_encrypted_code($gossip_id); ?>" />

            <div class="btn_s_gossip" style="margin: 8px 0 36px 393px;" >Submit Reply</div>
            <div>

            </div>
        </a>
        <a href="javascript:void(0)" onclick="cancel_gossip_reply(this)" style="float:left;">
            <div class="btn_s_gossip" style="margin: 8px 0 36px 393px;" >Cancel</div>
            <div>

            </div>
        </a>
    </div>          
<?php } ?>