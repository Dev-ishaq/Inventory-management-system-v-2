<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <script src="../css/sweetalert2/dist/sweetalert2.all.min.js"></script>
    
</head>
<body>
    
</body>
</html>
<?php

    include "server.php";

$errors = array();
$fname = "";
$uname = "";
$no = "";
$email = "";
$pass = "";
$cpass ="";

if(isset($_POST['reg'])){
    $errors = array();
    $fname = $_POST['fname'];
    $uname = $_POST['uname'];
    $no = $_POST['number'];
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $cpass = $_POST['cpassword'];

    if(empty($fname)){
        $errors['fname'] = 'Full Name is required';
    }
    
    if(empty($uname)){
        $errors['uname'] = 'Username Name is required';
    }
    
    if(empty($no)){
        $errors['number'] = 'Number is required';
    }
    
    if(empty($email)){
        $errors['email'] = 'Email is required';
    }
    
    if(empty($pass)){
        $errors['password'] = 'Password is required';
    }
    
    if(empty($cpass)){
        $errors['password'] = 'Confirm password is required';
    }

    if($pass != $cpass){
        $errors['mismatch'] = 'The two password mismatched';
    }

    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $errors['validate'] = 'Email Address is invalid';
    }

    $sql = "SELECT * FROM ims WHERE `username`=? OR `number`=? OR `email`=?";

        $stmt = $conn->prepare($sql);
        $stmt->bind_param('sss', $uname, $no, $email);
        $stmt->execute();

            $res = $stmt->get_result();
            $rowCount = $res->num_rows;

            if($rowCount>0){
                $errors['exist'] = 'User already already exist';
            }
            if(count($errors) === 0){
                $sql = "INSERT INTO ims(`full_name`, `username`, `number`, `email`, `password`, `cpassword`)VALUES(?,?,?,?,?,?)";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param('ssssss', $fname, $uname, $no, $email, $pass, $cpass);
        
                    if($stmt->execute()){
                            echo "
                            <script>
                                swal.fire('Done', 'Staff Added Successfully', 'success')
                                .then(function(result){
                                    if(result){
                                        window.location='../admin/admin_dashboard.php'
                                    }});




                                
                                // alert('Registered successfully')
                                // window.location='../admin/admin_dashboard.php';
                            </script>
                        ";


                        }
                }

            }





            
                include "../actions/edit.php";
                
            if(isset($_POST['btn_update_reg'])){
                $id = $_POST['hidden'];
                $fname = $_POST['fname'];
                $uname = $_POST['uname'];
                $no = $_POST['number'];
                $email = $_POST['email'];
                $pass = $_POST['password'];
                $cpass = $_POST['cpassword'];
 

                // $sql = "UPDATE ims SET `full_name`=?, `username`=?, `number`=?, `email`=?, `password`=?, `cpassword`=? WHERE `id`=?";
                // $stmt = $conn->prepare($sql);
                // $stmt->bind_param('sssssss', $fname, $uname, $no, $email, $pass, $cpass, $id);
                // $stmt->execute();
                // if($stmt){

                    $sql = "UPDATE ims SET `full_name`='$fname', `username`='$uname', `number`='$no', `email`='$email', `password`='$pass', `cpassword`='$cpass' WHERE `id`='$id'";
                    $res = $conn->query($sql);
                    if($res){
                    // header("Location: ../admin/manage_staff.php");
                    echo "
                        <script>
                            swal.fire('Update', 'Staff updated Successfully', 'success')
                            .then(function(result){
                            if(result){
                             window.location=' ../admin/manage_staff.php'
                        }});
                        </script>
                    ";
                }else{
                    // die(mysqli_error($stmt));
                    echo "failed to update";
                }
            }


            //     include "../actions/edit.php";
                
            // if(isset($_POST['btn_update_reg_admin'])){
            //     $id = $_POST['hidden'];
            //     $fname = $_POST['fname'];
            //     $uname = $_POST['uname'];
            //     $no = $_POST['number'];
            //     $email = $_POST['email'];
            //     $pass = $_POST['password'];
            //     $cpass = $_POST['cpassword'];
 

            //     // $sql = "UPDATE ims SET `full_name`=?, `username`=?, `number`=?, `email`=?, `password`=?, `cpassword`=? WHERE `id`=?";
            //     // $stmt = $conn->prepare($sql);
            //     // $stmt->bind_param('sssssss', $fname, $uname, $no, $email, $pass, $cpass, $id);
            //     // $stmt->execute();
            //     // if($stmt){

            //         $sql = "UPDATE ims SET `full_name`='$fname', `username`='$uname', `number`='$no', `email`='$email', `password`='$pass', `cpassword`='$cpass' WHERE `id`='$id'";
            //         $res = $conn->query($sql);
            //         if($res){
            //         header("Location: ../admin/manage_staff.php");
            //         // echo "
            //         //     <script>
            //         //         alert('Staff Updated Successful...')
            //         //         window.location = '../sells/manage_product.php';
            //         //     </script>
            //         // ";
            //     }else{
            //         // die(mysqli_error($stmt));
            //         echo "failed to update";
            //     }
            // }


    

            if(isset($_POST['buy_product-btn'])){

                $bname = $_POST['bname'];
                $pname =$_POST['pname'];
                $qty = $_POST['quantity'];
                $cprice = $_POST['cprice'];
                $total = $_POST['total'];

                $sql = "INSERT INTO buy(`buy_name`, `product_name`, `qty`, `cost_price`, `total`)VALUES(?,?,?,?,?)";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param('sssss', $bname, $pname, $qty, $cprice, $total);
        
                    if($stmt->execute()){
                            echo "
                            <script>
                                swal.fire('Done', 'Staff Added Successfully', 'success')
                                .then(function(result){
                                    if(result){
                                        window.location='../admin/admin_dashboard.php'
                                    }});




                                
                                // alert('Product Added successfully')
                                // window.location='../admin/admin_dashboard.php';
                            </script>
                        ";


                        }
            }


        
        
            

?>