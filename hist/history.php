<?php

    include "../config/server.php";



?>
<?php
  include "../config/server.php";  

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
    <link rel="stylesheet" href="../css/style.css"></head>
    <link rel="stylesheet" href="../css/sweetalert/dist/sweetalert.min.js">
    <style>
        .table-responsive-sm{
          /* padding: -10px; */
          width: 100%;
        }
        .container {
          width: 100%;
        }
        table{
          width: 100%;
        }
        body {
          height: 100vh;
        }
    </style>
<body>
</head>
<body>
  <div class="container mt-5">
    <div class="table-responsive-sm mt-5 col-md-12">
        <!-- <a href="../sells/sell_product.php" class="text-right btn btn-success mt-5"><i class="fa fa-users"></i> &nbsp;&nbsp;ADD PRODUCT</a> -->
        <a href="../admin/admin_dashboard.php" class="text-left btn btn-primary mt-5"><i class="fa fa-backward"></i> &nbsp;&nbsp;BACK</a>
        <table class="table table-success table-striped table-bordered mt-3">
            <thead>
              <tr>
                <th>S/NO</th>
                <th>CUSTOMER NAME</th>
                <th>PRODUCT NAME</th>
                <th>QUANTITY</th>
                <th>COST PRICE</th>
                <th>SELL PRICE</th>
                <th>Total Cost Price</th>
                <th>PROFIT</th>
                <th>TOTAL</th>
                <th>STAFF NAME</th>
                <th>DATE</th>
              </tr>
            </thead>

              <?php
                  // include "../actions/delete.php";
                   include "../config/server.php";  
                  $sn = 1;
                  $sql = "SELECT * FROM sells ORDER BY id DESC";
                  $res = $conn->query($sql);

                  while($row = mysqli_fetch_assoc($res)): ?>
              
            <tbody>
              <tr>
                <td><?= $sn++; ?></td>
                <td><?= $row['customer_name']; ?></td>
                <td><?= $row['product_name']; ?></td>
                <td><?= $row['quantity']; ?></td>
                <td><?= $row['cost_price']; ?></td>
                <td><?= $row['Sell_price']; ?></td>
                <td><?= $row['cost_price']*$row['quantity']; ?></td>
                <td><?= ($row['Sell_price']*$row['quantity'])-($row['cost_price']*$row['quantity']);  ?></td>
                <td><?= ($row['Sell_price']*$row['quantity']); ?></td>
                <td><?= $row['staff_name']; ?></td>
                <td><?= $row['date']; ?></td>
              </tr>
            </tbody>
            <?php endwhile; ?>
        </table>
      </div>
   </div>
</body>
</html>