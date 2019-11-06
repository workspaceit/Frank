<?php include 'admin_header.php' ?>
<script>
    function add_trait_to_col_one(total_trait){
        var i=1;
        while(i<=total_trait){
            var html_content="<div class='trait_p'><p>Trait "+i+" :</p></div>";
            $('#static_traits_col_1').append(html_content);
            i++;
       }
    }
    $(document).ready(function() {
    var max_trait=parseInt($('#max_trait').val());
   add_trait_to_col_one(max_trait);
    
});
function initiate_category(dynamic_id)
{
    
    var h=$("#"+"category_" + dynamic_id + "_value").val();
    console.log(h);
    
}
function initiate_sub_category(dynamic_id)
{
    var h=$("#"+"sub_category_" + dynamic_id + "_value").val();
    console.log(h);
}
</script>

<?php include 'admin_dashboard.php' ?>
<div class="admin_panel">
	<?php include 'top_container.php' ?>
	<div class="infoBar" style="height:20px;"><p>Admin Page</p></div>
	<div class="admin_container">
		<div class="criteria">
			<div class="head_div">
				<p class="head_div_desc">Trait Categories titles</p>
			</div>
			<div class="traits">
				<div class="trait_container">
					<div class="trait_s">
						<div class="trait_p">
							<p>Category:</p>
						</div>
						<div class="trait_i">
							<input type="text" disabled="disabled">
						</div>
					</div>
					<div class="trait_s">
						<div class="trait_p">
							<p>Trait1:</p>
						</div>
						<div class="trait_i">
							<input type="text" disabled="disabled">
						</div>
					</div>
					<div class="trait_s">
						<div class="trait_p">
							<p>Trait2:</p>
						</div>
						<div class="trait_i">
							<input type="text" disabled="disabled">
						</div>
					</div>
					<div class="trait_s">
						<div class="trait_p">
							<p>Trait3:</p>
						</div>
						<div class="trait_i">
							<input type="text" disabled="disabled">
						</div>
					</div>
					<br>
					<div class="trait_s_large">
						<div id="static_traits_col_1" class="trait_p_seq">
							<div class="trait_p">
								<p>Category:</p>
							</div>
						</div>
                                             <?php 
                                                $temp_category='';
                                                $i=0;
                                                $col_size=0;
                                                $max_lenght=0;
                                                $temp_lenght=0;
                                                $dynamic_id=1;
                                                
                                                foreach($all_data as $RowData) { 
                                                   
                                                 
                                                    
                                                  if($temp_category==$RowData->category) { 
                                                      $temp_lenght++;
                                              ?>
                                                            <div class="trait_i">
                                                                    <input type="text" value="<?php echo $RowData->sub_category; ?>" id="sub_category_<?php echo $dynamic_id;?>_value"  onclick="initiate_sub_category(<?php echo $dynamic_id;?>)">
                                                            </div>
                                               <?php $dynamic_id++; } else { 
                                                    if($max_lenght<=$temp_lenght) {
                                                        $max_lenght=$temp_lenght;
                                                    }   
                                                         $temp_lenght=0;
                                                         
                                                   if($temp_category!=""){ ?>
                                                            <div class="trait_i">
                                                                    <a href="#"><div class="btn_trait"><span>Add Trait</span></div></a>
                                                                    <a href="#"><div class="btn_trait"><span>Save Edit</span></div></a>
                                                            </div>
                                                   </div>
                                                <?php } ?>
                                                <?php 
                                                    $temp_category=$RowData->category;
                                                    $col_size++;
                                                ?>
                                      
                                                    <div class="trait_seq">
                                                            <div class="trait_i">
                                                                <input type="text" value="<?php echo $RowData->category; ?>" id="category_<?php echo $dynamic_id;?>_value"  onclick="initiate_category(<?php echo $dynamic_id;?>)">
                                                            </div>
                                                        <?php $dynamic_id++;?>
                                                            <div class="trait_i">
                                                                <input type="text" value="<?php echo $RowData->sub_category;?>" id="sub_category_<?php echo $dynamic_id;?>_value" onclick="initiate_sub_category(<?php echo $dynamic_id;?>)">
                                                            </div>
                                                            
                                                           
                                                    
                                                <?php $dynamic_id++; } ?>
                                                 <?php if($i==sizeof($all_data)-1){ ?>
                                                        <div class="trait_i">
                                                                    <a href="#"><div class="btn_trait"><span>Add Trait</span></div></a>
                                                                    <a href="#"><div class="btn_trait"><span>Save Edit</span></div></a>
                                                            </div>
                                                        </div>
                                               <?php  }  ?>
                                             <?php $i++; } ?>
