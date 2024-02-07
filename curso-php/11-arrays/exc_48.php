<?php
    $arr = ["batata", "maçã", "pera", "feijão", "arroz"];

    // $removidos = array_splice($arr, 2, 2);

    // print_r($removidos);

    // function removeEl($array, $el) {
    //     $key = array_search($el, $array);
    //     array_splice($array, $key, 1);

    //     return $array;
    // }

    // print_r(removeEl($arr, "pera"));

    print_r(array_diff($arr, ["pera", "feijão"]));