<?php include 'admin_header.php' ?>
<?php include 'admin_dashboard.php' ?>
<div class="admin_panel">
	<?php include 'top_container.php' ?>
	<div class="infoBar" style="height:20px;"><p>Admin Page</p></div>
	<div class="admin_container">
		<div class="criteria">
			<div class="head_div"><p>Frank Version 1.0</p></div>
			<div class="criteria_div">
				<div class="sec_1">
					<ul>
						<li>Total Members: <?php echo $total_user;?></li>
						<li>Total Gossips: <?php echo $total_gossip; ?></li>
						<li>Visits Today: <?php echo $todays_visitor; ?></li>
						<li>Gossips Today: <?php echo $todays_gossip; ?></li>
					</ul>
				</div>
				<div class="sec_2">
					<ul>
						<li>Total Advertisers: N/A</li>
						<li>Advertising Clicks Today: N/A</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>