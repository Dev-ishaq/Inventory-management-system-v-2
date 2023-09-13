<?php
 
    include "../config/server.php";
    
    if(isset($_POST['btn_admin_login'])){
        $fanme = $_POST['uname'];
        $pass = $_POST['password'];

        $sql = "SELECT * FROM ";
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
    <link rel="stylesheet" href="../css/style.css">
<style>
          .row{
        /* background-color: aqua; */
        width: 100%;
        }
        body {
            height: 100vh;
        }
</style>
</head>
<body>
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-6 offset-md-3 mt-5">
                <form action="../admin/admin_dashboard.php" method="POST">
                    <h2 class="text-center text-success">Admin Login</h2>
                        <!-- <div class="alert alert-danger">
                            <li></li>
                        </div> -->
                    <div class="form-group">
                        <label for="uname">Username:</label>
                        <input type="text" name="uname" value="" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input type="password" name="password" value="" class="form-control">
                    </div>
                    <div class="form-group">
                        <!-- <a href="admin_dashboard.html" class="btn btn-success mt-3 form-control">Login</a> -->
                        <button class="btn btn-success form-control mt-4" name="btn_admin_login">Login</button>
                        <a href="reg.php" class="text-success text-center"><i class="fa fa-users mt-3"></i>&nbsp; Add Staff</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>