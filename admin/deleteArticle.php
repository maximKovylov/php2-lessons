<?php
require __DIR__ . '/../autoload.php';

$article = \Models\Article::findById($_GET['id']);
$article->delete();
header('Location: /admin/');