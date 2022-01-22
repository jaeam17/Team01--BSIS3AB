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
</style>
<body>
	<div class="container">
		<br/><h3 align="center">Barangay System Admin Dashboard</h3><br/>
		<h4><?php echo "Welcome "?><b><?php echo $_SESSION['email']; ?></b></h4>
    <div class="form-group">
			<a href="<?php echo base_url(); ?>main/logout" class="btn btn-primary">Logout</a>
		</div>
    <br/>
		<div class="dropdown btn-toolbar">
			<a href="<?php echo base_url(); ?>main/admin_complaint" class="btn btn-primary">Complaint</a>
			<a href="<?php echo base_url(); ?>main/events" class="btn btn-primary">Events and Announcements</a>
      <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown">Barangay Document eAPPLICATIONS 		<span class="caret"></span></button>
			<ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
				<li><a class="dropdown-item" href="<?php echo base_url(); ?>main/admin_permit">Barangay Business Pemit</a></li>
				<li><a class="dropdown-item" href="<?php echo base_url(); ?>main/admin_clearance">Barangay Clearance</a></li>
			</ul>
      <a href="<?php echo base_url(); ?>main/admin_book_rent" class="btn btn-primary">Book a Rent</a>
		</div>
    

    <h3 align="center">Complaint</h3>
    <div class="table-responsive">
      <table class="table table-bordered">
        <tr>
          <th>First Name</th>
          <th>Last Name</th>
          <th>Email</th>
          <th>Complaint</th>
          <th>Date</th>
          <th>Delete</th>
        </tr>

        <?php
          if($fetch_data->num_rows() > 0){

            foreach($fetch_data->result() as $row){
        ?>
              <tr>
                <td><?php echo $row->first_name; ?></td>
                <td><?php echo $row->last_name; ?></td>
                <td><?php echo $row->email; ?></td>
                <td><?php echo $row->complaints; ?></td>
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
</body>
</html>