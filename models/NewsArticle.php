<?php

require __DIR__ . '/../classes/Model.php';

class NewsArticle
    extends Model
{

    protected static $table = 'news';

    public $id;
    public $title;
    public $text;

}