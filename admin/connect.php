<?php
    $dbHost = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $database = "db_ntt";

    $connect = mysqli_connect($dbHost, $dbUsername, $dbPassword, $database) or die("Cannot connect to database");
?>