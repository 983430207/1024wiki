<?php
include('db.php');
$sql = "SELECT * FROM `msg` ORDER BY id DESC";

$rows = read($pdo, $sql);
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <title>留言板 之bootstrap美化版</title>
</head>

<body>
    <div class="container">
        <div class="jumbotron">
            <h1 class="display-4">我的留言板</h1>
            <p class="lead">根据1024编程实验室做的入门程序，请大家鉴赏。</p>
        </div>
        <form action="save.php" method='POST'>
        <div class='row'>
        
            <div class='col-12'>
                <div class="form-group">
                    <textarea name='content' class="form-control" rows='4'></textarea>
                </div>
            </div>
            <div class='col-3'>
                <div class="form-group">
                    <input name='username' class='form-control' type='text' />
                </div>
            </div>
            <div class='col-9 d-flex'>
                <div class="form-group ml-auto">
                    <input class='btn btn-primary' type='submit' value='提交' />
                </div>
            </div>
        
        </div>
        </form>

        <div class='row'>
            <div class='col-12'>
            <?php
            foreach($rows as $key=>$msg){ 
            ?>
                <div class='border rounded p-2 mb-2'>
                    <div class='text-primary'><?php echo $msg['username'];?></div>
                    <div><?php echo $msg['content'];?></div>
                </div>
            <?php
            }
            ?>
            </div>
        </div>
    </div>
</body>

</html>