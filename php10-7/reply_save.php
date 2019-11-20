<?php
include('db.php');

if($user_id<1){
    die('游客禁止回复主题');
}

$content = $_POST['content'] ?? '';
$msg_id = $_POST['msg_id'] ?? 0;

// var_dump($content, $msg_id);exit;

if( trim($content) == '' ){
    echo '留言内容不能为空';
    exit;
}

if($msg_id<1){
    die('必须指定回复的主题id');
}


//编写SQL
$sql = "insert into reply (msg_id,user_id,content) values ('{$msg_id}', '{$user_id}', '{$content}')";
// echo $sql; //建议大家测试一下

$is = $db->write($sql);
if($is){
    //跳转回首页
    header("location: reply.php?msg_id={$msg_id}");
}else{
    die('发布失败');
}


?>