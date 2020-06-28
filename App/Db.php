<?php

namespace App;

class Db
{
    protected $dbh;

    public function __construct()
    {
        $config = \App\Config::getInstance();
        $this->dbh = new \PDO
        ($config->data['db']['db'] . ':host=' . $config->data['db']['host'] .
            ';dbname=' . $config->data['db']['dbname'], $config->data['db']['user'], $config->data['db']['password']);
    }

    public function query($sql,  $class, $data = []): array
    {
        $sth = $this->dbh->prepare($sql);
        $sth->execute($data);
        return $sth->fetchAll(\PDO::FETCH_CLASS, $class);
    }

    public function execute($query, $data = [])
    {
        $sth = $this->dbh->prepare($query);
        return $sth->execute($data);
    }

    public function lastId()
    {
        return $this->dbh->lastInsertId();
    }
}
