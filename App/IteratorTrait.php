<?php


namespace App;


trait IteratorTrait
{
    public array $data = [];
    public function current()
    {
        return current($this->data);
    }


    public function next()
    {
        return next($this->data);
    }


    public function key()
    {
        return key($this->data);
    }


    public function valid()
    {
        return key($this->data) !== null;
    }


    public function rewind()
    {
        return reset($this->data);
    }
}