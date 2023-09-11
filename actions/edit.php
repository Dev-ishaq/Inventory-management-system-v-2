<?php
    include "../config/server.php";

    // FIRST EDIT

$update = false;

    if(isset($_GET['edit'])){
        $id = $_GET['edit'];

        $update = true;

        $sql = "SELECT * FROM ims WHERE id = $id";

        $ask = $conn->query($sql);

        $output = mysqli_fetch_assoc($ask);
        
    }


            // SECOND EDIT


            
    $update = false;

    if(isset($_GET['edit2'])){
        $id = $_GET['edit2'];

        $update = true;

        $sql = "SELECT * FROM sells WHERE id = $id";

        $ask = $conn->query($sql);

        $output = mysqli_fetch_assoc($ask);
        
    }




?>