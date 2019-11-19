<?php
include('db.php');
$_SESSION['id'] = 0;

header("refresh:1;url=bootstrap.php");
echo '退出成功，1秒后自动跳转到首页';