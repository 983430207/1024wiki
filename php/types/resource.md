# 相关资料

[官方文档，resource 资源](https://www.php.net/manual/zh/language.types.resource.php)

# 简介

`resource` 类型保存了 “外部资源” 的一个引用。借此引用，PHP可以和外部资源进行数据交换。常见的有：打开一个大文件、创建一个到数据库的连接等。

术语 `句柄` 指的也是`resource`，他们是同样的概念。

`resource` 是比较特殊的一个类型，只能由 [特定的函数](https://www.php.net/manual/zh/resource.php) 返回该类型，普通开发人员不能手动创建此类型，也无需将其他类型转为此类型（因为毫无意义）。

简单来说，就是：等你用到了，你自然就懂了。

# 举例

```PHP
//使用fopen() 函数，打开一个文件后，会得到一个资源类型。
$f = fopen('./test.php','rb');

//输出 resource 类型
var_dump($f);
```