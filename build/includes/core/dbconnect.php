<?php
    include 'config.php';
    
    $database_host = DB_HOST;
    $database_user = DB_USER;
    $database_pass = DB_PASS;
    $database_name = DB_NAME;

    $connection = mysqli_connect($database_host,$database_user,$database_pass,$database_name) or die("Error " . mysqli_error($connection));
