<?php
include('db.php');

$username = trim($_POST['username'] ?? '');
$password = trim($_POST['password'] ?? '');

if( $username == '' || $password == '' ){
    die('用户名和密码不能为空');
}

$sql = "select * from user where username='{$username}'";
$user = $db->read($sql)[0];
if($user==false){
    die('用户名不存在');
}

if( !password_verify($password, $user['password']) ){
    die('密码错误');
}

//写入session ，保持登陆状态
$_SESSION['id'] = $user['id'];

header("refresh:1;url=bootstrap.php");
echo '登陆成功，1秒后自动跳转到首页';