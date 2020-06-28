<?php
require __DIR__ . '/autoload.php';

$view = new \App\View();
$view->articles = \App\Models\Article::getLastArticle();
$view->display(__DIR__ . '/templates/index.php');




