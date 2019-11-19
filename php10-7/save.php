<?php

$content = $_POST['content'];
$username = $_POST['username'];

// var_dump($content, $username);

if( trim($content) == '' or trim($username)=='' ){
    echo '用户名、留言内容不能为空';
    exit;
}

if( $username == 'admin' || $username=='root' || $username=='领导人' ){
    echo '用户名不能为敏感字';
    exit;
}

include('db.php');

//编写SQL
$sql = "insert into msg (username,content) values ('{$username}', '{$content}')";
// echo $sql; //建议大家测试一下

$db->write($sql);

//跳转回首页
header('location: bootstrap.php');
?>