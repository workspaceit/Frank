<?php 
    foreach ($higher_education as $rowData){
        ?>
            <input type="text" id="get_higher_education_higher_education_1" style="width:30%" value="<?php echo $rowData->higher_education_1; ?>" />
            <input type="text" id="get_higher_education_higher_education_2" style="width:30%" value="<?php echo $rowData->higher_education_2; ?>" />
        <?php
    }
?>
 <a href="javascript:submit_update_data_of_user_profile_data('get_higher_education','higher_education_1','higher_education_2')" 
              ><img style="width:12%" src="<?php echo base_url().'images/done.png';?>"/></a>