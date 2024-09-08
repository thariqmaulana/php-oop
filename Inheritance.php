<?php

require_once "data/Manager.php";

$manager = new Manager();
$manager->name = "thariq";
$manager->sayHello("ahmad");
// sama persis
$vp = new VicePresident();
$vp->name = "said";
$vp->sayHello("ahmad") ;