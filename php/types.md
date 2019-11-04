# 相关资料

[官方文档，数据类型](https://www.php.net/manual/zh/language.types.php)

# 什么是数据类型？

将数据按照不同的种类，分成不同的“类型”，称之为：数据类型。

# PHP 有多少种数据类型？

原有8种，PHP 5.4 新增 `callback`，共9种。

**最好理解的（4种）**

- [int](types/int.md)
  - 整型（正负整数）
- [float](types/float.md)
  - 浮点型（小数）
- [string](types/string.md)
  - 字符串，任何用引号包裹起来的字符
- [boolean](types/boolean.md)
  - 布尔值，只有 true、false 这两个值

**稍微复杂的（2种）**

- [array](types/array.md)
  - 数组（一组数据）
- [object](types/object.md)
  - 对象，通过 `$object = new 类()` 得到的。

**比较特殊的（3种）**

- [null](types/null.md)
  - 表示什么都没有
- [resource](types/resource.md)
  - 资源，比如连接数据库后
- [callback](types/callback.md)
  - 回调函数（较少使用）

# 类型之间的转换

多数类型之间，可以互相转换，但是可能会造成 「损失」。比如将 `1.5` 转为 `int` 整型，这是允许的，但是 .5 就没了，只剩1。