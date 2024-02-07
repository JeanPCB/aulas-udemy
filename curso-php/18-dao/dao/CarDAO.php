<?php
    include "models/Car.php";

    class CarDAO implements CarDAOInterface {
        public function __construct(
            private PDO $conn
        ) {}

        public function create(Car $car) {
            $stmt = $this->conn->prepare("INSERT INTO cars (brand, km, color) VALUES (:brand, :km, :color)");

            $stmt->bindParam("brand", $car->getBrand());
            $stmt->bindParam("km", $car->getKm());
            $stmt->bindParam("color", $car->getColor());

            $stmt->execute();
        }

        public function findAll() {
            $cars = [];

            $stmt = $this->conn->query("SELECT * FROM cars");
            
            $data = $stmt->fetchAll();

            foreach($data as $item) {
                $car = new Car();
                
                $car->setId($item["id"]);
                $car->setBrand($item["brand"]);
                $car->setKm($item["km"]);
                $car->setColor($item["color"]);

                $cars[] = $car;
            }

            return $cars;
        }

        public function deleteAll() {
            $stmt = $this->conn->query("DELETE FROM cars");
        }
    }