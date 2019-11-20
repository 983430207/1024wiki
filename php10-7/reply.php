<?php
include('db.php');
$msg_id = $_GET['msg_id'] ?? 0;

if($msg_id<1){
    die('请传入有效的数据ID');
}

$sql = "select * from msg where id='{$msg_id}'";
$msg = $db->read($sql)[0];
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
            <div class='col-12'>
                <div class='border rounded p-2 mb-2'>
                    <div class='text-primary'><?php echo $msg['content'];?></div>
                    <div><?php echo $msg['username'];?></div>
                </div>
            </div>
        </div>
        <form action="save.php" method='POST'>
            <div class='row'>
                <div class='col-12'>
                    <div class="form-group">
                        <textarea id='content' name='content' class="form-control" rows='4'></textarea>
                        <script>
                            var editor = new Simditor({
                                textarea: $('#content')
                                //optional options
                            });
                        </script>

                    </div>
                </div>
                <div class='col-3'>
                </div>
                <div class='col-9 d-flex'>
                    <div class="form-group ml-auto">
                        <input class='btn btn-primary' type='submit' value='回复' />
                    </div>
                </div>

            </div>
        </form>

        <div class='row'>
            <div class='col-12'>
                <div class='border rounded p-2 mb-2'>
                    <div class='text-primary'>模拟内容</div>
                    <div>发表人信息</div>
                </div>
                <div class='border rounded p-2 mb-2'>
                    <div class='text-primary'>模拟内容</div>
                    <div>发表人信息</div>
                </div>
            </div>
        </div>

    </div>
</body>

</html>