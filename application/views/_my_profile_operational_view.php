<?php include 'header.php' ?>
<script type="text/javascript">

	function show_login_form(){	
			$('#search_form_div').fadeOut(500,function(){
				$('#login_form_div').fadeIn(500,function(){});
				$('#sign_in_btn_span').fadeOut(500,function(){
					$('#search_btn_span').fadeIn(500,function(){});
				});
			});
			
	}
	function show_search_form(){	
			$('#login_form_div').fadeOut(500,function(){
			$('#search_form_div').fadeIn(500,function(){});
			$('#search_btn_span').fadeOut(500,function(){
				$('#sign_in_btn_span').fadeIn(500,function(){});
			});
	});

	}
  $(function()
  {
     $("div#toggle").click(function()
                         {
                           $("#show_img").fadeOut(1000,function(){

                             $("#head_slide").slideToggle();
                              $("#show_img").show();
                            return false;
                           });
                           
                         }); 
      
  });
  $(function()
  {
     $("div#toggle1").click(function()
                         {
                           $("#show_img1").fadeOut(1000,function(){

                             $("#head_slide1").slideToggle();
                             $("#show_img1").show();
                            return false;
                           });
                           
                         }); 
  });
  $(function()
  {
     $("div#toggle2").click(function()
                         {
                           $("#show_img2").fadeOut(1000,function(){

                             $("#head_slide2").slideToggle();
                              $("#show_img2").show();
                            return false;
                           });
                           
                         }); 
  });
  $(function()
  {
     $("div#toggle3").click(function()
                         {
                           $("#show_img3").fadeOut(1000,function(){

                             $("#head_slide3").slideToggle();
                             $("#show_img3").show();
                            return false;
                           });
                           
                         }); 
     
  });
