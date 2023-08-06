<?php

    function fullName($name, $surname) {
        $nameFull = $name . " " . $surname;
        
        return $nameFull;
    }

    function greetings($nameFull) {
        echo "Hey hey, $nameFull 😊";
    }

    $pessoa1 = fullName("Ana", "Carolina");
    $pessoa2 = fullName("João", "da Silva Sauro");

    greetings($pessoa1);
    echo "<br>";
    greetings($pessoa2);