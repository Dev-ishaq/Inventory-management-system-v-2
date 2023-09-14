
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
    <script src="../css/sweetalert2/dist/sweetalert2.all.min.js"></script>
    <style>
        body {
            height: 100vh;
        }
        .row {
            width: 100%;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row mt-5">
            
            <div class="col-md-6 offset-md-3 mt-5 outline-success">
                
                <form action="#" method="POST">
                    <h2 class="text-center text-success"><b>Staff Login</b></h2>
                    <div class="form-group">
                        <label for="uname">Enter your email:</label>
                        <input type="text" name="uname" value="" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input type="password" name="password" value="" class="form-control">
                    </div>
                    <div class="form-group">
                    <button type="submit" name="btn_staff_login" class="btn btn-success form-control mt-4">Login</button>
                        <!-- <a href="../staff/staff_dashboard.php" class="btn btn-success mt-3 form-control">Login</a> -->
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>

<?php

include "../config/server.php";
    
if(isset($_POST['btn_staff_login'])){
    $uname = $_POST['uname'];
    $pass = $_POST['password'];

    $sql = "SELECT * FROM ims WHERE `email`='$uname' AND `password`='$pass'";
    // $sql = mysqli_query($conn, "SELECT * FROM ims WHERE email='$uname' AND `password`='$pass'");
    $ask = $conn->query($sql);
    if(mysqli_num_rows($ask) > 0){
        session_start();
        $_SESSION['email']=$uname;
        header("Location: staff_dashboard.php");
    }else{
        echo "<script>
                swal.fire('Incorrect', 'Invalid email/password', 'error');
              </script>";
    }
}

?>