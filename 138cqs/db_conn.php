<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "edu_sys_db";
$conn = NULL;

try {
    $conn = new PDO("mysql:host=$servername", $username, $password);
    // 设置 PDO 错误模式，用于抛出异常
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	// TODO 检查数据库是否已经初始化
} catch(PDOException $e)
{
    echo $e->getMessage().'<br/>';
}