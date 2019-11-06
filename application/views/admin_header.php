<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html style="display:none;"><meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
				<title>Frank</title>
				<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css">
				<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/form.css">
				<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/admin.css">
				<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.0/themes/base/jquery-ui.css" />
                <script type="text/javascript" src="<?php echo base_url(); ?>jQuery/jquery-1.8.2.js"></script>
				<script src="http://code.jquery.com/ui/1.10.0/jquery-ui.js"></script>
									
				<!--[if  ie 9]>
				<style type="text/css" media="screen">
					    .round-gradient-box,.round_div_purple_top,.round_span,.spec_circle_red,
					    .spec_circle_sky,.spec_circle_purple,.pe_circle_purple,.pe_circle_red
					    ,.pe_circle_orange,.pe_circle_sky,.pe_circle_green,.pe_circle_blue,.pe_circle_yellow
					    {
					        filter: none;
					    }
					    body
					    {
					        filter: none;
					    }
				</style>
				<![endif]-->
				<script type="text/javascript">
					$(window).bind('resize', function(){

						 if ($(window).width() < 1080) {
						       $('#right').hide();
						   	$('#left').hide();
						  }
						  if ($(window).width()> 1080) {
						  	$('#right').show();
						  	$('#left').show();
						  };
						});
                                                
                                           $(document).ready(function(){
                                                $('html').fadeIn(1000,function(){
                                                    $('body').fadeIn(500,function(){});
                                                });
                                           });
				</script>

		<div id="top">
                    
			<div class="logo_div">
				<img src="<?php echo base_url(); ?>images/logo.png" width="290" height="140">
			</div>
                    <?php if($sign_out){ ?>
			<div class="reg_div" style="float:left;margin:0 0 0 300px;">
				<span id="sign_in_btn_span" ><a href="<?php echo base_url().'admin/sign_out'; ?>"><div class="btn_signin"><p class="p_sign">Sign out</p></div></a></span>
			</div>
                    <?php } ?>
		</div>