<?php

    $alunos = ["Jean", "Igor", "Isabelly", "Matheus", "Caio"];

    echo "Alunix neutrix: ";

    foreach($alunos as $aluno) {
        if(end($alunos) == $aluno) {
            echo $aluno . "x";
        } else {
            echo $aluno . "x, ";
        }
    }