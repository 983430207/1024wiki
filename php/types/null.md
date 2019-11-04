# 相关资料

[官方文档，null 无](https://www.php.net/manual/zh/language.types.null.php)

# 简介

该数据类型的值只有一个，就是 `NULL`，代表 “什么都没有” 的意思。很多新同学会迷惑，这样算什么都没有吗？`$a = '';` 不，这是字符串类型，只不过它是空的。

只有几种情况，才会导致 `$变量 = NULL`

- 手动赋值
- 定义变量，但从未赋值
- unset($变量)

上面三种由PHP官方手册说明，实际开发中还可以追加一个：无返回值的函数，将会返回`NULL`

```PHP
function x(){
    //注意，该函数未定义 return xxx，所以没有返回值
}

$x = x();
var_dump($x);   //输出 NULL
```