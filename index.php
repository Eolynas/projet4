<?php

echo 'Hello World';
require '/app/App.php';
//require '/Core/Database/MysqlDatabase.php';
App::load();


$mysql = new \Core\Database\MysqlDatabase;
var_dump($mysql);