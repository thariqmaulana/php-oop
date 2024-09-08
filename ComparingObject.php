<?php

require_once "data/Student.php";

$student1 = new Student();
$student1->name = "thariq";
$student1->id = "1";
$student1->address = "jakarta";

$student2 = new Student();
$student2->name = "thariq";
$student2->id = "1";
$student2->address = "jakarta";

var_dump($student1 == $student2);
var_dump($student1 === $student2);
var_dump($student1 === $student1);
