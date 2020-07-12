<?php


namespace App\Exceptions;


class SqlException
    extends \Exception
{
    protected $query;
    public function __construct($query, $message = "", $code = 0, \Throwable $previous = null)
    {
        $this->query = $query;
        parent::__construct($message, $code, $previous);
    }
    public function getQuery()
    {
        return $this->query;
    }
}