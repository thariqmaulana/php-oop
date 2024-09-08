<?php

require_once "Helper/MathHelper.php";

use Helper\MathHelper;

// name menempel di class tidak di object seandainya kita intansiasi

// jadi langsung ke class

echo MathHelper::$name . PHP_EOL;

MathHelper::$name = "Thariq";

echo MathHelper::$name . PHP_EOL;

echo MathHelper::sum(10,20,30,40,50);