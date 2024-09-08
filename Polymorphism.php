<?php

require_once "data/Programmer.php";

$company = new Company();
$company->programmer = new Programmer("Thariq");
var_dump($company);
// tidak terbatas pada Programmer, turunannya pun bisa
// ini yang disebut polymorphism
$company->programmer = new BackendProgrammer("Thariq");
// hakikatnya ini membuat objek di dalam objek
var_dump($company);

// bisa diterapkan juga di fn

sayHelloProgrammer(new Programmer("Said"));
sayHelloProgrammer(new FrontendProgrammer("Ahmad"));
sayHelloProgrammer(new BackendProgrammer("back"));