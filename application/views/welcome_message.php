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
    <form action="<?php echo base_url(); ?>main/create_complaint" method="post">
			<div class="form-group">
				<label for="complaint">Enter your Complaint</label>
				<textarea name="complaint" id="complaint" rows="10" class="form-control" style="resize: none;"></textarea>
			</div>
			<div class="form-group">
				<input type="submit" name="submit" value="Submit" class="btn btn-primary">
			</div>
		</form>