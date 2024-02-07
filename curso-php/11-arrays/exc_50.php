<?php
    $pessoas = [
        "João" => 18,
        "José" => 10,
        "Maria" => 15,
        "Fabiana" => 40
    ]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exc_50 - php</title>
</head>

<style>
    table {
        border-collapse: collapse;
    }

    th, td {
        border: 1px solid #000;
        padding: 8px;
        text-align: left;
    }

    tbody tr:nth-child(odd) {
        background-color: #dddddd;
    }
</style>

<body>
    <table>
        <thead>
            <tr>
                <th>Nome</th>
                <th>Idade</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach ($pessoas as $name => $age): ?>
                <tr>
                    <td><?= $name ?></td>
                    <td><?= $age ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>