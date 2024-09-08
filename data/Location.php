<?php

namespace Data;

// hanya sebagai parent.tidak bisa di instansiasi
abstract class Location
{
  public string $name;
}

class City extends Location
{
}

class Province extends Location{
  
}
