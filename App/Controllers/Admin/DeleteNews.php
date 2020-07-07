<?php


namespace App\Controllers\Admin;


use App\Controllers\BaseController;

class DeleteNews
    extends BaseController
{

    public function action()
    {
        $article = \App\Models\Article::findById($_GET['id']);
        $article->delete();

        $author = \App\Models\Author::findById($article->author_id);
        $author->delete();

        header('Location: /admin/');
    }
}