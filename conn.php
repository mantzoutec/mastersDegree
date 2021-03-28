<?php
    $host = "localhost";  
    $user = "root";
    $pass = "";
    $dbname = "mantzouranis";

    $con = mysqli_connect($host,$user,$pass,$dbname);
    
    // Check connection
    if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
    } 

    // Change character set to utf8
    $con -> set_charset("utf8");
?>