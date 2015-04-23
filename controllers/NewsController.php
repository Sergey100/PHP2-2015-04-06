<?php


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
        $this->view->items = NewsArticle::findAll();
        echo $this->view->render('all');
    }

    public function actionOne()
    {
        $id = $_GET['id'];
        var_dump(NewsArticle::findOne($id));
    }

}