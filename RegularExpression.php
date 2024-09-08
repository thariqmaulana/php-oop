<?php

$matches = [];

// return int berapa banyak ketemu
$result = (bool)preg_match_all("/sam|bal/i", "Sambal Balado Bali", $matches); 

var_dump($result);
var_dump($matches);

$result = preg_replace("/tolol/i", "***", "dasar tolol");

var_dump($result);

$result = preg_split("/[\s,-]/", "Sambal-Balado,Bali"); 

var_dump($result);//return array