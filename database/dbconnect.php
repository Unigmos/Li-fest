<?php
require_once $_SERVER["DOCUMENT_ROOT"]."/database/env.php";

function connect(){
    $host = DB_HOST;
    $dbname = DB_NAME;
    $user = DB_USER;
    $pass = DB_PASS;

    /*データベース情報 (Data Source Name)*/ 
    $dsn = "mysql:host=$host;dbname=$dbname;charset=utf8mb4";
    /*接続オプション*/
    $driver_options = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_EMULATE_PREPARES => false,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ];

    try {
        $pdo = new PDO($dsn, $user, $pass, $driver_options);
        return $pdo;
    } catch (PDOException $e) {
        echo "failed connect".$e->getMessage();
        exit();
    }
}
