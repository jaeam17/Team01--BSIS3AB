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
		height: 350px;
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
		</div><br/>

		<div class="row">
    	<div class="col-md-6">
      	<div align="center">
					<b>Create Announcements/Events</b>
				</div>
				<?php if(isset($_SESSION['error'])){ ?>
					<div class="alert alert-danger" role="alert">
						<?php echo $_SESSION['error']; ?>
						<?php unset($_SESSION['error']); ?>
					</div>
				<?php   } ?>
				<?php if(isset($_SESSION['success'])){ ?>
					<div class="alert alert-success" role="alert">
						<?php echo $_SESSION['success']; ?>
						<?php unset($_SESSION['success']); ?>
					</div>
				<?php   } ?>
				<form action="<?php echo base_url(); ?>main/announcements" method="post">
					<div class="form-group">
						<label>Title</label>
						<input type="text" name="title" class="form-control">
					</div>
					<div class="form-group">
						<label>Description</label>
						<textarea name="announcement" id="announcement" rows="8" class="form-control" style="resize: none;"></textarea>
					</div>
					<div class="form-group">
						<input type="submit" name="submit" value="Submit" class="btn btn-primary">
					</div>
				</form>
    	</div>
    	<div class="col-md-6">
				<div class="scrollable">
					<table class="table table-bordered">
						<thead>
							<tr>
								<th>Title</th>
								<th>Description</th>
								<th>Date</th>
								<th>Delete</th>
							</tr>
						</thead>
						<?php
							if($fetch_data->num_rows() > 0){

								foreach($fetch_data->result() as $row){
						?>
									<tbody>
										<tr>
											<td><?php echo $row->title; ?></td>
											<td><?php echo $row->description; ?></td>
											<td><?php echo $row->date; ?></td>
											<td><a href="#" class="delete_data" id="<?php echo $row->id; ?>">Delete</a></td>
											<!-- <td><a href="<?php echo base_url(); ?>main/update_data/<?php echo $row->id; ?>">Edit</a></td> -->
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
  	</div>

		<script>
      $(document).ready(function(){
				$(".delete_data").click(function(){
					var id = $(this).attr("id");
					if(confirm("Are you sure you want to delete this?")){

						window.location = "<?php echo base_url(); ?>main/delete_announcement/" + id;
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