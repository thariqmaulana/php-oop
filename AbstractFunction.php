<?php

require_once "data/Animal.php";

use Data\{Animal, Cat};

$cat = new Cat();
$cat->name = "Ket";
$cat->run();