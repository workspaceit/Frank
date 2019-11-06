
<form>
    <?php foreach($basic_info_all as $rowData){ ?>
	<div class="a_form_left">
		<div class="a_form_all">
                    <p>First Name:</p>
			<input type="text" value="<?php echo $rowData->f_name;?>" name="f_name" id="f_name">
										
		</div>
                <div class="a_form_all">
                        <p>Last Name:</p>
                        <input type="text"  value="<?php echo $rowData->l_name;?>" name="l_name" id="l_name">
                </div>
                <div class="a_form_all">
                    <p>Gender:</p>
                    <select class="a_select_large" name="gender" id="gender">
                            <?php 
                                 
                                  foreach ($user_all_gender as $gender_rowdata){
                                     
                                       if ($gender_rowdata->id==$rowData->gender){
                            ?> 
                                            <option value="<?php echo $gender_rowdata->id;?>" selected ><?php echo $gender_rowdata->value; ?></option>
                                 <?php }else {?>
                                             <option  value="<?php echo $gender_rowdata->id; ?>"><?php echo $gender_rowdata->value; ?></option>
                                     <?php }
                                   }?> 
                     </select>
                </div>
                <div class="a_form_all">
                    <p>Birthday:</p>
                    <div style="float:right;margin:0 10px 0 0;">
                        <select class="a_select_small" name="year" id="year">
                                 <?php
                                    $dob_year='';
                                    foreach ($year_name as $rowData)
                                    {
                                        $dob_year=$rowData->name;
                                    }
                                 ?>
                             <?php foreach ($year_name_all as $rowdata){
                                 if($dob_year==$rowdata->name){
                            ?>
                            <option selected="selected" value="<?php echo $rowdata->name;?>"><?php echo $rowdata->name;?></option>
	                   <?php }else {?>
                                <option value="<?php echo $rowdata->name;?>"><?php echo $rowdata->name;?></option>
	                   <?php }
	                   }?>
	                </select> 
                       
                        <select class="a_select_small" name="month" id="month">
                            <?php 
                            $dob_month='';
                            foreach ($month_data_all as $rowData){
                                $dob_month=$rowData->name;
                                
                             } ?>
                            <?php foreach ($date_name_all as $rowdata){?>
                                <?php if($dob_month==$rowdata->name){?>
                            <option selected="selected" value="<?php echo $rowdata->id;?>"><?php echo $rowdata->name;?></option>
	                   <?php } else{ ?>
                            <option  value="<?php echo $rowdata->id;?>"><?php echo $rowdata->name;?></option>
	                   <?php }
                                }?>
	                 </select>  	
                        
                         <select  class="a_select_small" name="day" id="day">
                            <?php
                                $dob_day='';
                                foreach ($day_name as $rowData){
                                    $dob_day=$rowData->name;
                                }
                            ?>
                            <?php foreach ($day_name_all as $day_name_all_rowdata){
                                if ($dob_day==$day_name_all_rowdata->name){
                             ?>
                                    <option selected="selected" value="<?php echo $day_name_all_rowdata->name;?>"><?php echo $day_name_all_rowdata->name;?></option>
	                             <?php } else {?>
	                             <option value="<?php echo $day_name_all_rowdata->name;?>"><?php echo $day_name_all_rowdata->name;?></option>
	                         <?php }
	                      }?>
                        </select>   
                        
                    </div>
                </div>
                <div class="a_form_all">
                        <p>Email:</p>
                        <?php foreach ($user_login_all as $user_login_all_rowData){ ?>
                            <input type="text" value="<?php echo $user_login_all_rowData->u_email; ?>" id="u_email" name="u_email" />
                        <?php } ?>
                </div>
                <div class="a_form_all">
                    <p>Password:</p>
                     <?php foreach ($user_login_all as $user_login_all_rowData){ ?>
                        <input type="text" value="<?php echo $user_login_all_rowData->password; ?>" id="password" name="password" />
                    <?php }?>
                </div>
	</div>
    <?php }?>
    <?php foreach($user_profile_data_all as $rowData){ ?>
	<div class="a_form_right">
            <div class="a_form_all">
                <p>Current Location 1:</p>
		<input class="reg_input_small" type="text" value="<?php echo $rowData->current_location_1;?>" name="current_location_1" id="current_location_1" />								
            </div>
            <div class="a_form_all">
                <p>Current Location 2:</p>
                <input class="reg_input_small" type="text" value="<?php echo $rowData->current_location_2;?>" name="current_location_2" id="current_location_2" />
            </div>								
            <div class="a_form_all">
                <p>Home town 1:</p>
		<input class="reg_input_small" type="text" value="<?php echo $rowData->home_town_1;?>" name="home_town_1" id="home_town_1" />
            </div>
            <div class="a_form_all">
                <p>Home town 2:</p>
		<input class="reg_input_small" type="text" value="<?php echo $rowData->home_town_2;?>" name="home_town_2" id="home_town_2" />
	    </div>
            <div class="a_form_all">
            	<p>Organization1:</p>
            	<input  type="text" value="<?php echo $rowData->organization_1;?>" name="organization_1" id="organization_1" />
             </div>
            <div class="a_form_all">
            	<p>Organization2:</p>
                <input  type="text" value="<?php echo $rowData->organization_2;?>" name="organization_2" id="organization_2" />
            </div>
            <div class="a_form_all">
		<p>High School:</p>
		<input  type="text" value="<?php echo $rowData->high_school;?>" name="high_school" id="high_school" />
             </div>
            <div class="a_form_all">
		<p>Higher Education 1:</p>
		<input  type="text" value="<?php echo $rowData->higher_education_1;?>" name="higher_education_1" id="higher_education_1"  />
            </div>
            <div class="a_form_all">
		<p>Higher Education 2:</p>
		<input  type="text" value="<?php echo $rowData->higher_education_2?>" name="higher_education_2" id="higher_education_2"/>
            </div>
            <div class="a_form_all">
		<p>Work Place 1:</p>
            	<input  type="text" value="<?php echo $rowData->workplace_1;?>" name="workplace_1" id="workplace_1" />
            </div>
            <div class="a_form_all">
            	<p>Work Place 2:</p>
		<input  type="text" value="<?php echo $rowData->workplace_2;?>" name="workplace_2" id="workplace_2" />
             </div>
        </div>
   <?php }?>
     <?php foreach ($user_login_all as $user_login_all_rowData){ ?>
            <div class="btn_save_edit">
                <a id="save_edit_btn" href="javascript:submit_update_basic_info('<?php echo $prefix;?>')"><span>Save Edit</span></a>
            </div>
    <?php } ?>
        
</form>
