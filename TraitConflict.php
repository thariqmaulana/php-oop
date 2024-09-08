<?php

trait A
{
  public function doA(): void
  {
    echo "a" . PHP_EOL;
  }

  public function doB(): void
  {
    echo "b" . PHP_EOL;
  }
}

trait B 
{
  public function doA(): void
  {
    echo "A" . PHP_EOL;
  }

  public function doB(): void
  {
    echo "B" . PHP_EOL;
  }
}

class Sample 
{
  use A, B {
    B::doA insteadOf A;
    A::doB insteadOf B;
  } 
  // collision = tabrakan
}

$sample = new Sample();
$sample->doA();
$sample->doB();