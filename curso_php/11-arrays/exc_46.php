<?php
    function setMultDimenArr($insideArray,$insideArrNum) {
        $multDimenArr = [];
        
        for($i = 0; $i < $insideArrNum; $i++) {
            $multDimenArr[] = $insideArray;
        }

        return $multDimenArr;
    }

    function setArrayItems($min, $max) {
        return $array = range($min, $max);
    }

    function printMultiDimenItems($array) {
        for($i = 0; $i < count($array); $i++) {
            echo "Imprimindo array externo: " . $i + 1 . "<br>";

            for($j = 0; $j < count($array[$i]); $j++) {
                echo $array[$i][$j] . "<br>";
            }
        }
    }

    printMultiDimenItems(setMultDimenArr(setArrayItems(1, 4), 3));