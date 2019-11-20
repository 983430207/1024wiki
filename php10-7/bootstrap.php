<?php
include('db.php');

// var_dump($_SESSION);

//获取数据总数
$sql = "select count(*) as t from msg";
$total = $db->read($sql)[0]['t'];

//每页显示
$pageNum = 5;
$pageMax = ceil($total / $pageNum);

//计算当前应该显示哪些数据
$page = $_GET['page'] ?? 1;

$offset = ($page - 1) * $pageNum; // 1*5;

$sql = "SELECT * FROM `msg` ORDER BY id DESC LIMIT $offset,5";

$rows = $db->read($sql);
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
        <div class="jumbotron">
            <h1 class="display-4">我的留言板</h1>
            <p class="lead">根据1024编程实验室做的入门程序，请大家鉴赏。</p>
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
                foreach ($rows as $key => $msg) {
                    ?>
                    <div class='border rounded p-2 mb-2'>
                        <div class='text-primary'><?php echo $msg['username']; ?></div>
                        <div><?php echo $msg['content']; ?></div>
                        <div class='d-flex'>
                            <a href='reply.php?msg_id=<?php echo $msg['id'];?>' class='ml-auto btn btn-sm btn-secondary'>详细</a>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
        <div class='row'>
            <div class='col-12'>
                <nav aria-label="Page navigation example">
                    <ul class="pagination">
                        <?php for ($i = 1; $i <= $pageMax; $i++) : ?>
                            <li class="page-item">
                                <a class="page-link" href="bootstrap.php?page=<?php echo $i; ?>">
                                    <?php echo $i; ?>
                                </a>
                            </li>
                        <?php endfor; ?>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</body>

</html>