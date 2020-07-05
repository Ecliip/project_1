<?php
    $user = 'root';
    $password = 'root';
    $db = 'mydb1';
    $host = 'localhost';
    $port = 3307;

    $con ;
     $con = mysqli_connect(
        $host,
        $user,
        $password,
        $db,
        $port);

// Check connection
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        exit();
    } else {
        echo "it is connected <br>";
    }


