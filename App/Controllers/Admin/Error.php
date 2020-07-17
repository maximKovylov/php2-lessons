<?php


namespace App\Controllers\Admin;


use App\Controllers\BaseController;

class Error
    extends BaseController
{
    public \Throwable $error;
    public function action()
    {
        $this->view->errors = $this->error;
        $this->view->display(__DIR__ . '/../../../templates/admin/errors.php');
    }
}