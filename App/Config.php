<?php


namespace App;


class Config
    extends \App\Singleton
{
    public $data;
    protected function __construct()
    {
        $this->data = include __DIR__ . '/configuration.php';
    }
}
