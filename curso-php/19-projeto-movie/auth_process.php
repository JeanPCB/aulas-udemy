<?php
    require_once "globals.php";
    require_once "models/Message.php";
    require_once "models/User.php";
    require_once "dao/UserDAO.php";
    require_once "db.php";

    $message = new Message($BASE_URL);

    $userDao = new UserDAO($connection, $BASE_URL);

    $type = filter_input(INPUT_POST, "type");
    
    if($type === "register") {
        $email = filter_input(INPUT_POST, "email");
        $name = filter_input(INPUT_POST, "name");
        $lastname = filter_input(INPUT_POST, "lastname");
        $password = filter_input(INPUT_POST, "password");
        $confirmpass = filter_input(INPUT_POST, "confirmpass");

        if($email && $name && $lastname && $password && $confirmpass) {
            if($password !== $confirmpass) {
                $message->setMessage("As senhas não coincidem", "danger", "back");
            } else {
                if($userDao->findByEmail($email) == false) {
                    $user = new User;

                    $userToken = $user->generateToken();
                    $finalPassword = $user->hashPassword($password);

                    $user->email = $email;
                    $user->name = $name;
                    $user->lastname = $lastname;
                    $user->password = $finalPassword;
                    $user->token = $userToken;
                    $auth = true;

                    $userDao->createUser($user, $auth);
                }
            }
        }else {
            $message->setMessage("Preencha todos os campos", "danger", "back");
        }

    }  elseif ($type === "login") {
            
    }