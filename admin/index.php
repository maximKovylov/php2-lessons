<?php
require __DIR__ . '/../autoload.php';

$ctrl = $_GET['ctrl'] ?? 'News';
$class = '\\App\\Controllers\\Admin\\' . $ctrl;

if (!class_exists($class)) {
    die('Страница не найдена');
}
try {
    $ctrl = new $class;
    $ctrl();
} catch (\App\Exceptions\DbException $ex) {
    $errors = new \App\Controllers\Error();
    $errors->error = $ex;
    $errors();
} catch (\App\Exceptions\SqlException $ex) {
    $errors = new \App\Controllers\Error();
    $errors->error = $ex;
    $errors();
} catch (\App\Exceptions\Http404Exception $ex) {
    $errors = new \App\Controllers\Error();
    $errors->error = $ex;
    $errors();
} catch (\App\Exceptions\AllMultiException  $ex) {
    $errors = new \App\Controllers\Admin\Error();
    $errors->error = $ex;
    $errors();
}
