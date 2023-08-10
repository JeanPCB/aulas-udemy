<?php
    function sum($a, $b) {
        print_r(func_get_args()) ."<br>";
        echo func_num_args();

        return $a + $b;
    }

    sum(5, 2);