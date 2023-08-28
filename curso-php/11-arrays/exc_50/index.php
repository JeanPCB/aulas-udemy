<?php
    require __DIR__ . "/scripts/rank_list.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/index.css">
    <title>Rank</title>
</head>
<body>
    <section>
        <table>
            <thead>
                <tr>
                    <th>Rank</th>
                    <th>Nome</th>
                    <th>Pontuação</th>
                </tr>
            </thead>

            <tbody>
                <?php printRank($rank) ?>
            </tbody>
        </table>
    </section> 
</body>
</html>