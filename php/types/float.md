# 相关资料

[官方文档，float 浮点型](https://www.php.net/manual/zh/language.types.float.php)

# 简介

这个也没什么好说的，就是小数点。唯一需要注意的：在计算机中，小数点运算存在误差，请小心（比如涉及金额）

```PHP
$number = 123.24;

# 检查是否为浮点数类型
$is = is_float( $number );
```