<?php
session_start();
  include "../config/server.php";
  if(!$_SESSION){
    header("Location: admin-login.php");
    exit();
  }
  

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventory Management System</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <!-- <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="../css/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <script src="../css/sweetalert2/dist/sweetalert2.all.min.js"></script>
</head>
<body>
</head>
<body>
    <div class="container">
                                <!-- DASHBOARD ONLY ICONS -->
        <nav class="nav-display-none">
          <ul>
              <li><a href="" title="DASHBOARD"><i class="fa fa-tachometer"></i><span>DASHBOARD</span></a></li>
              <li><a href="#" title="HOME"><i class="fa fa-home"></i><span>HOME</span></a></li>
              <li><a href="../admin/reg.php" title="ADD STAFF"><i class="fas fa-user-plus"></i><span>Add Staff</span></a></li>
              <li><a href="../staff/staff_dashboard.php" title="VIEW STAFF"><i class="fa fa-eye"></i><span>View Staff</span></a></li>
              <li><a href="../buy/buy_product.php" title="ADD PRODUCT"><i class="fa fa-shopping-bag"></i><span>Add Product</span></a></li>
              <li><a href="../buy/view_product.php" title="VIEW PRODUCT"><i class="fa fa-eye"></i><span>View Product</span></a></li>
              <li><a href="../sells/sell_product.php" title="SELL PRODUCT"><i class="fa fa-shopping-bag"></i><span>Sell Product</span></a></li>
              <li><a href="../sells/view_sold_product.php" title="VIEW SOLD PRODUCT"><i class="fa fa-eye"></i><span>manage Product</span></a></li>
              <li><a href="../hist/history.php" title="HISTORY"><i class="fa fa-history"></i><span>History</span></a></li>
              <li><a href="../admin/landingpage.php" title="LOGOUT"><i class="fa fa-backward"></i><span>LogOut</span></a></li>
            </ul>
        </nav>
                          <!-- DASHBOARD WITH ICONS -->
        <nav class="nav-display">
            <h1><i class="fa fa-tachometer"></i> DASHBOARD</h1>
            <ul>
              <li><a href="#"><i class="fa fa-home"></i> <span>HOME</span></a></li>
              <li><a href="../admin/reg.php"><i class="fas fa-user-plus"></i> <span>Add Staff</span></a></li>
              <!-- <li><a href="../staff/staff_dashboard.php"><i class="fa fa-eye"></i> <span>View Staff</span></a></li> -->
              <li><a href="../buy/buy_product.php"><i class="fa fa-shopping-bag"></i> <span>Add Product</span></a></li>
              <li><a href="../buy/view_product.php"><i class="fa fa-eye"></i> <span>View Product</span></a></li>
              <li><a href="../sells/sell_product.php"><i class="fa fa-shopping-bag"></i> <span>Sell Product</span></a></li>
              <li><a href="../sells/manage_product.php"><i class="fa fa-eye"></i> <span>View Product</span></a></li>
              <li><a href="../hist/history.php"><i class="fa fa-history"></i> <span>History</span></a></li>
              <li><a href="../admin/landingpage.php"><i class="fa fa-backward"></i> <span>LogOut</span></a></li>
            </ul>
        </nav>
        <section>

                    <!-- Header section -->
            <header>
                <div class="navbar">
                    <a href="#about">ABOUT</a>
                    <a href="#news">NEWS</a>
                    <div class="dropdown">
                      <button class="dropbtn">MANAGEMENT 
                        <i class="fa fa-caret-down"></i>
                      </button>
                      <div class="dropdown-content">
                        <!-- <a href="../staff/staff_dashboard.php">STAFFS</a> -->
                        <a href="reg_admin.php">ADD ADMINS</a>
                        <!-- <a href="#">BLOG</a> -->
                      </div>
                    </div> 
                    <a href="logout.php">LOGOUT</a>
                  </div>
            </header>
            <!-- <div class="mark1" id="mark-second">
                <marquee>Inventory Management System</marquee>
              </div> -->

                <!-- aside navbar toggle section -->

            <div class="navbar" id="navbarr">
            <a href="javascript:void(0)" class="closebtn" style="font-size: 35px; margin-top: -25px;" onclick="closeNav()">&times;</a>
              <a href="#about">ABOUT</a>
              <a href="#news">NEWS</a>
              <div class="dropdown">
                <button class="dropbtn">MANAGEMENT 
                  <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                  <!-- <a href="../staff/staff_dashboard.php">STAFFS</a> -->
                  <a href="reg_admin.php">ADD ADMINS</a>
                  <!-- <a href="#">BLOG</a> -->
                  <a href="logout.php.php">LOGOUT</a>
                </div>
              </div> 
            </div>

            <span class="span-bars" style="font-size:30px;cursor:pointer;" onclick="openNav()">&#9776;</span>
                <div class="mark">
                  <marquee behavior="scroll" scrollamount="3" direction="up">Inventory Management System</marquee>
                </div>
                      <!-- main cards section -->
            <main>
                <div class="card"><a href="../admin/reg.php">ADD STAFF</a></div>
                <div class="card"><a href="../sells/manage_product.php">MANAGE PRODUCT</a></div>
                <div class="card"><a href="../sells/sell_product.php">SELL PRODUCT</a></div>
                <div class="card"><a href="../admin/manage_staff.php">MANAGE STAFF</a></div>
                <div class="card"><a href="../hist/history.php">HISTORY</a></div>
            </main>
        </section>
    </div>
    <div class="container-vm" id="about">
      <div class="about">
        <h1 style="text-align: center;">About Us</h1><br>
        <p style="text-align: center;">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p> 
      </div>
      <section class="vm">
        <div class="vision">
          <h1 style="text-align: center;">Vision</h1><br>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
        </div>
        <div class="mission">
          <h1 style="text-align: center;">Mission</h1><br>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p> 
        </div>
      </section>
      <!-- <a href="#about">Back to top</a> -->
      <footer>
        <p>Copyright&copy;2023 <span>All right reserves.</span></p>
        <!-- <p></p> -->
        <a href="" class="fab fa-facebook"></a>
        <a href="" class="fab fa-whatsapp"></a>
        <a href="" class="fab fa-youtube"></a>
        <a href="" class="fab fa-twitter"></a>
        <span>
          <p><i>POWERED BY DEV-ISHAQ TECH</i></p>
        </span>
      </footer>
    </div>

      <script>
        function openNav() {
          document.getElementById("navbarr").style.width = "100%";
        }

        function closeNav() {
          document.getElementById("navbarr").style.width = "0%";
        }
      </script>
</body>
</html>