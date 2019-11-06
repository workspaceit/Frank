<?php include 'admin_header.php' ?>
<script type="text/javascript" src="<?php echo base_url(); ?>jQuery/jHtml/scripts/jquery-ui-1.7.2.custom.min.js"></script>
<link rel="Stylesheet" type="text/css" href="<?php echo base_url(); ?>jQuery/jHtml/style/jqueryui/ui-lightness/jquery-ui-1.7.2.custom.css" />
<script type="text/javascript" src="<?php echo base_url(); ?>jQuery/jHtml/scripts/jHtmlArea-0.7.5.js"></script>
<link rel="Stylesheet" type="text/css" href="<?php echo base_url(); ?>jQuery/jHtml/style/jHtmlArea.css" />
<script>
    function set_text(element_text){
        var body_html=$('#details_text_content').find("iframe")[0].contentWindow.document.body;
        $(body_html).append(element_text);
        $('#message').append(element_text);
    }
    </script>
<script>
     function richTextArea(id){

     // You can do this to perform a global override of any of the "default" options
     // jHtmlArea.fn.defaultOptions.css = "jHtmlArea.Editor.css";

        $(function() {
            //$("textarea").htmlarea(); // Initialize all TextArea's as jHtmlArea's with default values

            $(id).htmlarea(); // Initialize jHtmlArea's with all default values

            $(id).htmlarea({
                // Override/Specify the Toolbar buttons to show
                toolbar: [
                    ["bold", "italic", "underline", "|", "forecolor"],
                    ["p", "h1", "h2", "h3", "h4", "h5", "h6"],
                    [{
                        // This is how to add a completely custom Toolbar Button
                        css: "custom_disk_button",
                        text: "Save",
                        action: function(btn) {
                            // 'this' = jHtmlArea object
                            // 'btn' = jQuery object that represents the <A> "anchor" tag for the Toolbar Button
                            alert('SAVE!\n\n' + this.toHtmlString());
                        }
                    }]
                ],

                // Override any of the toolbarText values - these are the Alt Text / Tooltips shown
                // when the user hovers the mouse over the Toolbar Buttons
                // Here are a couple translated to German, thanks to Google Translate.
                toolbarText: $.extend({}, jHtmlArea.defaultOptions.toolbarText, {
                        "bold": "fett",
                        "italic": "kursiv",
                        "underline": "unterstreichen"
                    }),

                // Specify a specific CSS file to use for the Editor
                css: "style//jHtmlArea.Editor.css",

                // Do something once the editor has finished loading
                loaded: function() {
                    //// 'this' is equal to the jHtmlArea object
                    //alert("jHtmlArea has loaded!");
                    //this.showHTMLView(); // show the HTML view once the editor has finished loading
                }
            });
        });

   }
   function load_subject_and_message_By_type(mail_type){
        load_notification_bar('Loading Content');
        set_effect_on_content("message_template_div");
        $('#update_mail_content_view').fadeOut(500,function(){
            $.ajax({
                    type:"post",
                    data:{mail_type:mail_type},
                    url:$('#site_url').val()+"mail_template/get_subject_and_message_by_type",
                    success:function(data){
                        hide_notification_bar();
                        set_defult_effect_on_content("message_template_div");
                        
                        $('#update_mail_content_view').html(data);
                        richTextArea("#message");
                        $('#details_text_content').css('background-color','white');
                        $('#details_text_content').css('height','367px');
                        $('#details_text_content').css('margin','60px 32px 7px');
                        $('#details_text_content').css('width','779px'); 
                        $('iframe').css("height","300px");
                        $('iframe').css("width","711px");
                        $('iframe').css("margin","6px 18px 1px");
                        $('iframe').css("padding","6px 14px 3px");
                        $('#update_mail_content_view').fadeIn(500,function(){
                            $('#message').focus();
                        });
                    }
            });
        });
    }
    function  submit_update_mail_template_by_type(){
        var subject=$('#subject').attr("value");
        var message=$('#message').attr("value");
        var type=$('#type').attr("value");
        $.ajax({
                type:"post",
                data:{
                    subject:subject,
                    message:message,
                    type:type
                },
                url:$('#site_url').val()+"mail_template/submit_update_mail_template_by_type",
                success:function(data){
                    var resp=data.split(';');
                    if(resp[1]="True"){
                        $('#update_mail_content_view').fadeOut(500,function(){
                                $('#update_mail_content_view').css("background","yellow");
                                $('#update_mail_content_view').css("color","black");
                                $('#update_mail_content_view').css("text-align","center");
                                $('#update_mail_content_view').html(resp[2]);
                                $('#update_mail_content_view').fadeIn(500).delay(2000).fadeOut(500,
                                    function(){
                                            $('#update_mail_content_view').html("");
                                            $('#update_mail_content_view').css("background","white");
                                            $('#update_mail_content_view').css("color","white");
                                            $('#update_mail_content_view').css("text-align","");
                                    }
                                );
                            });
                        
                    }else if(resp[1]="False"){
                         $('#update_mail_content_view').fadeOut(500,function(){
                                $('#update_mail_content_view').css("background","yellow");
                                $('#update_mail_content_view').html(resp[2]);
                                $('#update_mail_content_view').fadeIn(500).delay(2000).fadeOut(500,
                                    function(){
                                            $('#update_mail_content_view').html("");
                                    }
                                );
                            });
                    }
                   
                }
        });
    }
    function cancel_submit_update_mail_template_by_type(){
        $('#update_mail_content_view').fadeOut(500,function(){
           $('#update_mail_content_view').html(""); 
          $('#signup_div').focus();
        });
    }
