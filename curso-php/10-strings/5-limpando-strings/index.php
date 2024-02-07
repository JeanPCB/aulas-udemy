<?php
    header("Content-Type: text/plain"); # interpreta como texto puro

    # trim -> limpa todos os espaços
    # ltrim -> limpa espaçoes à esquerda
    # rtrim -> limpa espaçoes à direita

    $name = " Jean ";
    echo strlen($name) . "\n";

    $nameTrim = trim($name);
    $nameLtrim = ltrim($name);
    $nameRtrim = rtrim($name);


    function printTrimmedName($name) {
        echo $name . "." . "\n";
    }

    printTrimmedName($nameTrim);
    printTrimmedName($nameLtrim);
    printTrimmedName($nameRtrim);

