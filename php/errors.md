# 相关资料

[官方文档，错误处理](https://www.php.net/manual/zh/book.errorfunc.php)

# 什么是错误？ 

由于代码编写错误，导致程序无法执行的情况，视为错误。

比如

```PHP
//试图输出一个不存在的变量
echo $a;

// 忘记编写“;” 号
echo 123
echo 234;
```

# 如何阅读错误信息

错误类型多种多样，提示信息也不尽相同，在此只做一个例子来讲解

```PHP 
<?php 
//试图输出一个不存在的变量
echo $a;
;>
```

会出现下方的错误提示

```
Notice: Undefined variable: a in /php10-7/test.php on line 5
```

- Notice
  - 错误等级
- undefined variable: a
  - 意思是 a 这个变量未定义
- in /.../test.php
  - 发生错误的文件
- line 5
  - 代码的第五行

# 错误等级

根据错误的危害程度，PHP将错误分成若干个等级。

- notice
  - 提醒，可能有错误
- warning 
  - 警告，代码有问题，但还可以继续执行
- parse
  - 语法解析错误，比如少写了`;`号
- error
  - 致命错误，程序停止执行

我只列出几种常见的，其他错误请自行阅读 [官方文档，错误常量](https://www.php.net/manual/zh/errorfunc.constants.php)

注意：所有的错误都必须被解决；不要以为 `notice` 级别都错误就可以忽略！

# 为什么我的程序没有错误提示？

有部分同学安装的PHP开发环境，默认不显示错误。此时你需要去修改 `php.ini` 来打开错误显示。

- php.ini 的位置？
  - 不同的开发环境位置不同，请自行查找
- 如何编辑 php.ini？
  - 用 vscode 打开它就行
- 编辑后如何使其生效？
  - 重启web服务

```INI
# 打开错误开关
display_error = On

# 显示所有级别的错误
error_reporting = E_ALL 
```