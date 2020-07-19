<?php


namespace App\Controllers;


use Twig\Environment;
use Twig\Loader\FilesystemLoader;

class Error
    extends BaseController
{
    public \Throwable $error;
    public function action()
    {
        $loader = new FilesystemLoader(__DIR__ . '/../../templates/');
        $twig = new Environment($loader);
        $errors = $this->error;
        echo $twig->render('errors.php', ['errors' => $errors]);
    }
}
