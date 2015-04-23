<?php

require __DIR__ . '/AbstractController.php';
require __DIR__ . '/../models/NewsArticle.php';
require __DIR__ . '/../classes/View.php';

class NewsController
    extends AbstractController
{

    protected $view;


    public function __construct()
    {
        $this->view = new View(__DIR__ . '/../views/news/');
    }

    public function actionAll()
    {
        $art = new NewsArticle();
        $art->title = 'Новая новость';
        $art->text = 'Текст новой новости';
        $art->insert();

        var_dump($art);
        /*
        $this->view->items = NewsArticle::findAll();
        echo $this->view->render('all');
        */
    }


}