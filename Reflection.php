<?php

require_once "exception/ValidationException.php";
require_once "data/LoginRequest.php";
require_once "Helper/ValidationUtil.php";

$request = new LoginRequest();
$request->username = "thariq";
$request->password = "thariq";

// ValidationUtil::validate($request);
ValidationUtil::validateReflection($request);// keluar password

class RegisterUserRequest
{
  public ?string $email;
  public string $password;
}

$register = new RegisterUserRequest();
$register->email = null;

ValidationUtil::validateReflection($register);//email is null
// jadi cukup buat 1 untuk semuanya

// membuat sesuatu yg general menggunakan reflection
// masih bisa diexplore lebih jauh reflection.masih banyak get()