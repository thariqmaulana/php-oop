<?php
//aslinya begini // global namespace

namespace {
  require_once "data/Conflict.php";
  require_once "data/Helper.php";

  $conflict1 = new \Data\One\Conflict();
  $conflict2 = new \Data\Two\Conflict();

  Helper\helpMe();
  echo Helper\APP . PHP_EOL;
}
