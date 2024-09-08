<?php

class Manager
{
  var string $name;

  public string $title;

  public function __construct(string $name = "", string $title = "Manager") {
    $this->name = $name;
    $this->title = $title;
  }

  function sayHello(string $name): void // tidak mengembalikan value
  {
    echo "Hello $name, namaku adalah Manager $this->name" . PHP_EOL;
  }
}

class VicePresident extends Manager
{
  // kalau construct boleh mengubah jumlah parameter
  public function __construct(string $name = "")
  {
    // disarankan memanggil construct parent agar behaviornya sama
    parent::__construct($name, "VP");
  }

  function sayHello(string $name): void
  {
    echo "Hello $name, namaku adalah VP $this->name" . PHP_EOL;
  }
}