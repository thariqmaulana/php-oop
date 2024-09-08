<?php

require_once "data/Conflict.php";
require_once "data/Helper.php";

use Data\One\Conflict;
// use Data\Two\Conflict; konflik lagi seperti awal
use function Helper\helpMe;
use const Helper\APP;

$conflict = new Conflict();
$conflict2 = new \Data\Two\Conflict(); // tetap herus seperti ini kalau namanya sama

helpMe();

echo APP;
