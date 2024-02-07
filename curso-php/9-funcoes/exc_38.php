<?php
    $marketItems = ["banana", "sabão em pó", "açúcar", "refrigerante", "carne moída", "guardanapo", "desodorante"];

    function stringifyMarketItems($itemsArray) {
        $stringMarketItems = implode(", ", $itemsArray);
        return $stringMarketItems;
    }

    function printMarketItems($itemsArray) {
        echo "Itens do supermercado: " . stringifyMarketItems($itemsArray);
    }

    printMarketItems($marketItems);