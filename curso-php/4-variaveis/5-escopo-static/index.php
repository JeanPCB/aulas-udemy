<?php

    function nonStaticScope() {
        $num = 1;
        $num++;

        echo "$num <br>";
    }

    function staticScope() {
        static $num = 1;
        $num++;

        echo "$num <br>";
    }

    nonStaticScope();
    nonStaticScope();
    nonStaticScope();

    staticScope();
    staticScope();
    staticScope();