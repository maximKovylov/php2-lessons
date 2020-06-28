<?php


namespace App\Models;


class Article
    extends \App\Model
{
    public string $title;
    public string $content;
    public int $author_id;
    public const TABLE= 'news';

    public static function getLastArticle()
    {
        $db = new \App\Db();
        $sql = 'SELECT * FROM ' . self::TABLE . ' ORDER BY id DESC LIMIT 3';
        return $db->query($sql,self::class, []);
    }

    public function __get($name)
    {
        if ('author' == $name) {
            if (!empty($this->author_id)) {
                return Author::findById($this->author_id)[0];
            }
        }


    }
}