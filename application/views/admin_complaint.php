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
		<br/><h3 align="center">Barangay System Admin Dashboard</h3><br/>
		<h4><?php echo "Welcome "?><b><?php echo $_SESSION['email']; ?></b></h4>
    <div class="form-group">
			<a href="<?php echo base_url(); ?>main/logout" class="btn btn-primary">Logout</a>
		</div>
    <br/>
		<div class="form-group">
			<a href="<?php echo base_url(); ?>main/admin_complaint" class="btn btn-primary">Complaint</a>
			<a href="#" class="btn btn-primary">Barangay Clearance</a>
			<a href="#" class="btn btn-primary">Events and Announcements</a>
		</div><br/>

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



	</div>

</body>
</html>