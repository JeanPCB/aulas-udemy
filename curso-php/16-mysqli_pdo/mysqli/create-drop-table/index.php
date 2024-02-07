<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "cursophp";

    $conn = new mysqli($host, $user, $pass, $db);

    ### CREATE ###
    // $query = "CREATE TABLE user (
    //     fist_name VARCHAR(100),
    //     last_name VARCHAR(100)
    // )";  

    // $conn->query($query);

    // $conn->close();

    ### DROP ###
    $query = "DROP TABLE user";
    
    $conn->query($query);

    $conn->close();