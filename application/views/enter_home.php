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
			<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong" style="margin-right: 10px;">
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

	<div class="container-fluid" style="padding: 15px 40px 0px 40px;">
		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
			</ol>
			<div class="carousel-inner">
				<div class="carousel-item active" style="height: 550px;">
					<img class="d-block w-100" src="<?php echo base_url(); ?>images/img_carousel1.gif" alt="First slide">
				</div>
				<div class="carousel-item" style="height: 550px;">
					<img class="d-block w-100 img-responsive" src="<?php echo base_url(); ?>images/img_carousel2.gif" alt="Second slide">
				</div>
				<div class="carousel-item" style="height: 550px;">
					<img class="d-block w-100 img-responsive" src="<?php echo base_url(); ?>images/img_carousel3.gif" alt="Third slide">
				</div>
			</div>
			<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
		<div class="row">
			<div class="col-md-2" style="margin: 20px 20px 0px 0px;">
				<div class="row">
					<div class="col-sm" style="background-color: #FAFDF3; height: 70px;">
						<h5 align="center" style="padding-top: 10px; color: #7c0a02;">Announcements and Events</h5>
					</div>
				</div>
				<div class="row">
					<div class="col-sm scrollable" style="background-color: #FAFDF3; height: 550px;">
						<?php
								if($fetch_data->num_rows() > 0){

									foreach($fetch_data->result() as $row){
							?>
										<b><?php echo $row->title; ?></b>
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
				</div>
			</div>
			<div class="col-sm" style="margin-top: 20px;">
				<div class="row">
					<div class="col-sm" style="padding-top: 10px; background-color: white;">
						<h4 style="color: #7c0a02;">About Us</h4>
						<p class="text-justify" style="font-size: 17px;"><b>Barangay Monteverde</b> is the first barangay established in Poblacion. The development, which started in 1980, was undertaken in three phases. The village boundaries are: Madrigal Street, Montemayor Street, Miranda Street, Mandeja Street, EDSA, Kalayaan Avenue. The total land area of Barangay Monteverde is 80.4722 hectares, of which 68.6774 hectares is subdivided into 980 residential lots.<br/>
						All properties located in the open (not fenced in) perimeter roads have been converted to controlled commercial zones. Consequently, a height restriction of 12 meters for edifices constructed along Madrigal Street is allowed, compared to only nine meters for residential houses inside the barangay.  The other perimeter roads converted to commercial zones retain the nine-meter height limitation.<br/>
						The significant commercial streets are Madrigal, Montemayor, Mandeja Streets. (While various commercial areas) restaurants are the predominant establishments along Barangay Monteverde perimeter roads.<br/>
						The barangay has one open space park in Phase I. The Association and Barangay offices are in the Phase II. The park in the Phase I has an open air basketball court, playground equipment, and a pavilion. While Phase II has a conference pavilion, and a employees' cooperative canteen.</p>
					</div>
				</div>
				<div class="row">
					<div class="col-sm" style="padding-top: 10px; background-color: white; margin-top: 20px;">
						<h4 style="color: #7c0a02;">Mission</h4>
						<p class="small text-justify" style="font-size: 17px;"><b>Barangay Monteverde</b> commits to perform better duties and responsibilities to carry out the plans and objectives of the barangay thru voluntary 
						and excellent performance, most especially in the delivery of the basic needs such as improved roads and environment, water system, health care, education, housing and agricultural farming needs of the farmers and residents of the barangay.</p>
					</div>
				</div>
				<div class="row">
					<div class="col-sm" style="padding-top: 10px; background-color: white; margin: 20px 0px 20px 0px;">
						<h4 style="color: #7c0a02;">Vision</h4>
						<p class="text-justify" style="font-size: 17px;"><b>Barangay Monteverde</b> envisions the Barangay to be more progressive, loving and peaceful place to live in 
						where people and residents enjoy harmonious way of life, business, at work and at home, and most especially for a more directed and progressive Barangay Governance..</p>
					</div>
				</div>

				
			</div>

		</div>

	</div>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
