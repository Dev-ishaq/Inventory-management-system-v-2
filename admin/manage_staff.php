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
    <script src="../css/sweetalert2/dist/sweetalert2.all.min.js"></script>
    <link rel="stylesheet" href="../css/DataTables-1.13.6/css/jquery.dataTables.min.css">
    <style>
        .table-responsive-sm{
          width: 100%;
        }
        .container {
          width: 100%;
        }
        table{
          width: 100%;
        }
        .container {
            height: 100%;
        }
    </style>
<body>
</head>
<body>
  <div class="container mt-5">
    <div class="mt-5 col-md-12">
        <a href="../admin/admin_dashboard.php" class="text-left btn btn-primary mt-5"><i class="fa fa-backward"></i> &nbsp;&nbsp;BACK</a>
        <a href="../admin/reg2.php" class="text-right btn btn-success mt-5"><i class="fa fa-users"></i> &nbsp;&nbsp;ADD STAFF</a>
        





        
        <table class="table table-success table-striped table-bordered mt-3">
            <thead>
              <tr>
                <th>S/NO</th>
                <th>FULL NAME</th>
                <th>USERNAME</th>
                <th>NUMBER</th>
                <th>EMAIL</th>
                <th>PASSWORD</th>
                <th>CONFIRM PASSWORD</th>
                <th>DATE</th>
                <th colspan="2">ACTION</th>
              </tr>
            </thead>

              <?php
                  // include "../actions/delete.php";
                   include "../config/server.php";  
                  $sn = 1;
                  $sql = "SELECT * FROM ims ORDER BY id DESC";
                  $res = $conn->query($sql);

                  while($row = mysqli_fetch_assoc($res)): ?>
              
            <tbody>
              <tr>
                <td><?= $sn++; ?></td>
                <td><?= $row['full_name']; ?></td>
                <td><?= $row['username']; ?></td>
                <td><?= $row['number']; ?></td>
                <td><?= $row['email']; ?></td>
                <td><?= $row['password']; ?></td>
                <td><?= $row['cpassword']; ?></td>
                <td><?= $row['date']; ?></td>
                <td><a href="../admin/reg.php?edit=<?= $row['id']; ?>" class="btn btn-primary"><i class="fa fa-edit"></i>&nbsp; Edit</a></td>
                <td><a href="../actions/delete.php?del=<?= $row['id']; ?>" class="btn btn-danger"><i class="fa fa-trash"></i>&nbsp; Delete</a></td>
              </tr>
            </tbody>
            <?php endwhile; ?>
        </table>
      </div>
   </div>
   
   <script src="../css/JQ.js"></script>
   <script src="../css/DataTables-1.13.6/js/jquery.dataTables.min.js"></script>
   <script src="../css/bootstrap/js/bootstrap.min.js"></script>
   <script>
      $(document).ready(function(){
        $('.table').dataTable();
        
      });
   </script>
</body>
</html>