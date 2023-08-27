<?php
    $nome = "João da Silva";
    $idade = 19;
    $altura = number_format(1.60, 2);
    $homossexual = true;

    $joao = compact("nome", "idade", "altura", "homossexual");

    foreach($joao as $features => $value) {
        echo "$features: $value <br>";
    }