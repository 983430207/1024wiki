<nav class="navbar navbar-expand-lg navbar-light bg-light mb-2">
    <a class="navbar-brand" href="bootstrap.php">留言板</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
<?php if($user_id<1):?>
            <li class="nav-item">
                <a class="nav-link" href="register.php">注册</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="login.php">登陆</a>
            </li>
<?php else:?>
            <li class="nav-item">
                <a class="nav-link" href="avatar.php">头像</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="password.php">密码</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="logout.php">退出</a>
            </li>
<?php endif;?>
        </ul>
    </div>
</nav>