</script>
<?php include 'admin_dashboard.php' ?>

<div class="admin_panel">
	<?php include 'top_container.php' ?>
    <div class="infoBar" style="height:20px;"><p>Admin Page</p></div>
	<div class="admin_container">
		<div  id="message_template_div" class="criteria">
			<div class="head_div">
				<p class="head_div_desc">Message Templates</p>
			</div>
			<div id="signup_div" class="message_temp">
				<p>1.</p>
				<p>Signup Email</p>
				<a href="javascript:load_subject_and_message_By_type('sign_up')"><div class="btn_message_edit">
						<span>Edit</span>
				</div></a>
			</div>
			<div class="message_temp">
				<p>2.</p>
				<p>Forgot Email</p>
				<a href="javascript:load_subject_and_message_By_type('forgot_email')"><div class="btn_message_edit">
					<span>Edit</span>
				</div></a>
			</div>
			<div class="message_temp">
				<p>3.</p>
				<p>Invite a friend</p>
				<a href="javascript:load_subject_and_message_By_type('invite_a_friend')"><div class="btn_message_edit">
					<span>Edit</span>
				</div></a>
			</div>
			<div class="message_temp">
				<p>4.</p>
				<p>Gossip received</p>
				 <a href="javascript:load_subject_and_message_By_type('gossip_received')"><div class="btn_message_edit">
                                   <span>Edit</span>
				</div></a>
			</div>
			<div class="message_temp">
				<p>5.</p>
				<p>Favourite gossiped about</p>
				<a href="javascript:load_subject_and_message_By_type('favourite_gossiped_about')"><div class="btn_message_edit">
                                    <span>Edit</span>
				</div></a>
			</div>
			<div class="message_temp">
				<p>6.</p>
				<p>Maintainace Mode page</p>
				<a href="javascript:load_subject_and_message_By_type('maintainace_mode_page')"><div class="btn_message_edit">
                                    <span>Edit</span>
			</div></a>
                                </div>

		</div><br><br><br>

		<div id="update_mail_content_view">
                </div>
			


	</div>
</div>	
<?php include 'footer.php' ?>
<!-- Hidden Tags [Starts]-->
<input type="hidden" id="site_url" value="<?php echo $site_url; ?>"
<!-- Hidden Tags [Ends]-->
<script>
    set_postion_fixed();
    initialize_notification_bar("42%","31%");
</script>