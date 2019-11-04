# 相关资料

[官方文档，session 会话保持](https://www.php.net/manual/zh/book.session.php)

# 如何启用Session

```PHP
# 在代码的头部增加该函数，表示使用session
session_start();

# 之后你就可以使用 $_SESSION 数组了
```

# Session 的意义1：数据存储

HTTP协议是无状态协议，每次HTTP请求所产生的数据在请求完毕之后，会立刻销毁。也就是说：每次执行代码（刷新网页）时定义的PHP变量，代码执行完毕就会立刻被销毁，下一次执行时需要重新定义。

但是，如果你将数据存在 `$_SESSION` 数组中，则可以保留下来（该变量由Session模块提供，和 $_GET 类似）

```PHP
//任何一个使用session的代码头部，必须先启用session
session_start();
//将数据保存在session中（它就是一个数组）
$_SESSION['count'] = 1;
```

数据在 `$_SESSION` 中能保存多久呢？ 事实上，它是可配置的。

- 默认情况下，可能是1440秒
  - 取决于 gc_maxlifetime 的默认值
- 默认情况下，关闭浏览器会立刻过期
  - 除非自定义 cookie_lifetime 配置

简单来说，默认情况下关闭浏览器或者超过1440秒无活动就会过期。你可以通过修改 `gc_maxlifetime` 和 `cookie_lifetime` 的值来控制这个周期。

PS：如果需要精准的过期时间，比如 2分30秒，那还需要做很多工作。

```PHP

//自定义session的有效期(有效期为1天)
session_start([
    'cookie_lifetime'   => 86400, //秒，表示1天
    'gc_maxlifetime'    => 86400, //秒
]);
```

# Session 的意义2：数据共享

同样受HTTP协议的影响，两次HTTP请求之间的数据是无法共享的。但是借助 Session 提供的超全局变量 `$_SESSION`，我们可以在两个网页（两次HTTP请求）之间进行数据共享。

代码和上面没什么区别。

```PHP
# 在 a.php 中添加一个数据
session_start();
$_SESSION['count'] = 100;

# 在 b.php 中读取它
session_start();
var_dump($_SESSION['count']);
```

# 特别注意

注1：Cookie 也能解决此类问题，在移动端接口开发时我们还有其他方法解决此类问题。

注2：有些同学可能会错误理解 `两次HTTP请求`，要多温习基础功课哦。
