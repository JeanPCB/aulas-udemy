<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "cursophp";

    $conn = new mysqli($host, $user, $pass, $db);

    function deleteFromCompras($condition) {
        $q = "DELETE FROM compras WHERE $condition";
        return $q;
    }

    $conn->query(deleteFromCompras("id = 11"));