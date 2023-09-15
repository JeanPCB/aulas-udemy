<?php
    $db_name = "moviestar";
    $db_host = "localhost";
    $db_user = "root";
    $db_pass = "";

    $options = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ];

    try {
        $connection = new PDO("mysql:dbname=$db_name; host=$db_host", $db_user, $db_pass, $options);
    } catch(PDOException $e) {
        exit("Database connection failed: " . $e->getMessage());
    }