<?php
    function sumDigits($num) {
        $sum = 0;
        $num = (string) $num;

        $arr = str_split($num);
        foreach($arr as $digit) {
            $sum += $digit;
        }

        return $sum;
    }

    echo sumDigits(222);