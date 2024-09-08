<?php

require_once "data/Manager.php";

$manager = new Manager();
$manager->name = "Thariq";
$manager->sayHello("Ahmad");

$vp = new VicePresident();
$vp->name = "Said";
$vp->sayHello("Ahmad");