 <select style="width:25%" name="day" id="get_birthday_day">
					
						<?php
							
							foreach ($date_name_all as $rowdata){
							
							if ($day==$rowdata->name){
						?>
	                    		 <option selected="selected" value="<?php echo $rowdata->name;?>"><?php echo $rowdata->name;?></option>
	                      <?php } else {?>
	                      		<option value="<?php echo $rowdata->name;?>"><?php echo $rowdata->name;?></option>
	                        <?php }
	                      }?>
 </select>       
	                                        
 <select style="width:25%" name="month" id="get_birthday_month">
	                                                              
	 	
	 	<?php foreach ($month_data_all as $rowdata){?>
	      <?php if($month==$rowdata->id){?>
	        <option selected="selected" value="<?php echo $rowdata->id;?>"><?php echo $rowdata->id;?></option>
	      <?php } else{ ?>
	      	<option  value="<?php echo $rowdata->id;?>"><?php echo $rowdata->id;?></option>
		  <?php }
	    }?>
	</select>                                         
<select style="width:25%" name="year" id="get_birthday_year">
		
		    <?php foreach ($year_name_all as $rowdata){
		         	if(intval($year)==intval($rowdata->name))
		           	{
		     	?>
		  			 <option selected="selected" value="<?php echo $rowdata->name;?>"><?php echo $rowdata->name;?></option>
		 <?php }else {?>
					<option value="<?php echo $rowdata->name;?>"><?php echo $rowdata->name;?></option>
		  <?php }
		   }?>
  </select> 
<a href="javascript:submit_update_birthday('get_birthday','birthday')" 
              ><img style="width:8%" src="<?php echo base_url().'images/done.png';?>"/></a>