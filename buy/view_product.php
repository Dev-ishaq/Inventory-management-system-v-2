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
        body{
          height: auto;
        }
    </style>
<body>
</head>
<body>
  <div class="container mt-5">
    <div class="table-responsive-sm mt-5 col-md-12">
        <a href="../admin/admin_dashboard.php" class="text-left btn btn-primary mt-5"><i class="fa fa-backward"></i> &nbsp;&nbsp;BACK</a>
        <a href="../buy/buy_products.php" class="text-right btn btn-success mt-5"><i class="fa fa-shopping-bag"></i> &nbsp;&nbsp;ADD PRODUCT</a>
        <div class="row">
            <div class="col-md-3 offset-md-9">
                <form action="" method="post">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search Here..">
                    </div>
                </form>
            </div>
        </div>
        <table class="table table-success table-striped table-bordered mt-3">
            <thead>
              <tr>
                <th>S/NO</th>
                <th>BUYER NAME</th>
                <th>PRODUCT NAME</th>
                <th>QUANTITY</th>
                <th>COST PRICE</th>
                <!-- <th>SELL PRICE</th> -->
                <!-- <th>Total Cost Price</th> -->
                <!-- <th>PROFIT</th> -->
                <th>TOTAL</th>
                <!-- <th>STAFF NAME</th> -->
                <th>DATE</th>
                <th>ACTION</th>
              </tr>
            </thead>

              <?php
                  // include "../actions/delete.php";
                   include "../config/server.php";  
                  $sn = 1;
                  $sql = "SELECT * FROM buy ORDER BY id DESC";
                  $res = $conn->query($sql);

                  while($row = mysqli_fetch_assoc($res)): ?>
              
            <tbody>
              <tr>
                <td><?= $sn++; ?></td>
                <td><?= $row['buy_name']; ?></td>
                <td><?= $row['product_name']; ?></td>
                <td><?= $row['qty']; ?></td>
                <td><?= $row['cost_price']; ?></td>
                <td><?= $row['total']; ?></td>
                <td><?= $row['date']; ?></td>
                <!-- <td><?= $row['cost_price']*$row['quantity']; ?></td>
                <td><?= ($row['Sell_price']*$row['quantity'])-($row['cost_price']*$row['quantity']);  ?></td>
                <td><?= ($row['Sell_price']*$row['quantity']); ?></td>
                <td><?= $row['staff_name']; ?></td>
                <td><?= $row['date']; ?></td> -->
                <!-- <td><a href="../sells/sell_product.php?edit2=<?= $row['id']; ?>" class="btn btn-primary"><i class="fa fa-edit"></i>&nbsp; Edit</a></td> -->
                <td><a href="../actions/delete.php?del3=<?= $row['id']; ?>" class="btn btn-danger"><i class="fa fa-trash"></i>&nbsp; Delete</a></td>
              </tr>
            </tbody>
            <?php endwhile; ?>
        </table>
      </div>
   </div>
</body>
</html>