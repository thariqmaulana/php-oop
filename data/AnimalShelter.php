<?php

namespace Data;

require_once "Animal.php";

interface AnimalShelter
{
  function adopt(string $name): Animal;
}

class BullShelter implements AnimalShelter
{
  function adopt(string $name): Bull
  {
    $bull = new Bull();
    $bull->name = $name;
    return $bull;
  }
}