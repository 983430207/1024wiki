# 相关资料

[官方文档，PDO](https://www.php.net/manual/zh/book.pdo.php)

# 简介

在PHP开发中，我们经常使用MySQL数据库。但其实，他们是完全独立的两个软件，请务必知悉。

开发中，PHP实际要做的就三件事：

- 连接（到数据库）
  - 提供数据库信息（主机、账号、密码、数据库名称）
- 读写（数据）
  - 通过 SQL 语句（增删改查）
- 关闭（连接）
  - 会自动关闭，基本不用我们自己写

# 以PDO 操作 MySQL 为例

```PHP
//连上去
$dsn = 'mysql:dbname=php10-7;host=127.0.0.1';
$pdo = new PDO($dsn,'数据库账号', '密码');

/*******读数据（增删改，都算写）以删为例***********/
# 预定义SQL
$sth = $pdo->prepare("delete from table");
//执行SQL
$sth->execute();

/*******读数据***********/
# 预定义SQL
$sth = $pdo->prepare("select * from table");
//执行SQL
$sth->execute();

//以二维数组形式，获取所有数据，赋值给$rows
$rows = $sth->fetchAll();
//打印一下，看看都得到了什么
var_dump($rows);
```

可以看出，只需要连一次；读比写多了一个步骤（`$sth->fetchAll()`）。

# SQL 知识

- SQL 是所有关系型数据库的通用语言
  - 学会之后，玩其他数据库也基本一致
- SQL 很复杂，但是入门很简单
  - 必须掌握增删改查的基本语法
- SQL 的语法分成若干个不分，可以灵活组合


# 基础例子


```SQL

/*注1：原则上SQL关键字应该大写，但小写也没问题*/

/*注2：表名、字段名上的（`）是反引号（在键盘数字1的左侧）这个符号多数情况下可省略*/

/*插入数据*/
INSERT into `表名` (`字段1`,`2`,`3`) values ('值1','2', '3');

/*修改数据*/
UPDATE SET `表名` `字段1`='新值',`字段2`='新值' where 过滤条件;

/*删除语句*/
DELETE FROM `表名` where 过滤条件;

/*查询语句*/
SELECT * FROM `表名` where 过滤条件 ORDER BY 排序字段 DESC;
```

# where 过滤条件

在 `where` 后面跟着过滤条件，能够帮你排除无关数据，然后配合（改、删、查）SQL语句，实现你的目的。


```SQL
/*删除居住在北京的未成年（不满18）的数据*/
DELETE FROM table where age<18 and city='北京';

/*读取所有未成年（不满18）数据*/
SELECT * FROM table WHERE age<18
```