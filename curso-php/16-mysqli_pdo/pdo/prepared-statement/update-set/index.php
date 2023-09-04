<?php   
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "cursophp";

    $conn = new PDO("mysql:host=$host; dbname=$db", $user, $pass);

    $stmt = $conn->prepare("UPDATE compras SET nome = :nome2, preco = :preco, estado = :estado WHERE nome = :nome1");

    $nome1 = "mortadela";
    $nome2 = "Presunto";
    $preco = 3.60;
    $estado = "Ruim";

    $stmt->bindParam(":nome1", $nome1);
    $stmt->bindParam(":nome2", $nome2);
    $stmt->bindParam(":preco", $preco);
    $stmt->bindParam(":estado", $estado);

    $stmt->execute();   
