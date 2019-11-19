# 相关资料

[官方文档，类与对象](https://www.php.net/manual/zh/language.oop5.php)

[官方文档，object 对象](https://www.php.net/manual/zh/language.types.object.php)

# “类”与“对象”

如果说函数是对代码的封装，那么类就是对函数的封装（命名空间是对类的封装）

类 和 对象是两个东西，对象是通过 new 一个类而得到的，这个过程我们称之为“实例化”，请务必先搞清楚这个关系。

```PHP

//定义类
class Info{
    
    //类属性
    public $name = 'test';
    public $age = 18;

    //魔术方法（构造方法）new 类的时候，会自动触发
    public function __construct(){
        echo '实例化对象';
    }

    //类方法：获取姓名
    public function getName(){
        //在类方法中，调用类属性
        return $this->name;
    }

    //类方法，修改姓名
    public function setName($name){
        $this->name = $name;
    }
}

//实例化对象(会自动触发 __construct() 魔术方法)
$info = new Info();

//调试 $info 变量，会发现它的数据类型是 object（对象类型）
var_dump($info);

//调用属性
echo $info->name;

//调用方法
$name = $info->getName();
```

阅读以上代码，然后请看我们的总结：

- 类是一个代码片段（`class 类{...}`）
  - 类主要由方法、属性组成
  - 方法：约等于函数
  - 属性：约等于变量
  - `__construct()` 是构造方法（魔术方法）
  - `$this` 是调用其他类方法、属性的一个伪变量
  - `->` 是调用其他类方法、属性的操作符
- 对象是通过 `new 类()` 而来
- 通过对象变量，也可以调用属性、方法
  - `$info->xxx()`

# 其他

类与对象的知识点相对较多，其他知识点可慢慢阅读文档。

- 父子类继承关系
- 访问控制（可见性）
- 静态
- 接口类
- 抽象类
- 命名空间
- ...