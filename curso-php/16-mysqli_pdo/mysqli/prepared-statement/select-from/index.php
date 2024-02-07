<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "cursophp";

    $conn = new mysqli($host, $user, $pass, $db);

    $id = 2;

    $stmt = $conn->prepare("SELECT * FROM compras WHERE id > ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();

    $result = $stmt->get_result();

    $data = $result->fetch_all();
    print_r($data);

    $conn->close();
