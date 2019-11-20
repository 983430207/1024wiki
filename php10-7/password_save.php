<?php
include('db.php');

if($user_id<1){
    die('该页面需要登陆后才能访问');
}

$old_password = trim( $_POST['old_password'] ?? '' );
$password = trim( $_POST['password'] ?? '' );
$password1 = trim( $_POST['password1'] ?? '' );

if( $old_password == '' || $password == '' ){
    die('密码不能为空');
}

if($password != $password1){
    die('两次新密码不一致');
}

//验证旧密码的有效性
$sql = "select * from user where id='{$user_id}'";
$user = $db->read($sql)[0];
if( !password_verify($old_password, $user['password']) ){
    die('旧密码错误');
}


//加密新密码
$password = password_hash($password, PASSWORD_DEFAULT);

//更新新密码
$sql = "update user set password='{$password}' where id='{$user_id}'";
$is = $db->write($sql);

//跳转回密码页
if($is){
    header("refresh:1;url=password.php");
    echo '操作成功，1秒后自动跳转';
}else{
    die('更新密码失败');
}