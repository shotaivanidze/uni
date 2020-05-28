<?php
    $server = "localhost";
    $user = "gau";
    $password = "gau123";
    $dbname = "flight";

    $con = mysqli_connect($server, $user, $password, $dbname);

    if(!$con){
        die("Connection Error");
    } else {
        
    }
?>