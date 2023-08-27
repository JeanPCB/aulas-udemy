<?php

    $x = 0;

    function local1() {
        $x = 10;

        echo "$x local 1";
    }

    echo "$x global 1";

    local1()

    function local2() {
        $x = 20;

        echo "$x local 2";    
    }

    $x = 5;

    echo "$x global 2"; 

    local1();

    local2();