</script>
<script>
    function like(){
	var current_val=Math.round($('#like_val').height()/$('#like_val').parent().height() * 100);
	if(current_val<100){
		var c_height=$('#like_val').height();
		c_height++;
		$('#like_val').height(c_height);
		
	}
}
function dislike(){
	var current_val=Math.round($('#like_val').height()/$('#like_val').parent().height() * 100);
	if(current_val>0){
		var c_height=$('#like_val').height();
		c_height--;
		$('#like_val').height(c_height);
		
	}
}
$(function(){
	var timeout_like, clicker_like = $('#like_div');
	
	clicker_like.mousedown(function(){
	    timeout_like = setInterval(function(){
	        like();
	    },85);
	
	    return false;
	});
	
	$(document).mouseup(function(){
	    clearInterval(timeout_like);
	    return false;
	});
	var timeout_dislike, clicker_dislike = $('#dislike_div');
	
	clicker_dislike.mousedown(function(){
		timeout_dislike = setInterval(function(){
	        dislike();
	    },85);
	
	    return false;
	});
	
	$(document).mouseup(function(){
	    clearInterval(timeout_dislike);
	    return false;
	});
});
</script>
<body>
 <?php include 'advertise_left.php' ?>
 <?php include 'advertise_right.php' ?>
		<!--<div id="contentwrap">-->
				<div class="uni_content">
					<div class="infoBar">
						<p>My Profile</p>
					</div>
					<div class="mp2_top_container">
						<div class="profile_pic_div"><!--Profile Picture-->
						<?php foreach ($basic_info_all as $basic_data){?>
							<div class="pic_div">
								<span><?php echo $basic_data->f_name; ?>&nbsp &nbsp<?php echo $basic_data->l_name;?></span><br>
								<img src="<?php echo base_url().'uploads/'.$basic_data->pic_path;?>" height="154" width="125"/>
							</div>
							<?php }?>
							<div class="pp_progress">
								<div class="progressbar" style="margin: 7px 0 2px 0px;"><!--green-->
					    		<div class="bottom_bar"></div>
					    		<div class="i_bar" style="border-right:1px solid #111;background:#00A650;width:85%;"><span class="inside-middle"></span></div>
					    		<div class="top_inf"><span class="span_name">Hardworking</span><span class="span_score"><span class="span_score">85</span></span></div>
							</div> 
							<div><!--green-->
					    		<input type="file" name="change_profile_picture" />
							</div>
							</div>
						</div>
						<?php foreach ($basic_info_all as $basic_data_one){?>
						<div class="bio_data">
							<span>Bio Data</span><a style="float:right;" href="#">Edit</a>
							<div class="bio_info">
								<div class="bi_span">
									<span class="span_bi">Gender:</span>
								</div>
								<div class="bi_input">
									<div class="small_circle">
										<span class="span_scircle">H</span>
									</div>
									<input value="<?php echo $basic_data_one->gender;?>" type="text">
                                    <?php 
                                    $rowData=explode("-",$basic_data_one->birthday);
	    	                        $year=$rowData[0];
		                            $month=$rowData[1];
		                            $day=$rowData[2];
                                    ?>
								</div>
							</div>
							<div class="bio_info">
								<div class="bi_span">
									<span class="span_bi">Birthday:</span>
								</div>
								<div class="bi_input">
									<div class="small_circle">
										<span class="span_scircle">H</span>
									</div>
									<input value="<?php echo $day.'/'.$month.'/'.substr($year,2,2)?>" type="text">

								</div>
							</div>
							<?php }?>
							<?php foreach ($user_profile_data_all as $profile_data){?>
							<div class="bio_info">
								<div class="bi_span">
									<span class="span_bi">Location:</span>
								</div>
								<div class="bi_input">
									<div class="small_circle">
										<span class="span_scircle">H</span>
									</div>
									<input value="<?php echo $profile_data->current_location_1; ?>" type="text">

								</div>
							</div>
							<div class="bio_info">
								<div class="bi_span">
									<span class="span_bi">Home Town:</span>
								</div>
								<div class="bi_input">
									<div class="small_circle">
										<span class="span_scircle">H</span>
									</div>
									<input value="<?php echo $profile_data->home_town_1;?>" type="text">

								</div>
							</div>
							<div class="bio_info">
								<div class="bi_span">
									<span class="span_bi">High School:</span>
								</div>
								<div class="bi_input">
									<div class="small_circle">
										<span class="span_scircle">H</span>
									</div>
									<input value="<?php echo $profile_data->high_school;?>" type="text">

								</div>
							</div>
							<div class="bio_info">
								<div class="bi_span">
									<span class="span_bi">Higher Ed:</span>
								</div>
								<div class="bi_input">
									<div class="small_circle">
										<span class="span_scircle">H</span>
									</div>
									<input value="<?php echo $profile_data->higher_education_1;?>" type="text">

								</div>
							</div>
							<div class="bio_info">
								<div class="bi_span">
									<span class="span_bi">Work Place:</span>
								</div>
								<div class="bi_input">
									<div class="small_circle">
										<span class="span_scircle">H</span>
									</div>
									<input value="<?php echo $profile_data->workplace_1; ?>" type="text">

								</div>
							</div>
							<div class="bio_info">
								<div class="bi_span">
									<span class="span_bi">Organization:</span>
								</div>
								<div class="bi_input">
									<div class="small_circle">
										<span class="span_scircle">H</span>
									</div>
									<input value="<?php echo $profile_data->organization_1; ?>" type="text">

								</div>
							</div>
						</div>
						<?php }?>
						<?php foreach ($user_about_all as $about_me_data){?>
						<div class="about_me">
						    <span>About Me</span>
							<a  href="#" style="float:right;" >Edit</a>
							<textarea><?php echo $about_me_data->about_me; ?></textarea>

						</div>
						<?php }?>
						<div class="stats">
							<span >Stats</span><br>
							<div class="progressbar" style="margin:10px 0;"><!--Blue-->
							    <div class="bottom_bar"></div>
							    <div class="i_bar" style="border-right:1px solid #111;background:#3973C2;"><span class="inside-middle"></span></div>
							    <div class="top_inf"><span class="span_name">Sports</span><span class="span_score"><span class="span_score">85</span></span></div>
							</div> 
							<div class="progressbar" style="margin:10px 0;"><!--Blue-->
							    <div class="bottom_bar"></div>
							    <div class="i_bar" style="border-right:1px solid #111;background:#3973C2;"><span class="inside-middle"></span></div>
							    <div class="top_inf"><span class="span_name">Sports</span><span class="span_score"><span class="span_score">85</span></span></div>
							</div>
							<div class="progressbar" style="margin:10px 0;"><!--Blue-->
							    <div class="bottom_bar"></div>
							    <div class="i_bar" style="border-right:1px solid #111;background:#3973C2;"><span class="inside-middle"></span></div>
							    <div class="top_inf"><span class="span_name">Sports</span><span class="span_score"><span class="span_score">85</span></span></div>
							</div>
							<div class="progressbar" style="margin:10px 0;"><!--Blue-->
							    <div class="bottom_bar"></div>
							    <div class="i_bar" style="border-right:1px solid #111;background:#3973C2;"><span class="inside-middle"></span></div>
							    <div class="top_inf"><span class="span_name">Sports</span><span class="span_score"><span class="span_score">85</span></span></div>
							</div>
							<div class="progressbar" style="margin:10px 0;"><!--Blue-->
							    <div class="bottom_bar"></div>
							    <div class="i_bar" style="border-right:1px solid #111;background:#3973C2;"><span class="inside-middle"></span></div>
							    <div class="top_inf"><span class="span_name">Sports</span><span class="span_score"><span class="span_score">85</span></span></div>
							</div>
						</div>
					</div>

					<div class="top3_container" style="position:relative;">
						<div class="quality">
							<span class="ag_span">Aggrigates</span><br>
							<div class="round_div_violet">
								<p class="round_diff">84%</p>
							</div>
							<div class="progressbar_l" style="background:#5E2590;"><!--violet-->
					    		<div class="bottom_bar_l"></div>
					    		<div id="t" class="i_bar_l" style="border-right:1px solid #111;background:#5E2590;width:70%;"><span class="inside-middle"></span></div>
					    		<div class="top_inf_l"><span class="span_name">Rank Score</span><span class="span_score"><span class="span_score">750</span></span></div>
							</div><br>
							<div class="round_div_purple">
								<p class="round_diff">70%</p>
							</div>
							<div class="progressbar_l" style="background:#EC008C;"><!--pink-->
					    		<div class="bottom_bar_l"></div>
					    		<div id="t" class="i_bar_l" style="border-right:1px solid #111;background:#EC008C;width:75%;"><span class="inside-middle"></span></div>
					    		<div class="top_inf_l"><span class="span_name">Reputation</span><span class="span_score"><span class="span_score">75</span></span></div>
							</div> <br>
							<div class="round_div_orange">
								<p class="round_diff">75%</p>
							</div>
							<div class="progressbar_l" style="background:#EF2E32;"><!--orange-->
					    		<div class="bottom_bar_l"></div>
					    		<div id="t" class="i_bar_l" style="border-right:1px solid #111;background:#EF2E32;width:85%"><span class="inside-middle"></span></div>
					    		<div class="top_inf_l"><span class="span_name">Popularity</span><span class="span_score"><span class="span_score">100</span></span></div>
							</div>
						</div>
						<div class="quality"> <!--onclick="this.style.height=(this.style.height=='165px'?'auto':'165px');"-->
							<span class="vi_span">Virtues</span><br>
							<div class="block1">
							<div class="progressbar" style="margin: 7px 0 2px 10px;"><!--Blue-->
							    <div class="bottom_bar"></div>
							    <div class="i_bar" style="border-right:1px solid #111;background:#3973C2;width:85%;"><span class="inside-middle"></span></div>
							    <div class="top_inf"><span class="span_name">Reliable</span><span class="span_score"><span class="span_score">85</span></span></div>
							</div> 
							<div class="progressbar" style="margin: 7px 0 2px 10px;"><!--Blue-->
							    <div class="bottom_bar"></div>
							    <div class="i_bar" style="border-right:1px solid #111;background:#3973C2;width:75%;"><span class="inside-middle"></span></div>
							    <div class="top_inf"><span class="span_name">kind</span><span class="span_score"><span class="span_score">75</span></span></div>
							</div> 
							<div class="progressbar" style="margin: 7px 0 2px 10px;"><!--Blue-->
							    <div class="bottom_bar"></div>
							    <div class="i_bar" style="border-right:1px solid #111;background:#3973C2;width:60%;"><span class="inside-middle"></span></div>
							    <div class="top_inf"><span class="span_name">Honest</span><span class="span_score"><span class="span_score">60</span></span></div>
							</div> 
							<div class="progressbar" style="margin: 7px 0 2px 10px;"><!--Blue-->
							    <div class="bottom_bar"></div>
							    <div class="i_bar" style="border-right:1px solid #111;background:#3973C2;width:85%;"><span class="inside-middle"></span></div>
							    <div class="top_inf"><span class="span_name">Generous</span><span class="span_score"><span class="span_score">85</span></span></div>
							</div>
							</div> 
							<div id="head_slide" class="block2" style="display:none;">
							<div class="progressbar" style="margin: 7px 0 2px 10px;"><!--Blue-->
							    <div class="bottom_bar"></div>
							    <div class="i_bar" style="border-right:1px solid #111;background:#3973C2;width:85%;"><span class="inside-middle"></span></div>
							    <div class="top_inf"><span class="span_name">Helpful</span><span class="span_score"><span class="span_score">85</span></span></div>
							</div> 
							<div class="progressbar" style="margin: 7px 0 2px 10px;"><!--Blue-->
							    <div class="bottom_bar"></div>
							    <div class="i_bar" style="border-right:1px solid #111;background:#3973C2;width:85%;"><span class="inside-middle"></span></div>
							    <div class="top_inf"><span class="span_name">Helpful</span><span class="span_score"><span class="span_score">85</span></span></div>
							</div> 
							<div class="progressbar" style="margin: 7px 0 2px 10px;"><!--Blue-->
							    <div class="bottom_bar"></div>
							    <div class="i_bar" style="border-right:1px solid #111;background:#3973C2;width:85%;"><span class="inside-middle"></span></div>
							    <div class="top_inf"><span class="span_name">Helpful</span><span class="span_score"><span class="span_score">85</span></span></div>
							</div> 
							</div>
							<div class="block3" id="toggle">
								<img id="show_img" style="margin:0 auto;" src="<?php echo base_url(); ?>images/downarw.png" width="25" height="25"/>
							</div>
						</div>
						<div class="quality">
							<span class="tr_span">Traits</span><br>
							<div class="block1">
							<div class="progressbar" style="margin: 7px 0 2px 10px;"><!--green-->
					    		<div class="bottom_bar"></div>
					    		<div class="i_bar" style="border-right:1px solid #111;background:#00A650;width:85%;"><span class="inside-middle"></span></div>
					    		<div class="top_inf"><span class="span_name">Hardworking</span><span class="span_score"><span class="span_score">85</span></span></div>
							</div> 
							<div class="progressbar" style="margin: 7px 0 2px 10px;"><!--green-->
					    		<div class="bottom_bar"></div>
					    		<div class="i_bar" style="border-right:1px solid #111;background:#00A650;width:75%;"><span class="inside-middle"></span></div>
					    		<div class="top_inf"><span class="span_name">Funny</span><span class="span_score"><span class="span_score">75</span></span></div>
							</div>
							<div class="progressbar" style="margin: 7px 0 2px 10px;"><!--green-->
					    		<div class="bottom_bar"></div>
					    		<div class="i_bar" style="border-right:1px solid #111;background:#00A650;width:60%;"><span class="inside-middle"></span></div>
					    		<div class="top_inf"><span class="span_name">Creative</span><span class="span_score"><span class="span_score">60</span></span></div>
							</div>
							<div class="progressbar" style="margin: 7px 0 2px 10px;"><!--green-->
					    		<div class="bottom_bar"></div>
					    		<div class="i_bar" style="border-right:1px solid #111;background:#00A650;width:55%;"><span class="inside-middle"></span></div>
					    		<div class="top_inf"><span class="span_name">Wise</span><span class="span_score"><span class="span_score">55</span></span></div>
							</div>
							</div>
							<div id="head_slide1" class="block2" style="display:none;">
							<div class="progressbar" style="margin: 7px 0 2px 10px;"><!--green-->
					    		<div class="bottom_bar"></div>
					    		<div class="i_bar" style="border-right:1px solid #111;background:#00A650;width:50%;"><span class="inside-middle"></span></div>
					    		<div class="top_inf"><span class="span_name">Talketive</span><span class="span_score"><span class="span_score">50</span></span></div>
							</div>
							<div class="progressbar" style="margin: 7px 0 2px 10px;"><!--green-->
					    		<div class="bottom_bar"></div>
					    		<div class="i_bar" style="border-right:1px solid #111;background:#00A650;width:50%;"><span class="inside-middle"></span></div>
					    		<div class="top_inf"><span class="span_name">Talketive</span><span class="span_score"><span class="span_score">50</span></span></div>
							</div>
							<div class="progressbar" style="margin: 7px 0 2px 10px;"><!--green-->
					    		<div class="bottom_bar"></div>
					    		<div class="i_bar" style="border-right:1px solid #111;background:#00A650;width:50%;"><span class="inside-middle"></span></div>
					    		<div class="top_inf"><span class="span_name">Talketive</span><span class="span_score"><span class="span_score">50</span></span></div>
							</div>
							<div class="progressbar" style="margin: 7px 0 2px 10px;"><!--green-->
					    		<div class="bottom_bar"></div>
					    		<div class="i_bar" style="border-right:1px solid #111;background:#00A650;width:50%;"><span class="inside-middle"></span></div>
					    		<div class="top_inf"><span class="span_name">Talketive</span><span class="span_score"><span class="span_score">50</span></span></div>
							</div>
							</div>
							<div class="block3" id="toggle1">
								<img id="show_img1" style="margin:0 auto;" src="<?php echo base_url(); ?>images/downarw.png" width="25" height="25"/>
							</div>
						</div>
						<div class="quality">
							<span class="sk_span">Skills</span><br>
							<div class="block1">
							<div class="progressbar"  style="margin: 7px 0 2px 10px;"><!--Yellow-->
					    		<div class="bottom_bar"></div>
					    		<div id="t" class="i_bar" style="border-right:1px solid #111;background:yellow;width:75%;"><span class="inside-middle"></span></div>
					    		<div class="top_inf"><span class="span_name">Sports</span><span class="span_score"><span class="span_score">75</span></span></div>
							</div> 
							<div class="progressbar"  style="margin: 7px 0 2px 10px;"><!--Yellow-->
					    		<div class="bottom_bar"></div>
					    		<div id="t" class="i_bar" style="border-right:1px solid #111;background:yellow;width:90%;"><span class="inside-middle"></span></div>
					    		<div class="top_inf"><span class="span_name">Maths</span><span class="span_score"><span class="span_score">90</span></span></div>
							</div>
							<div class="progressbar"  style="margin: 7px 0 2px 10px;"><!--Yellow-->
					    		<div class="bottom_bar"></div>
					    		<div id="t" class="i_bar" style="border-right:1px solid #111;background:yellow;width:70%;"><span class="inside-middle"></span></div>
					    		<div class="top_inf"><span class="span_name">Arts</span><span class="span_score"><span class="span_score">70</span></span></div>
							</div>
							<div class="progressbar"  style="margin: 7px 0 2px 10px;"><!--Yellow-->
					    		<div class="bottom_bar"></div>
					    		<div id="t" class="i_bar" style="border-right:1px solid #111;background:yellow;width:10%;"><span class="inside-middle"></span></div>
					    		<div class="top_inf"><span class="span_name">Cooking</span><span class="span_score"><span class="span_score">10</span></span></div>
							</div>
							</div>
							<div id="head_slide2" class="block2" style="display:none;">
								<div class="progressbar"  style="margin: 7px 0 2px 10px;"><!--Yellow-->
					    		<div class="bottom_bar"></div>
					    		<div id="t" class="i_bar" style="border-right:1px solid #111;background:yellow;width:70%;"><span class="inside-middle"></span></div>
					    		<div class="top_inf"><span class="span_name">Arts</span><span class="span_score"><span class="span_score">70</span></span></div>
							</div>
							<div class="progressbar"  style="margin: 7px 0 2px 10px;"><!--Yellow-->
					    		<div class="bottom_bar"></div>
					    		<div id="t" class="i_bar" style="border-right:1px solid #111;background:yellow;width:10%;"><span class="inside-middle"></span></div>
					    		<div class="top_inf"><span class="span_name">Cooking</span><span class="span_score"><span class="span_score">10</span></span></div>
							</div>
							<div class="progressbar"  style="margin: 7px 0 2px 10px;"><!--Yellow-->
					    		<div class="bottom_bar"></div>
					    		<div id="t" class="i_bar" style="border-right:1px solid #111;background:yellow;width:70%;"><span class="inside-middle"></span></div>
					    		<div class="top_inf"><span class="span_name">Arts</span><span class="span_score"><span class="span_score">70</span></span></div>
							</div>
							<div class="progressbar"  style="margin: 7px 0 2px 10px;"><!--Yellow-->
					    		<div class="bottom_bar"></div>
					    		<div id="t" class="i_bar" style="border-right:1px solid #111;background:yellow;width:10%;"><span class="inside-middle"></span></div>
					    		<div class="top_inf"><span class="span_name">Cooking</span><span class="span_score"><span class="span_score">10</span></span></div>
							</div>
							</div>
							<div class="block3" id="toggle2">
								<img id="show_img2" style="margin:0 auto;" src="<?php echo base_url(); ?>images/downarw.png" width="25" height="25"/>
							</div>

						</div>
						<div class="quality">
							<span class="re_span">Regard</span><br>
							<div class="block1">
							<div class="progressbar" style="margin: 7px 0 2px 10px;"><!--Red-->
					    		<div class="bottom_bar"></div>
					    		<div class="i_bar" style="border-right:1px solid #111;background:#EF2E32;width:85%;"><span class="inside-middle"></span></div>
					    		<div class="top_inf"><span class="span_name">Human being</span><span class="span_score"><span class="span_score">85</span></span></div>
							</div>
							<div class="progressbar" style="margin: 7px 0 2px 10px;"><!--Red-->
					    		<div class="bottom_bar"></div>
					    		<div class="i_bar" style="border-right:1px solid #111;background:#EF2E32;width:75%;"><span class="inside-middle"></span></div>
					    		<div class="top_inf"><span class="span_name">Close friend</span><span class="span_score"><span class="span_score">75</span></span></div>
							</div>
							<div class="progressbar" style="margin: 7px 0 2px 10px;"><!--Red-->
					    		<div class="bottom_bar"></div>
					    		<div class="i_bar" style="border-right:1px solid #111;background:#EF2E32;width:80%;"><span class="inside-middle"></span></div>
					    		<div class="top_inf"><span class="span_name">Classmate</span><span class="span_score"><span class="span_score">80</span></span></div>
							</div>
							<div class="progressbar" style="margin: 7px 0 2px 10px;"><!--Red-->
					    		<div class="bottom_bar"></div>
					    		<div class="i_bar" style="border-right:1px solid #111;background:#EF2E32;width:80%;"><span class="inside-middle"></span></div>
					    		<div class="top_inf"><span class="span_name">Classmate</span><span class="span_score"><span class="span_score">80</span></span></div>
							</div>
							</div>
							<div id="head_slide3" class="block2" style="display:none;">
							<div class="progressbar" style="margin: 7px 0 2px 10px;"><!--Red-->
					    		<div class="bottom_bar"></div>
					    		<div class="i_bar" style="border-right:1px solid #111;background:#EF2E32;width:85%;"><span class="inside-middle"></span></div>
					    		<div class="top_inf"><span class="span_name">Human being</span><span class="span_score"><span class="span_score">85</span></span></div>
							</div>
							<div class="progressbar" style="margin: 7px 0 2px 10px;"><!--Red-->
					    		<div class="bottom_bar"></div>
					    		<div class="i_bar" style="border-right:1px solid #111;background:#EF2E32;width:75%;"><span class="inside-middle"></span></div>
					    		<div class="top_inf"><span class="span_name">Close friend</span><span class="span_score"><span class="span_score">75</span></span></div>
							</div>
							<div class="progressbar" style="margin: 7px 0 2px 10px;"><!--Red-->
					    		<div class="bottom_bar"></div>
					    		<div class="i_bar" style="border-right:1px solid #111;background:#EF2E32;width:80%;"><span class="inside-middle"></span></div>
					    		<div class="top_inf"><span class="span_name">Classmate</span><span class="span_score"><span class="span_score">80</span></span></div>
							</div>
							<div class="progressbar" style="margin: 7px 0 2px 10px;"><!--Red-->
					    		<div class="bottom_bar"></div>
					    		<div class="i_bar" style="border-right:1px solid #111;background:#EF2E32;width:80%;"><span class="inside-middle"></span></div>
					    		<div class="top_inf"><span class="span_name">Classmate</span><span class="span_score"><span class="span_score">80</span></span></div>
							</div>
							</div>
							<div class="block3" id="toggle3">
								<img id="show_img3" style="margin:0 auto;" src="<?php echo base_url(); ?>images/downarw.png" width="25" height="25"/>
							</div>

						</div>
						<div class="signup_head">
							<div class="span_head">
								<span class="span_head">Basic Info</span>
							</div>
							<div class="span_head">
								<span class="span_head">Profile Data</span>
							</div>	
							<div class="span_head">
								<span class="span_head">Profile Data</span>
							</div>
							<div class="span_head">
								<span class="span_head">Profile Data</span>
							</div>
						</div>
						<div class="select_area">
							<div class="mp_selectbox1">
								<span class="sbox_span">Traits</span><br>
								<select>
									<option>Hardworking</option>
								</select>
							</div>
							<div class="mp_selectbox2">
								<span class="sbox_span">Relationship</span><br>
								<select>
									<option>Highest</option>
								</select>
							</div>
							<div class="mp_selectbox3">
								<span class="sbox_span">Order</span><br>
								<select>
									<option></option>
								</select>
							</div>
							<div class="mp_selectbox2">
								<span class="sbox_span">Person Search</span><br>
								<select>
									<option></option>
								</select>
							</div>
							<span class="anchor_span"><a href="#" target="_blank"><div class="btn_div">Submit</div></a></span>
						</div>
						<div class="graph_ver_wrap">
							<div class="hof_trait">
							</div>
							<div class="dof_score">
							</div>
						</div>
						<div class="my_gossip_container">
							<div class="spec_circle_sky" style=" margin: 50px 0 0 2px;">
								<p class="p_sky">3</p>
							</div>
							<div class="my_gossip">
								<div class="my_pic"> 
								<img src="<?php echo base_url(); ?>images/neil_p_harris.png" height="130" width="85" />
								</div>
									<div class="gossip_score">
											<span class="plarge_span" style="margin:0 0 0 5px">Neil P. Harris</span><br>
											<span class="psmall_span" style="margin:0 0 0 5px">New York &nbsp 1/15/11</span>
										<div class="progressbar" style="margin:15px 0 10px 12px;"><!--Green-->
									    		<div class="bottom_bar"></div>
									    		<div class="i_bar" style="border-right:1px solid #111;background:#00A650;width:90%"><span class="inside-middle"></span></div>
									    		<div class="top_inf"><span class="span_name">Hardworking</span><span class="span_score"><span class="span_score">75</span></span></div>
											</div>
											<div class="progressbar" style="margin:0 0 0 12px;"><!--violet-->
									    		<div class="bottom_bar"></div>
									    		<div class="i_bar" style="border-right:1px solid #111;background:#5E2590;width:75%"><span class="inside-middle"></span></div>
									    		<div class="top_inf"><span class="span_name">Rank</span><span class="span_score"><span class="span_score">1875</span></span></div>
										</div>  
									</div>	
							</div>
							<span class="arrow"  style="margin: 55px 0 0 125px;"></span>
							<div class="gossip_topic" style="margin:0 15px 0 0;">
								<div style="width:335px;height:125px;float:left;">	
									<div class="gossip_thread">
										<span class="head_large_span">Gossip Thread:</span>
										<input type="text" />
										<textarea></textarea>
									</div>
								</div>
								<div style="width:25px;height:125px;float:left;"> 
									<div id="like_div" style="cursor:pointer;"><img src="<?php echo base_url(); ?>images/tup.png" style="margin-top:2px;"></div>
									<div class="progressbar_h">
							    		<div class="bottom_bar_h"></div>
							    		<div id="like_val" class="i_bar_h" style="border-top:2px solid #111;"><span class="inside-middle_h"></span></div>
							    		<div class="top_info_h"></div>
									</div> 
									<div id="dislike_div" style="cursor:pointer;"><img src="<?php echo base_url(); ?>images/tdown.png"></div>
								</div>			
							</div>
							<span class="arrow2" style="margin:55px 0 0 684px;"></span>
							<div class="gossiper">
								<img src="<?php echo base_url(); ?>images/boy_george.png" height="100" width="70" />
									<div class="gossiper_info">
									<span class="plarge_span">Boy George</span>
									<span class="psmall_span">New York &nbsp 1/15/11</span>
										<div class="progressbar"><!--Green-->
									    		<div class="bottom_bar"></div>
									    		<div class="i_bar" style="border-right:1px solid #111;background:#00A650;width:90%"><span class="inside-middle"></span></div>
									    		<div class="top_inf"><span class="span_name">Hardworking</span><span class="span_score"><span class="span_score">75</span></span></div>
											</div>
											<div class="progressbar"><!--violet-->
									    		<div class="bottom_bar"></div>
									    		<div class="i_bar" style="border-right:1px solid #111;background:#5E2590;width:75%"><span class="inside-middle"></span></div>
									    		<div class="top_inf"><span class="span_name">Rank</span><span class="span_score"><span class="span_score">1875</span></span></div>
										</div> 
									</div>	
							</div>
						<div class="m_btn_wrap">
							<div class="gossip_replies">
								<span>Gossip Replies:</span><span>5</span>
							</div>
							<div class="gossip_btn">
								<span>View all gossip</span>
							</div>
							<div class="gossip_btn">
								<span>Reply all gossip</span>
							</div>
							<div class="gossip_btn">
								<span>Hide gossip</span>
							</div>
						</div>
					</div>
					<div class="my_gossip_container">
							<div class="spec_circle_sky" style=" margin: 50px 0 0 2px;">
								<p class="p_sky">3</p>
							</div>
							<div class="my_gossip">
								<div class="my_pic"> 
								<img src="<?php echo base_url(); ?>images/neil_p_harris.png" height="130" width="85" />
								</div>
									<div class="gossip_score">
											<span class="plarge_span" style="margin:0 0 0 5px">Neil P. Harris</span><br>
											<span class="psmall_span" style="margin:0 0 0 5px">New York &nbsp 1/15/11</span>
										<div class="progressbar" style="margin:15px 0 10px 12px;"><!--Green-->
									    		<div class="bottom_bar"></div>
									    		<div class="i_bar" style="border-right:1px solid #111;background:#00A650;width:90%"><span class="inside-middle"></span></div>
									    		<div class="top_inf"><span class="span_name">Hardworking</span><span class="span_score"><span class="span_score">75</span></span></div>
											</div>
											<div class="progressbar" style="margin:0 0 0 12px;"><!--violet-->
									    		<div class="bottom_bar"></div>
									    		<div class="i_bar" style="border-right:1px solid #111;background:#5E2590;width:75%"><span class="inside-middle"></span></div>
									    		<div class="top_inf"><span class="span_name">Rank</span><span class="span_score"><span class="span_score">1875</span></span></div>
										</div>  
									</div>	
							</div>
							<span class="arrow"  style="margin: 55px 0 0 125px;"></span>
							<div class="gossip_topic" style="margin:0 15px 0 0;">
								<div style="width:335px;height:125px;float:left;">	
									<div class="gossip_thread">
										<span class="head_large_span">Gossip Thread:</span>
										<input type="text" />
										<textarea></textarea>
									</div>
								</div>
								<div style="width:25px;height:125px;float:left;"> 
									<div id="like_div" style="cursor:pointer;"><img src="<?php echo base_url(); ?>images/tup.png" style="margin-top:2px;"></div>
									<div class="progressbar_h">
							    		<div class="bottom_bar_h"></div>
							    		<div id="like_val" class="i_bar_h" style="border-top:2px solid #111;"><span class="inside-middle_h"></span></div>
							    		<div class="top_info_h"></div>
									</div> 
									<div id="dislike_div" style="cursor:pointer;"><img src="<?php echo base_url(); ?>images/tdown.png"></div>
								</div>			
							</div>
							<span class="arrow2" style="margin:55px 0 0 684px;"></span>
							<div class="gossiper">
								<img src="<?php echo base_url(); ?>images/boy_george.png" height="100" width="70" />
									<div class="gossiper_info">
									<span class="plarge_span">Boy George</span>
									<span class="psmall_span">New York &nbsp 1/15/11</span>
										<div class="progressbar"><!--Green-->
									    		<div class="bottom_bar"></div>
									    		<div class="i_bar" style="border-right:1px solid #111;background:#00A650;width:90%"><span class="inside-middle"></span></div>
									    		<div class="top_inf"><span class="span_name">Hardworking</span><span class="span_score"><span class="span_score">75</span></span></div>
											</div>
											<div class="progressbar"><!--violet-->
									    		<div class="bottom_bar"></div>
									    		<div class="i_bar" style="border-right:1px solid #111;background:#5E2590;width:75%"><span class="inside-middle"></span></div>
									    		<div class="top_inf"><span class="span_name">Rank</span><span class="span_score"><span class="span_score">1875</span></span></div>
										</div> 
									</div>	
							</div>
						<div class="m_btn_wrap">
							<div class="gossip_replies">
								<span>Gossip Replies:</span><span>5</span>
							</div>
							<div class="gossip_btn">
								<span>View all gossip</span>
							</div>
							<div class="gossip_btn">
								<span>Reply all gossip</span>
							</div>
							<div class="gossip_btn">
								<span>Hide gossip</span>
							</div>
						</div>
					</div>
					<div class="my_gossip_container">
							<div class="spec_circle_sky" style=" margin: 50px 0 0 2px;">
								<p class="p_sky">3</p>
							</div>
							<div class="my_gossip">
								<div class="my_pic"> 
								<img src="<?php echo base_url(); ?>images/neil_p_harris.png" height="130" width="85" />
								</div>
									<div class="gossip_score">
											<span class="plarge_span" style="margin:0 0 0 5px">Neil P. Harris</span><br>
											<span class="psmall_span" style="margin:0 0 0 5px">New York &nbsp 1/15/11</span>
										<div class="progressbar" style="margin:15px 0 10px 12px;"><!--Green-->
									    		<div class="bottom_bar"></div>
									    		<div class="i_bar" style="border-right:1px solid #111;background:#00A650;width:90%"><span class="inside-middle"></span></div>
									    		<div class="top_inf"><span class="span_name">Hardworking</span><span class="span_score"><span class="span_score">75</span></span></div>
											</div>
											<div class="progressbar" style="margin:0 0 0 12px;"><!--violet-->
									    		<div class="bottom_bar"></div>
									    		<div class="i_bar" style="border-right:1px solid #111;background:#5E2590;width:75%"><span class="inside-middle"></span></div>
									    		<div class="top_inf"><span class="span_name">Rank</span><span class="span_score"><span class="span_score">1875</span></span></div>
										</div>  
									</div>	
							</div>
							<span class="arrow"  style="margin: 55px 0 0 125px;"></span>
							<div class="gossip_topic" style="margin:0 15px 0 0;">
								<div style="width:335px;height:125px;float:left;">	
									<div class="gossip_thread">
										<span class="head_large_span">Gossip Thread:</span>
										<input type="text" />
										<textarea></textarea>
									</div>
								</div>
								<div style="width:25px;height:125px;float:left;"> 
									<div id="like_div" style="cursor:pointer;"><img src="<?php echo base_url(); ?>images/tup.png" style="margin-top:2px;"></div>
									<div class="progressbar_h">
							    		<div class="bottom_bar_h"></div>
							    		<div id="like_val" class="i_bar_h" style="border-top:2px solid #111;"><span class="inside-middle_h"></span></div>
							    		<div class="top_info_h"></div>
									</div> 
									<div id="dislike_div" style="cursor:pointer;"><img src="<?php echo base_url(); ?>images/tdown.png"></div>
								</div>			
							</div>
							<span class="arrow2" style="margin:55px 0 0 684px;"></span>
							<div class="gossiper">
								<img src="<?php echo base_url(); ?>images/boy_george.png" height="100" width="70" />
									<div class="gossiper_info">
									<span class="plarge_span">Boy George</span>
									<span class="psmall_span">New York &nbsp 1/15/11</span>
										<div class="progressbar"><!--Green-->
									    		<div class="bottom_bar"></div>
									    		<div class="i_bar" style="border-right:1px solid #111;background:#00A650;width:90%"><span class="inside-middle"></span></div>
									    		<div class="top_inf"><span class="span_name">Hardworking</span><span class="span_score"><span class="span_score">75</span></span></div>
											</div>
											<div class="progressbar"><!--violet-->
									    		<div class="bottom_bar"></div>
									    		<div class="i_bar" style="border-right:1px solid #111;background:#5E2590;width:75%"><span class="inside-middle"></span></div>
									    		<div class="top_inf"><span class="span_name">Rank</span><span class="span_score"><span class="span_score">1875</span></span></div>
										</div> 
									</div>	
							</div>
						<div class="m_btn_wrap">
							<div class="gossip_replies">
								<span>Gossip Replies:</span><span>5</span>
							</div>
							<div class="gossip_btn">
								<span>View all gossip</span>
							</div>
							<div class="gossip_btn">
								<span>Reply all gossip</span>
							</div>
							<div class="gossip_btn">
								<span>Hide gossip</span>
							</div>
						</div>
					</div>
					<div class="my_gossip_container">
							<div class="spec_circle_sky" style=" margin: 50px 0 0 2px;">
								<p class="p_sky">3</p>
							</div>
							<div class="my_gossip">
								<div class="my_pic"> 
								<img src="<?php echo base_url(); ?>images/neil_p_harris.png" height="130" width="85" />
								</div>
									<div class="gossip_score">
											<span class="plarge_span" style="margin:0 0 0 5px">Neil P. Harris</span><br>
											<span class="psmall_span" style="margin:0 0 0 5px">New York &nbsp 1/15/11</span>
										<div class="progressbar" style="margin:15px 0 10px 12px;"><!--Green-->
									    		<div class="bottom_bar"></div>
									    		<div class="i_bar" style="border-right:1px solid #111;background:#00A650;width:90%"><span class="inside-middle"></span></div>
									    		<div class="top_inf"><span class="span_name">Hardworking</span><span class="span_score"><span class="span_score">75</span></span></div>
											</div>
											<div class="progressbar" style="margin:0 0 0 12px;"><!--violet-->
									    		<div class="bottom_bar"></div>
									    		<div class="i_bar" style="border-right:1px solid #111;background:#5E2590;width:75%"><span class="inside-middle"></span></div>
									    		<div class="top_inf"><span class="span_name">Rank</span><span class="span_score"><span class="span_score">1875</span></span></div>
										</div>  
									</div>	
							</div>
							<span class="arrow"  style="margin: 55px 0 0 125px;"></span>
							<div class="gossip_topic" style="margin:0 15px 0 0;">
								<div style="width:335px;height:125px;float:left;">	
									<div class="gossip_thread">
										<span class="head_large_span">Gossip Thread:</span>
										<input type="text" />
										<textarea></textarea>
									</div>
								</div>
								<div style="width:25px;height:125px;float:left;"> 
									<div id="like_div" style="cursor:pointer;"><img src="<?php echo base_url(); ?>images/tup.png" style="margin-top:2px;"></div>
									<div class="progressbar_h">
							    		<div class="bottom_bar_h"></div>
							    		<div id="like_val" class="i_bar_h" style="border-top:2px solid #111;"><span class="inside-middle_h"></span></div>
							    		<div class="top_info_h"></div>
									</div> 
									<div id="dislike_div" style="cursor:pointer;"><img src="<?php echo base_url(); ?>images/tdown.png"></div>
								</div>			
							</div>
							<span class="arrow2" style="margin:55px 0 0 684px;"></span>
							<div class="gossiper">
								<img src="<?php echo base_url(); ?>images/boy_george.png" height="100" width="70" />
									<div class="gossiper_info">
									<span class="plarge_span">Boy George</span>
									<span class="psmall_span">New York &nbsp 1/15/11</span>
										<div class="progressbar"><!--Green-->
									    		<div class="bottom_bar"></div>
									    		<div class="i_bar" style="border-right:1px solid #111;background:#00A650;width:90%"><span class="inside-middle"></span></div>
									    		<div class="top_inf"><span class="span_name">Hardworking</span><span class="span_score"><span class="span_score">75</span></span></div>
											</div>
											<div class="progressbar"><!--violet-->
									    		<div class="bottom_bar"></div>
									    		<div class="i_bar" style="border-right:1px solid #111;background:#5E2590;width:75%"><span class="inside-middle"></span></div>
									    		<div class="top_inf"><span class="span_name">Rank</span><span class="span_score"><span class="span_score">1875</span></span></div>
										</div> 
									</div>	
							</div>
						<div class="m_btn_wrap">
							<div class="gossip_replies">
								<span>Gossip Replies:</span><span>5</span>
							</div>
							<div class="gossip_btn">
								<span>View all gossip</span>
							</div>
							<div class="gossip_btn">
								<span>Reply all gossip</span>
							</div>
							<div class="gossip_btn">
								<span>Hide gossip</span>
							</div>
						</div>
					</div>
					<div class="my_gossip_container">
							<div class="spec_circle_sky" style=" margin: 50px 0 0 2px;">
								<p class="p_sky">3</p>
							</div>
							<div class="my_gossip">
								<div class="my_pic"> 
								<img src="<?php echo base_url(); ?>images/neil_p_harris.png" height="130" width="85" />
								</div>
									<div class="gossip_score">
											<span class="plarge_span" style="margin:0 0 0 5px">Neil P. Harris</span><br>
											<span class="psmall_span" style="margin:0 0 0 5px">New York &nbsp 1/15/11</span>
										<div class="progressbar" style="margin:15px 0 10px 12px;"><!--Green-->
									    		<div class="bottom_bar"></div>
									    		<div class="i_bar" style="border-right:1px solid #111;background:#00A650;width:90%"><span class="inside-middle"></span></div>
									    		<div class="top_inf"><span class="span_name">Hardworking</span><span class="span_score"><span class="span_score">75</span></span></div>
											</div>
											<div class="progressbar" style="margin:0 0 0 12px;"><!--violet-->
									    		<div class="bottom_bar"></div>
									    		<div class="i_bar" style="border-right:1px solid #111;background:#5E2590;width:75%"><span class="inside-middle"></span></div>
									    		<div class="top_inf"><span class="span_name">Rank</span><span class="span_score"><span class="span_score">1875</span></span></div>
										</div>  
									</div>	
							</div>
							<span class="arrow"  style="margin: 55px 0 0 125px;"></span>
							<div class="gossip_topic" style="margin:0 15px 0 0;">
								<div style="width:335px;height:125px;float:left;">	
									<div class="gossip_thread">
										<span class="head_large_span">Gossip Thread:</span>
										<input type="text" />
										<textarea></textarea>
									</div>
								</div>
								<div style="width:25px;height:125px;float:left;"> 
									<div id="like_div" style="cursor:pointer;"><img src="<?php echo base_url(); ?>images/tup.png" style="margin-top:2px;"></div>
									<div class="progressbar_h">
							    		<div class="bottom_bar_h"></div>
							    		<div id="like_val" class="i_bar_h" style="border-top:2px solid #111;"><span class="inside-middle_h"></span></div>
							    		<div class="top_info_h"></div>
									</div> 
									<div id="dislike_div" style="cursor:pointer;"><img src="<?php echo base_url(); ?>images/tdown.png"></div>
								</div>			
							</div>
							<span class="arrow2" style="margin:55px 0 0 684px;"></span>
							<div class="gossiper">
								<img src="<?php echo base_url(); ?>images/boy_george.png" height="100" width="70" />
									<div class="gossiper_info">
									<span class="plarge_span">Boy George</span>
									<span class="psmall_span">New York &nbsp 1/15/11</span>
										<div class="progressbar"><!--Green-->
									    		<div class="bottom_bar"></div>
									    		<div class="i_bar" style="border-right:1px solid #111;background:#00A650;width:90%"><span class="inside-middle"></span></div>
									    		<div class="top_inf"><span class="span_name">Hardworking</span><span class="span_score"><span class="span_score">75</span></span></div>
											</div>
											<div class="progressbar"><!--violet-->
									    		<div class="bottom_bar"></div>
									    		<div class="i_bar" style="border-right:1px solid #111;background:#5E2590;width:75%"><span class="inside-middle"></span></div>
									    		<div class="top_inf"><span class="span_name">Rank</span><span class="span_score"><span class="span_score">1875</span></span></div>
										</div> 
									</div>	
							</div>
						<div class="m_btn_wrap">
							<div class="gossip_replies">
								<span>Gossip Replies:</span><span>5</span>
							</div>
							<div class="gossip_btn">
								<span>View all gossip</span>
							</div>
							<div class="gossip_btn">
								<span>Reply all gossip</span>
							</div>
							<div class="gossip_btn">
								<span>Hide gossip</span>
							</div>
						</div>
					</div>
					

				</div>
		<!--</div>-->
				<!--Footer>-->
 <?php include 'footer.php' ?>