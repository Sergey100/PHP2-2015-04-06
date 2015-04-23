<?php

$ctrl = !empty($_GET['ctrl']) ? $_GET['ctrl'] : 'news';
$act = !empty($_GET['act']) ? $_GET['act'] : 'all';
$ctrlClassName = ucfirst($ctrl) . 'Controller';

require __DIR__ . '/controllers/' . $ctrlClassName . '.php';

try {

    $controller = new $ctrlClassName;
    $method = 'action' . ucfirst($act);
    $controller->$method();

} catch (Exception $e) {

    echo 'Ошибка: ' . $e->getMessage();

}