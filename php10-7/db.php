<?php


class DB{

    //保存pdo连接对象
    public $pdo = null;

    function __construct()
    {
        //连接到数据库
        $dsn = 'mysql:dbname=php10-7;host=127.0.0.1';
        $this->pdo = new PDO($dsn,'php', '123456');        
    }

    function write($sql){
        //将 SQL送入 prepare 方法
        $sth = $this->pdo->prepare($sql);
    
        //执行SQL
        return $sth->execute();
    }
    
    function read($sql){
        $sth = $this->pdo->prepare($sql);
        $sth->execute();
        
        $rows = $sth->fetchAll();
        return $rows;
    }
}

$db = new DB();

?>