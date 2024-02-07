<?php

    $idade_1 = 12;
    $idade_2 = 23;
    $idade_3 = 18;

    $maioridade = 18;
    $msg_maioridade = "Você é maior de idade. <br>";
    $msg_menor_idade = "Você é menor de idade. <br>";

    if ($idade_1 >= $maioridade) {
        echo "idade 1: " . $msg_maioridade;
    } else {
        echo "idade 1: " . $msg_menor_idade;
    }

    if ($idade_2 >= $maioridade) {
        echo "idade 2: " . $msg_maioridade;
    } else {
        echo "idade 2: " . $msg_menor_idade;
    }

    if ($idade_3 >= $maioridade) {
        echo "idade 3: " . $msg_maioridade;
    } else {
        echo "idade 3: " . $msg_menor_idade;
    }