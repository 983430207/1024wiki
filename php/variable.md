# 相关资料

[官方文档，变量](https://www.php.net/manual/zh/language.variables.php)

# 变量是容器

用于保存“数据”，这个数据 **必然是PHP 9种基础数据类型之一。** 具体的数据类型，请参考[数据类型](types.md)。

- 赋值
  - 将数据填充到变量的过程，称之为赋值

# 变量的基础语法

```PHP
// 定义变量，并赋值
$name = 'abc';

//变量区分大小写
$NAME = 'def';

//输出变量中的值
echo $name;

// 判断变量的值
// 如果和 'abc' 相等，则输出 hello world
if( $name=='abc' ){
    echo 'hello world';
}

//对已有变量重新赋值
$name = 'def';
```

# 全局变量 VS 局部变量

[函数](function.md) 之外定义的为**全局变量**，反之为局部变量。二者互不干扰，互不相同。

```PHP
//我是全局变量
$url = 'sodevel.com';

function x(){
    //我是局部变量
    $url = 'php.net';
}
```

# 预定义变量

PHP 内置了几个超全局变量，由 `$_` 开头，包括 `$_GET`、`$_POST` 等，他们都是数组类型，具备特殊含义，详见文档（发送、接收数据时需要使用）

```PHP
//通过 post 获取数据的方法
$name = $_POST['name'];
```