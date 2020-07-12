<?php


namespace App\Exceptions;


class MultiException
    extends \Exception
{
    protected $errors = [];
    public function add(\Exception $error)
    {
        $this->errors[] = $error;
    }
    public function all()
    {
        return $this->errors;
    }
    public function empty()
    {
        return empty($this->errors);
    }
}