<?php
require __DIR__ . '/autoload.php';

switch ($_GET['act']) {
    case 'insert':
        if (!empty($_POST['title'] && !empty($_POST['content']))) {
            $article = new \Models\Article();
            $article->title = $_POST['title'];
            $article ->content =$_POST['content'];
            $article->save();
            header('Location: http://php2-lessons/');
        } else {
            header('Location: http://php2-lessons/');
        }
        break;
    case 'update':
        if (!empty($_POST['title'] && !empty($_POST['content']))){
            $article = \Models\Article::findById($_GET['id']);
            $article[0]->title = $_POST['title'];
            $article[0] ->content =$_POST['content'];
            $article[0]->save();
            header('Location: http://php2-lessons/article.php?id=' .  $_GET['id']);
        } else {
            header('Location: http://php2-lessons/article.php?id=' .  $_GET['id']);
        }
        break;
    case 'delete':
        $article = \Models\Article::findById($_GET['id']);
        $article[0]->delete();
        header('Location: http://php2-lessons/');
        break;
}
