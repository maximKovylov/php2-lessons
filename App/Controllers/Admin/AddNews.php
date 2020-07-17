<?php


namespace App\Controllers\Admin;


use App\Controllers\BaseController;
use App\Exceptions\AllMultiException;
use App\Exceptions\MultiException;
use App\Exceptions\ValidateException;
use App\Models\Author;

class AddNews
    extends BaseController
{
    public function action()
    {
        $errors = new AllMultiException();
        try {
            $author = new Author();
            $author->fill($_POST);
        } catch (MultiException $ex) {
            $errors->add($ex);
        }

        try {
            $article = new \App\Models\Article();
            $article->fill($_POST);
        } catch (MultiException $ex) {
            $errors->add($ex);
        }

        if (!$errors->empty()) {
            throw $errors;
        } else {
            $author->save();
            if(!empty($author->id)) {
                $article->author_id = $author->id;
                $article->save();
            }
        }
    }
}