<?php


namespace App\Models;


use App\Model;

class Author
    extends Model
{
    public string $name;
    public const TABLE= 'authors';
}