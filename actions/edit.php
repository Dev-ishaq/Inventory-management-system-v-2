<?php
    include "../config/server.php";

$update = false;

    if(isset($_GET['edit'])){
        $id = $_GET['edit'];

        $update = true;

        $sql = "SELECT * FROM ims WHERE id = $id";

        $ask = $conn->query($sql);

        $output = mysqli_fetch_assoc($ask);
        
    }


?>