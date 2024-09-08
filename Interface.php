<?php

require_once "data/Car.php";

use Data\Avanza;

$car = new Avanza();
$car->drive();
$car->getTire();
echo $car->getBrand() . PHP_EOL; 