 <?php include 'header.php' ?>

 

<script  type="text/javascript" src="<?php echo base_url(); ?>jQuery/jquery.jqplot.min.js"></script>

<script  type="text/javascript" src="<?php echo base_url(); ?>jQuery/jqplot.highlighter.min.js"></script>

<script  type="text/javascript" src="<?php echo base_url();?>jQuery/jqplot.dateAxisRenderer.min.js"></script>

<script  type="text/javascript" src="<?php echo base_url(); ?>js/normal_distribution.js"></script>

<!--                <script  type="text/javascript" src="<?php echo base_url(); ?>js/graph_trait.js"></script>-->

               <!--  By Tanveer -->

 <script type="text/javascript">

$(document).ready(function() {

	/* Declrear Base Url */

	var BASE = '<?php echo base_url(); ?>';

	//console.log

    // hides the slickbox as soon as the DOM is ready

    $('.block1').animate({height: '116px'});

	$('.show').click(function(){

         $(this).parents().find('.block1').each(function(){

         	$(this).attr("class");

            if($(this).css("height") == "116px") {

            	$(this).animate({height: "100%"}, 1000);



			} else {

            	$(this).animate({height: "116px"}, 500);

            }

            	return false;

         });

    });



    var getTraitUserList = function (){



    	var formData = $('form#trait_form').serializeArray();

        $.ajax({

            url : BASE+'welcome/get_trait_user_list/',

            type : 'POST',

            data : formData,

            beforeSend : function() {

            },

            success : function(reply) {

                var replyData = $.parseJSON(reply);



                if(replyData.reply==1){

                    $('div.middle_left').html(replyData.viewData);

                }

                //console.log(reply);

            }

        });

    };



    getTraitUserList();



    $('#submit_trait_btn').on('click',function(e){

        e.preventDefault();

    	getTraitUserList();

    });

        

});

</script>  

<script type="text/javascript">

  $(document).ready(function(){

      $('.right_slider').animate({width:'15px'});

      $('.right_slider').css('backgroundPosition', '-188px 9px');

      $('.right_show').click(function(){

            if($('.right_slider').css("width") == "15px") {

                    $('.right_slider').animate({width: "200px"}, 300);

                     $('#appearence_right').show({width: "175px"},300);

                     $('.right_slider').css('backgroundPosition', '-4px 9px');



                } else {

                    $('.right_slider').animate({width: "15px"}, 300);

                     $('.right_show').show();

                     $('#appearence_right').hide({width: "175px"},300);

                     $('.right_slider').css('backgroundPosition', '-188px 9px');

                    }

                    return false;

                 });

  });

