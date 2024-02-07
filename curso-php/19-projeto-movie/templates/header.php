<?php
    require_once "globals.php";
    require_once "db.php";
    require_once "models/Message.php";
    require_once "dao/UserDAO.php";

    $message = new Message($BASE_URL);

    $flashMessage = $message->getMessage();

    if(!empty($flashMessage["msg"])) {
        $message->clearMessage();
    }

    $userDao = new UserDAO($connection, $BASE_URL);

    $userData = $userDao->verifyToken(false);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/logo.svg" type="image/x-icon">
    <title>MovieStar</title>
    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.2/css/bootstrap.css" integrity="sha512-r0fo0kMK8myZfuKWk9b6yY8azUnHCPhgNz/uWDl2rtMdWJlk7gmd9socvGZdZzICwAkMgfTkVrplDahQ07Gi0A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg p-0">
            <div class="container-fluid">
                <div id="brand-search-container" class="d-flex">
                    <a class="navbar-brand text-white me-0" href="index.php">
                        <img class="w-25" src="img/moviestar.ico" alt="estrela dourada">
                        <span class="fw-semibold">MovieStar</span>
                    </a>
                    <form class="d-flex w-50" role="search">
                        <input class="form-control me-2" type="search" placeholder="Pesquisar o filme" aria-label="Search">
                        <button class="btn hoverable-link" type="submit">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </button>
                    </form>
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mb-2 mb-lg-0">
                        <?php if($userData): ?>
                            <li class="nav-item">
                                <a class="nav-link hoverable-link" href="newmovie.php">
                                    <i class="far fa-plus-square"></i>
                                    Incluir Filme
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link hoverable-link" href="dashboard.php">Meus Filmes</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link hoverable-link fw-bold" href="editprofile.php"><?= $userData->name ?></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link hoverable-link" href="logout.php">Sair</a>
                            </li>
                        <?php else: ?>
                            <li class="nav-item">
                                <a class="nav-link hoverable-link" href="auth.php">Entrar / Registrar</a>
                            </li>
                        <?php endif ?>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <?php if(!empty($flashMessage["msg"])): ?>
        <div class="alert text-center container w-50 mt-4 alert-<?= $flashMessage["type"] ?>" role="alert">
            <?= $flashMessage["msg"] ?>    
        </div>
    <?php endif ?>