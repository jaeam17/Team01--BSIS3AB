<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300&family=Merriweather:wght@700&family=Roboto:wght@700&display=swap" rel="stylesheet">
	<title>Contact Us</title>
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

.nav-item {
      margin-left: 60px;
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
@import url('https://fonts.googleapis.com/css?family=Roboto');
.container {
  background: #deeaee;
  width: 900px;
  height: 750px;
  padding-top: 50px;
}
.container .map {
  width: 45%;
  float: left;
  padding-bottom: 50px;
  height: 10%;
  margin-left: 50px;
}
.container .contact-form {
  width: 53%;
  margin-left: 50px;
  float: left;
  width: 320px;
  padding-top: 150px;

}
.container .contact-form input,
.container .contact-form textarea {
  width: 330px;
  padding: 3%;
  margin: 2% 8%;
  color: #242424;
  border: 1px solid #B7B7B7;

}
    html, body {
      margin: 0;
      padding: 0;
      width: 100%;
}
i {
 width: 10px;
 padding-right: 15px;
}
</style>
<body style="background-color: white;">
      <nav class="navbar navbar-expand-sm navbar-custom" style="padding: 8px 10px 8px 40px;">
		<a class="navbar-brand" href="#" style="margin-right: 550px;">
			<img src="https://scontent.fmnl2-1.fna.fbcdn.net/v/t1.15752-9/271983240_329659119086141_5720759046609794468_n.png?_nc_cat=101&ccb=1-5&_nc_sid=ae9488&_nc_eui2=AeG_-KVxKk_H36tq-9r3vkThKcmqdDN47Qkpyap0M3jtCTDk1vHBeCAkztmuu45Lnso27eq4boZGxIj4vOjbSrOL&_nc_ohc=aqnHWA-TlgoAX9lerBA&_nc_ht=scontent.fmnl2-1.fna&oh=03_AVLcD2PJj4CDzWqMQzpfAUm19KgM0k6cARs4gfvEK8Pf5A&oe=62220D7C" width="260" height="60" alt="Barangay">
		</a>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item">
					<b><a href="<?php echo base_url(); ?>main/welcome_view" class="nav-link">Home</a></b>
				</li>
				<li class="nav-item">
					<b><a href="<?php echo base_url(); ?>main/contact_us" class="nav-link">Contact Us</a></b>
				</li>
				<li class="nav-item">
					<b><a href="<?php echo base_url(); ?>main/login" class="nav-link">Login</a></b>
				</li>
			</ul>
	
		</div>
	</nav>
      <div class="container">
                  <div class="map">
                        <iframe src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJFSAwrCHKlzMR2RBQkQ_K3JI&key=AIzaSyCPNQb-dtzGYeU59e5mtrG3L0BHxKRcSLY" width="100%" height="650px" frameborder="0" style="border:0" allowfullscreen></iframe>
                  </div>
                  <div class="contact-form"> 
                        <h1 class="title">Contact Us</h1>
                        <h2 class="subtitle">We are here to assist you.</h2>
                        <form action="">
                                      <p><i class="fa fa-map-marker" aria-hidden="true"></i> Ayala Blvd, Brgy Monteverde, Ermita, Manila, 1000 Metro Manila</p>
                                      <p><span class="fa fa-envelope"></span> monteverde@gmail.com</p>
                                      <p><span class="fa fa-phone"></span> +639123456789</p>
                        </form>
                  </div>
            </div>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>