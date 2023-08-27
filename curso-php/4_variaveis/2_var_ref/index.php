<?php 

    $nome = "Jean";
    echo "$nome <br>";

    echo "REFERÊNCIA NA MEMÓRIA: <br>";
    $nome2 =& $nome;
    echo "$nome2 <br>";