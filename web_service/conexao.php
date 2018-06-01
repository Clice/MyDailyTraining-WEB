<?php

//// Configurações locais ////
define('MYSQL_HOST', 'localhost');
define('MYSQL_USER', 'root');
define('MYSQL_PASSWORD', '');
define('MYSQL_DB_NAME', 'mydailytraining');

//// Configurações para o servidor ////
//define('MYSQL_HOST', 'localhost');
//define('MYSQL_USER', 'mydai319_user_db');
//define('MYSQL_PASSWORD', '2TIUqR3K9L^^');
//define('MYSQL_DB_NAME', 'mydai319_mydailytraining_db');

error_reporting(E_ALL & ~ E_NOTICE & ~ E_DEPRECATED);

try {
    $PDO = new PDO('mysql:host=' . MYSQL_HOST . ';dbname=' . MYSQL_DB_NAME, MYSQL_USER, MYSQL_PASSWORD, array(
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_PERSISTENT => false,
        PDO::ATTR_EMULATE_PREPARES => false,
        PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
    ));
} catch (PDOException $e) {
    echo 'Erro ao conectar com o MySQL: ' . $e->getMessage();
}