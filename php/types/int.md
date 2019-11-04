# 相关资料

[官方文档，int 整型](https://www.php.net/manual/zh/language.types.integer.php)

# 简介

注意：在32位系统下，最大整数为 `2147483647`；64位系统下，最大整数为 `9223372036854775807`；超出后会变为float 的类型。

```PHP
# 注意，数字不能用引号包裹（会变成string的）
$number = 123;  

# 注意，这是字符串（用了引号）
$nubmer = '123';

# 强制将字符串a，转换成整型，可以转，但是会有损失
$number = (int) 'a';

# 检查变量是否为整型
$is = is_int($number);

# 检查变量是否为数字、数字字符串（被引号包裹的数字也算）
$is = is_numeric($number);
```

