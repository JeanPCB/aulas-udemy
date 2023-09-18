<?php
    include_once "db.php";
    include_once "dao/CarDAO.php";

    $carDAO = new CarDAO($conn);

    $carDAO->deleteAll();

    header("Location: index.php");