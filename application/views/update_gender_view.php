<select  name="get_gender_gender" id="get_gender_gender">
         <?php 
         	$i=0;
            
          foreach ($user_all_gender as $rowData){
               
           if ($i==0 && $rowData->id==$gender){
           		$i++;
         	?>
       		<option selected="selected" value="<?php echo $rowData->id; ?>"><?php echo $rowData->value; ?></option>
       
       		 <?php }else { ?>
		    	<option  value="<?php echo $rowData->value; ?>"><?php echo $rowData->value; ?></option>
	    	<?php }
	     }?> 
</select>
 <a href="javascript:submit_update_data_of_user_basic_info('get_gender','gender')" 
              ><img style="width:8%" src="<?php echo base_url().'images/done.png';?>"/></a>