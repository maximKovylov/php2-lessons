<?php


namespace App;


class Config
{
    protected $data;
    public function __construct()
    {
        $this->data = include __DIR__ . '/configuration.php';
    }
}
