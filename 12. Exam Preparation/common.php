<?php
session_start();

spl_autoload_register();
$conf=parse_ini_file('Config/db.ini');
$pdo= new PDO($conf['dsn'], $conf['user'], $conf['pass'], [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_CASE => PDO::CASE_LOWER
]);
$db= new \Database\PDODatabase($pdo);
$template= new \Core\Template();
$data_binder= new \Core\DataBinding();