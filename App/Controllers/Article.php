<?php


namespace App\Controllers;


class Article
    extends BaseController
{
    public function action()
    {
        $this->view->article = \App\Models\Article::findById($_GET['id']);
        $this->view->display(__DIR__ . '/../../templates/article.php');
    }
}