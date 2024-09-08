<?php

// use casenya kapan?
// seperti membuat fn yg sering digunakan

namespace Data\Traits;

trait SayGoodBye
{
  public function goodBye(?string $name): void
  {
    if (is_null($name)) {
      echo "Good Bye" . PHP_EOL;
    } else {
      echo "good bye $name" . PHP_EOL;
    }
    
  }
}

trait SayHello
{
  public function sayHello(?string $name): void
  {
    if (is_null($name)) {
      echo "Hello" . PHP_EOL;
    } else {
      echo "Hello $name" . PHP_EOL;
      
    }
  }
}

trait HasName
{
  public string $name;
}

trait CanRun
{
  public abstract function run(): void;
}

trait All
{
  use sayHello, SayGoodBye, HasName, CanRun;
}

class Person
{
  // use sayHello, SayGoodBye, HasName, CanRun {
  //   //  goodBye as private; overriding visibility
  // }
    
  use All;

  public function run(): void // lupa menulis :void jadi error
  {
    echo "Person $this->name is running" . PHP_EOL ;
  }

  public function goodBye(?string $name): void
  {
    echo "Good Bye in Person" . PHP_EOL ;
  }

  public function sayHello(?string $name): void
  {
    echo "Hello in Person" . PHP_EOL;
  }

  // parent di timpa trait, trait di timpa yg ada di class pembuatan
}