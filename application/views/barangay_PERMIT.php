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
			<a href="<?php echo base_url(); ?>main/enter" class="btn btn-primary">Home</a>
			<a href="<?php echo base_url(); ?>main/complaint" class="btn btn-primary">Complaint</a>
			<button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown">Barangay Document eAPPLICATIONS 		<span class="caret"></span></button>
			<ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
				<li><a class="dropdown-item" href="<?php echo base_url(); ?>main/permit">Barangay Business Pemit</a></li>
				<li><a class="dropdown-item" href="#">Barangay Clearance</a></li>
			</ul>
		</div><br/>

		<h3 align="center">Barangay Business Permit Application</h3>

			<div class="form-check">
				<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" value="New Business">
				<label class="form-check-label" for="flexRadioDefault1">New Business</label>
			</div>
			<div class="form-check">
				<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" value="Renewal" checked>
				<label class="form-check-label" for="flexRadioDefault2">Renewal</label>
			</div><br/>
	
			<div class="form-row">
				<div class="form-group col-md-6" style="padding-left: 0px;">
					<label>Business Name</label>
					<input type="text" name="bus_name" class="form-control" placeholder="Business Name">
					<span class="text-danger"><?php echo form_error('bus_name'); ?></span>
				</div>
				<div class="form-group col-md-6" style="padding-left: 0px;">
					<label>Business Address</label>
					<input type="text" name="bus_address" class="form-control" placeholder="Street No./Street Name/Barangay/District/City">
					<span class="text-danger"><?php echo form_error('bus_address'); ?></span>
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-6" style="padding-left: 0px;">
					<label>Nature of Business</label>
					<input type="text" name="bus_nature" class="form-control" placeholder="e.g. Service/Merchandising/Manufacturing/etc.">
					<span class="text-danger"><?php echo form_error('bus_nature'); ?></span>
				</div>
				<div class="form-group col-md-6" style="padding-left: 0px;">
					<label>Email</label>
					<input type="text" name="email" class="form-control" placeholder="Email">
					<span class="text-danger"><?php echo form_error('email'); ?></span>
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-4" style="padding-left: 0px;">
					<label>Type of Ownership</label>
					<input type="text" name="ownership_type" class="form-control" placeholder="e.g. Sole Proprietorship/Partnership/Corporation/etc.">
					<span class="text-danger"><?php echo form_error('ownership_type'); ?></span>
				</div>
				<div class="form-group col-md-4" style="padding-left: 0px;">
					<label>BIR TIN</label>
					<input type="text" name="bir_tin" class="form-control" placeholder="Tax Identification Number">
					<span class="text-danger"><?php echo form_error('bir_tin'); ?></span>
				</div>
				<div class="form-group col-md-4" style="padding-left: 0px;">
					<label>Date Applied</label>
					<input type="date" name="date" class="form-control">
					<span class="text-danger"><?php echo form_error('date'); ?></span>
				</div>
			</div>
			<div class="form-group">
				<input type="submit" name="submit" value="Submit" class="btn btn-primary">
			</div>
		</form>



	</div>
 
</body>
</html>