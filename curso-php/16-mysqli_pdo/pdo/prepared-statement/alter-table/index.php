<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "cursophp";

    $conn = new PDO("mysql:host=$host; dbname=$db", $user, $pass);

    // $conn->query("ALTER TABLE compras ADD COLUMN quantidade INT");

    // $conn->query("ALTER TABLE compras DROP COLUMN quantidade");