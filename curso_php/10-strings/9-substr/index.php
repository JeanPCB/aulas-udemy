<?php
    header("Content-Type: text/plain");
    
    $str = "esta é minha string";
    $substr = substr($str, 8, 2); # substr(string, começo, quantidade de caracteres)
    echo $substr;

    echo "\n";

    $substr = substr($str, 1); # inclui o indice passado como parametro
    echo $substr;

    echo "\n";

    $substr = substr($str, 0, -6); # ultimo parametro negativo = remover ultimos caracteres
    echo $substr;