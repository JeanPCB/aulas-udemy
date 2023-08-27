<?php

    $varGlobal = "abcde";

    echo "$varGlobal global 1";
    echo "<br>";

    if(true) {
        $varGlobal = "edcba";

        echo "$varGlobal global 2";
        echo "<br>";
    }

    // function varLocal() {
    //     echo "$varGlobal";
    // }

    function varLocal() {
        global $varGlobal;
        $varGlobal = 123;

        echo "$varGlobal global 3";
        echo "<br>";
    }

    varLocal();

    echo "$varGlobal global 4";