<?php
    $str = "O rato roeu a roupa do rei de Roma";

    function strToArr($string) {
        $array = [];

        for($i = 0; $i < strlen($string); $i++) {
            $array[$i] = $string[$i];
        }

        return $array;
    }

    function countOccur($array, $item) {
        $count = 0;

        foreach($array as $element) {
            if($element === $item || $element === strtoupper($item)) {
                $count += 1;
            }
        }

        return $count;
    }

    function printOccur($array, $item) {
        echo '"' . strtoupper($item) . '"' . " occurred " . countOccur($array, $item) . " times. <br>";
    }

    printOccur(strToArr($str), "a");
    printOccur(strToArr($str), "e");
    printOccur(strToArr($str), "i");
    printOccur(strToArr($str), "o");
    printOccur(strToArr($str), "u");
