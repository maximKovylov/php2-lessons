<?php


namespace App\Controllers\Admin;


use App\Controllers\BaseController;
use App\Exceptions\MultiException;
use App\Models\Author;

class AddNews
    extends BaseController
{
    public function action()
    {
        if (!empty($_POST['title'] && $_POST['content'])) {
            if (!empty($_POST['name'])) {
                $author = new Author();
                $author->name = $_POST['name'];
                $author->save();
            } else {
                throw new \Exception('Введите автора');
            }
        }
        $article = new \App\Models\Article();
        $article->fill($_POST);
        if(!empty($author->id)) {
            $article->author_id = $author->id;
            $article->save();
        }

    }
}