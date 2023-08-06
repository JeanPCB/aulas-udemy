<?php

    $pessoa = [
        'nome' => 'João',
        'sobrenome' => 'da Silva Sauro',
        'idade' => 19,
        'nome da mãe' => null,
        'cor da pele' => 'pardo',
        'estudante' => false,
        'trabalha' => true
    ];
    $nome_completo = $pessoa['nome'] . " " . $pessoa['sobrenome'];

    print_r($pessoa);
    echo "<br>";

    if($pessoa['idade'] >= 18) {
        echo "$nome_completo é maior de idade.";
    }
    