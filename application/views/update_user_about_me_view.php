<?php foreach($user_about_me as $rowData){ ?>
    <textarea style=" border: 1px solid #111111;
                      border-radius: 3px 3px 3px 3px;
                      height: 170px;
                      margin: -3px 0 0;
                      width: 277px;"
                      id="user_about_me_text"><?php echo $rowData->about_me; ?></textarea>
                      <input type="button" value="Submit" class="btn_search" onclick="submit_update_about_me_data()"/>
<?php }?>
<?php if(sizeof($user_about_me)==0){ ?>
     <textarea style=" border: 1px solid #111111;
                      border-radius: 3px 3px 3px 3px;
                      height: 170px;
                      margin: -3px 0 0;
                      width: 277px;"
                      id="user_about_me_text"></textarea>
                      <input type="button" class="btn_search" value="Submit" />
<?php } ?>