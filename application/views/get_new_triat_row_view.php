<div style="margin: 7px 0 2px 10px;float:left;" class="progressbar"><!--Blue-->
    <div class="bottom_bar"></div>
    <div id="traits_progress_bar_<?php echo $trait_dynamic_id; ?>" style="border-right:1px solid #111;width:0%;" class="i_bar_s" ><span class="inside-middle"></span></div>
    <div class="top_inf"><span class="span_name"><?php echo $trait_sub_category; ?></span><span class="span_score"><span class="triat_point_dummy span_score"></span></span></div>
</div>
<a href="javascript:void(0)">
    <div class="plus plus_inactive">
        <input type="hidden" value="<?php echo $trait_dynamic_id; ?>"> <!-- Dynamic Id -->
        <input type="hidden" value="<?php echo $trait_categories_id; ?>"> <!-- Trait Category Id -->
    </div>
</a>