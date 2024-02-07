<?php

    $a = [2134, "fdasfas", true, 432.32, "24323.4221", false, null, 12345, "koifgnoagnio", " ", 0];

    $arrayLength = count($a);

    $i = 0;
    while($i < $arrayLength) {
        if(is_string($a[$i])) {
            echo $a[$i] . "<br>";
        }
        
        $i++;
    }