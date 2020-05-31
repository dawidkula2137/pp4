<?php

    $db_host = "localhost";
    $db_user = 'root';
    $db_pass = "";
    $db_name = "id13880151_projektpp4";

    $con = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

    if(!$con){
        echo "Błąd łączenia z bazą";
    }


?>