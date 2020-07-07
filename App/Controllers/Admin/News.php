<?php


namespace App\Controllers\Admin;


use App\Controllers\BaseController;
use App\Models\Article;

class News
    extends BaseController
{

    public function action()
    {
        $this->view->articles = Article::findAll();
        $this->view->display(__DIR__ . '/../../../templates/admin/index.php');
    }
}