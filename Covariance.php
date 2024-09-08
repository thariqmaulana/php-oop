<?php

require_once "data/Animal.php";
require_once "data/AnimalShelter.php";
require_once "data/Food.php";

$bullShelter = new Data\BullShelter();
$bull = $bullShelter->adopt("Bullu");
$bull->eat(new Data\Food);