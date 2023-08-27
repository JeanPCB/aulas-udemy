<?php

    for($i = 1; $i <= 20; $i++) {
        $array[] = $i;
    }

    print_r($array);
    echo "<br>";

    for($i = 0; $i < count($array); $i++) {
        $elementoAtual = $array[$i];

        if($elementoAtual % 2 == 0) {
            $pares[] = $elementoAtual;
        } else {
            $impares[] = $elementoAtual;
        }
    }

    echo "Números pares: ";
    $paresLength = count($pares);
    for($i = 0; $i < count($pares); $i++) {
        if($i == $paresLength - 1) {
            echo $pares[$i] . "<br>";
        } else {
            echo $pares[$i] . ", ";
        }
    }

    echo "Números ímpares: ";
    $imparesLength = count($impares);
    for($i = 0; $i < count($impares); $i++) {
        if($i == $imparesLength - 1) {
            echo $impares[$i] . "<br>";
        } else {
            echo $impares[$i] . ", ";
        }
    }