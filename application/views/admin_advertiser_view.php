<?php include 'admin_header.php' ?>
<?php include 'admin_dashboard.php' ?>
<div class="admin_panel">
	<?php include 'top_container.php' ?>
	<div class="infoBar" style="height:20px;"><p>Admin Page</p></div>
	<div class="admin_container">
		<div class="criteria">
			<div class="head_div">
				<p class="head_div_desc">Advertisers</p><p class="head_div_count">(3)</p>
			</div>
			<div class="criteria_div">
				<div class="cd_check">
					<input type="checkbox">
				</div>
				<div class="advertiser_id">
					<p>Id</p>
				</div>
				<div class="advertiser_title">
					<p>Title</p>
				</div>
				<div class="advertiser_date_add">
					<p>Date added</p>
				</div>
				<div class="advertiser_visit">
					<p>Visits</p>
				</div>
				<div class="advertiser_status">
					<p>Status</p>
				</div>
				<div class="advertiser_actions">
					<p>Actions</p>
				</div>
			</div>

			<div class="criteria_div">
				<div class="cd_check">
					<input type="checkbox">
				</div>
				<div class="advertiser_id">
					<p>Id</p>
				</div>
				<div class="advertiser_title">
					<p>Title</p>
				</div>
				<div class="advertiser_date_add">
					<p>Date added</p>
				</div>
				<div class="advertiser_visit">
					<p>Visits</p>
				</div>
				<div class="advertiser_status">
					<p>Status</p>
				</div>
				<div class="advertiser_actions">
					<a href=""><div class="btn_advertiser_edit">
						<span>Edit</span>
					</div></a>
				</div>
				

				<div class="cd_expanded">
					<form style="height:auto;overflow:hidden;">
						<div class="a_form_left">
							<div class="a_form_all">
								<p>Title:</p>
								<input type="text">
							</div>
							<div class="a_form_all">
								<p>Affilate Network:</p>
								<input type="text">
							</div>
							<div class="a_form_all">
								<p>Affilate ID:</p>
								<input type="text">
							</div>
							<div class="a_form_all">
								<p>URL image:</p>
								<input type="text">
							</div>
							<div class="a_form_all">
								<p>URL:</p>
								<input type="text">
							</div>
							<div class="a_form_all">
								<p>Status:</p>
								<select class="a_select_large">
									<option>Active</option>
									<option>Inactive</option>
								</select>
							</div>
						</div>
					</form>
					<a href=""><div class="btn_advertiser_save_edit">
							<span>Save Edit</span>
					</div></a>
				</div>
			</div>
			<div class="criteria_div">
				<div class="cd_check">
					<input type="checkbox">
				</div>
				<div class="advertiser_id">
					<p>Id</p>
				</div>
				<div class="advertiser_title">
					<p>Title</p>
				</div>
				<div class="advertiser_date_add">
					<p>Date added</p>
				</div>
				<div class="advertiser_visit">
					<p>Visits</p>
				</div>
				<div class="advertiser_status">
					<p>Status</p>
				</div>
				<div class="advertiser_actions">
					<a href=""><div class="btn_advertiser_edit">
						<span>Edit</span>
					</div></a>
				</div>
			</div>
			<div class="criteria_div">
				<div class="cd_check">
					<input type="checkbox">
				</div>
				<div class="advertiser_id">
					<p>Id</p>
				</div>
				<div class="advertiser_title">
					<p>Title</p>
				</div>
				<div class="advertiser_date_add">
					<p>Date added</p>
				</div>
				<div class="advertiser_visit">
					<p>Visits</p>
				</div>
				<div class="advertiser_status">
					<p>Status</p>
				</div>
				<div class="advertiser_actions">
					<a href=""><div class="btn_advertiser_edit">
						<span>Edit</span>
					</div></a>
				</div>
			</div>
		</div>
		<div style="float;left;width:auto;margin:0 0 0 15px; ">
			<a href="" style="color:#fff;text-decoration:none;"><div class="btn_save_edit">
				<span>Add adviser</span>
			</div></a>
		</div>
		<div class="advertise_btn_bund">
			<a href=""><div class="btn_save_edit">
				<span>Activate selected</span>
			</div></a>
			<a href=""><div class="btn_save_edit">
				<span>Diactivate selected</span>
			</div></a>
			<a href=""><div class="btn_save_edit">
				<span>Delete selected</span>
			</div></a>
		</div>	


	</div>
</div>	
<?php include 'footer.php' ?>