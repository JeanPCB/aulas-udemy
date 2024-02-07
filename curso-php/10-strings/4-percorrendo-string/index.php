<?php
    $str = "essa é a string que vai ser percorrida.";

    function getStrChars($string) {
        $letters = [];

        for($i = 0; $i < strlen($string); $i++) {
            $letters[] = $string[$i];
        }

        return $letters;
    }

    function printAllChars($array) {
        foreach($array as $element) {
            echo $element . "<br>";
        }
    }

    echo count(getStrChars($str)) . "<br>";

    printAllChars(getStrChars($str));