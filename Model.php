<?php


abstract class Model
{

    protected const TABLE = '';

    public int $id;

    public static function findAll(): array
    {
        $db = new Db();
        $sql = 'SELECT * FROM ' . static::TABLE;
        return $db->query($sql, [], static::class);
    }

    public static function findById($id)
    {
        $db = new Db();
        $sql = 'SELECT * FROM ' . static::TABLE . ' WHERE id=:id';
        if ([] !== $db->query($sql, ['id' => $id], static::class)) {
            return $db->query($sql, ['id' => $id], static::class);
        } else {
            return false;
        }
    }

}
