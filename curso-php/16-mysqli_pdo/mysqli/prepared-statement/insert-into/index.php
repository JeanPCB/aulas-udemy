<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "cursophp";

    $conn = new mysqli($host, $user, $pass, $db);

    //PREPARED STATEMENT
    $nome = "Desodorante";
    $preco = 15.75;
    $estado = "Novo";

    $stmt = $conn->prepare("INSERT INTO compras (nome, preco, estado) VALUES (?, ?, ?)");
    
    $stmt->bind_param("sds", $nome, $preco, $estado);

    $stmt->execute();

    $conn->close();