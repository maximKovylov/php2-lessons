<?php


namespace App\Controllers;


class Error
    extends BaseController
{
    public \Throwable $error;
    public function action()
    {
        $this->view->errors = $this->error;
        $this->view->display(__DIR__ . '/../../templates/errors.php');
    }
}
