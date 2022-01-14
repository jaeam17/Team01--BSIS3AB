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
		
		<?php if(isset($_SESSION['error'])){ ?>
			<div class="alert alert-danger" role="alert">
				<?php echo $_SESSION['error']; ?>
				<?php unset($_SESSION['error']); ?>
			</div>
		<?php   } ?>
		<?php if(isset($_SESSION['success'])){ ?>
			<div class="alert alert-success" role="alert">
				<?php echo $_SESSION['success']; ?>
				<?php unset($_SESSION['success']); ?>
			</div>
		<?php   } ?>
    <form action="<?php echo base_url(); ?>main/create_complaint" method="post">
			<div class="form-group">
				<label for="complaint">Enter your Complaint</label>
				<textarea name="complaint" id="complaint" rows="10" class="form-control" style="resize: none;"></textarea>
			</div>
			<div class="form-group">
				<input type="submit" name="submit" value="Submit" class="btn btn-primary">
			</div>
		</form>
	</div>

</body>
</html>