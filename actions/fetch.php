<?php
// echo "hello";
    include "../config/server.php";

    if(isset($_POST['input'])){
        $input = $_POST['input'];


        $sql = "SELECT * FROM ims WHERE full_name='$input'";

        $res = $conn->query($sql);

        if($res){
            $data = $res->fetch_assoc();
            $fname = $data['full_name'];

            echo "$fname";
        }
    }




?>