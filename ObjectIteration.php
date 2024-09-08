<?php

class Data implements IteratorAggregate
{
  var string $first = "First";
  public string $second = "Second";
  protected string $third = "Third";
  private string $forth = "Forth";

  public function getIterator()// : iterator
  {
    $array = [
      "second" => $this->second,
      "forth" => $this->forth
    ];

    $iterator = new ArrayIterator($array);
    return $iterator;

    
    //  yield "second" => $this->second;
    //  yield "forth" => $this->forth; 
    
  }
}

$data = new Data();

foreach ($data as $property => $value) {
  echo "$property : $value" . PHP_EOL;
}

// Sekarang ketika kita memanggil foreach untuk data maka dia akan memanggil
// iterator yg kita buat. karena sepertinya di override
// sekarang kita bisa memilih data apa yang ingin diiterasi, dan data apa yg disembunyikan
// jadi tidak semua di ekspos. password misalnya tidak diiterasi pada person