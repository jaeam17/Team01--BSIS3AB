<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
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
		<div class="form-group">
			<a href="#" class="btn btn-primary">Complaint</a>
			<a href="#" class="btn btn-primary">Barangay Clearance</a>
			<a href="#" class="btn btn-primary">Events and Announcements</a>
		</div><br/>
 
		            <div class="form-row">
		                <input type="checkbox" id="choice1" name="choice1" value="New">
                             <label for="choice1"> New Business</label><br>
                         <input type="checkbox" id="choice2" name="choice2" value="Renewal">
                             <label for="choice2"> Renewal</label><br>
					<div class="form-group col-md-4" style="padding-left: 0px;>
							<label>Business name</label>
								<input type="text" name="Business_name" class="form-control" placeholder="Business Name">
								<span class="text-danger"><?php echo form_error('Business_Name'); ?></span>
						</div>
                        <br>
						<div class="form-group col-md-4" style="padding-left: 0px;">
								<label>Business Address</label>
								<input type="text" name="Business Address" class="form-control" placeholder="Street No./Street Name/Barangay/District/ City">
								<span class="text-danger"><?php echo form_error('Business_Address'); ?></span>
						</div><br/>
                        <br>
						<div class="form-group col-md-4" style="padding-left: 0px; margin-right: 1000px;">
								<label>Nature of Business</label>
								<input type="text" name="Nature of Business" class="form-control" placeholder="e.g. Service/ Merchandising/  Manufacturing etc.">
								<span class="text-danger"><?php echo form_error('Nature_of_Business'); ?></span>
						</div><br/>
					</div>
                    <br>
					<div class="form-row">
						<div class="form-group col-md-6" style="padding-left: 0px;">
							<label>Email</label>
							<input type="email" name="user_email" class="form-control" placeholder="Email">
							<span class="text-danger"><?php echo form_error('user_email'); ?></span>
						</div><br/>
 
					<div class="form-row">
						<div class="form-group col-md-12" style="padding-left: 0px;">
							<label>Type of Ownership</label>
							<input type="text" name="type_of_ownership" class="form-control" placeholder="e.g. Sole proprietorship/ Partnership/ Corporation/  etc.">
							<span class="text-danger"><?php echo form_error('type_of_ownership'); ?></span>
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-md-4" style="padding-left: 0px;">
							<label>BIR TIN</label>
							<input type="number" name="bir_tin" class="form-control" placeholder="Tax Identification Number">
							<span class="text-danger"><?php echo form_error('bir_tin'); ?></span>
						</div>
						<div class="form-group col-md-4" style="padding-left: 0px;">
							<label>Date Applied</label>
							<input type="date" name="date_applied" class="form-control">
							<span class="text-danger"><?php echo form_error('date_applied'); ?></span>
						</div>   
					</div>
                </div>
                <div class="form-group">
                    <input type="submit" name="insert" value="Register" class="btn btn-primary" style= "margin-top: 0px; margin-right: 500px;">
                </div>
                <br/><br/>
                <div class="form-group">
                    <a href="<?php echo base_url(); ?>" class="btn btn-primary">Back</a>
                </div>
				</form>
			</div>
 
		</div>
	</div>
 
</body>
</html>