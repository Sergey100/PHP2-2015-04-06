<?php

require __DIR__ . '/../classes/Db.php';

abstract class Model
{

    protected static $table = 'blabla';

    public static function getTable()
    {
        return static::$table;
    }

    public static function findAll()
    {
        $class = static::class;
        $sql = 'SELECT * FROM ' .static::getTable();
        $db = new Db();
        return $db->findAll($class, $sql);
    }

    public static function findOne($id)
    {
        $class = static::class;
        $sql = 'SELECT * FROM ' .static::getTable() . ' WHERE id=:id';
        $db = new Db();
        return $db->findOne($class, $sql, [':id' => $id]);
    }

}