<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $dbname = "agenda";

    try {
        $conn = new PDO("mysql:host=$host; dbname=$dbname", $user, $pass);
    } catch(PDOException $e) {
        $error = $e->getMessage();
        echo "Erro: $error";
        exit;
    }