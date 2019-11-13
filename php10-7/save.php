<?php

$content = $_POST['content'];
$username = $_POST['username'];

// var_dump($content, $username);

//连接到数据库
$dsn = 'mysql:dbname=php10-7;host=127.0.0.1';
$pdo = new PDO($dsn,'php', '123456');

//编写SQL
$sql = "insert into msg (username,content) values ('{$username}', '{$content}')";
// echo $sql; //建议大家测试一下
//将 SQL送入 prepare 方法
$sth = $pdo->prepare($sql);

//执行SQL
$sth->execute();

//跳转回首页
header('location: index.php');
?>