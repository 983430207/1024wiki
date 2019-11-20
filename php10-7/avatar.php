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
                <img src='<?php echo getAvatar($user_id);?>' class='img-thumbnail'/>
                <form action="avatar_save.php" method="POST" enctype='multipart/form-data'>
                    <div class="form-group">
                        <label>用户名</label>
                        <input type="file" name='avatar' class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary">上传</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>