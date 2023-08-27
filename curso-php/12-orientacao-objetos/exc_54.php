<?php
    class Person {
        public $name;
        public $age;

        function walk($meters) {
            echo "Andou $meters metros <br>";
        }
    }

    $pessoa1 = new Person;
    $pessoa1->name = "João";
    $pessoa1->age = 22;
    $pessoa1->walk(10);

    echo "O nome dele é $pessoa1->name <br>";
    echo "A idade dele é $pessoa1->age <br>";