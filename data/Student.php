<?php

class Student
{
  public string $id;
  public string $name;
  public string $address;
  private string $sample;

  public function setSample(string $sample): void
  {
    $this->sample = $sample;
  }

  public function __clone()
  {
    unset($this->address);
  }

  // jadi magic  func ini membuat func yg akan terpanggil dan otomatis merujuk kesini
  // andai tidak ada maka akan error
  // echo $student1 pun tidak bisa tanpa tostring
  public function __toString(): string
  {
    return "Name : $this->name, ID : $this->id, Address: $this->address";
  }

  public function __invoke(string $name): void
  {
    echo "Hello $name";
  }

  public function __debugInfo()
  {
    return [
      "id" => $this->id,
      "name" => $this->name,
      "author" => "thariq"
    ];
  }
}