<?php

$arr = [
  "firstName" => "Thariq",
  "lastName" => "Maulana"
];

$object = (object) $arr;
// dikonversi menjadi stdclass. lalu diinstansiasi

echo $object->firstName . PHP_EOL;
echo $object->lastName . PHP_EOL;

$arrLagi = (array) $object;
var_dump($arrLagi);