<?php

require_once "data/Category.php";

$category = new Category();
// $category->name tidak seperti ini lagi langsung ke properti

$category->setName("Laptop");
$category->setExpensive(true);

// tanpa getter setter tidak bisa validasi. andai kita langsung menuju properti
$category->setName("");

echo "Name : {$category->getName()}" . PHP_EOL;
echo "Expensive : {$category->isExpensive()}" . PHP_EOL;