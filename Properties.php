<?php

require_once "data/Person.php";

$person = new Person();
$person->name = "Thariq";
$person->address = "Tangerang";
$person->country = "Indonesia";

var_dump($person);

echo "Name : $person->name" . PHP_EOL;
echo "Address : $person->address" . PHP_EOL;
echo "Country : $person->country" . PHP_EOL;

$person2 = new Person();
// $person->name = [];//error 

var_dump($person2);