</script>

                <!-- E of by tanveer -->

 <script type="text/javascript">

	function authinticate(){

		var user_name=$('#user_name').attr('value');

		var password=$('#login_password').attr('value');

		if(user_name!="" && password!=""){

			$('#user_name').css('background','white');

			$('#login_password').css('background','white');

			$.ajax(

			           {

			            	type:"POST",

			            	data:{u_email:user_name,password:password},

			                url:$('#site_url').attr("value")+"login/authenticate",

			                success:function(data){

			        	   		var resp=data.split(";");

			        	   		if(resp[1]=="True"){

				        	   		window.location=$('#site_url').attr("value");

				        	   	}else if(resp[1]=="False"){

					        	   	$('#login_error_div').html(resp[2]);

					        	}

						    }

			     });

		}else{

			if(user_name==""){

				$('#user_name').css('background','red');

			}else{

				$('#password').css('background','red')

			}

		}

	}

	function show_login_form(){	

			$('#search_form_div').fadeOut(500,function(){

                                

				$('#login_form_div').fadeIn(500,function(){

                                    $('#user_name').focus();

                                });

                                

				$('#sign_in_btn_span').fadeOut(500,function(){

					$('#search_btn_span').fadeIn(500,function(){

                                           

                                        });

				});

			});

			

	}

	function show_search_form(){	

			$('#login_form_div').fadeOut(500,function(){

			$('#search_form_div').fadeIn(500,function(){});

			$('#search_btn_span').fadeOut(500,function(){

				$('#sign_in_btn_span').fadeIn(500,function(){0

                                    

                                });

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

 <!-- Hidden Tag Don't Touch It Tanveer -->

 	<input type="hidden" id="site_url" value="<?php echo $site_url;?>">

 <!-- Hidden Tag End -->

		<!--<div id="contentwrap">-->

				<div id="content">

					<?php include 'top_container.php' ?>

					<div class="infoBar">

						<p>My City Profile</p>

					</div>

					<div class="top2_container">

						<div class="demobox">

							<span class="demobox_span">New York</span>

							<div class="area1">

								<span>240,00 Members</span>

							</div>

							<div class="area1">

								<span>73,459 Gossips</span>

							</div>

							<div class="area1">

								<span>1390 Online</span>

							</div>

							<div class="area1">

								<span>#5 Group Ranked</span>

							</div>

						</div>

						<div class="top2_finest">

							<div class="round_div_purple_top"><p class="round_span">1</p></div>

								<div class="top_finest_sub">

								<div class="heading">

									<span class="head_large_span">New York's Finest</span>

								</div>

									<div class="personality">

										<img src="<?php echo base_url(); ?>images/neil_p_harris.png" height="100" width="70" />

											<div class="personality_info">

											<span class="plarge_span">Neil P. Harris</span><br>

											<span class="psmall_span">New York &nbsp 1/15/11</span>

											<div class="personality_prog">

											<div class="progressbar"><!--Violet-->

									    		<div class="bottom_bar"></div>

									    		<div class="i_bar_p" style="border-right:1px solid #111;"><span class="inside-middle"></span></div>

									    		<div class="top_inf"><span class="span_name">Rank</span><span class="span_score"><span class="span_score">1875</span></span></div>

											</div>

											<div class="progressbar"><!--Orange-->

									    		<div class="bottom_bar"></div>

									    		<div class="i_bar_o" style="border-right:1px solid #111;"><span class="inside-middle"></span></div>

									    		<div class="top_inf"><span class="span_name">Popularity</span><span class="span_score"><span class="span_score">20</span></span></div>

											</div>

											</div> 

											</div>	

									</div>

								</div>

								<div class="specholder">

									<div class="spec_circle_red" >

										<p class="p_red">2</p>

									</div><!--style="background:#EF2E32;"-->

									<div class="specprogress">

										<img src="<?php echo base_url(); ?>images/jason_dunn.png" height="50" width="50" />

										<div class="specp_div"><span class="specp_span">Jason Dunn</span><span class="specp_small_span">New York</span></div>

										<div class="specp_prog_div">

											<div class="progressbar" style="float:right;margin:0 3px 3px 0px"><!--Violet-->

										    		<div class="bottom_bar"></div>

										    		<div class="i_bar_p" style="border-right:1px solid #111;"><span class="inside-middle"></span></div>

										    		<div class="top_inf"><span class="span_name">Rank</span><span class="span_score"><span class="span_score">1875</span></span></div>

											</div>

										</div>	

									</div>

								</div>		

						</div>

						

						<div class="top2_popular">

							<div class="heading" style="float:right;margin:0 8px 0 0;">

								<span class="head_large_span">NY's Most Popular</span>

							</div>

							<div class="specholder">

									<div class="spec_circle_purple" ><!--style="background:#5E2590;"-->

										<p class="p_purple">1</p>

									</div>

									<div class="specprogress">

										<img src="<?php echo base_url(); ?>images/diane_neal.png" height="50" width="50" />

										<div class="specp_div"><span class="specp_span">Jane Corson</span><span class="specp_small_span">New York</span></div>

										<div class="specp_prog_div">

											<div class="progressbar" style="float:right;margin:0 3px 3px 0px"><!--Violet-->

										    		<div class="bottom_bar"></div>

										    		<div class="i_bar_o" style="border-right:1px solid #111;"><span class="inside-middle"></span></div>

										    		<div class="top_inf"><span class="span_name">Rank</span><span class="span_score"><span class="span_score">1875</span></span></div>

											</div>

										</div>

									</div>

							</div>

							<div class="specholder">

									<div class="spec_circle_red" >

										<p class="p_red">2</p>

									</div><!--style="background:#EF2E32;"-->

										<div class="specprogress">

											<img src="<?php echo base_url(); ?>images/michael_farber.png" height="50" width="50" />

											<div class="specp_div"><span class="specp_span">Michael Farber</span><span class="specp_small_span">New York</span></div>

										<div class="specp_prog_div">

											<div class="progressbar" style="float:right;margin:0 3px 3px 0px"><!--Violet-->

										    		<div class="bottom_bar"></div>

										    		<div class="i_bar_o" style="border-right:1px solid #111;"><span class="inside-middle"></span></div>

										    		<div class="top_inf"><span class="span_name">Rank</span><span class="span_score"><span class="span_score">1875</span></span></div>

											</div>

										</div>

										</div>

							</div>

							<div class="specholder">

									<div class="spec_circle_sky"><!-- style="background:#419AD2;"-->

										<p class="p_sky">3</p>

									</div>			

									<div class="specprogress">

										<img src="<?php echo base_url(); ?>images/jason_dunn.png" height="50" width="50" />

										<div class="specp_div"><span class="specp_span">Jason Dunn</span><span class="specp_small_span">New York</span></div>

										<div class="specp_prog_div">

											<div class="progressbar" style="float:right;margin:0 3px 3px 0px"><!--Violet-->

										    		<div class="bottom_bar"></div>

										    		<div class="i_bar_o" style="border-right:1px solid #111;"><span class="inside-middle"></span></div>

										    		<div class="top_inf"><span class="span_name">Rank</span><span class="span_score"><span class="span_score">1875</span></span></div>

											</div>

										</div>

									</div>

							</div>		

						</div>

						<div class="demobox2">

							<span >Stats</span><br>

							<div class="progressbar"><!--Blue-->

							    <div class="bottom_bar"></div>

							    <div class="i_bar_s" style="border-right:1px solid #111;"><span class="inside-middle"></span></div>

							    <div class="top_inf"><span class="span_name">Sports</span><span class="span_score"><span class="span_score">85</span></span></div>

							</div> 

							<div class="progressbar"><!--Blue-->

							    <div class="bottom_bar"></div>

							    <div class="i_bar_s" style="border-right:1px solid #111;"><span class="inside-middle"></span></div>

							    <div class="top_inf"><span class="span_name">Sports</span><span class="span_score"><span class="span_score">85</span></span></div>

							</div>

							<div class="progressbar"><!--Blue-->

							    <div class="bottom_bar"></div>

							    <div class="i_bar_s" style="border-right:1px solid #111;"><span class="inside-middle"></span></div>

							    <div class="top_inf"><span class="span_name">Sports</span><span class="span_score"><span class="span_score">85</span></span></div>

							</div>

							<div class="progressbar"><!--Blue-->

							    <div class="bottom_bar"></div>

							    <div class="i_bar_s" style="border-right:1px solid #111;"><span class="inside-middle"></span></div>

							    <div class="top_inf"><span class="span_name">Sports</span><span class="span_score"><span class="span_score">85</span></span></div>

							</div>

							<div class="progressbar"><!--Blue-->

							    <div class="bottom_bar"></div>

							    <div class="i_bar_s" style="border-right:1px solid #111;"><span class="inside-middle"></span></div>

							    <div class="top_inf"><span class="span_name">Sports</span><span class="span_score"><span class="span_score">85</span></span></div>

							</div>

						</div>

					</div>



					<div class="top3_container" style="overflow:visible;">

            			<div class="quality">

                            <span class="ag_span">Aggrigates</span><br>

                            <div class="round_div_violet">

                                <p class="round_diff">84%</p>

                            </div>

                            <div class="progressbar_l" style="background:#fff;"><!--violet-->

                                <div class="bottom_bar_l"></div>

                                <div id="t" class="i_bar_l_v" style="border-right:1px solid #111;width:70%;"><span class="inside-middle"></span></div>

                                <div class="top_inf_l"><span class="span_name">Rank Score</span><span class="span_score"><span class="span_score">750</span></span></div>

                            </div><br>

                            <div class="round_div_purple">

                                <p class="round_diff">70%</p>

                            </div>

                            <div class="progressbar_l" style="background:#fff;"><!--pink-->

                                <div class="bottom_bar_l"></div>

                                <div id="t" class="i_bar_l_p" style="border-right:1px solid #111;width:75%;"><span class="inside-middle"></span></div>

                                <div class="top_inf_l"><span class="span_name">Reputation</span><span class="span_score"><span class="span_score">75</span></span></div>

                            </div> <br>

                            <div class="round_div_orange">

                                <p class="round_diff">75%</p>

                            </div>

                            <div class="progressbar_l" style="background:#fff;"><!--orange-->

                                <div class="bottom_bar_l"></div>

                                <div id="t" class="i_bar_l_o" style="border-right:1px solid #111;width:85%"><span class="inside-middle"></span></div>

                                <div class="top_inf_l"><span class="span_name">Popularity</span><span class="span_score"><span class="span_score">100</span></span></div>

                            </div>

                        </div>

                          <div class="quality">

                            <span class="tr_span">Virtues</span><br>

                            <div class="block1" style="width:160px;">

                              <div class="hide_container">

                                <div class="small_circle" style="margin:5px 0 0 5px;">

                                  <span><a href="">H</a></span>

                                </div>

                                <div class="progressbar" style="margin: 4px 0 2px 0px;float:left;"><!--green-->

                                    <div class="bottom_bar"></div>

                                    <div class="i_bar_s" style="border-right:1px solid #111;width:85%;"><span class="inside-middle"></span></div>

                                    <div class="top_inf"><span class="span_name">Hardworking</span><span class="span_score"><span class="span_score">85</span></span></div>

                                </div>

                              </div> 

                              <div class="hide_container">

                                <div class="small_circle" style="margin:5px 0 0 5px;">

                                  <span><a href="">H</a></span>

                                </div>

                                <div class="progressbar" style="margin: 4px 0 2px 0px;float:left;"><!--green-->

                                    <div class="bottom_bar"></div>

                                    <div class="i_bar_s" style="border-right:1px solid #111;width:85%;"><span class="inside-middle"></span></div>

                                    <div class="top_inf"><span class="span_name">Hardworking</span><span class="span_score"><span class="span_score">85</span></span></div>

                                </div>

                              </div>

                              <div class="hide_container">

                                <div class="small_circle" style="margin:5px 0 0 5px;">

                                  <span><a href="">H</a></span>

                                </div>

                                <div class="progressbar" style="margin: 4px 0 2px 0px;float:left;"><!--green-->

                                    <div class="bottom_bar"></div>

                                    <div class="i_bar_s" style="border-right:1px solid #111;width:85%;"><span class="inside-middle"></span></div>

                                    <div class="top_inf"><span class="span_name">Hardworking</span><span class="span_score"><span class="span_score">85</span></span></div>

                                </div>

                              </div>

                              <div class="hide_container">

                                <div class="small_circle" style="margin:5px 0 0 5px;">

                                  <span><a href="">H</a></span>

                                </div>

                                <div class="progressbar" style="margin: 4px 0 2px 0px;float:left;"><!--green-->

                                    <div class="bottom_bar"></div>

                                    <div class="i_bar_s" style="border-right:1px solid #111;width:85%;"><span class="inside-middle"></span></div>

                                    <div class="top_inf"><span class="span_name">Hardworking</span><span class="span_score"><span class="span_score">85</span></span></div>

                                </div>

                              </div>

                              <div class="hide_container">

                                <div class="small_circle" style="margin:5px 0 0 5px;">

                                  <span><a href="">H</a></span>

                                </div>

                                <div class="progressbar" style="margin: 4px 0 2px 0px;float:left;"><!--green-->

                                    <div class="bottom_bar"></div>

                                    <div class="i_bar_s" style="border-right:1px solid #111;width:85%;"><span class="inside-middle"></span></div>

                                    <div class="top_inf"><span class="span_name">Hardworking</span><span class="span_score"><span class="span_score">85</span></span></div>

                                </div>

                              </div>

                            </div>

                            <div class="block3" id="toggle1">

                                <img id="show_img" class="show" style="margin:0 auto;" src="<?php echo base_url(); ?>images/downarw.png" height="25" width="25">

                                <img id="show_img_up" class="show" style="margin:0 auto;display:none;" src="<?php echo base_url(); ?>images/uparrow.png" height="25" width="25">

                            </div>

                        </div>

                       <div class="quality">

                            <span class="tr_span">Traits</span><br>

                            <div class="block1">

                              <div class="hide_container">

                                <div class="small_circle" style="margin:5px 0 0 5px;">

                                  <span><a href="">H</a></span>

                                </div>

                                <div class="progressbar" style="margin: 4px 0 2px 0px;float:left;"><!--green-->

                                    <div class="bottom_bar"></div>

                                    <div class="i_bar_g" style="border-right:1px solid #111;width:85%;"><span class="inside-middle"></span></div>

                                    <div class="top_inf"><span class="span_name">Hardworking</span><span class="span_score"><span class="span_score">85</span></span></div>

                                </div>

                              </div> 

                              <div class="hide_container">

                                <div class="small_circle" style="margin:5px 0 0 5px;">

                                  <span><a href="">H</a></span>

                                </div>

                                <div class="progressbar" style="margin: 4px 0 2px 0px;float:left;"><!--green-->

                                    <div class="bottom_bar"></div>

                                    <div class="i_bar_g" style="border-right:1px solid #111;width:85%;"><span class="inside-middle"></span></div>

                                    <div class="top_inf"><span class="span_name">Hardworking</span><span class="span_score"><span class="span_score">85</span></span></div>

                                </div>

                              </div>

                              <div class="hide_container">

                                <div class="small_circle" style="margin:5px 0 0 5px;">

                                  <span><a href="">H</a></span>

                                </div>

                                <div class="progressbar" style="margin: 4px 0 2px 0px;float:left;"><!--green-->

                                    <div class="bottom_bar"></div>

                                    <div class="i_bar_g" style="border-right:1px solid #111;width:85%;"><span class="inside-middle"></span></div>

                                    <div class="top_inf"><span class="span_name">Hardworking</span><span class="span_score"><span class="span_score">85</span></span></div>

                                </div>

                              </div>

                              <div class="hide_container">

                                <div class="small_circle" style="margin:5px 0 0 5px;">

                                  <span><a href="">H</a></span>

                                </div>

                                <div class="progressbar" style="margin: 4px 0 2px 0px;float:left;"><!--green-->

                                    <div class="bottom_bar"></div>

                                    <div class="i_bar_g" style="border-right:1px solid #111;width:85%;"><span class="inside-middle"></span></div>

                                    <div class="top_inf"><span class="span_name">Hardworking</span><span class="span_score"><span class="span_score">85</span></span></div>

                                </div>

                              </div>

                              <div class="hide_container">

                                <div class="small_circle" style="margin:5px 0 0 5px;">

                                  <span><a href="">H</a></span>

                                </div>

                                <div class="progressbar" style="margin: 4px 0 2px 0px;float:left;"><!--green-->

                                    <div class="bottom_bar"></div>

                                    <div class="i_bar_g" style="border-right:1px solid #111;width:85%;"><span class="inside-middle"></span></div>

                                    <div class="top_inf"><span class="span_name">Hardworking</span><span class="span_score"><span class="span_score">85</span></span></div>

                                </div>

                              </div>

                            </div>

                            <div class="block3" id="toggle1">

                                <img id="show_img" class="show" style="margin:0 auto;" src="<?php echo base_url(); ?>images/downarw.png" height="25" width="25">

                                <img id="show_img_up" class="show" style="margin:0 auto;display:none;" src="<?php echo base_url(); ?>images/uparrow.png" height="25" width="25">

                            </div>

                        </div>

                     <div class="quality">

                            <span class="tr_span">Skills</span><br>

                            <div class="block1">

                              <div class="hide_container">

                                <div class="small_circle" style="margin:5px 0 0 5px;">

                                  <span><a href="">H</a></span>

                                </div>

                                <div class="progressbar" style="margin: 4px 0 2px 0px;float:left;"><!--green-->

                                    <div class="bottom_bar"></div>

                                    <div class="i_bar_y" style="border-right:1px solid #111;width:85%;"><span class="inside-middle"></span></div>

                                    <div class="top_inf"><span class="span_name">Hardworking</span><span class="span_score"><span class="span_score">85</span></span></div>

                                </div>

                              </div> 

                              <div class="hide_container">

                                <div class="small_circle" style="margin:5px 0 0 5px;">

                                  <span><a href="">H</a></span>

                                </div>

                                <div class="progressbar" style="margin: 4px 0 2px 0px;float:left;"><!--green-->

                                    <div class="bottom_bar"></div>

                                    <div class="i_bar_y" style="border-right:1px solid #111;width:85%;"><span class="inside-middle"></span></div>

                                    <div class="top_inf"><span class="span_name">Hardworking</span><span class="span_score"><span class="span_score">85</span></span></div>

                                </div>

                              </div>

                              <div class="hide_container">

                                <div class="small_circle" style="margin:5px 0 0 5px;">

                                  <span><a href="">H</a></span>

                                </div>

                                <div class="progressbar" style="margin: 4px 0 2px 0px;float:left;"><!--green-->

                                    <div class="bottom_bar"></div>

                                    <div class="i_bar_y" style="border-right:1px solid #111;width:85%;"><span class="inside-middle"></span></div>

                                    <div class="top_inf"><span class="span_name">Hardworking</span><span class="span_score"><span class="span_score">85</span></span></div>

                                </div>

                              </div>

                              <div class="hide_container">

                                <div class="small_circle" style="margin:5px 0 0 5px;">

                                  <span><a href="">H</a></span>

                                </div>

                                <div class="progressbar" style="margin: 4px 0 2px 0px;float:left;"><!--green-->

                                    <div class="bottom_bar"></div>

                                    <div class="i_bar_y" style="border-right:1px solid #111;width:85%;"><span class="inside-middle"></span></div>

                                    <div class="top_inf"><span class="span_name">Hardworking</span><span class="span_score"><span class="span_score">85</span></span></div>

                                </div>

                              </div>

                              <div class="hide_container">

                                <div class="small_circle" style="margin:5px 0 0 5px;">

                                  <span><a href="">H</a></span>

                                </div>

                                <div class="progressbar" style="margin: 4px 0 2px 0px;float:left;"><!--green-->

                                    <div class="bottom_bar"></div>

                                    <div class="i_bar_y" style="border-right:1px solid #111;width:85%;"><span class="inside-middle"></span></div>

                                    <div class="top_inf"><span class="span_name">Hardworking</span><span class="span_score"><span class="span_score">85</span></span></div>

                                </div>

                              </div>

                            </div>

                            <div class="block3" id="toggle1">

                                <img id="show_img" class="show" style="margin:0 auto;" src="<?php echo base_url(); ?>images/downarw.png" height="25" width="25">

                                <img id="show_img_up" class="show" style="margin:0 auto;display:none;" src="<?php echo base_url(); ?>images/uparrow.png" height="25" width="25">

                            </div>

                        </div>

                    <div class="quality">

                            <span class="tr_span">Regard</span><br>

                            <div class="block1">

                              <div class="hide_container">

                                <div class="small_circle" style="margin:5px 0 0 5px;">

                                  <span><a href="">H</a></span>

                                </div>

                                <div class="progressbar" style="margin: 4px 0 2px 0px;float:left;"><!--green-->

                                    <div class="bottom_bar"></div>

                                    <div class="i_bar_o" style="border-right:1px solid #111;width:85%;"><span class="inside-middle"></span></div>

                                    <div class="top_inf"><span class="span_name">Hardworking</span><span class="span_score"><span class="span_score">85</span></span></div>

                                </div>

                              </div> 

                              <div class="hide_container">

                                <div class="small_circle" style="margin:5px 0 0 5px;">

                                  <span><a href="">H</a></span>

                                </div>

                                <div class="progressbar" style="margin: 4px 0 2px 0px;float:left;"><!--green-->

                                    <div class="bottom_bar"></div>

                                    <div class="i_bar_o" style="border-right:1px solid #111;width:85%;"><span class="inside-middle"></span></div>

                                    <div class="top_inf"><span class="span_name">Hardworking</span><span class="span_score"><span class="span_score">85</span></span></div>

                                </div>

                              </div>

                              <div class="hide_container">

                                <div class="small_circle" style="margin:5px 0 0 5px;">

                                  <span><a href="">H</a></span>

                                </div>

                                <div class="progressbar" style="margin: 4px 0 2px 0px;float:left;"><!--green-->

                                    <div class="bottom_bar"></div>

                                    <div class="i_bar_o" style="border-right:1px solid #111;width:85%;"><span class="inside-middle"></span></div>

                                    <div class="top_inf"><span class="span_name">Hardworking</span><span class="span_score"><span class="span_score">85</span></span></div>

                                </div>

                              </div>

                              <div class="hide_container">

                                <div class="small_circle" style="margin:5px 0 0 5px;">

                                  <span><a href="">H</a></span>

                                </div>

                                <div class="progressbar" style="margin: 4px 0 2px 0px;float:left;"><!--green-->

                                    <div class="bottom_bar"></div>

                                    <div class="i_bar_o" style="border-right:1px solid #111;width:85%;"><span class="inside-middle"></span></div>

                                    <div class="top_inf"><span class="span_name">Hardworking</span><span class="span_score"><span class="span_score">85</span></span></div>

                                </div>

                              </div>

                              <div class="hide_container">

                                <div class="small_circle" style="margin:5px 0 0 5px;">

                                  <span><a href="">H</a></span>

                                </div>

                                <div class="progressbar" style="margin: 4px 0 2px 0px;float:left;"><!--green-->

                                    <div class="bottom_bar"></div>

                                    <div class="i_bar_o" style="border-right:1px solid #111;width:85%;"><span class="inside-middle"></span></div>

                                    <div class="top_inf"><span class="span_name">Hardworking</span><span class="span_score"><span class="span_score">85</span></span></div>

                                </div>

                              </div>

                            </div>

                            <div class="block3" id="toggle1">

                                <img id="show_img" class="show" style="margin:0 auto;" src="<?php echo base_url(); ?>images/downarw.png" height="25" width="25">

                                <img id="show_img_up" class="show" style="margin:0 auto;display:none;" src="<?php echo base_url(); ?>images/uparrow.png" height="25" width="25">

                            </div>

                        </div>

                        <div class="right_slider">

                          <div id="appearence_right" class="quality" style="margin-left:4px;display:none;">

                            <span class="tr_span">Apperence</span><br>

                            <div class="block1">

                              <div class="hide_container">

                                <div class="small_circle" style="margin:5px 0 0 5px;">

                                  <span><a href="">H</a></span>

                                </div>

                                <div class="progressbar" style="margin: 4px 0 2px 0px;float:left;"><!--green-->

                                    <div class="bottom_bar"></div>

                                    <div class="i_bar_s" style="border-right:1px solid #111;width:85%;"><span class="inside-middle"></span></div>

                                    <div class="top_inf"><span class="span_name">Hardworking</span><span class="span_score"><span class="span_score">85</span></span></div>

                                </div>

                              </div> 

                              <div class="hide_container">

                                <div class="small_circle" style="margin:5px 0 0 5px;">

                                  <span><a href="">H</a></span>

                                </div>

                                <div class="progressbar" style="margin: 4px 0 2px 0px;float:left;"><!--green-->

                                    <div class="bottom_bar"></div>

                                    <div class="i_bar_s" style="border-right:1px solid #111;width:85%;"><span class="inside-middle"></span></div>

                                    <div class="top_inf"><span class="span_name">Hardworking</span><span class="span_score"><span class="span_score">85</span></span></div>

                                </div>

                              </div>

                              <div class="hide_container">

                                <div class="small_circle" style="margin:5px 0 0 5px;">

                                  <span><a href="">H</a></span>

                                </div>

                                <div class="progressbar" style="margin: 4px 0 2px 0px;float:left;"><!--green-->

                                    <div class="bottom_bar"></div>

                                    <div class="i_bar_s" style="border-right:1px solid #111;width:85%;"><span class="inside-middle"></span></div>

                                    <div class="top_inf"><span class="span_name">Hardworking</span><span class="span_score"><span class="span_score">85</span></span></div>

                                </div>

                              </div>

                              <div class="hide_container">

                                <div class="small_circle" style="margin:5px 0 0 5px;">

                                  <span><a href="">H</a></span>

                                </div>

                                <div class="progressbar" style="margin: 4px 0 2px 0px;float:left;"><!--green-->

                                    <div class="bottom_bar"></div>

                                    <div class="i_bar_s" style="border-right:1px solid #111;width:85%;"><span class="inside-middle"></span></div>

                                    <div class="top_inf"><span class="span_name">Hardworking</span><span class="span_score"><span class="span_score">85</span></span></div>

                                </div>

                              </div>

                              <div class="hide_container">

                                <div class="small_circle" style="margin:5px 0 0 5px;">

                                  <span><a href="">H</a></span>

                                </div>

                                <div class="progressbar" style="margin: 4px 0 2px 0px;float:left;"><!--green-->

                                    <div class="bottom_bar"></div>

                                    <div class="i_bar_s" style="border-right:1px solid #111;width:85%;"><span class="inside-middle"></span></div>

                                    <div class="top_inf"><span class="span_name">Hardworking</span><span class="span_score"><span class="span_score">85</span></span></div>

                                </div>

                              </div>

                            </div>

                            <div class="block3" id="toggle1">

                                <img id="show_img" class="show" style="margin:0 auto;" src="<?php echo base_url(); ?>images/downarw.png" height="25" width="25">

                                <img id="show_img_up" class="show" style="margin:0 auto;display:none;" src="<?php echo base_url(); ?>images/uparrow.png" height="25" width="25">

                            </div>

                        </div>

                        <img class="right_show" style="float:right;" src="<?php echo base_url(); ?>images/side_arrow.png" height="15" width="15">

                        </div>

                    </div>

                    <!-- static -->  

					<div class="middle_fake">

						<p>Member Comparison (240k)</p>

					</div>

					<div class="middle_container">

						<div class="select_area">

							<form action="#" name="trait_form" id="trait_form">

								<div class="selectbox1">

									<span class="sbox_span">Traits</span><br>

									<?php if(!empty($trait_info)): ?>

									<select name="traits_id">

										<?php foreach ($trait_info as $key=>$trait): ?>

										<option value="<?php echo $encryptObj->get_encrypted_code($trait->id);?>"><?php echo $trait->sub_category; ?></option>

										<?php endforeach;?>

									</select>

									<?php endif;?>

								</div>

								<div class="selectbox2">

									<span class="sbox_span">Order</span><br>

									<select name="order">

										<option value="1" selected="selected">Highest</option>

										<option value="0">Lowest</option>

									</select>

								</div>

								<a href="#" id="submit_trait_btn"><div class="btn_div">Submit</div></a>

							</form>
							<form id="select_person_form">
								<div class="selectbox3">

									<span class="sbox_span">Select Person</span><br>

									<input type="text">
								</div>

								<a href="#" target="_blank"><div class="btn_div">Submit</div></a>
							</form>	

						</div>

						

						<div class="middle_left"></div><!-- load by ajax -->

						

						<div class="middle_right">

							<div class="progress_extended" style="margin-left:20px;">

									<img src="<?php echo base_url(); ?>images/jason_dunn.png" height="50" width="50" />

									<div class="pe_details">

										<span class="pe_span_large">Jason Dunn</span>

										<span class="pe_span_small">New York</span>

										<span class="pe_span_small">1/15/13</span>

									</div>

									<div class="pe_progress_container">

										<div class="progressbar" style="float:right;margin:5px 5px 0 0px;"><!--Violet-->

								    		<div class="bottom_bar"></div>

								    		<div class="i_bar_p" style="border-right:1px solid #111;width:70%;"><span class="inside-middle"></span></div>

								    		<div class="top_inf"><span class="span_name">Rank</span><span class="span_score"><span class="span_score">1785</span></span></div>

										</div>

										<div class="progressbar" style="float:right;margin:5px 5px 0 0px;"><!--green-->

								    		<div class="bottom_bar"></div>

								    		<div class="i_bar_g" style="border-right:1px solid #111;width:85%;"><span class="inside-middle"></span></div>

								    		<div class="top_inf"><span class="span_name">Hardworking</span><span class="span_score"><span class="span_score">85</span></span></div>

										</div>

									</div>

									

							</div>

							<div class="graph_distribute" id="graph_distribute">

							

							</div>

							<div id="graph_trait" class="graph_trait">

							

							</div>

						</div>

					</div>



					<div class="info_wrapper">

						<div class="latest_member">							

							<div class="round_div_purple_top">

								<p class="round_span_small"><?php echo date('m/d/y',strtotime($latestuser_login_info[0]->c_date));?></p>

								<p class="round_span_small"><?php echo date('h:ma',strtotime($latestuser_login_info[0]->c_date));?></p>

							</div>

							<div class="top_best_sub">

							<div class="heading">

								<span class="head_large_span">Latest Member</span>

							</div>

							<div class="personality">

								<img src="<?php echo base_url().'uploads/'.$latestuser_basic_info[0]->pic_path; ?>" height="100" width="70" />

									<div class="personality_info">

									<span class="plarge_span"><?php echo $latestuser_basic_info[0]->f_name.' '.$latestuser_basic_info[0]->l_name; ?></span>

									<span class="psmall_span"><?php echo $latest_user_location[0]->current_location_1; ?> &nbsp <?php echo date('m/d/Y',strtotime($latestuser_basic_info[0]->birthday)); ?></span>

										<div class="progressbar" ><!--Violet-->

										<?php

											$w = 0;

											$avgPoint = $latest_user_traits[0]->sub_category_avg_point;

											$w = abs($avgPoint).'%';

											if($avgPoint < 0) {

												$cname = 'i_bar_red';

											}else {

												$cname = 'i_bar_o';

											} 

										?>

							    		<div class="bottom_bar"></div>

							    		<div class="i_bar_p" style="border-right:1px solid #111;width:70%;"><span class="inside-middle"></span></div>

							    		<div class="top_inf"><span class="span_name">Rank</span><span class="span_score"><span class="span_score">1785</span></span></div>

									</div>

									<div class="progressbar"><!--green-->

							    		<div class="bottom_bar"></div>

							    		<div class="<?php echo $cname;?>" style="border-right:1px solid #111;width:<?php echo $w; ?>;"><span class="inside-middle"></span></div>

							    		<div class="top_inf">

							    			<span class="span_name"><?php echo $latest_user_traits[0]->sub_category_value;?></span>

							    			<span class="span_score"><span class="span_score"><?php echo $latest_user_traits[0]->sub_category_avg_point;?></span></span>

							    		</div>

									</div>

									</div>	

							</div>

						</div>

						</div>

						<div class="highest_traited">

							

							<div class="top_best_sub" style="margin-left:45px;">

							<div class="heading">

								<span class="head_large_span">Highest Traited</span>

							</div>

							<div class="personality">

								<img src="<?php echo base_url(); ?>images/boy_george.png" height="100" width="70" />

									<div class="personality_info">

									<span class="plarge_span">Boy George</span>

									<span class="psmall_span">New York &nbsp 1/15/11</span>

										<div class="progressbar"><!--Violet-->

								    		<div class="bottom_bar"></div>

								    		<div class="i_bar_p" style="border-right:1px solid #111;width:70%;"><span class="inside-middle"></span></div>

								    		<div class="top_inf"><span class="span_name">Rank</span><span class="span_score"><span class="span_score">1785</span></span></div>

										</div>

										<div class="progressbar"><!--green-->

								    		<div class="bottom_bar"></div>

								    		<div class="i_bar_o" style="border-right:1px solid #111;width:85%;"><span class="inside-middle"></span></div>

								    		<div class="top_inf"><span class="span_name">Hardworking</span><span class="span_score"><span class="span_score">85</span></span></div>

										</div>

									</div>	

							</div>

						</div>

						</div>

						<div class="member_spotlight">

							

							<div class="top_best_sub" style="margin-left:45px;">

							<div class="heading">

								<span class="head_large_span">Member Spotlight</span>

							</div>

							<div class="personality">

								<img src="<?php echo base_url(); ?>images/steve_buscemi.png" height="100" width="70" />

									<div class="personality_info">

									<span class="plarge_span">Steve Buscemi</span>

									<span class="psmall_span">New York &nbsp 1/15/11</span>

										<div class="progressbar"><!--Violet-->

									    		<div class="bottom_bar"></div>

									    		<div class="i_bar_p" style="border-right:1px solid #111;"><span class="inside-middle"></span></div>

									    		<div class="top_inf"><span class="span_name">Rank</span><span class="span_score"><span class="span_score">1875</span></span></div>

											</div>

											<div class="progressbar"><!--Orange-->

									    		<div class="bottom_bar"></div>

									    		<div class="i_bar_o" style="border-right:1px solid #111;"><span class="inside-middle"></span></div>

									    		<div class="top_inf"><span class="span_name">Popularity</span><span class="span_score"><span class="span_score">20</span></span></div>

										</div> 

									</div>	

							</div>

						</div>

						</div>

					</div>



					<div class="bottom_container">

						<div class="heading_large"><span class="head_large_span">Latest Gossip About Member</span></div>

						<div class="gossip_wrap">

							<div class="spec_circle_sky" style=" margin: 50px 0 0 -10px;">

								<p class="p_sky">3</p>

							</div>

							<div class="gossiper">

								<img src="<?php echo base_url(); ?>images/neil_p_harris.png" height="100" width="70" />

									<div class="personality_info">

											<span class="plarge_span">Neil P. Harris</span><br>

											<span class="psmall_span">New York &nbsp 1/15/11</span>

										<div class="progressbar"><!--Green-->

									    		<div class="bottom_bar"></div>

									    		<div class="i_bar_g" style="border-right:1px solid #111;width:90%"><span class="inside-middle"></span></div>

									    		<div class="top_inf"><span class="span_name">Hardworking</span><span class="span_score"><span class="span_score">75</span></span></div>

											</div>

											<div class="progressbar"><!--violet-->

									    		<div class="bottom_bar"></div>

									    		<div class="i_bar_p" style="border-right:1px solid #111;width:75%"><span class="inside-middle"></span></div>

									    		<div class="top_inf"><span class="span_name">Rank</span><span class="span_score"><span class="span_score">1875</span></span></div>

										</div>  

									</div>	

							</div>

							<span class="arrow"></span>

							<div class="gossip_topic">

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

							    		<div id="like_val" class="i_bar_h" style="border-right:2px solid #111;background:#00A650;"><span class="inside-middle_h"></span></div>

							    		<div class="top_info_h"></div>

									</div> 

									<div id="dislike_div" style="cursor:pointer;"><img src="<?php echo base_url(); ?>images/tdown.png"></div>

								</div>			

							</div>

							<span class="arrow2"></span>

							<div class="gossiper">

								<img src="<?php echo base_url(); ?>images/boy_george.png" height="100" width="70" />

									<div class="gossiper_info">

									<span class="plarge_span">Boy George</span>

									<span class="psmall_span">New York &nbsp 1/15/11</span>

										<div class="progressbar"><!--Green-->

									    		<div class="bottom_bar"></div>

									    		<div class="i_bar_g" style="border-right:1px solid #111;width:90%"><span class="inside-middle"></span></div>

									    		<div class="top_inf"><span class="span_name">Hardworking</span><span class="span_score"><span class="span_score">75</span></span></div>

											</div>

											<div class="progressbar"><!--violet-->

									    		<div class="bottom_bar"></div>

									    		<div class="i_bar_p" style="border-right:1px solid #111;width:75%"><span class="inside-middle"></span></div>

									    		<div class="top_inf"><span class="span_name">Rank</span><span class="span_score"><span class="span_score">1875</span></span></div>

										</div> 

									</div>	

							</div>

						</div>

						<div style="width:940px;height:70px;padding:10px;text-align:center;">

							<div style="float:left;margin:0 0 0 185px;"><p style="font-style:italic;font-weight:bold;color:#000;font-size:16px;">Didn't find someone you were looking for?</p></div>

							<div class="leave_gossip">

								<a href="#" style="text-decoration:none;color:#2E3192;"><p style="margin:5px 0 0 0;">Leave gossip and invite them to join</p></div></a>

						</div>

					</div>



				</div>

		<!--</div>-->

				<!--Footer>-->

 <?php include 'footer.php' ?>