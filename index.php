<?php

require __DIR__ . '/models/NewsArticle.php';

$model = new NewsArticle();
var_dump( $model->findAll() );