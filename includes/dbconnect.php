<?php
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "mapping";

    $connection = mysqli_connect($servername,$username,$password,$dbname) or die("Error " . mysqli_error($connection));
