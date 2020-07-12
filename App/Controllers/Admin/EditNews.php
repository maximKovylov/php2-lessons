<?php


namespace App\Controllers\Admin;


use App\Controllers\BaseController;

class EditNews
    extends BaseController
{

    public function action()
    {
        if (!empty($_POST['title'] && !empty($_POST['content']) && !empty($_POST['name']))){

            $author = new \App\Models\Author();
            $author->name = $_POST['name'];
            $author->save();

            $article = \App\Models\Article::findById($_GET['id']);
            $article->title = $_POST['title'];
            $article->content =$_POST['content'];
            $article->author_id = $author->id;
            $article->save();
            header('Location: /admin/index.php?ctrl=Article&id=' .  $_GET['id']);
        } else {
            header('Location: /admin/index.php?ctrl=Article&id=' .  $_GET['id']);
        }
    }
}