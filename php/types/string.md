# 相关资料

[官方文档，string 字符串](https://www.php.net/manual/zh/language.types.string.php)

[官方文档，字符串函数库](https://www.php.net/manual/zh/ref.strings.php)

# 简介

字符的范围比较宽泛，不管是数字、字母、符号、各国语言，只要用字符串（`''`、`""`）包裹起来，它就是字符串类型。

```PHP

//以下均为字符串
$string = 'abc';
$string = '123';
$string = 'true';
$string = "false";
```

# 单双引号的区别

双引号能识别变量，以及其他的一些特殊字符；而单引号，眼见即所得。

```PHP
$a = 'world';

//输出 hello world
$b = "hello {$a}";

//输出 hello {$a}
$c = 'hello {$a}';

```

# 字符串拼接

两个字符串拼在一起的方法。

```PHP
$a = 'hello';
$b = 'world';

//输出 helloworld（好像少了个空格）
echo $a . $b;

//让我们补上空格
echo $a .' '.$b;
```

# 常用函数

字符串的操作函数异常多，慢慢学习即可 [字符串函数库](https://www.php.net/manual/zh/ref.strings.php)


```PHP
//计算字符串的字节数
$number = str_len('12345');

//计算字符数量（不考虑实际占用的字节数）
$number = mb_str_len('字符串');
```