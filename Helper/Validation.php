<?php

function validateLoginRequest(LoginRequest $request)
{
  if (!isset($request->username)) {
    throw new ValidationException("username is null"); // constructor bawaan dari Parent
  } else if (!isset($request->password)) {
    throw new ValidationException("password is null");
  } else if (trim($request->username) == "") {
    throw new Exception("username is empty");// contoh bawaan exception
  } else if (trim($request->password) == "") {
    throw new Exception("password is empty");
  } 
}