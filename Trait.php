<?php

// trait ini mirip seperti class biasa
// namaun dia bisa ditambahkan ke suatu class lebih dari satu
// jadi 1 class bisa lebih 1 trait. kalau class mewariskan class kan hanya 1
// jadi lebih seperti ekstension

// kalau interface hanya fn, trait bisa properti juga
require_once "data/SayGoodBye.php";

use Data\Traits\{Person, SayGoodBye, SayHello};

$person = new Person();
$person->sayHello("thariq");
$person->goodBye("thariq");

$person->name = "thariq";
var_dump($person);

$person->run();