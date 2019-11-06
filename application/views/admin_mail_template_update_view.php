<div  class="message_temp_extended">
			<p>Subject</p>
                        <input type="hidden" id="type" value="<?php echo $mail_type; ?>" />
                <?php foreach($mail_template_data as $rowData){ ?> 
                         <input id="subject" type="text" value="<?php echo $rowData->subject; ?>"><br>
                         <div id="details_text_content" >      
                            <textarea id="message">
                                    <?php echo $rowData->message; ?>
                            </textarea>
                        </div>
                        <?php if($mail_type=="sign_up"){ ?>
                            <div class="btn_message_cancel">
                                    <a href="javascript:void(0)" onclick="set_text('[_activation_code_]')" ><span>Activation Code</span></a>
                            </div>
                        <?php } ?>
                        <div class="btn_message_cancel">
                                <a href="javascript:void(0)" onclick="set_text('[_recipient_name_]')" ><span>Recipient Name</span></a>
                        </div>
                        <div class="btn_message_cancel">
                                <a href="javascript:void(0)"  onclick="set_text('[_recipient_email_]')" ><span>Recipient Email</span></a>
                        </div>
                         <div class="btn_message_cancel">
                                <a href="javascript:void(0)"  onclick="set_text('[_sender_name_]')" ><span>Sender Name</span></a>
                        </div>
                        <div class="btn_message_cancel">
                                <a href="javascript:void(0)"  onclick="set_text('[_sender_email_]')" ><span>Sender Email</span></a>
                        </div>
                <?php }?>
</div>

<div class="btn_message_cancel">
	<a href="javascript:cancel_submit_update_mail_template_by_type()"><span>Cancel</span></a>
</div>
<div class="btn_message_update">
	<a href="javascript:submit_update_mail_template_by_type()"><span>Update</span></a>
</div>