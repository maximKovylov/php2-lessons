<?php
require __DIR__ . '/../autoload.php';

    if (!empty($_POST['title'] && !empty($_POST['content']) && !empty($_POST['author']))){

        $author = new \App\Models\Author();
        $author->name = $_POST['author'];
        $author->save();

        $article = \App\Models\Article::findById($_GET['id']);
        $article->title = $_POST['title'];
        $article->content =$_POST['content'];
        $article->author_id = $author->id;
        $article->save();

        header('Location: /admin/article.php?id=' .  $_GET['id']);
    } else {
        header('Location: /admin/article.php?id=' .  $_GET['id']);
    }
