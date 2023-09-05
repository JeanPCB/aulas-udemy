<?php
    session_start();

    include_once "./config/connection.php";

    $query = "SELECT * FROM contacts";
    
    $stmt = $conn->prepare($query);
    $stmt->execute();

    $contacts = $stmt->fetchAll();