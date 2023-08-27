<?php
    function defineCorCarro($cor = "vermelha") {
        return "Cor do carro: " . $cor;
    }

    echo defineCorCarro() ."<br>";
    echo defineCorCarro("preto");