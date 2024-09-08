<?php

$date = new DateTime();
$date->setTimezone(new DateTimeZone("Asia/Jakarta"));
var_dump($date);

$date->setDate(2010,1,1);
$date->setTime(5,5,5,123);

$date->add(new DateInterval("P5Y"));

$dateIntervalMinus = new DateInterval("P6M");
$dateIntervalMinus->invert = true;

$date->add($dateIntervalMinus);

var_dump($date);

$string = $date->format("Y-m-d H:i:s");
echo $string . PHP_EOL;

$inputDate = DateTime::createFromFormat("Y-m-d H:i:s", "2000-1-1 10:20:30", new DateTimeZone("Asia/Jakarta"));
var_dump($inputDate);