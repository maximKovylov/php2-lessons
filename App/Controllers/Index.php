<?php


namespace App\Controllers;


use App\Models\Article;
use App\View;

class Index
    extends BaseController
{
    public function action()
    {
        $this->view->articles = Article::findAll();
        $this->view->display(__DIR__ . '/../../templates/index.php');
    }
}