<?php
include('db.php');
if($user_id<1){
    die('该页面需要登陆后才能访问');
}

$avatar = $_FILES['avatar'] ?? null;
if(!$avatar){
    die('没有上传文件');
}

if( $avatar['error']<>0 ){
    die('文件上传失败');
}

if( $avatar['type'] != 'image/jpeg' ){
    die('只允许上传jpg的文件');
}

//移动文件到指定文件夹
$is = move_uploaded_file( $avatar['tmp_name'], "./avatar/{$user_id}.jpg" );

if($is){
    header("refresh:1;url=avatar.php");
    echo '上传成功，1秒后自动跳转';    
}else{
    die('文件写入失败');
}