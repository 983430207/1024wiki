# 相关资料

[官方文档，流程控制](https://www.php.net/manual/zh/language.control-structures.php)

# 简介

流程控制，就是人为控制程序的执行过程，请注意流程控制中的`{}`，主要用于包裹代码块。

# if/switch 按照指定条件执行



```PHP
/**
 * 根据表达式的计算结果，决定接下来执行的代码
 * 表达式的计算结果，只能是 true 或 false
 * 如果结果是其他数据类型，会强行转为 boolean 值
 * */
if(表达式){
    echo 'a';
}else{
    echo 'b';
}
```

`switch`的功能和`if`类似，可自行阅读文档。

# for/foreach/while 循环执行特定代码

先看 `for` 循环，常用于指定次数的循环，比如：循环10次

```PHP
// $i变量初始为0
// 每次循环$i的值递增+1（$i++）
// 如果$i<10的条件成立，则继续循环；
for($i=0; $i<10; $i++){
    //反复执行此代码，并输出不同的 $i 的值
    echo $i;
}
```

再看 `foreach` 循环，用于遍历数组的键值对、对象的属性

```PHP
$arr = [1,2,3,4,5];

// 数组有多少个键值对，就执行多少次的循环
// 循环的时候，将当前的键值对，转化为 $key、$value 变量，便于使用
foreach($arr as $key=>$value){
    //输出当前循环对应的 key、values
    var_dump($key, $value);
}
```

其他的循环语句，可自行阅读文档。

# break/continue 循环控制语句

- break 跳出循环
- cuntinue 跳过本次循环，继续下一次

```PHP
//实际输出 012346789 没有5，因为5被跳过去了
for($i=0; $i<10; $i++){
    if($i == 5){
        cuntinue;
    }
    echo $i;
}
```

# include 代码包含语句

实际开发中，我们会将频繁使用的公共代码，放在其他 `.php`的文件中，通过 include 来包含使用，以降低代码重复率。


先写一个函数库文件
```PHP
// functions.php
function debug(){
    echo '输出调试信息';
} 
```

在程序中包含函数库，并调用相关函数。

```PHP
//先包含 functions.php 这个文件
include('functions.php');

//之后就可以调用debug函数了。
debug();
```

PHP 实际上提供了4个包含语句，功能类似，请参考：

- include(文件名)
  - 包含指定文件
- require(文件名)
  - 包含指定文件，如果包含失败，程序停止运行
- include_once()
  - 同一个文件仅包含一次，其他功能同 include
- require_once();
  - 同一个文件仅包含一次，其他功能同 require