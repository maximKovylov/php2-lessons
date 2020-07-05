<?php
require __DIR__ . '/../autoload.php';

$data = \Models\Article::findById($_GET['id']);
include __DIR__ . '/../templates/admin/article.php';