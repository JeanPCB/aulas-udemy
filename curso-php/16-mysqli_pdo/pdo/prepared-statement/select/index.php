<?php   
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "cursophp";

    $conn = new PDO("mysql:host=$host; dbname=$db", $user, $pass);

    $stmt = $conn->prepare("SELECT * FROM compras WHERE id <> :id");

    $id = 3;

    $stmt->bindParam(":id", $id);

    $stmt->execute();

    $data = $stmt->fetch(PDO::FETCH_ASSOC);
    print_r($data);

    echo "<br>";

    $data2 = $stmt->fetchAll(PDO::FETCH_ASSOC);
    print_r($data2);