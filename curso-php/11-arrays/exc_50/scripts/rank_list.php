<?php
    $rank = [
        "Jean" => 10000000,
        "Matheus" => 312,
        "Isabelly" => 19391,
        "Shibs" => 2345,
        "Vinao" => 4532534
    ];

    arsort($rank);

    function printRank($array) {
        $count = 1;
        foreach ($array as $name => $score) {
            echo " <tr>
                        <td>$count</td> 
                        <td>$name</td> 
                        <td>$score</td>
                    </tr> ";
            $count++;
        }
    }