# 相关资料

[官方文档，object 对象](https://www.php.net/manual/zh/language.types.object.php)

# 简介

更多关于类与对象的知识，轻看[类与对象](../class.md)。本节重点介绍`object`这个数据类型的基本概念。

- object（对象）从哪里来？
  - 通过new一个类而来，`$对象 = new 类();`
- 类从哪里来？
  - A：PHP内置了很多类，比如 `PDO`
  - B：可以根据需要，自己编写类 `class 类{...}`
- 类里边有什么？
  - 属性，用于存储数据，约等于“变量”
  - 方法，用于封装代码块，约等于“函数”
- 对象里有什么？
  - 类里有什么，对象中就有什么
- 如何调用对象里的属性、方法？
  - 通过 `->`运算符，比如 `$object->方法名()`

# 举例说明

先看看使用内置类的方法。

```PHP
//实例化(new) PDO 这个类，将对象赋给 $pdo 这个变量
$pdo = new PDO('dsn','user','passwd');

//通过 -> 操作符，调用 $pdo 对象的 query() 方法。
$pdo->query("select * from table");
```

根据我们的业务需求，编写自己的类。

```PHP
//编写一个类
class DB{
    //定义类方法
    function query($sql){
        return '执行结果';
    }
}
//实例化类，得到对象 赋给$d
$d = new DB();
//调用 query() 方法
$d->query('select * from table');
```