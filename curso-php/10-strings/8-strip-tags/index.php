<?php
    $htmlText = "<h1>Titulo</h1> <div><h2>subtitulo</h2> <p>paragrafo</p></div>";
    echo $htmlText;

    $strippedText = strip_tags($htmlText);
    echo $strippedText;