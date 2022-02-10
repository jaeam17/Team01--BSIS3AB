<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!-- This file has been downloaded from Bootsnipp.com. Enjoy! -->
    <title>Register</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
        
/* BASIC */

html {
  background-color: #56baed;
}

body {
  font-family: "Poppins", sans-serif;
  height: 100vh;
	background: url('https://scontent.fmnl4-3.fna.fbcdn.net/v/t1.15752-9/271539835_640455173938858_993246755667744592_n.png?_nc_cat=110&ccb=1-5&_nc_sid=ae9488&_nc_eui2=AeEm__z1br28q6veG9puEOLd5XckYsulmnbldyRiy6Wadq5whtccL6cjZKtXus_3GqfTwCI8PShLIbYD5NpIG-ky&_nc_ohc=oeOXxGOu0NIAX9ZZiDN&tn=5LueTjqJJ-K-Kf1t&_nc_ht=scontent.fmnl4-3.fna&oh=03_AVJ45rv2RB5-uQ3GF9NPIo7dSrmYTnceqCc-lBX2J2-X_A&oe=620F21B2') no-repeat center center fixed;
		-webkit-background-size: cover;
	  -moz-background-size: cover;
	  background-size: cover;
	  -o-background-size: cover;
}

a {
  color: #92badd;
  display:inline-block;
  text-decoration: none;
  font-weight: 400;
}

h2 {
  text-align: center;
  font-size: 16px;
  font-weight: 600;
  text-transform: uppercase;
  display:inline-block;
  margin: 40px 8px 10px 8px; 
  color: #cccccc;
}



/* STRUCTURE */

.wrapper {
  display: flex;
  align-items: center;
  justify-content: center;
  width: 100%;
  min-height: 100%;
  padding: 20px 80px 80px 0px;
}

#formContent {
  -webkit-border-radius: 10px 10px 10px 10px;
  border-radius: 10px 10px 10px 10px;
  background: #C6C2C2;
  padding: 0px 20px 0px 20px;
  width: 100%;
  max-width: 600px;
  -webkit-box-shadow: 0 30px 60px 0 rgba(0,0,0,0.3);
  box-shadow: 0 30px 60px 0 rgba(0,0,0,0.3);
  text-align: center;
}

#formFooter {
  background: rgba(228, 220, 220, 0.48);
  border-top: 1px solid #dce8f1;
  padding: 20px 10px 20px 10px;
  text-align: center;
  -webkit-border-radius: 0 0 10px 10px;
  border-radius: 0 0 10px 10px;
}



/* TABS */

h2.inactive {
  color: #cccccc;
}

h2.active {
  color: #0d0d0d;
  border-bottom: 2px solid #5fbae9;
}



/* FORM TYPOGRAPHY*/

input[type=button], input[type=submit], input[type=reset]  {
  background-color: #56baed;
  border: none;
  color: white;
  padding: 10px 30px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  text-transform: uppercase;
  font-size: 13px;
  -webkit-box-shadow: 0 10px 30px 0 rgba(95,186,233,0.4);
  box-shadow: 0 10px 30px 0 rgba(95,186,233,0.4);
  -webkit-border-radius: 5px 5px 5px 5px;
  border-radius: 5px 5px 5px 5px;
  margin: 5px 20px 5px 20px;
  -webkit-transition: all 0.3s ease-in-out;
  -moz-transition: all 0.3s ease-in-out;
  -ms-transition: all 0.3s ease-in-out;
  -o-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
}

input[type=button]:hover, input[type=submit]:hover, input[type=reset]:hover  {
  background-color: #39ace7;
}

input[type=button]:active, input[type=submit]:active, input[type=reset]:active  {
  -moz-transform: scale(0.95);
  -webkit-transform: scale(0.95);
  -o-transform: scale(0.95);
  -ms-transform: scale(0.95);
  transform: scale(0.95);
}

input[type=text], input[type=password] {
  /* background-color: #f6f6f6;
  border: none;
  color: #0d0d0d;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 5px;
  border: 2px solid #f6f6f6;
  -webkit-transition: all 0.5s ease-in-out;
  -moz-transition: all 0.5s ease-in-out;
  -ms-transition: all 0.5s ease-in-out;
  -o-transition: all 0.5s ease-in-out;
  transition: all 0.5s ease-in-out;
  -webkit-border-radius: 5px 5px 5px 5px;
  border-radius: 5px 5px 5px 5px; */
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #fff;
  border-bottom: 2px solid #5fbae9;
}

input[type=text]:placeholder, input[type=password]:placeholder {
  color: #cccccc;
}



/* ANIMATIONS */

/* Simple CSS3 Fade-in-down Animation */
.fadeInDown {
  -webkit-animation-name: fadeInDown;
  animation-name: fadeInDown;
  -webkit-animation-duration: 1s;
  animation-duration: 1s;
  -webkit-animation-fill-mode: both;
  animation-fill-mode: both;
}

@-webkit-keyframes fadeInDown {
  0% {
    opacity: 0;
    -webkit-transform: translate3d(0, -100%, 0);
    transform: translate3d(0, -100%, 0);
  }
  100% {
    opacity: 1;
    -webkit-transform: none;
    transform: none;
  }
}

