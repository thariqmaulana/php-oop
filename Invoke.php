<?php

require_once "data/Student.php";

$student1 = new Student();
$student1->name = "thariq";
$student1->id = "1";
$student1->address = "jakarta";

$student1("thariq");