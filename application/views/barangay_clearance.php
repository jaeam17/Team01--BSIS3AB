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
<body>
	<div class="container">
		<br/><h3 align="center">Barangay System</h3><br/>
		<h4><?php echo "Welcome "?><b><?php echo $_SESSION['email']; ?></b></h4>
		<div class="form-group">
			<a href="<?php echo base_url(); ?>main/logout" class="btn btn-primary">Logout</a>
		</div>
		<br/>
		<div class="dropdown btn-toolbar">
			<a href="<?php echo base_url(); ?>main/home" class="btn btn-primary">Home</a>
			<a href="<?php echo base_url(); ?>main/complaint" class="btn btn-primary">Complaint</a>
			<button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown">Barangay Document eAPPLICATIONS 		<span class="caret"></span></button>
			<ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
				<li><a class="dropdown-item" href="<?php echo base_url(); ?>main/permit">Barangay Business Pemit</a></li>
				<li><a class="dropdown-item" href="#">Barangay Clearance</a></li>
			</ul>
		</div><br/>

		<h3 align="center">Barangay Clearance Application</h3>

		<form action="<?php echo base_url(); ?>main/permit_validation" method="post">

			<div class="form-row">
				<div class="form-group col-md-6" style="padding-left: 0px;">
					<label>Name</label>
					<input type="text" name="name" class="form-control" placeholder="Surname, First Name, Middle Name, Extension e.g jr,III">
					<span class="text-danger"><?php echo form_error('name'); ?></span>
				</div>
				<div class="form-group col-md-6" style="padding-left: 0px;">
					<label> Address</label>
					<input type="text" name="address" class="form-control" placeholder="Street No./Street Name/Barangay/District/City">
					<span class="text-danger"><?php echo form_error('bus_address'); ?></span>
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-6" style="padding-left: 0px;">
					<label>Age</label>
					<input type="text" name="Age" class="form-control" placeholder="Age">
					<span class="text-danger"><?php echo form_error('bus_nature'); ?></span>
				</div>
				<div class="form-group col-md-6" style="padding-left: 0px;">
					<label>Date of Birth</label>
					<input type="date" name="date" class="form-control">
					<span class="text-danger"><?php echo form_error('date'); ?></span>
				</div>
			</div>
				<div class="form-group col-md-6" style="padding-left: 0px;">
					<label>Civil Status</label>
					<div class="form-row" style="padding-left: 0px;"></div>
					<select class="form-select" id="floatingSelectGrid" aria-label="Floating label select example">
						<option value="1">Single</option>
						<option value="2">Married</option>
						<option value="3">Widowed</option>
					  </select>			
				</div>
		
				<div class="form-group col-md-6" style="padding-left: 0px;">
					<label>Purpose</label>
					<input type="text" name="Purpose" class="form-control">
					<span class="text-danger"><?php echo form_error('Purpose'); ?></span>
				</div>

			<div class="form-group">
				<button type="submit" class="btn btn-primary mb-3">Submit</button>
			  </div>
			</div></body>
		</form>



	</div>
 
</body>
</html>