<?php

 include "../config/server.php"; 

    session_start();

    session_destroy();

    header("Location: landingpage.php?logout=success");



?>