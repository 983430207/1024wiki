# 相关资料

[官方文档，boolean 布尔型](https://www.php.net/manual/zh/language.types.boolean.php)

# 简介

非常简单的类型，这种类型只能保存两个值

- true
  - 表示真（是）
- false
  - 表示假（否）

该类型被大量应用于各种判断、状态。

```PHP
$is = true;

# 表达式成立，结果也是 true
$is = 1 < 2;

// 非0值，转为布尔值，为 true
// 数字0，转为布尔值，为 false
$is = (boolean) 1;

// and 运算符的两侧都是true，最终结果 = true
$is = true and true;

// and 左侧=0，而0=false 所以最终结果 = false
// 不懂的同学可以去看 and 运算符
$is = 0 and true;

// 这个表达式的结果 = false，所以不能满足if的运行条件
if( 0 and true ){

}
```