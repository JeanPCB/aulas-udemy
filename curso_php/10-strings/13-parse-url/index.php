<?php
    $url = "https://www.youtube.com/watch?v=jkLypE9e55c&ab_channel=manodeyvin";
    
    $arrayUrl = parse_url($url);
    print_r($arrayUrl);