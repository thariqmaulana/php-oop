<?php

require_once "data/Student.php";

$student1 = new Student();
$student1->id = "1";
$student1->name = "thariq";
$student1->address = "tangerang";
$student1->setSample("ABC");

var_dump($student1);

$student2 = clone $student1;
//tetap clone data sample walau private

var_dump($student2);
// echo "$student2->address";err

// student1= clone student 2 => student2->__clone()