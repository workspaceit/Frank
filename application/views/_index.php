<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html><meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
				<title>Frank</title>
				<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css">
				<script type="text/javascript" src="<?php echo base_url(); ?>jQuery/jquery-1.8.2.js"></script>
				<script type="text/javascript" src="<?php echo base_url(); ?>jQuery/szcript.js"></script>
				<script  type="text/javascript" src="<?php echo base_url(); ?>jQuery/jquery.jqplot.min.js"></script>
				<script  type="text/javascript" src="<?php echo base_url(); ?>jQuery/jqplot.highlighter.min.js"></script>
			    <script  type="text/javascript" src="<?php echo base_url();?>jQuery/jqplot.dateAxisRenderer.min.js"></script>
				<script  type="text/javascript" src="<?php echo base_url(); ?>js/normal_distribution.js"></script>
				<script  type="text/javascript" src="<?php echo base_url(); ?>js/graph_trait.js"></script>
				
 <body onload="drawszlider(121, 56);">

		<div id="top">
			<div class="logo_div">
				<img src="<?php echo base_url(); ?>images/logo.png" width="290" height="140">
			</div>
			<div class="searchBar">
				<div class="searcharea">
					<input type="text" />
					<span><a href="#"><div class="btn_search">Submit</div></a></span>
				</div>
			</div>
			<div class="reg_div">
					<span><a href="#"><div class="btn_signin">Sign in</div></a></span>
					<span><a href="<?php echo base_url().'signup';?>"><div class="btn_signup">Sign Up</div></a></span>
			</div>
			
		</div>
		<!--<div id="contentwrap">-->
			<div class="advertise_left">
				<div class="advertise1">
					<p>Advertisement</p>
				</div>
				<div class="advertise1">
					<p>Advertisement</p>
				</div>
				<div class="advertise1">
					<p>Advertisement</p>
				</div>
				<div class="advertise1">
					<p>Advertisement</p>
				</div>
			</div>
			<div class="advertise_right">
				<div class="advertise2">
					<p>Advertisement</p>
				</div>
				<div class="advertise2">
					<p>Advertisement</p>
				</div>
				<div class="advertise2">
					<p>Advertisement</p>
				</div>
				<div class="advertise2">
					<p>Advertisement</p>
				</div>
			</div>
				<div id="content">
					<div class="top_container">
						<div class="top_info">
							<div class="top_p">
								<p style="padding:3px; line-height:17px;" >
									This is a site for everyone brave enough to put that mirror</br>
									in fornt of you and be hudge, not on your skill or your </br>
									worldview, just how you are as a frined and a member of </br>
									society. Fell Free to browse and look at anyones reputation </br>
									but remember, if you want to judge, you have to be open </br>
									to be judge too. Leave somthing good about a family </br>
									member or somthing nasty about a classmate,
								</p>
								
							</div>
						</div>
						
						<div class="top_status">
							<div class="status1">
								<div class="statePara">
									<span>25,5455,24 People</span>
								</div>
							</div>
							<div class="status2">
								<div class="statePara">
									<span>25,5455,24 People</span>
								</div>
							</div>
							<div class="status3">
								<div class="statePara">
									<span>25,5455,24 People</span>
								</div>
							</div>
						
						</div>
						
						<div class="top_best">
							<div class="heading">
							</div>
							<div class="personality">
								<img src="<?php echo base_url(); ?>images/george_clooney.png" height="100" width="70" />
									<div class="personality_info">
									<span class="plarge_span">George Clooney</span>
									<span class="psmall_span">New York &nbsp 1/15/11</span>
										<div id="szlider">
											<div id="szliderbar">
											</div>
											<div id="szazalek">
											</div>
										</div>
										<div id="szlider">
											<div id="szliderbar">
											</div>
											<div id="szazalek">
											</div>
										</div>
									</div>	
							</div>
						</div>
					</div>
					<div class="infoBar">
						<p>My City Profile</p>
					</div>
					<div class="top2_container">
						<div class="demobox">
							<span class="demobox_span">New York</span>
							<div class="area1">
							</div>
							<div class="area1">
							</div>
							<div class="area1">
							</div>
							<div class="area1">
							</div>
						</div>
						<div class="top2_finest">
							<div class="heading">
							</div>
							<div class="personality">
								<img src="<?php echo base_url(); ?>images/neil_p_harris.png" height="100" width="70" />
									<div class="personality_info">
									<span class="plarge_span">Neil P. Harris</span>
									<span class="psmall_span">New York &nbsp 1/15/11</span>
										<div id="szlider">
											<div id="szliderbar">
											</div>
											<div id="szazalek">
											</div>
										</div>
										<div id="szlider">
											<div id="szliderbar">
											</div>
											<div id="szazalek">
											</div>
										</div>
									</div>	
							</div>
							<div class="specprogress">
								<img src="<?php echo base_url(); ?>images/jason_dunn.png" height="50" width="50" />
								<span class="specp_span">Jason Dunn</span><span class="specp_small_span">New York</span>
								<div id="szlider">
										<div id="szliderbar">
										</div>
										<div id="szazalek">
										</div>
								</div>
							</div>
						</div>
						
						<div class="top2_popular">
							<div class="heading">
							</div>
							<div class="specprogress">
								<img src="<?php echo base_url(); ?>images/diane_neal.png" height="50" width="50" />
								<span class="specp_span">Diane Neal</span><span class="specp_small_span">New York</span>
								<div id="szlider">
										<div id="szliderbar">
										</div>
										<div id="szazalek">
										</div>
								</div>
							</div>
							<div class="specprogress">
								<img src="<?php echo base_url(); ?>images/michael_farber.png" height="50" width="50" />
								<span class="specp_span">Michael Farber</span><span class="specp_small_span">New York</span>
								<div id="szlider">
										<div id="szliderbar">
										</div>
										<div id="szazalek">
										</div>
								</div>
							</div>
							<div class="specprogress">
								<img src="<?php echo base_url(); ?>images/jason_dunn.png" height="50" width="50" />
								<span class="specp_span">Jason Dunn</span><span class="specp_small_span">New York</span>
								<div id="szlider">
										<div id="szliderbar">
										</div>
										<div id="szazalek">
										</div>
								</div>
							</div>
						</div>
						<div class="demobox2">
							<span class="demobox_span">New York</span><br>
							<div class="area1">
							</div>
							<div class="area1">
							</div>
							<div class="area1">
							</div>
							<div class="area1">
							</div>
						</div>
					</div>

					<div class="top3_container">
						<div class="quality">
							<span class="ag_span">Aggrigates</span><br>
							<div class="round_div_violet">
							</div>
							<div class="agprogress_violet">
							</div><br>
							<div class="round_div_purple">
							</div>
							<div class="agprogress_purple">
							</div><br>
							<div class="round_div_orange">
							</div>
							<div class="agprogress_orange">
							</div>
						</div>
						<div onclick="this.style.height=(this.style.height=='165px'?'auto':'165px');" class="quality">
							<span class="vi_span">Virtues</span><br>
							<div class="progress_demo">
							</div>
							<div class="progress_demo">
							</div>
							<div class="progress_demo">
							</div>
							<div class="progress_demo">
							</div>
							<div class="progress_demo">
							</div>
							<div class="progress_demo">
							</div>
						</div>
						<div onclick="this.style.height=(this.style.height=='165px'?'auto':'165px');" class="quality">
							<span class="tr_span">Traits</span><br>
							<div class="progress_demo">
							</div>
							<div class="progress_demo">
							</div>
							<div class="progress_demo">
							</div>
							<div class="progress_demo">
							</div>
							<div class="progress_demo">
							</div>
							<div class="progress_demo">
							</div>
						</div>
						<div onclick="this.style.height=(this.style.height=='165px'?'auto':'165px');" class="quality">
							<span class="sk_span">Skills</span><br>
							<div class="progress_demo">
							</div>
							<div class="progress_demo">
							</div>
							<div class="progress_demo">
							</div>
							<div class="progress_demo">
							</div>
							<div class="progress_demo">
							</div>
							<div class="progress_demo">
							</div>
						</div>
						<div onclick="this.style.height=(this.style.height=='165px'?'auto':'165px');" class="quality">
							<span class="re_span">Regard</span><br>
							<div class="progress_demo">
							</div>
							<div class="progress_demo">
							</div>
							<div class="progress_demo">
							</div>
							<div class="progress_demo">
							</div>
							<div class="progress_demo">
							</div>
							<div class="progress_demo">
							</div>
						</div>
					</div>
					
					<div class="middle_container">
						<div class="select_area">
							<div class="selectbox1">
								<span class="sbox_span">Traits</span><br>
								<select>
									<option>Hardworking</option>
								</select>
							</div>
							<div class="selectbox2">
								<span class="sbox_span">Order</span><br>
								<select>
									<option>Highest</option>
								</select>
							</div>
							<span class="anchor_span"><a href="#" target="_blank"><div class="btn_div">Submit</div></a></span>
							<div class="selectbox3">
								<span class="sbox_span">Select Person</span><br>
								<select>
									<option></option>
								</select>
							</div>
							<span class="anchor_span"><a href="#" target="_blank"><div class="btn_div">Submit</div></a></span>
						</div>
						<div class="middle_left">
							<div class="progress_extended">
								<img src="<?php echo base_url(); ?>images/jason_dunn.png" height="50" width="50" />
								<div class="pe_details">
									<span class="pe_span_large">Jason Dunn</span>
									<span class="pe_span_small">New York</span>
									<span class="pe_span_small">1/15/13</span>
								</div>
								<div class="progress_demo1">
								</div>
								<div class="progress_demo1">
								</div>
								
							</div>
							<div class="progress_extended">
								<img src="<?php echo base_url(); ?>images/boy_george.png" height="50" width="50" />
								<div class="pe_details">
									<span class="pe_span_large">Boy George</span>
									<span class="pe_span_small">New York</span>
									<span class="pe_span_small">1/15/13</span>
								</div>
								<div class="progress_demo1">
								</div>
								<div class="progress_demo1">
								</div>
							</div>
							<div class="progress_extended">
								<img src="<?php echo base_url(); ?>images/michael_farber.png" height="50" width="50" />
								<div class="pe_details">
									<span class="pe_span_large">michael_farber</span>
									<span class="pe_span_small">New York</span>
									<span class="pe_span_small">1/15/13</span>
								</div>
								<div class="progress_demo1">
								</div>
								<div class="progress_demo1">
								</div>
							</div>
							<div class="progress_extended">
								<img src="<?php echo base_url(); ?>images/harry_hefner.png" height="50" width="50" />
								<div class="pe_details">
									<span class="pe_span_large">Harry Hefner</span>
									<span class="pe_span_small">New York</span>
									<span class="pe_span_small">1/15/13</span>
								</div>
								<div class="progress_demo1">
								</div>
								<div class="progress_demo1">
								</div>
							</div>
							<div class="progress_extended">
								<img src="<?php echo base_url(); ?>images/heath_ledger.png" height="50" width="50" />
								<div class="pe_details">
									<span class="pe_span_large">Heath Ledger</span>
									<span class="pe_span_small">New York</span>
									<span class="pe_span_small">1/15/13</span>
								</div>
								<div class="progress_demo1">
								</div>
								<div class="progress_demo1">
								</div>
							</div>
							<div class="progress_extended">
								<img src="<?php echo base_url(); ?>images/jerry_seinfeld.png" height="50" width="50" />
								<div class="pe_details">
									<span class="pe_span_large">Jerry Seinfeld</span>
									<span class="pe_span_small">New York</span>
									<span class="pe_span_small">1/15/13</span>
								</div>
								<div class="progress_demo1">
								</div>
								<div class="progress_demo1">
								</div>
							</div>
							<div class="progress_extended">
								<img src="<?php echo base_url(); ?>images/richard_gere.png" height="50" width="50" />
								<div class="pe_details">
									<span class="pe_span_large">Richard Gere</span>
									<span class="pe_span_small">New York</span>
									<span class="pe_span_small">1/15/13</span>
								</div>
								<div class="progress_demo1">
								</div>
								<div class="progress_demo1">
								</div>
							</div>
							<div class="progress_extended">
								<img src="<?php echo base_url(); ?>images/steve_buscemi.png" height="50" width="50" />
								<div class="pe_details">
									<span class="pe_span_large">Steve Buscemi</span>
									<span class="pe_span_small">New York</span>
									<span class="pe_span_small">1/15/13</span>
								</div>
								<div class="progress_demo1">
								</div>
								<div class="progress_demo1">
								</div>
							</div>
							<div class="progress_extended">
								<img src="<?php echo base_url(); ?>images/jason_dunn.png" height="50" width="50" />
								<div class="pe_details">
									<span class="pe_span_large">Jason Dunn</span>
									<span class="pe_span_small">New York</span>
									<span class="pe_span_small">1/15/13</span>
								</div>
								<div class="progress_demo1">
								</div>
								<div class="progress_demo1">
								</div>
							</div>
						</div>
						<div class="middle_right">
							<div class="progress_extended">
								<img src="<?php echo base_url(); ?>images/ellen_degeneres.png" height="50" width="50" />
								<div class="pe_details">
									<span class="pe_span_large">Ellen Degeneres</span>
									<span class="pe_span_small">New York</span>
									<span class="pe_span_small">1/15/13</span>
								</div>
								<div class="progress_demo1">
								</div>
								<div class="progress_demo1">
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
							<div class="heading">
							</div>
							<div class="personality">
								<img src="<?php echo base_url(); ?>images/ellen_degeneres.png" height="100" width="70" />
									<div class="personality_info">
									<span class="plarge_span">Ellen Degeneres</span>
									<span class="psmall_span">New York &nbsp 1/15/11</span>
										<div id="szlider">
											<div id="szliderbar">
											</div>
											<div id="szazalek">
											</div>
										</div>
										<div id="szlider">
											<div id="szliderbar">
											</div>
											<div id="szazalek">
											</div>
										</div>
									</div>	
							</div>
						</div>
						<div class="highest_traited">
							<div class="heading">
							</div>
							<div class="personality">
								<img src="<?php echo base_url(); ?>images/boy_george.png" height="100" width="70" />
									<div class="personality_info">
									<span class="plarge_span">Boy George</span>
									<span class="psmall_span">New York &nbsp 1/15/11</span>
										<div id="szlider">
											<div id="szliderbar">
											</div>
											<div id="szazalek">
											</div>
										</div>
										<div id="szlider">
											<div id="szliderbar">
											</div>
											<div id="szazalek">
											</div>
										</div>
									</div>	
							</div>
						</div>
						<div class="member_spotlight">
							<div class="heading">
							</div>
							<div class="personality">
								<img src="<?php echo base_url(); ?>images/steve_buscemi.png" height="100" width="70" />
									<div class="personality_info">
									<span class="plarge_span">Steve Buscemi</span>
									<span class="psmall_span">New York &nbsp 1/15/11</span>
										<div id="szlider">
											<div id="szliderbar">
											</div>
											<div id="szazalek">
											</div>
										</div>
										<div id="szlider">
											<div id="szliderbar">
											</div>
											<div id="szazalek">
											</div>
										</div>
									</div>	
							</div>
						</div>
					</div>

					<div class="bottom_container">
						<div class="heading_large"><span class="head_large_span">Latest Gossip About Member</span></div>
						<div class="gossip_wrap">
							<div class="gossiper">
								<img src="<?php echo base_url(); ?>images/boy_george.png" height="100" width="70" />
									<div class="gossiper_info">
									<span class="plarge_span">Boy George</span>
									<span class="psmall_span">New York &nbsp 1/15/11</span>
										<div id="szlider">
											<div id="szliderbar">
											</div>
											<div id="szazalek">
											</div>
										</div>
										<div id="szlider">
											<div id="szliderbar">
											</div>
											<div id="szazalek">
											</div>
										</div>
									</div>	
							</div>
							<span class="arrow"></span>
							<div class="gossip_topic">
								<div class="gossip_thread">
									<span class="head_large_span">Gossip Thread:</span>
									<input type="text" />
									<textarea></textarea>
								</div>	
							</div>
							<span class="arrow2"></span>
							<div class="gossiper">
								<img src="<?php echo base_url(); ?>images/boy_george.png" height="100" width="70" />
									<div class="gossiper_info">
									<span class="plarge_span">Boy George</span>
									<span class="psmall_span">New York &nbsp 1/15/11</span>
										<div id="szlider">
											<div id="szliderbar">
											</div>
											<div id="szazalek">
											</div>
										</div>
										<div id="szlider">
											<div id="szliderbar">
											</div>
											<div id="szazalek">
											</div>
										</div>
									</div>	
							</div>
						</div>
					</div>
				</div>
		<!--</div>-->
		<div id="footer">
			<span><a href="#"><div class="btn_footer">About frank</div></a></span>
			<span><a href="#"><div class="btn_footer">&nbsp&nbspFAQ&nbsp&nbsp</div></a></span>
			<span><a href="#"><div class="btn_footer">Contact Us</div></a></span>
			<span><a href="#"><div class="btn_footer">Site Map</div></a></span>
			<span><a href="#"><div class="btn_footer">Terms & Service</div></a></span>
			<span><a href="#"><div class="btn_footer">Privacy Policy</div></a></span>
		</div>

</body>
</html>