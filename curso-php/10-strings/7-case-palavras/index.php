<?php
    $str= "essa era uma string em caixa baixa";

    $firstWordCap = ucfirst($str);
    $allWordsCap = ucwords($str);

    function printString($string) {
        echo $string . "<br>";
    }

    printString($firstWordCap);
    printString($allWordsCap);