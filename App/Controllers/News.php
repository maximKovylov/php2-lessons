<?php


namespace App\Controllers;

use App\Models\Article;
use App\View;
use Twig\Environment;
use Twig\Loader\FilesystemLoader;

class News
    extends BaseController
{
    public function action()
    {
        $loader = new FilesystemLoader(__DIR__ . '/../../templates/');
        $twig = new Environment($loader);
        $articles = Article::findAll();
        echo $twig->render('index.php', ['articles' => $articles]);
    }
}