<?php 
    foreach ($home_town as $rowData){
        ?>
            <input type="text" id="get_home_town_home_town_1" style="width:30%" value="<?php echo $rowData->home_town_1; ?>" />
            <input type="text" id="get_home_town_home_town_2" style="width:30%" value="<?php echo $rowData->home_town_2; ?>" />
        <?php
    }
?>
<a href="javascript:submit_update_data_of_user_profile_data('get_home_town','home_town_1','home_town_2')" 
              ><img style="width:12%" src="<?php echo base_url().'images/done.png';?>"/></a>