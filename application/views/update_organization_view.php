<?php 
    foreach ($organization as $rowData){
        ?>
            <input type="text" id="get_organization_organization_1" style="width:30%" value="<?php echo $rowData->organization_1; ?>" />
            <input type="text" id="get_organization_organization_2" style="width:30%" value="<?php echo $rowData->organization_2; ?>" />
        <?php
    }
?>
<a href="javascript:submit_update_data_of_user_profile_data('get_organization','organization_1','organization_2')" 
              ><img style="width:12%" src="<?php echo base_url().'images/done.png';?>"/></a>