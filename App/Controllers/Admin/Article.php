<?php


namespace App\Controllers\Admin;


use App\Controllers\BaseController;
use Twig\Environment;
use Twig\Loader\FilesystemLoader;

class Article
    extends BaseController
{

    public function action()
    {
        $this->view->article = \App\Models\Article::findById($_GET['id']);
        $this->view->display(__DIR__ . '/../../../templates/admin/article.php');

        /*$loader = new FilesystemLoader(__DIR__ . '/../../../templates/admin/');
        $twig = new Environment($loader);
        $article = \App\Models\Article::findById($_GET['id']);
        echo $twig->render('article.php', ['article' => $article]);*/
    }
}