<!--						<div class="trait_seq">
							<div class="trait_i">
								<input type="text" disabled="disabled">
							</div>
							<div class="trait_i">
								<input type="text" disabled="disabled">
							</div>
							<div class="trait_i">
								<input type="text" disabled="disabled">
							</div>
							<div class="trait_i">
								<a href="#"><div class="btn_trait"><span>Add Trait</span></div></a>
								<a href="#"><div class="btn_trait"><span>Save Edit</span></div></a>
							</div>
						</div>
						<div class="trait_seq">
							<div class="trait_i">
								<input type="text" disabled="disabled">
							</div>
							<div class="trait_i">
								<input type="text" disabled="disabled">
							</div>
							<div class="trait_i">
								<input type="text" disabled="disabled">
							</div>
							<div class="trait_i">
								<a href="#"><div class="btn_trait"><span>Add Trait</span></div></a>
								<a href="#"><div class="btn_trait"><span>Save Edit</span></div></a>
							</div>
						</div>-->
					</div>	
                            <input type="hidden" id="max_trait" name="max_trait" value="<?php echo $max_lenght+1?>">

				</div>
			</div>

		</div>
		<div class="criteria" style="padding:15px 0 0 0;">
			<div class="head_div">
				<p class="head_div_desc">Gossip trait score Questions and answers</p>
			</div>
			<div class="traits">
				<div class="trait_container">
					<div class="trait_p">
						<p>Trait:</p>
					</div>
					<div class="trait_i">
						<input type="text">
					</div>
					<a style="color:#fff;" href="#"><div class="btn_trait" style="margin: 13px 0 0 5px;"><span>Input</span></div></a>
					<a style="color:#fff;" href="#"><div class="btn_trait" style="float:right;margin: 13px 35px 0 5px;"><span>Save Edit</span></div></a>
				</div>
				<div class="trait_container">
					<div class="trait_p">
						<p>Question:</p>
					</div>
					<div class="trait_i_large">
						<input type="text">
					</div>
				</div>
				<div class="trait_container">
					<div class="trait_p">
						<p>Answer +100</p>
					</div>
					<div class="trait_i_large">
						<input type="text">
					</div>
				</div>
				<div class="trait_container">
					<div class="trait_p">
						<p>Answer +90</p>
					</div>
					<div class="trait_i_large">
						<input type="text">
					</div>
				</div>
				<div class="trait_container">
					<div class="trait_p">
						<p>Answer +80</p>
					</div>
					<div class="trait_i_large">
						<input type="text">
					</div>
				</div>
				<div class="trait_container">
					<div class="trait_p">
						<p>Answer +70</p>
					</div>
					<div class="trait_i_large">
						<input type="text">
					</div>
				</div>
				<div class="trait_container">
					<div class="trait_p">
						<p>Answer +60</p>
					</div>
					<div class="trait_i_large">
						<input type="text">
					</div>
				</div>
				<div class="trait_container">
					<div class="trait_p">
						<p>Answer +50</p>
					</div>
					<div class="trait_i_large">
						<input type="text">
					</div>
				</div>
				<div class="trait_container">
					<div class="trait_p">
						<p>Answer +40</p>
					</div>
					<div class="trait_i_large">
						<input type="text">
					</div>
				</div>
				<div class="trait_container">
					<div class="trait_p">
						<p>Answer +30</p>
					</div>
					<div class="trait_i_large">
						<input type="text">
					</div>
				</div>
				<div class="trait_container">
					<div class="trait_p">
						<p>Answer +20</p>
					</div>
					<div class="trait_i_large">
						<input type="text">
					</div>
				</div>
				<div class="trait_container">
					<div class="trait_p">
						<p>Answer +10</p>
					</div>
					<div class="trait_i_large">
						<input type="text">
					</div>
				</div>
				<div class="trait_container">
					<div class="trait_p">
						<p>Answer 0</p>
					</div>
					<div class="trait_i_large">
						<input type="text">
					</div>
				</div>
				<div class="trait_container">
					<div class="trait_p">
						<p>Answer -10</p>
					</div>
					<div class="trait_i_large">
						<input type="text">
					</div>
				</div>
				<div class="trait_container">
					<div class="trait_p">
						<p>Answer -20</p>
					</div>
					<div class="trait_i_large">
						<input type="text">
					</div>
				</div>
				<div class="trait_container">
					<div class="trait_p">
						<p>Answer -30</p>
					</div>
					<div class="trait_i_large">
						<input type="text">
					</div>
				</div>
				<div class="trait_container">
					<div class="trait_p">
						<p>Answer -40</p>
					</div>
					<div class="trait_i_large">
						<input type="text">
					</div>
				</div>
				<div class="trait_container">
					<div class="trait_p">
						<p>Answer -50</p>
					</div>
					<div class="trait_i_large">
						<input type="text">
					</div>
				</div>
				<div class="trait_container">
					<div class="trait_p">
						<p>Answer -60</p>
					</div>
					<div class="trait_i_large">
						<input type="text">
					</div>
				</div>
				<div class="trait_container">
					<div class="trait_p">
						<p>Answer -70</p>
					</div>
					<div class="trait_i_large">
						<input type="text">
					</div>
				</div>
				<div class="trait_container">
					<div class="trait_p">
						<p>Answer -80</p>
					</div>
					<div class="trait_i_large">
						<input type="text">
					</div>
				</div>
				<div class="trait_container">
					<div class="trait_p">
						<p>Answer -90</p>
					</div>
					<div class="trait_i_large">
						<input type="text">
					</div>
				</div>
				<div class="trait_container">
					<div class="trait_p">
						<p>Answer -100</p>
					</div>
					<div class="trait_i_large">
						<input type="text">
					</div>
				</div>
			</div>
		</div>
		<div class="criteria" style="padding:15px 0 0 0;">
			<div class="head_div">
				<p class="head_div_desc">Trait Categories titles</p>
			</div>
			<div class="traits">
				<div class="trait_container">
					<div class="trait_p_small">
						<p>Trait1:</p>
					</div>
					<div  class="trait_i">
						<input type="text">
					</div>
					<div  class="trait_p_small">
						<p>Trait2:</p>
					</div>
					<div class="trait_i">
						<input type="text">
					</div>
					<div  class="trait_p_small">
						<p>Trait3:</p>
					</div>
					<div class="trait_i">
						<input type="text">
					</div>
					<div  class="trait_p_small">
						<p>Trait4:</p>
					</div>
					<div class="trait_i">
						<input type="text">
					</div>
				</div>
				<div class="trait_container">
					<div  class="trait_p_small">
						<p>Trait5:</p>
					</div>
					<div  class="trait_i">
						<input type="text">
					</div>
					<div  class="trait_p_small">
						<p>Trait6:</p>
					</div>
					<div class="trait_i">
						<input type="text">
					</div>
					<div  class="trait_p_small">
						<p>Trait7:</p>
					</div>
					<div class="trait_i">
						<input type="text">
					</div>
					<div  class="trait_p_small">
						<p>Trait8:</p>
					</div>
					<div class="trait_i">
						<input type="text">
					</div>
				</div>
				<div class="trait_container">
					<div  class="trait_p_small">
						<p>Trait9:</p>
					</div>
					<div  class="trait_i">
						<input type="text">
					</div>
					<div  class="trait_p_small">
						<p>Trait10:</p>
					</div>
					<div class="trait_i">
						<input type="text">
					</div>
					<a style="color:#fff;" href="#"><div class="btn_trait" style="float:right;margin: 13px 30px 0 5px;float:right;"><span>Save Edit</span></div></a>
					<a style="color:#fff;" href="#"><div class="btn_trait" style="margin: 13px 0 0 5px;float:right;"><span>Add Trait</span></div></a>
					
				</div>
			</div>
		</div>	


	</div>
</div>	
<?php include 'footer.php' ?>