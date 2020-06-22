<?php
require __DIR__ . '/autoload.php';
use Models\Product;
use Models\User;

$data = Product::findAll();
var_dump($data);

