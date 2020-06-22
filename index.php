<?php
require __DIR__ . '/autoload.php';
use Models\Product;
use Models\User;

$data = Product::findById(3);
var_dump($data);

