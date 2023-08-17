<?php
    $str = "carro - navio - helicóptero - barco - jangada";
    $strArray = explode("-", $str);
    print_r($strArray);

    echo "<br>";

    foreach($strArray as $item) {
        echo "Item: $item <br>";
    }