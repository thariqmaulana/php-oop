<?php

class ValidationUtil
{
  // manual tanpa reflection
  static function validate(LoginRequest $request)
  {
    if (!isset($request->username)) {
      throw new ValidationException("username is not set");
    } else if (!isset($request->password)) {
      throw new ValidationException("password is not set");
    }
  }

  // tidak perlu memikirkan classnya dari mana. dia universal. dan propertinya apa saja
  // karena akan diiterasi semuanya
  // jadi andai ada register dan login. maka hanya perlu membuat 1 saja
  static function validateReflection($request)
  {
    $reflection = new ReflectionClass($request);
    $properties = $reflection->getProperties(ReflectionProperty::IS_PUBLIC);
    foreach ($properties as $property) {
      if (!$property->isInitialized($request)) {
        throw new ValidationException("$property->name is not set");
      } else if (!$property->getValue($request)) {
        throw new ValidationException("$property->name is null");
      }
    }
  }
}