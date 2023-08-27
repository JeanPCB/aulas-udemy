<?php
    function createRandomArray() {
        $randomNumArray = [];
        for($i = 0; $i < 10; $i++) {
            $randomNumArray[$i] = rand(0, 10);
        }

        return $randomNumArray;
    }

    function biggerThanSeven($numArray) {
        $biggerSeven = [];
        
        foreach($numArray as $num) {
            if ($num > 7) {
                $biggerSeven[] = $num;
            }
        }

        return $biggerSeven;
    }

    $randomArray = createRandomArray();
    
    echo "Random Array: " . implode(", ", $randomArray);

    echo "<br>";

    echo "Bigger Than Seven: ". implode(", ", biggerThanSeven($randomArray));