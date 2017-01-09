<?php 

$dbname = "edu_sys_db";

function get_my_pdo($db) {
    // TODO 此处需要检查参数是否合法。图方便，不写。
    $servername = "localhost";
    $username = "root";
    $password = "";
    $pdo = new PDO("mysql:host=$servername", $username, $password); 
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // 设置 PDO 错误模式，用于抛出异常
    // TODO 检查数据库是否已经初始化
    $pdo->exec("USE $db;");
    $pdo->exec("SET NAMES 'utf8';");	//避免乱码
    return $pdo;
}