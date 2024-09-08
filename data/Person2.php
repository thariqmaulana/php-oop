<?php

class Person
{
  const AUTHOR = "Thariq Maulana";
  // constant nempelnya ke class. variabel ke instance
  // karena nilai const selalu sama apapun instancenya
  // jadi memanggilnya tidak ke instance object, tapi ke class. dengan ::

  var string $name;
  var ?string $address = null;
  var string $country = "Indonesia";

  function __construct(string $name, ?string $address)
  {
    $this->name = $name;
    $this->address = $address;
  }

  function sayHello(?string $name)
  {
    if (is_null($name)) {
      echo "Hello, namaku $this->name" . PHP_EOL;
    } else {
      echo "Hello $name, namaku $this->name" . PHP_EOL;
    }
  }

  function info()
  {
    echo "AUTHOR : " . self::AUTHOR . PHP_EOL;
  }

  function __destruct()
  {
    echo "Object person $this->name is destroyed" . PHP_EOL;
  }
}