@keyframes fadeInDown {
  0% {
    opacity: 0;
    -webkit-transform: translate3d(0, -100%, 0);
    transform: translate3d(0, -100%, 0);
  }
  100% {
    opacity: 1;
    -webkit-transform: none;
    transform: none;
  }
}

/* Simple CSS3 Fade-in Animation */
@-webkit-keyframes fadeIn { from { opacity:0; } to { opacity:1; } }
@-moz-keyframes fadeIn { from { opacity:0; } to { opacity:1; } }
@keyframes fadeIn { from { opacity:0; } to { opacity:1; } }

.fadeIn {
  opacity:0;
  -webkit-animation:fadeIn ease-in 1;
  -moz-animation:fadeIn ease-in 1;
  animation:fadeIn ease-in 1;

  -webkit-animation-fill-mode:forwards;
  -moz-animation-fill-mode:forwards;
  animation-fill-mode:forwards;

  -webkit-animation-duration:1s;
  -moz-animation-duration:1s;
  animation-duration:1s;
}

.fadeIn.first {
  -webkit-animation-delay: 0.4s;
  -moz-animation-delay: 0.4s;
  animation-delay: 0.4s;
}

.fadeIn.second {
  -webkit-animation-delay: 0.6s;
  -moz-animation-delay: 0.6s;
  animation-delay: 0.6s;
}

.fadeIn.third {
  -webkit-animation-delay: 0.8s;
  -moz-animation-delay: 0.8s;
  animation-delay: 0.8s;
}

.fadeIn.fourth {
  -webkit-animation-delay: 1s;
  -moz-animation-delay: 1s;
  animation-delay: 1s;
}

/* Simple CSS3 Fade-in Animation */
.underlineHover:after {
  display: block;
  left: 0;
  bottom: -10px;
  width: 0;
  height: 2px;
  background-color: #56baed;
  content: "";
  transition: width 0.2s;
}

.underlineHover:hover {
  color: #0d0d0d;
}

.underlineHover:hover:after{
  width: 100%;
}

h1{
    color:#60a0ff;
}

/* OTHERS */

*:focus {
    outline: none;
} 

#icon {
  width:30%;
}

    </style>
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first">
      <!-- <img src="https://www.b-cube.in/wp-content/uploads/2014/05/aditya-300x177.jpg" id="icon" alt="User Icon" /> --><br/>
      <h1 style="color: #251C1C; margin-bottom: 0px;">REGISTER</h1>
    </div>

    <!-- Login Form -->
    <form action="<?php echo base_url(); ?>main/register_validation" method="post">
		<?php if(isset($_SESSION['success'])){ ?>
												<p class="text-success" style="text-align: left; margin-bottom: 0px;"><?php echo $_SESSION['success']; ?></p>
												<?php unset($_SESSION['success']); ?>
									<?php   } ?>
									<?php if(isset($_SESSION['error1'])){ ?>
												<p class="text-danger" style="text-align: left; margin-bottom: 0px;"><?php echo $_SESSION['error1']; ?></p>
												<?php unset($_SESSION['error1']); ?>
									<?php   } ?>
			<div class="form-group">
										<div class="row">
											<div class="col-lg-4">
												<input type="text" name="first_name" id="first_name" tabindex="1" class="form-control" placeholder="First Name" value="" required>
											</div>
											<div class="col-lg-4">
												<input type="text" name="middle_name" id="middle_name" tabindex="1" class="form-control" placeholder="Middle Name" value="" required>
											</div>
											<div class="col-lg-4">
												<input type="text" name="last_name" id="last_name" tabindex="1" class="form-control" placeholder="Last Name" value="" required>
											</div>
										</div>
									</div>
									<div class="form-group">
										<input type="text" name="user_email" id="user_email" tabindex="1" class="form-control" placeholder="Email" value="" required>
									</div>
									<div class="form-group">
										<input type="password" name="user_password" id="user_password" tabindex="2" class="form-control" placeholder="Password" required>
									</div>
									<div class="form-group">
										<input type="text" name="user_address" id="user_address" tabindex="2" class="form-control" placeholder="Address" required>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-lg-4">
												<input type="number" name="user_age" id="user_age" tabindex="1" class="form-control" placeholder="Age" value="" required>
											</div>
											<div class="col-lg-4">
												<select class="form-control" name="user_sex" required>
													<!-- <option value="" disabled selected>Sex</option> -->
													<option value="Male">Male</option>
													<option value="Female">Female</option>
												</select>
											</div>
											<div class="col-lg-4">
												<input type="date" name="user_birthday" id="user_birthday" tabindex="1" class="form-control" placeholder="Birthday" value="" required>
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-lg-6">
												<select class="form-control" name="user_civil_status" required>
													<option value="Single">Single</option>
													<option value="Married">Married</option>
												</select>
											</div>
											<div class="col-lg-6">
												<input type="number" name="user_number" id="user_number" tabindex="1" class="form-control" placeholder="Mobile Number" value="" required>
											</div>
										</div>
									</div>
      <input type="submit" class="fadeIn fourth" value="Register"><br/><br/>
			<div>
				Back to 
				<a class="underlineHover" href="<?php echo base_url(); ?>main/login" style="color: blue;">Login</a>
			</div>
    </form>

    <!-- Remind Passowrd -->

  </div>
</div>
<script type="text/javascript">

</script>
</body>
</html>
