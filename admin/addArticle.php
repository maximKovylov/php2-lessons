<?php
require __DIR__ . '/../autoload.php';

if (!empty($_POST['title'] && !empty($_POST['content']))) {
    $article = new \Models\Article();
    $article->title = $_POST['title'];
    $article ->content =$_POST['content'];
    $article->save();
    header('Location: /admin/');
} else {
    header('Location: /admin/');
}