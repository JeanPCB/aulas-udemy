<?php
    $arr = range(10, 45);

    function sumToArrItem($array, $num) {
        $tempArr = [];

        foreach($array as $item) {
            $tempArr[] = $item + $num;
        }

        return $tempArr;
    }

    function isHigValue($value, $num) {
        return $value > $num ? true : false;
    }

    function highValueAlert($array, $num) {
        foreach($array as $item) {
            if(isHigValue($item, $num)) {
                echo $item . " (valor alto) ";
            } else {
                echo "$item ";
            }
        }
    }

    highValueAlert(sumToArrItem($arr, 6), 30);