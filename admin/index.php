<?php
require __DIR__ . '/../autoload.php';

$data = \Models\Article::findAll();
include __DIR__ . '/../templates/admin/index.php';