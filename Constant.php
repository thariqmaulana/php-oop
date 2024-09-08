<?php
// Tetap huruf besar

require_once "data/Person.php";

// dulu
define("APPLICATION", "PHP OOP");
// sekarang
const VERSION = "1.0.0";

echo APPLICATION . PHP_EOL;
echo VERSION . PHP_EOL;
echo Person::AUTHOR . PHP_EOL;