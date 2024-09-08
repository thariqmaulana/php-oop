<?php

require_once "exception/ValidationException.php";
require_once "data/LoginRequest.php";
require_once "Helper/Validation.php";
// semua require dikumpulkan disini. di masing-masing file tidak ada

$loginRequest = new LoginRequest();
// $loginRequest->username = "thariq";
// $loginRequest->password = "123";
$loginRequest->username = "";
$loginRequest->password = "";

try {
  validateLoginRequest($loginRequest);
  echo "Tidak terjadi error" . PHP_EOL;//tidak akan dijalankan kalau error.
  // langsung lompat ke catch
} catch (ValidationException $exception) {
  echo "Validation error : {$exception->getMessage()}" . PHP_EOL;
  var_dump($exception->getTrace());//return array
} catch (Exception $exception) {
  echo "Error : {$exception->getMessage()}" . PHP_EOL; //kalau handle case sama
  // di or kan saja |
  var_dump($exception->getTrace());
  var_dump($exception->getTraceAsString());
} finally {
  echo "Finally" . PHP_EOL;
}

echo "VALID" . PHP_EOL;

// untuk mendebug exception secara detail menggunakan getTrace