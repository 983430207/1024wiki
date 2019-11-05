# 网页布局（排版）简介

默认情况下，HTML标签的展示形式是：`从左到右、从上到下`，比较丑。所以，我们需要借助一定的技巧进行排版。

[布局参考文档](https://developer.mozilla.org/zh-CN/docs/Learn/CSS/CSS_layout)

# 从左到右

所有 `内联元素（标签）` 默认是不换行的，比如 `span`, `a`, `img`, `input` 等标签。

下面这个例子，字符串1和2最终显示在同一行。

```HTML 
<span>字符串1</span>
<span>字符串2</span>
```

# 从上到下

所有`块元素（标签）` 每个标签都会占据一行。比如 `div`, `p`, `h1`, `table` 等标签。

下面这个例子，字符串1和2最终分成两行显示。

```HTML 
<div>字符串1</div>
<div>字符串2</div>
```

# 浮动（float）

`float`（浮动） 是由CSS提供的一个功能，借助 `float` 我们能改变HTML标签的默认排版，改变它的位置。参考文档：[https://developer.mozilla.org/zh-CN/docs/Learn/CSS/CSS_layout/Floats](https://developer.mozilla.org/zh-CN/docs/Learn/CSS/CSS_layout/Floats)

- float 能使一个元素靠左或靠右
  - float:left;
  - float:right;
- 浮动之后，必须清除浮动，否则后续元素会错位
  - clear:both;

**例子**

复制下列代码到 [https://jsbin.com/?html,output](https://jsbin.com/?html,output) 可查看运行效果。

```HTML
<style>
.l {
  width: 48%;
  float: left;
}

.r {
  width: 48%;
  float: right;
}
</style>

<div class='l'>
  <h2>左栏</h2>
  <p>内容...</p>
</div>

<div class='r'>
  <h2>右栏</h2>
  <p>内容...</p>
</div>

<p style='clear:both'>清除浮动，否则我会错位</p>
```
