<?php

class Programmer
{

  public string $name;

  public function __construct(string $name)
  {
    $this->name = $name;
  }
}

class BackendProgrammer extends Programmer
{
}

class FrontendProgrammer extends Programmer
{
}

class Company 
{

  public Programmer $programmer;
}

function sayHelloProgrammer(Programmer $programmer)
{
  // // programmer disini adalah objek yang dibuat dari class Programmer
  // echo "Hello Programmer $programmer->name" . PHP_EOL;

  // jika tipe data biasa menggunakan is...
  // obj menggunakan instance of
  if ($programmer instanceof BackendProgrammer) {
    echo "Hello BackEnd Programmer $programmer->name" . PHP_EOL;    
  } else if ($programmer instanceof FrontendProgrammer) {
    echo "Hello FrontEnd Programmer $programmer->name" . PHP_EOL;
  } else if ($programmer instanceof Programmer) {
    echo "Hello Programmer $programmer->name" . PHP_EOL;
  }
} 