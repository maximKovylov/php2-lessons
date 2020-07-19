<?php


namespace App\Controllers\Admin;


use App\Controllers\BaseController;
use App\Models\Article;
use Twig\Environment;
use Twig\Loader\FilesystemLoader;

class News
    extends BaseController
{

    public function action()
    {
        $loader = new FilesystemLoader(__DIR__ . '/../../../templates/admin/');
        $twig = new Environment($loader);
        $articles = Article::findAll();
        echo $twig->render('index.php', ['articles' => $articles]);
    }
}