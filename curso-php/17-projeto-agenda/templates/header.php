<?php
    include_once "./config/url.php";
    include_once "./config/process.php";

    if(isset($_SESSION['msg'])) {
        $printMsg = $_SESSION['msg'];
        $_SESSION['msg'] = '';
    }
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.1/css/bootstrap.min.css" integrity="sha512-Z/def5z5u2aR89OuzYcxmDJ0Bnd5V1cKqBEbvLOiUNWdg9PQeXVvXLI90SE4QOHGlfLqUnDNVAYyZi8UwUTmWQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- MY CSS -->
    <link rel="stylesheet" href="./css/styles.css">

    <title>Agenda Online</title>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-primary">
            <div class="container-fluid">
                <a href="./index.php" class="navbar-brand">
                    <img src="./img/logo.svg" alt="Agenda">
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item ">
                            <a class="nav-link text-light" href="./create.php">Adicionar</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="./index.php">Voltar</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>