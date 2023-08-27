<?php

    function parameterScope($a, $b) {
        $c = $a + $b;

        echo "$a + $b = $c";
        echo "<br>";
    }

    parameterScope(2, 10);
    parameterScope(1, 1);
    parameterScope(1, 0);