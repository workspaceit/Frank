<?php include 'header.php' ?>
<body>
 <?php include 'advertise_left.php' ?>
 <?php include 'advertise_right.php' ?>
 <!-- Hidden Tag Don't Touch It Tanveer -->

 <!-- Hidden Tag End -->
		<!--<div id="contentwrap">-->
				<div id="content">
					<?php include 'top_container.php' ?>
					
                                    <h1 style="color:black;"></h1>
                                    <div class="footer_content_desc">
                                        <p style="margin:5px 5px 10px 15px;font-weight:bold;"><?php echo $title; ?></p>
                                     <div class="footer_desc">
                                       <?php
                                       foreach ($footer_details as $RowData)
                                       {
                                           echo $RowData->details ;
                                       }
                                       ?>
                                     </div>
				</div>
                                    </div>
		<!--</div>-->
				<!--Footer>-->
 <?php include 'footer.php' ?>