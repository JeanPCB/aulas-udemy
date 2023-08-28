<?php

    $a = 5 / 2;
    if (is_float($a)) {
        echo "$a é float";
    }

    echo "<br>";

    $b = 2 . 3;
    if (is_string($b)) {
        echo "$b é string";
    }