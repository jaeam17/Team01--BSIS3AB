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
  .scrollable {
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

    <h3 align="center">Barangay Book a Rent</h3>

    <div class="row">
      <div class="col-md-6">
        <div class="scrollable">
					<table class="table table-bordered">
						<thead>
							<tr>
								<th>First Name</th>
								<th>Last Name</th>
								<th>Resources</th>
								<th>Status</th>
							</tr>
						</thead>
						<?php
							if($fetch_data->num_rows() > 0){

								foreach($fetch_data->result() as $row){
						?>
									<tbody>
										<tr>
                      <td><a href="<?php echo base_url(); ?>main/rent_data/<?php echo $row->id ?>"><?php echo $row->first_name; ?></a</td>
											<td><?php echo $row->last_name; ?></td>
											<td><?php echo $row->resources; ?></td>
											<td><?php echo $row->status; ?></td>
										</tr>
									</tbody>
						<?php
								}
							}
							else{
						?>
								<tbody>
									<tr>
										<td colspan="4">No Data Found</td>
									</tr>
								</tbody>
						<?php
							}
						?>
					</table>
				</div>
      </div>

      <div class="col-md-6" style="background-color: #F0E68C; height: 380px;">
        <?php foreach($consti_data->result() as $row1){ ?>
                <div class="row" style="padding-top: 5px;">
                  <div class="col-md-6">
                    <h4><?php echo $row1->name;?></h4>
                    <h4><label>Name</label></h4>
                  </div>
                  <div class="col-md-6">
                    <h4><?php echo $row1->address;?></h4>
                    <h4><label>Address</label></h4>
                  </div>
                </div>
                <div class="row" style="padding-bottom: 80px;">
                  <div class="col-md-3">
                    <h4><?php echo $row1->resources;?></h4>
                    <h4><label>Resources</label></h4>
                  </div>
                  <div class="col-md-3">
                    <h4><?php echo $row1->purpose;?></h4>
                    <h4><label>Purpose</label></h4>
                  </div>
                  <div class="col-md-3">
                    <h4><?php echo $row1->hours;?></h4>
                    <h4><label>Hours/Time</label></h4>
                  </div>
                  <div class="col-md-3">
                    <h4><?php echo $row1->date;?></h4>
                    <h4><label>Date</label></h4>
                  </div>
                </div>
                <div class="btn-toolbar">
                  <a href="<?php echo base_url(); ?>main/admin_rent_approve/<?php echo $row1->id ?>/approve" class="btn btn-success">Approve</a>
			            <a href="<?php echo base_url(); ?>main/admin_rent_approve/<?php echo $row1->id ?>/decline" class="btn btn-danger">Decline</a>
                  <a href="<?php echo base_url(); ?>main/admin_rent_approve/<?php echo $row1->id ?>/done" class="btn btn-primary">Done</a>
                </div>

                <div class="form-group-row" style="padding-top: 8px">
                  <form action="<?php echo base_url(); ?>main/rent_response/<?php echo $row1->consti_id ?>/<?php echo $row1->id ?>" method="post">
                    <div class="col-md-10" style="padding-left: 0px;">
                      <input type="text" name="response" class="form-control" placeholder="Message this user.." required>
                    </div>
                    <div class="col-md-2" style="padding-left: 0px;">
                      <input type="submit" name="submit" value="Send" class="btn btn-primary">
                    </div>
                  </form>
                </div>
        <?php } ?>
      </div>
    </div>
    

	</div>
</body>
</html>