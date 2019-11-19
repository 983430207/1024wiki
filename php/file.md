# 相关资料

[官方文档，文件上传](https://www.php.net/manual/zh/features.file-upload.php)

# 简介

上传文件与传统的文字表单不同，在发送与接收的时候我们要做一些特殊处理。

# 改造表单，使其能够发送文件

首先，上传文件必须使用 `type='file'` 的表单项。

```HTML
<input type='file' name='file1'/>
```

并且，`form` 标签必须增加 enctype 的属性。

```HTML
<form enctype='multipart/form-data' action='..' method='POST'>
```

# PHP 接收上传文件

`$_GET`、`$_POST` 中不包含文件信息，必须通过 `$_FILES` 能够接收到上传文件，代码如下

```PHP
var_dump($_FILES['表单名']);
```

通过 var_dump 可以观察到，我们得到的是一个文件信息数组，其中包含如下字段

- name
  - 客户端原始文件名
- type
  - 文件的mime 类型
- size
  - 文件大小（字节数）
- tmp_name
  - 上传成功后的文件名（临时）
- error
  - 上传的错误代码
  - 0 表示没有错误
  - 其他，请查看[错误代码](https://www.php.net/manual/zh/features.file-upload.errors.php)

# 将文件移动到指定文件夹

文件上传成功后，可以通过 `move_uploaded_file()` 函数，移动到你的目标文件夹。

```PHP
move_uploaded_file( $tmp_name, '/目标文件夹/文件名' )
```

# 注意

这只能保证文件上传成功，但是还涉及到大量的安全问题，我们在后续课程中会提及。