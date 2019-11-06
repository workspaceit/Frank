<div class="message_temp_extended">
			<p><?php echo $title;?></p>
                        <input type="hidden" id="type" value="<?php echo $suffix; ?>" />
                 <?php 
                    $i=0;
                    foreach($details as $rowData){ ?> 
                        
                        <div id="details_text_content">
                            <textarea id="details">
                                    <?php echo $rowData->details; ?>
                            </textarea>
                        </div>
                <?php $i++;}
                    if($i==0){
                ?>
                         <div id="details_text_content">
                            <textarea id="details"></textarea>
                        </div>
                    <?php }?>
</div>
<div class="btn_message_cancel">
	<a href="javascript:cancel_submit_update_mail_template_by_type()"><span>Cancel</span></a>
</div>
<div class="btn_message_update">
	<a href="javascript:update_site_static_page('<?php echo $suffix; ?>')"><span>Update</span></a>
</div>
                        
                        <script>
//                    $('#details_text_content').css('background-color','white');
//$('#details_text_content').css('height','367px');
//$('#details_text_content').css('margin','62px 58px 7px');
//$('#details_text_content').css('width','806px'); 
//$('iframe').css("height","337px");
//$('iframe').css("width","337px");
                    </script>