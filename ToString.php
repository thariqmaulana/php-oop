<?php

require_once "data/Student.php";

$student1 = new Student();
$student1->name = "thariq";
$student1->id = "1";
$student1->address = "jakarta";

$string = (string) $student1;
echo $string . PHP_EOL;

// andai tidak ada tostring maka akan error. echo itu return string saja
echo $student1;