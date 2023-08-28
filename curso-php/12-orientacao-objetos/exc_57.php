<?php
    class Cachorro {
        public $nome;
        public $raca;
        public $pelo;
        public $cor;

        function __construct($nome, $raca, $pelo, $cor) {
            $this->nome = $nome;
            $this->raca = $raca;
            $this->pelo = $pelo;
            $this->cor = $cor;
        }

        function printTraits() {
            echo "CACHORRO: <br>";
            echo $this->nome . "<br>";
            echo $this->raca . "<br>";
            echo $this->pelo . "<br>";
            echo $this->cor . "<br>";
        }
    }

    $doguinho = new Cachorro("Doguinho", "Vira-lata", "Liso", "Caramelo");
    $doguinho->printTraits();