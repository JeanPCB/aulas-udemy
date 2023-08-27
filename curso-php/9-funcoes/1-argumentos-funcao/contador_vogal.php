<?php
    $pattern = '/[aeiou]/';
    $str = "stringa";
    preg_match_all($pattern, $str, $matches); 
    echo count($matches[0]);
?>