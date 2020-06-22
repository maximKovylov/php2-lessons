<?php
require __DIR__ . '/autoload.php';

$data = \Models\Article::getLastArticle();
include __DIR__ . '/templates/index.php';
