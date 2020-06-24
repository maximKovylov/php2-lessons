<?php

class Db
{
    protected $dbh;

    public function __construct()
    {
        $this->dbh = new \PDO('pgsql:host=localhost;dbname=profit', 'profit', 'profit');
    }

    public function query($sql,  $class, $data = []): array
    {
        $sth = $this->dbh->prepare($sql);
        $sth->execute($data);
        return $sth->fetchAll(PDO::FETCH_CLASS, $class);
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
