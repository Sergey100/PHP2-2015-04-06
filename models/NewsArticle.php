<?php

require __DIR__ . '/Article.php';
require __DIR__ . '/../classes/IModel.php';

class NewsArticle
    extends Article
    implements IModel
{

    protected function getTable() {
        return 'news';
    }

    public function save()
    {
        return $this;
    }

}