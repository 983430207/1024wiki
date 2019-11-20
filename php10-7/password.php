<?php
include('db.php');
if($user_id<1){
    die('该页面需要登陆后才能访问');
}
?>
<!doctype html>
<html lang="en">

<head>
    <title>留言板 之bootstrap美化版</title>
    <?php include('header.php'); ?>
</head>

<body>
    <div class="container">
        <?php include('menu.php'); ?>
        <div class='row'>
            <div class='col-6 offset-3'>
                <form action="password_save.php" method="POST">
                 
                    <div class="form-group">
                        <label>旧密码</label>
                        <input type="password" name='old_password' class="form-control" placeholder="请输入密码">
                    </div>
                    <div class="form-group">
                        <label>新密码</label>
                        <input type="password" name='password' class="form-control" placeholder="请输入密码">
                    </div>
                    <div class="form-group">
                        <label>确认新密码</label>
                        <input type="password" name='password1' class="form-control" placeholder="请输入密码">
                    </div>
                    
                    <button type="submit" class="btn btn-primary">修改</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>