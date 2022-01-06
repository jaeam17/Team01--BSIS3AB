<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
	<title>Login</title>
</head>
<body>
	<div class="container">
		<br/><h1 align="center">Barangay System</h1><br/>
		<div class="panel panel-primary">
			<div class="panel-heading">Login</div>
			<div class="panel-body">
				<form action="<?php echo base_url(); ?>main/login_validation" method="post">
					<?php if(isset($_SESSION['error'])){ ?>
							<div class="alert alert-danger" role="alert">
								<?php echo $_SESSION['error']; ?>
								<?php unset($_SESSION['error']); ?>
							</div>
					<?php   } ?>
					<div class="form-group">
						<label>Enter Email</label>
						<input type="text" name="user_email" class="form-control">
						<span class="text-danger"><?php echo form_error('user_email'); ?></span>
					</div>
					<div class="form-group">
						<label>Enter Password</label>
						<input type="password" name="user_password" class="form-control">
						<span class="text-danger"><?php echo form_error('user_password'); ?></span>
					</div>
					<div class="form-group">
						<input type="submit" name="insert" value="Login" class="btn btn-primary">
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