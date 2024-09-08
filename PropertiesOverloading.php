<?php

class Zero
{
  private array $properties = [];

  // artinya properti ini tidak akan tercantum secara langsung di obj
  // tapi dia di array
  // yg mengakibatkan pasti tidak ada kalau diakses tanpa melalui object
  // misa zero->name pasti tidak ada. walau sudah di __set. karena
  // di set di array
  public function __get($name)
  {
    // echo "Access property $name" . PHP_EOL ;
    return $this->properties[$name];// kalau gak ada ya error juga
    // bagusnya if else dulu mungkin
  }

  public function __set($name, $value)
  {
    // echo "Set property name $name with value $value" . PHP_EOL;
    $this->properties[$name] = $value;
  }

  public function __isset($name): bool
  {
    return isset($this->properties[$name]);
  }

  public function __unset($name)
  {
    unset($this->properties[$name]);
  }

  public function __call($name, $arguments)
  {
    $join = join("-", $arguments);
    echo "call function $name with arguments $join" . PHP_EOL;
  }

  public static function __callStatic($name, $arguments)
  {
    // otomatis rest parameter. tak perlu menulis ... sudah di hardcode
    $join = join("-", $arguments);
    echo "call static function $name with arguments $join" . PHP_EOL;
  }
}

// akses properti jika ada -> ke magic function get -> error

$zero = new Zero();
// mengakses properti yg tidak ada asalnya akan error
// echo $zero->firstName . PHP_EOL;

// $zero->middleName = "ABC"; // tidak error. tapi juga tidak menambahkan. tidak terjadi apaapa

$zero->animal = "sapi";
echo $zero->animal . PHP_EOL;

$zero->sayHello("thariq", "maulana");
Zero::sayHello("thariq", "maulana");