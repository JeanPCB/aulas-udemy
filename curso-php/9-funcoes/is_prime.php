<?php
    function isPrime($num) {
        $count = 0;

        if ($num < 2) {
            $isPrime = "not prime";
        } else {
            for($i = 1; $i <= $num; $i++) {
                if($num % $i == 0) {
                    $count += 1;
                }
            }

            $isPrime = $count > 2 ? "not prime" : "is prime";
        }

        return $isPrime;
    }

    echo isPrime(13);