<?php
    $strOne = "essa era uma string em caixa baixa";
    $strTwo = "ESSA era UMA STRING EM CAIXA ALTA";

    $strOneUpper = strtoupper($strOne);
    $strTwoUpper = strtolower($strTwo);

    function printString($string) {
        echo $string . "<br>";
    }

    printString($strOneUpper);
    printString($strTwoUpper);