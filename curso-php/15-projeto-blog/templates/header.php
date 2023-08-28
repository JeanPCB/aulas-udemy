<?php
    include_once("./helpers/url.php");
    include_once("./data/posts.php");
    include_once("./data/categories.php");
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- My Styles -->
    <link rel="stylesheet" href="./css/styles.css">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;700&display=swap" rel="stylesheet">

    <title>Blog Codar</title>
</head>
<body>
    <header>
        <a href="./index.php" id="logo">
            <img src="./img/logo.svg" alt="logo do site">
        </a>

        <nav>
            <ul>
                <li><a href="./index.php" class="nav-link">HOME</a></li>
                <li><a href="#" class="nav-link">CATEGORIAS</a></li>
                <li><a href="#" class="nav-link">SOBRE</a></li>
                <li><a href="./contato.php" class="nav-link">CONTATO</a></li>
            </ul>
        </nav>
    </header>