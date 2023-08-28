<?php
    class Dog {
        function bark() {
            echo "wof wof <br>";
        }

        function walk($m) {
            echo "O cachorro andou $m metros <br>";
        }
    }

    $viraLata = new Dog;
    $shihTzu = new Dog;

    $viraLata->bark();
    $viraLata->walk(1000);

    $shihTzu->bark();
    $shihTzu->walk(10);