<?php

    $varInt = 123;
    $varString = "123";
    $varBool = false;
    $varFloat = 12.3;
    $varArray = [];

    $msgIsInt = "é um inteiro. <br>";
    $msgNotInt = "não é inteiro. ";
    $msgVarType = "Esta variável é ";

    if (is_int($varInt)) {
        echo "varInt: $msgIsInt";
    } else {
        echo "varInt: $msgNotInt" . $msgVarType . gettype($varInt);
        echo "<br>";
    }

    if (is_int($varString)) {
        echo "varString: $msgIsInt";
    } else{
        echo "varString: $msgNotInt" . $msgVarType . gettype($varString);
        echo "<br>";
    }

    if (is_int($varBool)) {
        echo "varBool: $msgIsInt";
    } else {
        echo "varBool: $msgNotInt" . $msgVarType . gettype($varBool);
        echo "<br>";
    }

    if (is_int($varFloat)) {
        echo "varFloat: $msgIsInt";
    } else {
        echo "varFloat: $msgNotInt" . $msgVarType . gettype($varFloat);
        echo "<br>";
    }

    if (is_int($varArray)) {
        echo "varFloat: $msgIsInt";
    } else {
        echo "varArray: $msgNotInt" . $msgVarType . gettype($varArray);
        echo "<br>";
    }