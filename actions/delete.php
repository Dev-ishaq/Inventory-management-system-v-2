<?php

        include "../config/server.php";
        
        if(isset($_GET['del'])){
            $id = $_GET['del'];
            
            $sql = "DELETE FROM ims WHERE id=$id";

            $ask = $conn->query($sql);

            if($ask) {
                header("Location: ../sells/manage_product.php");
            }
        }



?>