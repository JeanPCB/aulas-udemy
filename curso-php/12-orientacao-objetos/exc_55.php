<?php
    class Car {
        public $brand;
        public $color;
        public $model;
        public $maxSpeedKm;

        function setMaxSpeed($newMax) {
            $this->maxSpeedKm = $newMax;
            echo "A velocidade máxima foi alterada <br>";
        }

        function getMaxSpeed() {
            echo "A velocidade máxima atual é de $this->maxSpeedKm km/h<br>";
        }
    }

    $carro1 = new Car;
    $carro1->brand = "Fiat";
    $carro1->color = "Preto";
    $carro1->model = "Uno";
    $carro1->setMaxSpeed(200);
    $carro1->getMaxSpeed();

    $carro1->setMaxSpeed(50);
    $carro1->getMaxSpeed();