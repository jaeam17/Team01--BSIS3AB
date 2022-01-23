<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lato:wght@300&family=Merriweather:wght@700&family=Roboto:wght@700&display=swap" rel="stylesheet">
	<title>Home</title>
</head>
<style>
	body {
	}
	h4,h1,h2,h3,h5 {
		font-family: 'Roboto', sans-serif;
	}
	p {
		font-family: 'lato', serif;
	}
	.navbar-custom {
    background-color: #004AAD;
	}
	.navbar-expand-lg .navbar-nav .nav-link {
		padding-right: 0;
		padding-left: 0;
		margin-right: 20px;
	}
	.nav-link {
		border-bottom: 3px solid transparent;
		color: white;
	}
	.nav-link:hover {
		border-bottom: 3px solid #deeaee;
		color: white;
	}
  .scrollable {
		height: 530px;
		overflow: scroll;
		padding-right: 15px;
	}

	.carousel-item > img {
  width: auto;
  height : auto;
  max-height: 100%;
  max-width: 100%;
}
/* width */
::-webkit-scrollbar {
  width: 10px;
}

/* Track */
::-webkit-scrollbar-track {
  background: #f1f1f1; 
}
 
/* Handle */
::-webkit-scrollbar-thumb {
  background: #888; 
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
  background: #555; 
}
</style>
<body style="background-color: #deeaee;">
	<nav class="navbar navbar-expand-sm navbar-custom" style="padding: 8px 10px 8px 10px;">
		<a class="navbar-brand" href="#">
			<img src="https://scontent.fmnl4-3.fna.fbcdn.net/v/t1.15752-9/270834830_2320468918800644_3317073648450209240_n.png?_nc_cat=110&ccb=1-5&_nc_sid=ae9488&_nc_eui2=AeHjYrMAjyAuSiBUTgxXmDXeg8wqJ503do6DzConnTd2jpE4_Lxo3PQcNdQgrsHoWxfp0-bOJ37iYey-qR-_iq5u&_nc_ohc=U-wPebjzyNEAX8tcsXX&_nc_ht=scontent.fmnl4-3.fna&oh=03_AVJqRMJXxgwum1XZY_movfck-3vfA284flPuVRKpq1NkJg&oe=62100597" width="100" height="30" alt="Barangay">
		</a>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item">
					<a href="<?php echo base_url(); ?>main/home" class="nav-link">Home</a>
				</li>
				<li class="nav-item">
					<a href="<?php echo base_url(); ?>main/complaint" class="nav-link">Complaint</a>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Barangay Document eAPPLICATIONS
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="<?php echo base_url(); ?>main/permit">Barangay Business Permit</a>
						<a class="dropdown-item" href="<?php echo base_url(); ?>main/clearance">Barangay Clearance</a>
						<!-- <div class="dropdown-divider"></div>
						<a class="dropdown-item" href="#">Something else here</a> -->
					</div>
				</li>
				<li class="nav-item">
					<a href="<?php echo base_url(); ?>main/rent" class="nav-link">Book a Rent</a>
				</li>
			</ul>
			<!-- Button trigger modal -->
			<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
				<img src="https://scontent.fmnl4-1.fna.fbcdn.net/v/t1.15752-9/272201367_471247244439772_6526739748527625727_n.png?_nc_cat=109&ccb=1-5&_nc_sid=ae9488&_nc_eui2=AeGeTVMenle2pD5SaOoC4P7MsIH9d3l36h-wgf13eXfqH58705ubLYshfn7SH4g0FyABT2IFnaAuUcAH6U7FwyE5&_nc_ohc=Mp-6EfspNR8AX9N0yYu&_nc_ht=scontent.fmnl4-1.fna&oh=03_AVKm2AWTaEegBP6OP_4puQMLsNp1w4pYqteom4brwBTvfQ&oe=620FFABB" width="50" height="30" alt="Messages">
			</button>

			<!-- Modal -->
			<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLongTitle">Message Inbox</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<?php
								if($fetch_inbox->num_rows() > 0){

									foreach($fetch_inbox->result() as $row1){
							?>
										<b><?php echo $row1->response_type; ?></b>
										<p><?php echo $row1->response; ?></p>
										<b>Sent: <?php echo $row1->date; ?></b><br/>
										<hr style="border: 1px solid black;">
							<?php
									}
								}
								else{
							?>
									<tr>
										<td colspan="5">No Message Found</td>
									</tr>
							<?php
								}
							?>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
							<!-- <button type="button" class="btn btn-primary">Save changes</button> -->
						</div>
					</div>
				</div>
			</div>
			<form class="form-inline my-2 my-lg-0">
				<h5 style="color: white; font-size: 17px; padding-right: 10px; margin: 0px;"><?php echo $_SESSION['email']; ?></h5>
				<a href="<?php echo base_url(); ?>main/logout" class="btn btn-success">Logout</a>
			</form>
		</div>
	</nav>
	
	<div class="container">
		<br/>
		<div style="background-color: #d9d9d9; padding: 20px;">
			<h3 align="center">Barangay Business Permit Application</h3>

			<form action="<?php echo base_url(); ?>main/permit_validation" method="post">
				<?php if(isset($_SESSION['success'])){ ?>
					<div class="alert alert-success" role="alert">
						<?php echo $_SESSION['success']; ?>
						<?php unset($_SESSION['success']); ?>
					</div>
				<?php   } ?>
				<?php if(isset($_SESSION['error'])){ ?>
					<div class="alert alert-danger" role="alert">
						<?php echo $_SESSION['error']; ?>
						<?php unset($_SESSION['error']); ?>
					</div>
				<?php   } ?>

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
						<input type="text" name="bus_name" class="form-control" placeholder="Business Name" required>
						<span class="text-danger"><?php echo form_error('bus_name'); ?></span>
					</div>
					<div class="form-group col-md-6" style="padding-left: 0px;">
						<label>Business Address</label>
						<input type="text" name="bus_address" class="form-control" placeholder="Street No./Street Name/Barangay/District/City" required>
						<span class="text-danger"><?php echo form_error('bus_address'); ?></span>
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col-md-6" style="padding-left: 0px;">
						<label>Nature of Business</label>
						<input type="text" name="bus_nature" class="form-control" placeholder="e.g. Service/Merchandising/Manufacturing/etc." required>
						<span class="text-danger"><?php echo form_error('bus_nature'); ?></span>
					</div>
					<div class="form-group col-md-6" style="padding-left: 0px;">
						<label>Email</label>
						<input type="text" name="email" class="form-control" placeholder="Email" required>
						<span class="text-danger"><?php echo form_error('email'); ?></span>
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col-md-4" style="padding-left: 0px;">
						<label>Type of Ownership</label>
						<input type="text" name="ownership_type" class="form-control" placeholder="e.g. Sole Proprietorship/Partnership/Corporation/etc." required>
						<span class="text-danger"><?php echo form_error('ownership_type'); ?></span>
					</div>
					<div class="form-group col-md-4" style="padding-left: 0px;">
						<label>BIR TIN</label>
						<input type="text" name="bir_tin" class="form-control" placeholder="Tax Identification Number" required>
						<span class="text-danger"><?php echo form_error('bir_tin'); ?></span>
					</div>
					<div class="form-group col-md-4" style="padding-left: 0px;">
						<label>Date Applied</label>
						<input type="date" name="date" class="form-control" required>
						<span class="text-danger"><?php echo form_error('date'); ?></span>
					</div>
				</div>
				<div class="form-group">
					<!-- Button trigger modal -->
					<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
						Submit Form
					</button>

					<!-- Modal -->
					<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title" id="exampleModalLabel">Reminder</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									Please wait for about 1-2 days for approval of your Barangay Business Permit.<br/> 
									Always check your Message Inbox for the result.
								</div>
								<div class="modal-footer">
									<input type="submit" name="submit" value="Click to Submit" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
								</div>
							</div>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>