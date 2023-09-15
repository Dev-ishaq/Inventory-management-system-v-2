<?php
include "../config/server.php";
include "../config/process.php";

    $fname = "";
    $uname = "";
    $no = "";
    $email = "";
    $pass = "";
    $cpass ="";

include "../actions/edit.php";

    if($update==true){
        $fname = $output['full_name'];
        $uname = $output['username'];
        $no = $output['number'];
        $email = $output['email'];
        $pass = $output['password'];
        $cpass = $output['cpassword'];
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventory Management System</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="../css/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="../css/sweetalert/dist/sweetalert.min.js">
    <link rel="stylesheet" href="../css/style.css">
    <style>
        .row{
        /* background-color: aqua; */
        width: 100%;
        }
        .container {
            height: 100vh;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-6 offset-md-3 mt-5">
                <form action="reg.php" method="POST">
                    <?php
                    if($update==true): ?>
                    <h2 class="text-center text-success alert alert-success">Update Staff</h2>
                    <?php else :?>
                        <h2 class="text-center text-success alert alert-success">Add Staff</h2>
                        <?php endif; ?>
                    <?php
                    if(count($errors)>0){ ?>
                          <div class="alert alert-danger">
                         <?php foreach($errors as $err){?>
                          <li>
                            <?php echo $err; ?>
                        </li>
                          <?php }; ?>
                      </div>
                    <?php }; ?>
                    <div class="form-group mt-2">
                        <!-- <label for="uname">Username:</label> -->
                        <input type="hidden" name="hidden" value="<?= $id; ?>">
                    </div>
                    <div class="form-group mt-2">
                        <label for="fname">Full Name:</label>
                        <input type="text" name="fname" value="<?= $fname; ?>" class="form-control">
                    </div>
                    <div class="form-group mt-2">
                        <label for="uname">Username:</label>
                        <input type="text" name="uname" value="<?= $uname; ?>" class="form-control">
                    </div>
                    <div class="form-group mt-2">
                        <label for="number">Number:</label>
                        <input type="number" name="number" value="<?= $no; ?>" class="form-control">
                    </div>
                    <div class="form-group mt-2">
                        <label for="email">Email:</label>
                        <input type="email" name="email" value="<?= $email; ?>" class="form-control">
                    </div>
                    <div class="form-group mt-2">
                        <label for="password">Password:</label>
                        <input type="password" name="password" value="<?= $pass; ?>" class="form-control">
                    </div>
                    <div class="form-group mt-2">
                        <label for="password">Confirm Password:</label>
                        <input type="password" name="cpassword" value="<?= $cpass; ?>" class="form-control">
                    </div>
                    <div class="form-group mt-2">
                        <?php
                        if($update==true): ?>
                        <button type="submit" name="btn_update_reg" class="btn btn-success mt-3 form-control">Proceed to Update</button>
                        <?php else :?>
                            <button type="submit" name="reg" class="btn btn-success mt-3 form-control">Register</button>
                            <?php endif; ?>
                            <a href="../admin/admin_dashboard.php" class="btn btn-success mt-2"><i class="fa fa-backward"></i> &nbsp;Back</a>
                            <span>
                                <!-- <a href="../admin/manage_staff.php" class="text-right btn btn-success mt-2">previous  &nbsp;<i class="fa fa-forward"></i></a> -->
                            </span>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>