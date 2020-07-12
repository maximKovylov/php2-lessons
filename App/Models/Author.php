<?php


namespace App\Models;


use App\Exceptions\MultiException;
use App\Exceptions\ValidateException;
use App\Model;

class Author
    extends Model
{
    public string $name;
    public const TABLE= 'authors';

    public function nameValidate($author)
    {
        if (empty($author)) {
            throw new ValidateException('Введите автора');
        }
        if (strlen($author) < 2) {
            throw new ValidateException('Короткое имя автора');
        } elseif (strlen($author) > 50) {
            throw new ValidateException('Слишком длинное имя автора');
        }
    }

}