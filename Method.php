<?php

require_once "data/Person.php";

$person = new Person();
$person->name = "Thariq";

$person->sayHello("Said");

$person->info();