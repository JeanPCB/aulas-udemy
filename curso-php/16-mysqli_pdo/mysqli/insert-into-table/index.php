<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "cursophp";

    $conn = new mysqli($host, $user, $pass, $db);

    // $q = "INSERT INTO compras (nome, preco, estado) VALUES ('Suco', '10.00', 'Excelente')";

    // $conn->query($q);

    function insertIntoCompras($nome, $preco, $estado) {
       $q = "INSERT INTO compras (nome, preco, estado) VALUES ('$nome', '$preco', '$estado')";
       return $q;
    }

    $conn->query(insertIntoCompras("Xampu", "12.50", "Ótimo"));