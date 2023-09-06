<?php
    include_once './my-custom/classes/User.php';
    include_once './my-custom/classes/UserPremium.php';

    $usersList = [];

    for($i = 1; $i < 3; $i++) {
        ${'user' . $i} = new User('user' . $i, 'userpass' . $i);
        $usersList[] = ${'user' . $i};
    }

    for($i = 3; $i < 5; $i++) {
        ${'user' . $i} = new UserPremium('user' . $i, 'userpass' . $i);
        $usersList[] = ${'user' . $i};
        ${'user' . $i}->setPremium();
    }