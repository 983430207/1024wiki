# HTML 简介

你在网页上看到的所有元素，都是由HTML代码组成的。

文档地址：[https://developer.mozilla.org/zh-CN/docs/Learn/HTML](https://developer.mozilla.org/zh-CN/docs/Learn/HTML)

# 网页基础结构

只要是个网页，就应该有这些元素。

- `<head>...</head>`
  - 存放网页的基本属性
  - 比如网页标题、编码、包含CSS等
- `<body>...</body>`
  - 存放网页主体内容。
  - 比如 图像、文本、链接、表单、表格等等


```HTML
<!-- 说明这是HTML5 -->
<!DOCTYPE html>
<!-- 最外层的HTML标签 -->
<html>
    <!-- head标签内定义网页基本信息 -->
    <head>
        <title>网页标题</title>
        <!-- 网页编码 -->
        <meta charset="utf-8">
    </head>
    <!-- body标签内，存放用于显示的内容 -->
    <body>
        <h1>我是1级标题</h1>
        <p>我是介绍信息，来自1024编程实验室的编写。</p>
    </body>
</html>
```

# 基础语法

HTML 主要由标签、属性组成。标签决定了功能，属性定义了标签的额外信息。

**标签**

- 标签必须由`<>`符号包裹起来
- 大多数标签是成对出现的
  - 比如超链接 `<a>...</a>`
- 少数标签无需成对
  - 比如引用图片 `<img src='' />`

**属性**

位于标签内，定义标签的扩展属性。`<标签名 属性1='值' 属性2='值' ...>` 不同的标签，有不同的属性。

# 例子

- 可点击的链接
  - `<a href='http://www.sodevel.com'>链接标题</a>`
  - a 是标签名
  - href 是属性名
- 图像
  - `<img src='图像地址' />`
  - img 是标签
  - src 是属性
- 文字输入框
  - `<input type='text' name='email'/>`
  - input 是标签
  - type、name 都是属性
- 红色的文字
  - `<span style='color:red;'>我是红色的</a>`
  - span 是标签
  - style 是属性
- 标题1-6（大号字）
  - `<h1>我是1级标题</h1>`
  - `<h6>我是6级标题</h6>`
- 水平分割线
  - `<hr/>`
- 换行
  - `<br/>`
- 常用的大约有几十个。
