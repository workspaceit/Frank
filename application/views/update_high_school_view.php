<?php 
    foreach ($high_school as $rowData){
        ?>
            <input type="text" id="get_high_school_high_school" style="width:60%" value="<?php echo $rowData->high_school; ?>" />
            <input type="hidden" id="get_high_school_high_school_1"  value="" />
        <?php
    }
?>
<a href="javascript:submit_update_data_of_user_profile_data('get_high_school','high_school','high_school_1')" 
              ><img style="width:12%" src="<?php echo base_url().'images/done.png';?>"/></a>