# 相关资料

[官方文档，callback 回调类型](https://www.php.net/manual/zh/language.types.callable.php)

多数初学编程的萌新都看不太懂，如果你也觉得懵，不要慌，正常的。

# 简介

很早以前，PHP就支持使用回调函数，但一直没有为其正名，自 PHP 5.4 起，终于有了自己的数据类型，也就是 callback/callable。

简单来说，回调类型就是将函数作为参数传递，举例：

```PHP
//定义函数
function my_callback_function() {
    echo 'hello world!';
}
//以回调的形式调用该函数
call_user_func('my_callback_function'); 
```

上面的代码，通过回调的形式调用了 `my_callback_function` 这个函数；你可以思考以下：为什么不直接调用，而使用回调呢？

# 另一个例子

用 array_map() 函数，借助回调函数，对数组进行遍历和处理。

```PHP
//定义数组
$arr = [1,2,3];

//使用 array_map(回调函数, 数组) 函数，对数组进行处理
array_map(function($value){
    var_dump($value);
},$arr);
```