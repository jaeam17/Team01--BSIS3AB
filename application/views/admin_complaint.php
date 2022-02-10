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
  <title>Admin Complaint</title>
</head>
<style>
  .table-responsive {
		height: 380px;
		overflow: scroll;
	}
  .table-bordered th {
		background-color: #0275d8;
		color: white;
    position: sticky;
		top: 0;
  }
	body {
	}
	h4,h1,h2,h3,h5 {
		font-family: 'Roboto', sans-serif;
	}
	p {
		font-family: 'lato', serif;
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
		height: 440px;
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
  <div class="container-fluid" style="padding: 0px;">
    <nav class="navbar navbar-expand-lg bg-primary" style="padding: 8px 10px 8px 10px;">
      <a class="navbar-brand" href="#">
        <img src="https://scontent.fmnl4-3.fna.fbcdn.net/v/t1.15752-9/270834830_2320468918800644_3317073648450209240_n.png?_nc_cat=110&ccb=1-5&_nc_sid=ae9488&_nc_eui2=AeHjYrMAjyAuSiBUTgxXmDXeg8wqJ503do6DzConnTd2jpE4_Lxo3PQcNdQgrsHoWxfp0-bOJ37iYey-qR-_iq5u&_nc_ohc=U-wPebjzyNEAX8tcsXX&_nc_ht=scontent.fmnl4-3.fna&oh=03_AVJqRMJXxgwum1XZY_movfck-3vfA284flPuVRKpq1NkJg&oe=62100597" width="100" height="30" alt="Barangay">
      </a>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto" style="margin-left: 40px;">
          <li class="nav-item">
            <a href="<?php echo base_url(); ?>main/admin_complaint" class="nav-link">Complaint</a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url(); ?>main/events" class="nav-link">Events and Announcement</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Barangay Document eAPPLICATIONS
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="<?php echo base_url(); ?>main/admin_permit">Barangay Business Permit</a>
              <a class="dropdown-item" href="<?php echo base_url(); ?>main/admin_clearance">Barangay Clearance</a>
              <!-- <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Something else here</a> -->
            </div>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url(); ?>main/admin_book_rent" class="nav-link">Book a Rent</a>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <h5 style="color: white; font-size: 17px; padding-right: 10px; margin: 0px;"><?php echo $_SESSION['email']; ?></h5>
          <a href="<?php echo base_url(); ?>main/logout" class="btn btn-success">Logout</a>
        </form>
      </div>
    </nav>
  </div>
	<div class="container">
		<h3 align="center">Barangay System Admin Portal</h3>
    <h3 align="center">Complaint</h3>
    <div class="table-responsive" style="height: 450px; background-color: white">
      <table class="table table-bordered table-striped scrollable" style="text-align: center">
        <tr>
          <th>First Name</th>
          <th>Last Name</th>
          <th>Email</th>
          <th>Complaint</th>
          <th>Date</th>
          <th></th>
        </tr>

        <?php
          if($fetch_data->num_rows() > 0){

            foreach($fetch_data->result() as $row){
        ?>
              <tr>
                <td><?php echo $row->first_name; ?></td>
                <td><?php echo $row->last_name; ?></td>
                <td><?php echo $row->email; ?></td>
                <!-- Button trigger modal -->
                <td><a href="#" class="" data-toggle="modal" data-target="#exampleModalLong<?php echo $row->complaints; ?>">
                  View Message
                </button></a>

                <!-- Modal -->
                <div class="modal fade" id="exampleModalLong<?php echo $row->complaints; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle"><?php echo $row->first_name; ?> <?php echo $row->last_name; ?></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body" style="text-align: left;">
                        <b>Complaint</b><br/>
                        <?php echo $row->complaints; ?><br/><hr>
                        <b>Sent Message</b>
                        <form action="<?php echo base_url(); ?>main/complaint_response/<?php echo $row->consti_id ?>/<?php echo $row->id ?>" method="post">
                          <div class="col-sm" style="padding-left: 0px; padding-bottom: 5px;">
                            <textarea name="response" id="complaint" rows="3" class="form-control" style="resize: none;" placeholder="Sent Message to this user" required></textarea>
                          </div>
                          <div class="modal-footer">
                            <input type="submit" name="submit" value="Send" class="btn btn-primary">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
                <td><?php echo $row->date; ?></td>
                <td><a href="#" class="delete_data" id="<?php echo $row->id; ?>">Delete</a></td>
                <!-- <td><a href="<?php echo base_url(); ?>main/update_data/<?php echo $row->id; ?>">Edit</a></td> -->
              </tr>
        <?php
            }
          }
          else{
        ?>
            <tr>
              <td colspan="4">No Data Found</td>
            </tr>
        <?php
          }
        ?>
      </table>
    </div>

    <script>
        $(document).ready(function(){
        $(".delete_data").click(function(){
          var id = $(this).attr("id");
          if(confirm("Are you sure you want to delete this?")){

            window.location = "<?php echo base_url(); ?>main/delete_complaint/" + id;
          }
          else{
            return false;
          }
        })
      })
      </script>
	</div>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>