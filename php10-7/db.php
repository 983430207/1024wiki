<?php
//连接到数据库
$dsn = 'mysql:dbname=php10-7;host=127.0.0.1';
$pdo = new PDO($dsn,'php', '123456');


function write($pdo, $sql){
    //将 SQL送入 prepare 方法
    $sth = $pdo->prepare($sql);

    //执行SQL
    return $sth->execute();
}

function read($pdo, $sql){
    $sth = $pdo->prepare($sql);
    $sth->execute();
    
    $rows = $sth->fetchAll();
    return $rows;
}
?>