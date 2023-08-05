<?php

    $a = "10";
    $a_int = (int) $a;
    echo $a . " " . gettype($a) . " / ";
    echo $a_int . " " . gettype($a_int) . "<br>";

    $b = 5;
    $b_float = (float) $b;
    echo $b . " " . gettype($b) . " / ";
    echo $b_float . " " . gettype($b_float) . "<br>";

    $c = (string) 2;
    echo $c . " " . gettype($c);
    