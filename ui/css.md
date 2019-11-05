# CSS 简介

CSS 可以控制HTML的结构和显示效果，简单来说就是：美化网页。

文档地址：[https://developer.mozilla.org/zh-CN/docs/Learn/CSS](https://developer.mozilla.org/zh-CN/docs/Learn/CSS)

# CSS 代码写在哪？

CSS 有多种写法，可混合使用。

**1、HTML标签的 `style` 属性。**

```HTML
<a style='color:#FF0000;font-size:14px;'>红色大号字体</a>
```

---

**2、`<head>` 标签内的 `<style>...</style>` 中。**

```HTML
<head>
    <style>
        /*让所有的a标签都变为红色大号字体*/
        a{color:#FF0000;font-size:14px;}
    </style>
</head>
```

---

**3、写在独立的 `.css` 文件中。**

创建 `style.css` 文件，并编写如下代码。

```CSS
a{color:#FF0000;font-size:14px;}
```

通过 `link` 标签，在HTML文档中引用。
```HTML
<head>
    <link rel="stylesheet" type="text/css" href="style.css.css" />
</head>
```

# 基础语法

CSS 需要先 `选择` HTML标签，之后才能对其施加`样式`效果，具体有多少种

参考文档：[css语法、选择器](https://developer.mozilla.org/zh-CN/docs/Learn/Getting_started_with_the_web/CSS_basics)

```HTML
<head>
    <style>
        /* #（id选择器） 选中 id=a 的HTML标签 */
        #a{font-size:14px;}

        /* .（class选择器） 选中 class=a 的HTML标签 */
        .a{font-size:14px;}

        /*直接写标签的名字，选中所有a标签*/
        a{font-size:14px;}
    </style>
</head>
<body>
    <div id='a'>我的 id=a</div>
    <div class='a'>我的 class=a</div>

    <a href='baidu.com'>我什么都没有</a>
    <a href='baidu.com'>我什么都没有</a>
</body>
```

