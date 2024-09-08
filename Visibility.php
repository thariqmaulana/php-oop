<?php

require_once "data/Product.php";

$product = new Product("Apel", 5000);
$productDummy = new ProductDummy("Dummy", 1000);

// tidak bisa diakses karena private, error
// Fatal error: Uncaught Error: Cannot access private property
// echo $product->name;
// solusinya bikin getter

echo $product->getName() . PHP_EOL;
echo $product->getPrice() . PHP_EOL;

echo "Price : " . $productDummy->info();