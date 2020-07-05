<?php


namespace App\Controllers;


use App\View;

abstract class BaseController
{
    protected View $view;

    public function __construct()
    {
        $this->view = new View();
    }

    abstract public function action();

    public function access() : bool
    {
        return true;
    }

    public function __invoke()
    {
        if ($this->access()) {
            $this->action();
        } else {
            die('Доступ закрыт');
        }
    }

}