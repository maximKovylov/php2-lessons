<?php
require __DIR__ . '/autoload.php';

$ctrl = $_GET['ctrl'] ?? 'News';
$class = '\\App\\Controllers\\' . $ctrl;
if (!class_exists($class)) {
    die('Страница не найдена');
}
try {
    $ctrl = new $class;
    $ctrl();
} catch (\App\Exceptions\DbException $ex) {
    $error = $ex->getMessage();
    include __DIR__ . '/templates/exception.php';
} catch (\App\Exceptions\SqlException $ex) {
    $error = $ex->getMessage() . ': ' . $ex->getQuery();
    include __DIR__ . '/templates/exception.php';
} catch (\App\Exceptions\Http404Exception $ex) {
    $error = $ex->getMessage();
    include __DIR__ . '/templates/exception.php';
}
