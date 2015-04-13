<?php

require __DIR__ . '/classes/Db.php';

session_start();

$db = new Db();
var_dump( $db->findOne('SELECT * FROM news') );