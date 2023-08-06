<?php

    $max = 30;  
    
    $i = 4;
    while($i <= $max) {
        echo "Executando o loop $i <br>";

        if($i == 24) {
            echo "Parando o loop";
            break;
        }
        
        $i += 2;
    }