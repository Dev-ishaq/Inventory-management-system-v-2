
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sells</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="../css/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/fontawesome-free/css/all.min.css">
    <script src="../css/sweetalert2/dist/sweetalert2.all.min.js"></script>
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
                <form action="sell_product.php" method="POST">

                    <h2 class="text-center text-success alert alert-success">Sell Product</h2>
                    <div class="form-group mt-2">
                        <label for="customer">Customer Name:</label>
                        <input type="text" name="cname" value="" class="form-control">
                    </div>
                    <div class="form-group mt-2">
                        <label for="fname">Product Name:</label>
                        <select name="select" id="" class="form-control form-select">
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
                        <input type="number" name="quantity" value="" class="form-control">
                    </div>
                    <div class="form-group mt-2">
                        <label for="uname">Cost Price:</label>
                        <input type="text" name="costname" value="" class="form-control">
                    </div>
                    <div class="form-group mt-2">
                        <label for="number">Sell Price:</label>
                        <input type="number" name="sellprice" value="" class="form-control">
                    </div>
                    <div class="form-group mt-2">
                        <label for="staffName">Staff Name:</label>
                        <input type="text" name="staff" value="" class="form-control">
                    </div>
                    <div class="form-group mt-2">
                        <button type="submit" name="sells_btn_reg" class="btn btn-success mt-3 form-control">Proceed to sell</button>
                    </div>
                    <span>
                    <a href="../admin/admin_dashboard.php" class="btn btn-success mt-2"><i class="fa fa-backward"></i> &nbsp;Back</a>
                    </span>
                    <span>
                    <!-- <a href="../sells/manage_product.php" class="text-right btn btn-success mt-2">previous  &nbsp;<i class="fa fa-forward"></i></a> -->
                    </span>
                </form>
            </div>
        </div>
    </div>
</body>
</html>


<?php


   include "../config/server.php";
   $errors = array();
$fname = "";
$uname = "";
$no = "";
$email = "";
$pass = "";
$cpass ="";

if(isset($_POST['sells_btn_reg'])){
    $errors = array();
    $cname = $_POST['cname'];
    $pname = $_POST['select'];
    $qty = $_POST['quantity'];
    $cprice = $_POST['costname'];
    $sprice = $_POST['sellprice'];
    $staff = $_POST['staff'];
}

    if(empty($cname)){
        $errors['cname'] = 'Customer name is required';
    }
    
    if(empty($pname)){
        $errors['pname'] = 'Product name is required';
    }
    
    if(empty($qty)){
        $errors['qty'] = 'please select quantity';
    }
    
    if(empty($cprice)){
        $errors['cprice'] = 'Cost price is required';
    }
    
    if(empty($sprice)){
        $errors['sprice'] = 'Sell price is required';
    }
    
    if(empty($staff)){
        $errors['sprice'] = 'Staff name is required';
    }

    if(count($errors) === 0){
        $sql = "INSERT INTO sells(`customer_name`, `product_name`, `quantity`, `cost_price`, `Sell_price`, `staff_name`)VALUES(?,?,?,?,?,?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('ssssss', $cname, $pname, $qty, $cprice, $sprice, $staff);

            if($stmt->execute()){
                    echo "
                    <script>
                        swal.fire('Done', 'product Added Successfully', 'success')
                        .then(function(result){
                            if(result){
                                window.location='../admin/admin_dashboard.php'
                            }});




                        
                        // alert('Product Added Successfully')
                        // window.location='../admin/admin_dashboard.php';
                    </script>
                ";


                }
        }

    



?>
