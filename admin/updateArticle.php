<?php
require __DIR__ . '/../autoload.php';

    if (!empty($_POST['title'] && !empty($_POST['content']))){
        $article = \Models\Article::findById($_GET['id']);
        $article->title = $_POST['title'];
        $article->content =$_POST['content'];
        $article->save();
        header('Location: /admin/article.php?id=' .  $_GET['id']);
    } else {
        header('Location: /admin/article.php?id=' .  $_GET['id']);
    }
