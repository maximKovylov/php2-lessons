<?php

namespace App;

use App\Exceptions\DbException;
use App\Exceptions\SqlException;

class Db
{
    protected $dbh;

    public function __construct()
    {
        try {
            $config = \App\Config::getInstance();
            $this->dbh = new \PDO
            ($config->data['db']['db'] . ':host=' . $config->data['db']['host'] .
                ';dbname=' . $config->data['db']['dbname'], $config->data['db']['user'], $config->data['db']['password']);
        } catch (\PDOException $exception) {
            throw new DbException('нет соединения с БД');
        }
    }

    public function query($sql,  $class, $data = []): array
    {
        $sth = $this->dbh->prepare($sql);
        if (!$sth->execute($data)) {
            throw new SqlException($sql, 'ошибка в запросе');
        }
        return $sth->fetchAll(\PDO::FETCH_CLASS, $class);
    }

    public function execute($sql, $data = [])
    {
        $sth = $this->dbh->prepare($sql);
        return $sth->execute($data);
    }

    public function lastId()
    {
        return $this->dbh->lastInsertId();
    }
}
