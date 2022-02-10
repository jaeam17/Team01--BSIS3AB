<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Welcome to Barangay Monteverde</title>
      <link rel="stylesheet" href="style.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
      <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
      <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
      <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<style>
    html, body {
      margin: 0;
      padding: 0;
      width: 100%;
}

body {
      font-family: "Helvetica Neue",sans-serif;
      font-weight: lighter;
}
header {
      width: 100%;
      height: 100vh;
      background: url(https://scontent.fmnl2-1.fna.fbcdn.net/v/t1.15752-9/247988579_629814574897183_4148970440853985089_n.png?_nc_cat=101&ccb=1-5&_nc_sid=ae9488&_nc_eui2=AeGVKVnCM9Qq6sqC51oIjLOPgH2X5Ggjz8qAfZfkaCPPypgynGt8K2FC9AGXlf6PgZK7h_qfD23SF-1gyHplscFS&_nc_ohc=_Xq_rCV4UNYAX9TB1Bf&_nc_oc=AQl-8idJV-yWao24wgltWITH6Bb_8_W-Uvf_ZsVtGXzaVe9Yig_eV5jEH9ugQ3cOttg&tn=YohyP6o5KIDWyowa&_nc_ht=scontent.fmnl2-1.fna&oh=03_AVLEFiecFtpidWHYsJBCMl7xpuerEAuF-HTCt_rI7rpJKw&oe=62250DB3) no-repeat 50% 50%;
      background-size: cover;
}
.content {
      width: 94%;
      margin: 4em auto;
      font-weight: bold;
      font-size: 20px;
      line-height: 30px;
      text-align: justify;
}

.logo {
      line-height: 60px;
      position: fixed;
      float: left;
      margin: 16px 46px;
      color: rgb(255, 255, 255);
      font-weight: bold;
      font-size: 20px;
      letter-spacing: 2px;
}

nav {
      position: fixed;
      width: 100%;
      line-height: 60px;
}

nav ul {
      line-height: 60px;
      list-style: none;
      background: rgba(0, 0, 0, 0);
      overflow: hidden;
      color: rgb(255, 255, 255);
      padding: 0;
      text-align: right;
      font-weight: bold;
      margin: 0;
      padding-right: 40px;
      transition: 1s;
}

nav.black ul {
    background-color: #004AAD;
}

nav ul li {
      display: inline-block;
      padding: 16px 40px;;
}

nav ul li a {
      text-decoration: none;
      color: rgb(255, 255, 255);
      font-size: 16px;
      font-weight: bold;
}

nav ul li a:hover {
      text-decoration: none;
      color: rgb(255, 255, 255);
      font-size: 16px;
      font-weight: bold;
}

.menu-icon {
      line-height: 60px;
      width: 100%;
      background-color: #004AAD;
      text-align: right;
      font-weight: bold;
      box-sizing: border-box;
      padding: 15px 24px;
      cursor: pointer;
      color: rgb(255, 255, 255);
      display: none;
}
.carousel-item {
  height: 100vh;
  min-height: 350px;
  background: no-repeat center center scroll;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
section {
  padding-top: 5rem;
  padding-bottom: 5rem;
}

.lnr {
  display: inline-block;
  fill: currentColor;
  width: 1em;
  height: 1em;
  vertical-align: -0.05em;
  stroke-width: 1;
}

.services-icon {
  margin-bottom: 20px;
  font-size: 30px;
}
bgc2, .vLine, .hLine {
    background-color: #0F52BA;
}

.quote-icon {
  font-size: 40px;
  margin-bottom: 20px;
}
.services-icon {
    font-size: 60px;
    margin-left: 2rem;
}
@media(max-width: 786px) {

      .logo {
            position: fixed;
            top: 0;
            margin-top: 16px;
      }

      nav ul {
            max-height: 0px;
            background-color: #004AAD;
      }

      nav.black ul {
            background-color: #004AAD;
      }

      .showing {
            max-height: 34em;
      }

      nav ul li {
            box-sizing: border-box;
            width: 100%;
            padding: 24px;
            text-align: center;
      }

      .menu-icon {
            display: block;
      }

}
</style>
<body>
        <div class="wrapper">
           <header>
              <nav>
                 <div class="menu-icon">
                    <i class="fa fa-bars fa-2x"></i>
                 </div>
                 <div class="logo">
                    <img src="https://scontent.fmnl2-1.fna.fbcdn.net/v/t1.15752-9/271983240_329659119086141_5720759046609794468_n.png?_nc_cat=101&ccb=1-5&_nc_sid=ae9488&_nc_eui2=AeG_-KVxKk_H36tq-9r3vkThKcmqdDN47Qkpyap0M3jtCTDk1vHBeCAkztmuu45Lnso27eq4boZGxIj4vOjbSrOL&_nc_ohc=aqnHWA-TlgoAX9lerBA&_nc_ht=scontent.fmnl2-1.fna&oh=03_AVLcD2PJj4CDzWqMQzpfAUm19KgM0k6cARs4gfvEK8Pf5A&oe=62220D7C" width="260" height="60" alt="Barangay">
                 </div>
                 <div class="menu">
                    <ul>
                       <li><a href="<?php echo base_url(); ?>main/home">Home</a></li>
                       <li><a href="<?php echo base_url(); ?>main/contact_us">Contact Us</a></li>
                       <li><a href="<?php echo base_url(); ?>main/login">Log In</a></li>
                    </ul>
                 </div>
              </nav>

           </header>
           <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="https://scontent.fmnl2-2.fna.fbcdn.net/v/t1.15752-9/272680583_1908017079390623_325464118530955370_n.jpg?_nc_cat=100&ccb=1-5&_nc_sid=ae9488&_nc_eui2=AeHue5DkT8QhGIP4rs0XbdVm0p_rDSfrGEfSn-sNJ-sYR4aZ9CDWUjeAe82LNIBoKuMmsDj4MWf0AEbMAtKLwLwM&_nc_ohc=qTmBBHbXjd0AX_OcEcm&tn=YohyP6o5KIDWyowa&_nc_ht=scontent.fmnl2-2.fna&oh=03_AVJo4PM9psSHHA0sAIpl_doPZBzRxAcllz0weLDL1LKpGQ&oe=6221F8FF" alt="First slide">
                    <div class="carousel-caption d-none d-md-block">
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="https://scontent.fmnl2-2.fna.fbcdn.net/v/t1.15752-9/272089682_3321016274843415_3920725009744871740_n.jpg?_nc_cat=105&ccb=1-5&_nc_sid=ae9488&_nc_eui2=AeEXLXglwjUPbMhdR2phbAlZMsLkVwGkC3EywuRXAaQLcdPKdDU6nfojl2ofPhJuh2wlDtY8oi07kDrlQ2I4yCch&_nc_ohc=_PnLbYV943kAX-FAJ59&_nc_ht=scontent.fmnl2-2.fna&oh=03_AVIukQpX0sBiRvz3oZalshai4AQU0-tk9d1BWPy1pWBbJg&oe=6224BCCA" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="https://scontent.fmnl2-2.fna.fbcdn.net/v/t1.15752-9/260101835_926754901364428_2266367485355859230_n.png?_nc_cat=110&ccb=1-5&_nc_sid=ae9488&_nc_eui2=AeFK65EHokxkeE-zfINWT3bAMVSoizT924gxVKiLNP3biKw0TUyLe8UE9fsMsLQY8XU6w03jY_SW2mxaesWiLr40&_nc_ohc=WL2wfCTWswkAX-taxpE&tn=YohyP6o5KIDWyowa&_nc_ht=scontent.fmnl2-2.fna&oh=03_AVIJ-L7YLxadPPPCZPPpmt45X8C8m72eB0UC_o-Y-jx8pw&oe=6222D8AF" alt="Third slide">
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
    </div>
           <div class="content">
              <p>
                  To save lives, reduce health impacts, ensure public safety, meet the basic subsistence needs of the people affected and normalized as quickly as possible the situation and living conditions of the people in the areas stricken by disaster calamities, epidemics, or complex emergencies. he local government created a 'Youth Council'. It has been given the responsibility to "initiate programs designed to enhance the social, political, economic, cultural, intellectual, moral, spiritual, and physical developemnt of the barangay youths.
              </p>
              <p>
                  We all know that peace and order is given prior importance because without it the community life is disrupted. With the help of 'Tanod Bigrade' they will act as security officers to maintain peace and order and police its boundaries from the entry of lawless elements. Community disturbance, the Tanod is expected to investigate and quell that disturbance. If the disturbance is in violation of existing laws and ordinance the Tanod refers the case to the Police or Barangay Captain for the corresponding appropriate action.
              </p>    
           </div>
        </div>
        <section class="py-5 text-center">
            <div class="container"> 
              <h2 class="text-center">E- BarangayMo Services</h2>
              <p class="text-muted mb-5 text-center">It's never been easier to get in touch with the barangay administration. In the E-BarangayMo System in Brgy. Monteverde, we provide faster and more dependable services.</p>
              <div class="row">
                <div class="col-sm-6 col-lg-4 mb-3">
                  <svg class="lnr text-primary services-icon">
                  <use xlink:href="#lnr-cog"></use>
                </svg>
                  <h6>Create Complaints</h6>
                  <p class="text-muted">At Barangay Monteverde, we work to improve the general well-being of the community. Submit your complaints and the admins will investigate and create a fast solution about the resident's complaints.</p>
                </div>
                <div class="col-sm-6 col-lg-4 mb-3">
                  <svg class="lnr text-primary services-icon">
                        <use xlink:href="#lnr-envelope"></use>
                  </svg>
                  <h6>Barangay Document E-Applications</h6>
                  <p class="text-muted">Applying for Barangay Documents is not a hassle anymore. You can now receive your requested documents with a single click and a short wait for approval.</p>
                </div>
                <div class="col-sm-6 col-lg-4 mb-3">
                  <svg class="lnr text-primary services-icon">
                        <use xlink:href="#lnr-apartment"></use>
                  </svg>
                  <h6>Book a Rent</h6>
                  <p class="text-muted">Borrowing some barangay resources like court and gazebo is faster. Just inidcate the date and time you want to use and wait for the approval for your request.</p>
                </div>
                <div class="col-sm-6 col-lg-4 mb-3">
                  <svg class="lnr text-primary services-icon">
                    <use xlink:href="#lnr-bullhorn"></use>
                  </svg>
                  <h6>Announcements and Events</h6>
                  <p class="text-muted">Using the E-Barangay Mo system by Barangay Monteverde helps the residents to stay up to date to announcements and events of Barangay Admins.</p>
                </div>
                <div class="col-sm-6 col-lg-4 mb-3">
                  <svg class="lnr text-primary services-icon">
                    <use xlink:href="#lnr-laptop-phone"></use>
                  </svg>
                  <h6>Easy Access</h6>
                  <p class="text-muted">The E-Barangay System can be access through computer and it will be available on smart phone soon.</p>
                </div>
                <div class="col-sm-6 col-lg-4 mb-3">
                  <svg class="lnr text-primary services-icon">
                    <use xlink:href="#lnr-rocket"></use>
                  </svg>
                  <h6>Fast and Reliable Services</h6>
                  <p class="text-muted">Here at Brgy. Monteverde, our admins and brgy captains are fast and reliable to solve the resident's problems.</p>
                </div>
              </div>
            </div>
      </section>
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
      <script src="https://cdn.linearicons.com/free/1.0.0/svgembedder.min.js"></script>
      <script>
            $(document).ready(function() {
                  $(".menu-icon").on("click", function() {
                        $("nav ul").toggleClass("showing");
                  });
            });

            // Scrolling Effect

            $(window).on("scroll", function() {
                  if($(window).scrollTop()) {
                        $('nav').addClass('black');
                  }

                  else {
                        $('nav').removeClass('black');
                  }
            })
      </script>
</body>
</html>