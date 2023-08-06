<?php
    
    $array = [];

    $i = 10;
    while($i <= 100) {
        $array[] = $i;
        $i += 10;
    }

    $i = 0;
    while($i < count($array)) {
        $elementoAtual = $array[$i];

        if($elementoAtual == 30 || $elementoAtual == 40) {
            $i++;
            continue;
        }

        echo $elementoAtual . "<br>";
        $i++;
    }