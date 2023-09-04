<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "cursophp";

    $conn = new mysqli($host, $user, $pass, $db);

    $q = "SELECT * FROM compras";

    $result = $conn->query($q);

    $conn->close();

    // FETCH ONE ROW
    $item = $result->fetch_assoc();

    // FETCH ALL ROWS
    $items = $result->fetch_all();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <article>
        <h2>Table Aspects: </h2>
        <p><?php print_r($result) ?></p>
    </article>

    <article>
        <h2>Fetch One Row: </h2>
        <p><?php print_r($item)?></p>
    </article>

    <article>
        <h2>Fetch All Rows: </h2>
        <p><?php print_r($items)?></p>
    </article>
</body>
</html>