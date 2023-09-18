<?php


        include "../config/server.php";
        //first delete
        if(isset($_GET['del'])){
            $id = $_GET['del'];
            
            $sql = "DELETE FROM ims WHERE id=$id";

            $ask = $conn->query($sql);

            if($ask) {
                header("Location: ../admin/manage_staff.php");
            }
        }

                // second delete

        if(isset($_GET['del2'])){
            $id = $_GET['del2'];
            
            $sql = "DELETE FROM sells WHERE id=$id";

            $ask = $conn->query($sql);

            if($ask) {
                header("Location: ../sells/manage_product.php");
            }
        }


                // third delete

        if(isset($_GET['del3'])){
            $id = $_GET['del3'];
            
            $sql = "DELETE FROM buy WHERE id=$id";

            $ask = $conn->query($sql);

            if($ask) {
                header("Location: ../buy/view_product.php");
            }
        }





?>