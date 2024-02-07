<?php
    include_once './my-custom/helpers/url.php';
    require_once './my-custom/helpers/create_user.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP</title>
</head>
<body>
    <h1>OOP review</h1>
    
    <article>
        <?php foreach($usersList as $user): ?>
            <h2>Profile:</h2>
            <p>Nickname: <?= $user->getNick() ?></p>
            <p>Password: <?= $user->getPass() ?></p>
            <?php if($user->getPlan() == 'Premium'): ?>
                <p style="color:red;"><?= $user->getPlan() ?></p>
            <?php else: ?>
                <p><?= $user->getPlan() ?></p>
            <?php endif; ?>
        <?php endforeach; ?>
    </article>
</body>
</html>