<?php
require __DIR__ . '/autoload.php';

$article = new \App\Models\Article();
$mod = $article->findAll();

$func = include __DIR__ . '/App/adminDataTableFunctions.php';

$table = new \App\AdminDataTable($mod, $func);
echo $table->render(__DIR__ . '/templates/test.php');