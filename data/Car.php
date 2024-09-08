<?php

// interface tidak bisa extend class
// tidak bisa membuat properti

namespace Data;

// mendukung multiple inheritance
// semua abstract
// abstract class bmasih bisa diisi konkrit func

interface HasBrand
{
  function getBrand(): string;
}


interface isMaintanance
{
  function isMaintanance(): bool; 
}

interface Car extends HasBrand//, isMaintanance bisa
{
  function drive(): void;
  function getTire(): int;
}

class Avanza implements Car, isMaintanance
{
  function drive(): void
  {
    echo "Drive Avanza" . PHP_EOL;
  }

  function getTire(): int
  {
    return 4;
  }

  function getBrand(): string
  {
    return "Toyota";
  }

  function isMaintanance(): bool
  {
    return false; 
  }
}
