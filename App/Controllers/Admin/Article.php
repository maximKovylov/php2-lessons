<?php


namespace App\Controllers\Admin;


use App\Controllers\BaseController;

class Article
    extends BaseController
{

    public function action()
    {
        $this->view->article = \App\Models\Article::findById($_GET['id']);
        $this->view->display(__DIR__ . '/../../../templates/admin/article.php');
    }
}