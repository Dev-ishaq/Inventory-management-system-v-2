<?php

    include "../config/server.php";
    include "../config/process.php";

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
    <script src="../css/sweetalert2/dist/sweetalert2.all.min.js"></script>
    <link rel="stylesheet" href="../css/style.css">
    <style>
        .row {
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
                <form action="buy_product.php" method="POST">
                   
                    <h2 class="text-center text-success">COMPANY NAME</h2>
                    <div class="form-group mt-2">
                        <label for="customer">Buyer Name:</label>
                        <input type="text" name="bname" value="" class="form-control" required>
                    </div>
                    <div class="form-group mt-2">
                        <label for="pname">Products Name:</label>
                        <select name="pname" id="" class="form-control form-select">
                            <option value="select"></option>
                            <option value="fanta">Fanta</option>
                            <option value="coaca_cola">Coaca cola</option>
                            <option value="malt">Malt</option>
                            <option value="halandia">Halandia</option>
                            <option value="happy_hour">Happy hour</option>
                            <option value="go_fresh">Go fresh</option>
                            <option value="nutri_milk">Nutri milk</option>
                            <option value="power_horse">Power horse</option>
                            <option value="mosnster">Mosnster</option>
                            <option value="chivita">Chivita</option>
                            <option value="lacasara">Lacasara</option>
                        </select>
                    </div>
                    <div class="form-group mt-2">
                        <label for="quantity">Quantity:</label>
                        <input type="number" name="quantity" value="" class="form-control" required>
                    </div>
                    <div class="form-group mt-2">
                        <label for="cprice">Cost Price:</label>
                        <input type="text" name="cprice" value="" class="form-control" required>
                    </div>
                    <div class="form-group mt-2">
                        <label for="number">Total:</label>
                        <input type="number" name="total" value="" class="form-control" required>
                    </div>
                    <div class="form-group mt-2">
                        <button type="submit" name="buy_product-btn" class="btn btn-success mt-3 form-control">BUY</button>
                    </div>
                    <span>
                    <a href="../staff/staff_dashboard.php" class="btn btn-success mt-2"><i class="fa fa-backward"></i> &nbsp;Back</a>
                    </span>
                    <span>
                    <!-- <a href="../sells/manage_product2.php" class="text-right btn btn-success mt-2">previous  &nbsp;<i class="fa fa-forward"></i></a> -->
                    </span>
                </form>
            </div>
        </div>
    </div>
</body>
</html>