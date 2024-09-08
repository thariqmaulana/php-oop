<?php

// mengenerate iterator secara otomatis

function getGenap(int $max): Iterator
{
  $array = [];

  for ($i=0; $i<=$max; $i++) { 
    if ($i % 2 == 0) {
      $array[] = $i;
    }
  }

  return new ArrayIterator($array);
}

foreach (getGenap(100) as $key => $value) {
  echo "$key : $value" . PHP_EOL;
}

function getGanjil(int $max): Iterator
{

  for ($i=0; $i <= $max ; $i++) { 
    if ($i % 2 == 1) {
      yield $i;
    }
  }
} 

foreach (getGanjil(100) as $key => $value) {
  echo "$key : $value" . PHP_EOL ; 
}