<?php
    $motorcycle = [
        "retrovisor" => 25,
        "motor" => 5000,
        "relação" => 120,
        "óleo do motor"  => 40,
        "carenagem" => 3000
    ];

    function findCheapItens($itensArray) {
        $cheapItens = [];

        foreach($itensArray as $item) {
            if($item < 100) {
                $cheapItens[] = $item;
            }
        }

        $itensAsString = implode(", ", $cheapItens);
        return $itensAsString;
    }

    function findExpensiveItens($itensArray) {
        $expensiveItens = [];

        foreach($itensArray as $item) {
            if($item > 100) {
                $expensiveItens[] = $item;
            }
        }

        $itensAsString = implode(", ", $expensiveItens);
        return $itensAsString;
    }

    function printItens($itens, $classificaton){
        echo "$classificaton: $itens.";
    }

    printItens(findCheapItens($motorcycle), "Cheap Itens");

    echo "<br>";
    
    printItens(findExpensiveItens($motorcycle), "Expensive Itens");
