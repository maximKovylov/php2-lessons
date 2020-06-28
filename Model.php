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

    public static function findById($id): array
    {
        $db = new Db();
        $sql = 'SELECT * FROM ' . static::TABLE . ' WHERE id=:id';
        $data = $db->query($sql,static::class, ['id' => $id]);
        if (empty($data)) {
            return false;
        }
        return $data;
    }
    public function insert()
    {
        $props = get_object_vars($this);

        $columns = [];
        $binds = [];
        $data = [];
        foreach ($props as $name => $value) {
            $columns[] = $name;
            $binds[] = ':' . $name;
            $data[':' . $name] = $value;
        }

        $sql = 'INSERT INTO ' . static::TABLE . ' 
        (' . implode(',', $columns) . ') 
        VALUES (' . implode(',', $binds) . ' )';

        $db = new Db();
        $db->execute($sql, $data);
        $this->id = $db->lastId();
    }

    public function update()
    {
        $props = get_object_vars($this);

        $cols = [];

        foreach ($props as $key => $value) {
            if ('id' == $key) {
                $data[':' . $key] = $value;
                continue;
            }
            $cols[] = $key . '=:' . $key;
            $data[':' . $key] = $value;
        }

        $sql = 'UPDATE ' . static::TABLE . ' SET ' . implode(', ', $cols) . '  WHERE id=:id';
        $db = new Db();
        $db->execute($sql, $data);
    }

    public function save()
    {
        if (isset($this->id)) {
            $this->update();
        } else {
            $this->insert();
        }
    }

    public function delete()
    {
        $sql = 'DELETE FROM ' . static::TABLE . ' WHERE id=:id';
        $db = new Db();
        $db->execute($sql, [':id' => $this->id]);
    }
}
