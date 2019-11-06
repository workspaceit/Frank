<?php 
    foreach ($location as $rowData){
        ?>
            <input type="text" id="get_location_current_location_1" style="width:30%" value="<?php echo $rowData->current_location_1; ?>" />
            <input type="text" id="get_location_current_location_2" style="width:30%" value="<?php echo $rowData->current_location_2; ?>" />
        <?php
    }
   
?> 
            <a href="javascript:submit_update_data_of_user_profile_data('get_location','current_location_1','current_location_2')" 
              ><img style="width:12%" src="<?php echo base_url().'images/done.png';?>"/></a>