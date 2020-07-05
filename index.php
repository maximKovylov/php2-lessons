<?php
require __DIR__ . '/autoload.php';

$ctrl = $_GET['ctrl'] ?? 'Index';
$class = '\\App\\Controllers\\' . $ctrl;
if (class_exists($class)) {
    $ctrl = new $class;
    $ctrl();
} else {
    die('Страница не найдена');
}




