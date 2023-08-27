<?php
    # String para Array
    $str = "Testando o explode";
    $strArray = explode(" ", $str);
    $strArray[] = "(array)";
    print_r($strArray);

    echo "<br>";

    # Array para String
    echo "Conversão de array pra string: " . implode(" ", $strArray);
