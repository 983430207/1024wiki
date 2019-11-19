<?php
include('db.php');

$username = trim($_POST['username'] ?? '');
$password = trim($_POST['password'] ?? '');
$password1 = trim($_POST['password1'] ?? '');

if( $username == '' || $password == '' ){
    die('用户名和密码不能为空');
}

if($password != $password1){
    die('两次密码必须一致');
}

//用户名唯一性
$sql = "select count(*) as total from user where username='{$username}'";
$total = $db->read($sql)[0]['total'];
if($total>0){
    die('用户名已存在');
}

//密码加密
$password = password_hash($password, PASSWORD_DEFAULT);

//插入数据
$sql = "insert into user (username,password) values ('{$username}', '{$password}')";
$is = $db->write($sql);
if($is){
    header("refresh:1;url=login.php");
    echo '注册成功，1秒后自动跳转到登陆页';
}else{
    die('写入失败，可能是SQL错误');
}
