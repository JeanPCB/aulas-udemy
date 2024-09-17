<?php

// "include" -> doesn't stop if not find file
include "./exporting.php";

$name = "John";

echo $name;

// The PHP has power to manipulate html
echo "<br>";

// "require" -> stop the running flow if not find the import file
require "./nonExists.php";

echo $lastName;

// "include" and "require" can used with "_once" prefix to run once
