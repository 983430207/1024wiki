<html>
    <head>
        <title>留言板-1024编程实验室</title>
        <meta charset='utf-8' />
        <style>
            .add, .list{width:800px; margin:0 auto;}
            textarea{width:100%; height:100px; margin-bottom:10px;}
            .username{float:left;}
            .submit{float:right;}
            .msg{border:solid 1px #cccccc; margin-top:10px;padding:5px;}
        </style>
    </head>
    <body>
        <div class='add'>
            <form action="save.php" method='POST'>
                <textarea name='content'></textarea>
                <input name='username' class='username' type='text' />
                <input class='submit' type='submit' value='提交'/>
                <div style='clear:both;'></div>
            </form>
        </div>

        <div class='list'>
            <div class='msg'>
                <p>用户名</p>
                <p>留言内容</p>
            </div>
            <div class='msg'>
                <p>用户名</p>
                <p>留言内容</p>
            </div>
            <div class='msg'>
                <p>用户名</p>
                <p>留言内容</p>
            </div>
        </div>

    </body>
</html>