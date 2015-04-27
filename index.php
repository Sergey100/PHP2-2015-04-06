<?php

var_dump($_GET);
die;
require __DIR__ . '/autoload.php';

$ctrl = !empty($_GET['ctrl']) ? $_GET['ctrl'] : 'news';
$act = !empty($_GET['act']) ? $_GET['act'] : 'all';
$ctrlClassName = ucfirst($ctrl) . 'Controller';

try {

    $controller = new $ctrlClassName;
    $method = 'action' . ucfirst($act);
    $controller->$method();

} catch (Exception $e) {

    echo 'Ошибка: ' . $e->getMessage();

}