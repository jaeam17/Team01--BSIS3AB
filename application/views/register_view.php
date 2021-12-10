<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
    <title>Register</title>
</head>
<body>
    <div class="container">
        <br/><h3 align="center">Barangay System</h3><br/>
        <div class="panel panel-primary">
            <div class="panel-heading">Registration</div>
            <div class="panel-body">
                <form action="<?php echo base_url(); ?>main/register_validation" method="post">
                    <?php if(isset($_SESSION['success'])){ ?>
                            <div class="alert alert-success" role="alert">
                                <?php echo $_SESSION['success']; ?>
                                <?php unset($_SESSION['success']); ?>
                            </div>
                    <?php   } ?>
                    <?php if(isset($_SESSION['error'])){ ?>
                            <div class="alert alert-danger" role="alert">
                                <?php echo $_SESSION['error']; ?>
                                <?php unset($_SESSION['error']); ?>
                            </div>
                    <?php   } ?>
                    <div class="form-row">
                        <div class="form-group col-md-4" style="padding-left: 0px;">
                                <label>Firstname</label>
                                <input type="text" name="first_name" class="form-control" placeholder="Firstname">
                                <span class="text-danger"><?php echo form_error('first_name'); ?></span>
                        </div>
                        <div class="form-group col-md-4" style="padding-left: 0px;">
                                <label>Middlename</label>
                                <input type="text" name="middle_name" class="form-control" placeholder="Middlename">
                                <span class="text-danger"><?php echo form_error('middle_name'); ?></span>
                        </div>
                        <div class="form-group col-md-4" style="padding-left: 0px;">
                                <label>Lastname</label>
                                <input type="text" name="last_name" class="form-control" placeholder="Lastname">
                                <span class="text-danger"><?php echo form_error('last_name'); ?></span>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6" style="padding-left: 0px;">
                            <label>Email</label>
                            <input type="email" name="user_email" class="form-control" placeholder="Email">
                            <span class="text-danger"><?php echo form_error('user_email'); ?></span>
                        </div>
                        <div class="form-group col-md-6" style="padding-left: 0px;">
                            <label>Password</label>
                            <input type="password" name="user_password" class="form-control" placeholder="Password">
                            <span class="text-danger"><?php echo form_error('user_password'); ?></span>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12" style="padding-left: 0px;">
                            <label>Address</label>
                            <input type="text" name="user_address" class="form-control" placeholder="Address">
                            <span class="text-danger"><?php echo form_error('user_address'); ?></span>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-4" style="padding-left: 0px;">
                            <label>Age</label>
                            <input type="number" name="user_age" class="form-control" placeholder="Age">
                            <span class="text-danger"><?php echo form_error('user_age'); ?></span>
                        </div>
                        <div class="form-group col-md-4" style="padding-left: 0px;">
                            <label>Sex</label>
                            <select class="form-control" name="user_sex">
                                <option value="" disabled selected>...</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                            <span class="text-danger"><?php echo form_error('user_sex'); ?></span>
                        </div>
                        <div class="form-group col-md-4" style="padding-left: 0px;">
                            <label>Birthday</label>
                            <input type="date" name="user_birthday" class="form-control">
                            <span class="text-danger"><?php echo form_error('user_birthday'); ?></span>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6" style="padding-left: 0px;">
                            <label>Civil Status</label>
                            <select class="form-control" name="user_civil_status">
                                <option value="" disabled selected>...</option>
                                <option value="Single">Single</option>
                                <option value="Married">Married</option>
                            </select>
                            <span class="text-danger"><?php echo form_error('user_civil_status'); ?></span>
                        </div>
                        <div class="form-group col-md-6" style="padding-left: 0px;">
                            <label>Cellphone Number</label>
                            <input type="number" name="user_number" class="form-control" placeholder="Cellphone Number">
                            <span class="text-danger"><?php echo form_error('user_number'); ?></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="submit" name="insert" value="Register" class="btn btn-primary">
                    </div>
                    <br/><br/>
                    <div class="form-group">
                        <a href="<?php echo base_url(); ?>" class="btn btn-primary">Back</a>
                    </div>
                </form>
            </div>

        </div>
    </div>

</body>
</html>