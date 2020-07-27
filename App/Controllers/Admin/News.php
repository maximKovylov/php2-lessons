<?php


namespace App\Controllers\Admin;


use App\AdminDataTable;
use App\Controllers\BaseController;
use App\Models\Article;
use Twig\Environment;
use Twig\Loader\FilesystemLoader;

class News
    extends BaseController
{

    public function action()
    {
        $functions = include __DIR__ . '/../../adminDataTableFunctions.php';
        $model = Article::findAll();
        $table = new AdminDataTable($model, $functions);
        echo $table->render(__DIR__ . '/../../../templates/admin/index.php');

        /*$loader = new FilesystemLoader(__DIR__ . '/../../../templates/admin/');
        $twig = new Environment($loader);
        $articles = Article::findAll();
        echo $twig->render('index.php', ['articles' => $articles]);*/
    }
}