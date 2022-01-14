<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<title>Barangay</title>
</head>
<style>
  .col-md-3 {
		height: 400px;
		overflow: scroll;
	}
  .table-bordered th {
		background-color: #0275d8;
		color: white;
    position: sticky;
		top: 0;
  }
</style>
<body>
	<div class="container-fluid">
		<div class="row" style="padding: 10px 0px 0px 100px; background-color: #87cefa;">
			<div class="col-sm-2">
				<h3>Website Name</h3>
			</div>
			<div class="col-sm-6">
				<div class="dropdown btn-toolbar" style="padding-top: 10px;">
					<a href="<?php echo base_url(); ?>main/enter" class="btn btn-primary">Home</a>
					<a href="<?php echo base_url(); ?>main/complaint" class="btn btn-primary">Complaint</a>
					<button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown">Barangay Document eAPPLICATIONS 		<span class="caret"></span></button>
					<ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
						<li><a class="dropdown-item" href="<?php echo base_url(); ?>main/permit">Barangay Business Pemit</a></li>
						<li><a class="dropdown-item" href="#">Barangay Clearance</a></li>
					</ul>
				</div>
			</div>
			<div class="col-sm-4" style="padding-top: 8px;">
				<div class="btn-group inline">
					<h4><b><?php echo $_SESSION['email']; ?></b></h4>
				</div>
				<div class="btn-group inline">
					<a href="<?php echo base_url(); ?>main/logout" class="btn btn-primary">Logout</a>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<h3 align="center">Barangay System</h3><br/>
		<div class="row">
			<div class="col-md-3" style="background-color: #F0E68C; height: 530px;">
				<h3 align="center">Announcements and Events</h3>
				<?php
					if($fetch_data->num_rows() > 0){

						foreach($fetch_data->result() as $row){
				?>
							<h4><b><?php echo $row->title; ?></b></h4>
							<p><?php echo $row->description; ?></p>
							<b>Posted: <?php echo $row->date; ?></b><br/>
							<hr style="border: 1px solid black;">
				<?php
						}
					}
					else{
				?>
						<tr>
							<td colspan="5">No Data Found</td>
						</tr>
				<?php
					}
				?>
			</div>
			<div class="col-md-6">
				<div class="row">
					<div class="col-md-11 " style="background-color: #F0E68C; height: 200px; margin: 0px 10px 0px 10px; width: 565px;">
						<h3 align="center">Picture</h3>
					</div>
				</div>
				<div class="row">
					<div class="col-md-11" style="background-color: #F0E68C; height: 320px; margin: 10px 10px 0px 10px; width: 565px;">
						<h3 align="center">About Us</h3>
					</div>
				</div>
			</div>
			<div class="col-md-3" style="background-color: #F0E68C; height: 530px;">
				<h3 align="center">Message Inbox</h3>
				<?php
					if($fetch_inbox->num_rows() > 0){

						foreach($fetch_inbox->result() as $row1){
				?>
							<h4><b><?php echo $row1->response_type; ?></b></h4>
							<p><?php echo $row1->response; ?></p>
							<b>Sent: <?php echo $row1->date; ?></b><br/>
							<hr style="border: 1px solid black;">
				<?php
						}
					}
					else{
				?>
						<tr>
							<td colspan="5">No Data Found</td>
						</tr>
				<?php
					}
				?>
			</div>
		</div>

	</div>

</body>
</html>