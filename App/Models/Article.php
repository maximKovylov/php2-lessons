<?php


namespace App\Models;


use App\Exceptions\ValidateException;
use App\IteratorTrait;

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
                return Author::findById($this->author_id);
            }
        }
    }

    public function __isset($name)
    {
        if ('author' == $name) {
            return !empty($this->author_id);
        }
    }

    public function titleValidate($title)
    {
        if (empty($title)) {
            throw new ValidateException('Введите заголовок');
        }
        if (strlen($title) < 10) {
            throw new ValidateException('Слишком короткий заголовок');
        } elseif (strlen($title) > 100) {
            throw new ValidateException('Слишком длинный заголовок');
        }
    }

    public function contentValidate($content)
    {
        if (empty($content)) {
            throw new ValidateException('Введите текст статьи');
        }
        if (strlen($content) < 10) {
            throw new ValidateException('Слишком короткий текст');
        } elseif (strlen($content) > 200) {
            throw new ValidateException('Слишком длинный текст');
        }
    }

}