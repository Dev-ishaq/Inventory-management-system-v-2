<?php



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
        body {
            height: 100vh;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-4 offset-md-4 mt-5 outline-success">
                <form action="staff_dashboard.html" method="POST">
                    <h2 class="text-center text-success">Staff Login</h2>
                    <div class="form-group">
                        <label for="uname">Username:</label>
                        <input type="text" name="uname" value="" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input type="password" name="password" value="" class="form-control">
                    </div>
                    <div class="form-group">
                        <a href="../staff/staff_dashboard.php" class="btn btn-success mt-3 form-control">Login</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>