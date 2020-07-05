<?php
require __DIR__ . '/../autoload.php';

$article = \App\Models\Article::findById($_GET['id']);
$article->delete();

$author = \App\Models\Author::findById($article->author_id);
$author->delete();

header('Location: /admin/');