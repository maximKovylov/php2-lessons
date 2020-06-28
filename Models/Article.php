<?php


namespace Models;


class Article
    extends \Model
{
    public string $title;
    public string $content;
    public const TABLE= 'news';

    public static function getLastArticle()
    {
        $db = new \Db();
        $sql = 'SELECT * FROM ' . self::TABLE . ' ORDER BY id DESC LIMIT 3';
        return $db->query($sql,self::class, []);
    }
}