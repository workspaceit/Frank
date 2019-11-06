<?php 
    foreach ($workplace as $rowData){
        ?>
            <input type="text" id="get_workplace_workplace_1" style="width:30%" value="<?php echo $rowData->workplace_1; ?>" />
            <input type="text" id="get_workplace_workplace_2" style="width:30%" value="<?php echo $rowData->workplace_2; ?>" />
        <?php
    }
?>
<a href="javascript:submit_update_data_of_user_profile_data('get_workplace','workplace_1','workplace_2')" 
              ><img style="width:12%" src="<?php echo base_url().'images/done.png';?>"/></a>