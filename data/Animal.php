<?php

namespace Data;

require_once "Food.php";

abstract class Animal
{
  public string $name;
  // hanya pada abstract class
  abstract public function run(): void;// wajib di override/implementasikan di child

  abstract public function eat(AnimalFood $animalFood): void;
}

class Cat extends Animal
{
  public function run(): void
  {
    echo "Cat $this->name is running" . PHP_EOL ;
  }

  public function eat(AnimalFood $animalFood): void
  {
    echo "Cat is eating" . PHP_EOL;
  }
}

class Bull extends Animal
{
  public function run(): void
  {
    echo "Bull $this->name is running" . PHP_EOL ;
  }

  public function eat(Food $animalFood): void
  {
    echo "Bull is eating" . PHP_EOL;
  }
}