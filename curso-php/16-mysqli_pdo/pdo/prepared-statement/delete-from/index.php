<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "cursophp";

    $conn = new PDO("mysql:host=$host; dbname=$db", $user, $pass);

    $stmt = $conn->prepare("DELETE FROM compras WHERE id = :id");
    
    $id = 1;

    $stmt->bindParam(":id", $id);

    $stmt->execute();