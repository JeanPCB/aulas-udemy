<?php

    $carro = [
        'modelo' => 'Fiat Uno',
        'placa' => 'DPK1H35',
        'ano' => 2014,
        'cor' => 'Branco'
    ];

    print_r($carro);
    echo "<br>";
    
    $modelo_carro = $carro['modelo'];
    $ano_carro = $carro['ano'];

    echo "O $modelo_carro é do ano $ano_carro";