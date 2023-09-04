<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "cursophp";

    $conn = new PDO("mysql:host=$host; dbname=$db", $user, $pass);

    $stmt = $conn->prepare("INSERT INTO compras (nome, preco) VALUES (:nome, :preco)");

    $nome = "Bolacha";
    $preco = 6.50;

    $stmt->bindParam(":nome", $nome);
    $stmt->bindParam(":preco", $preco);

    $stmt->execute();