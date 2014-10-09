# 范例
```
<!-- 父模板 application/views/template.php -->

<html>
<head>
    <title>The Title</title>
    <?= $_styles ?>
</head>
<body>
    <?= $child ?>
    <div>我是父模板的内容</div>

    <?= $_scripts ?>
</body>
</html>
```

```
<!-- 子模板 application/views/regions/child.php -->

<?php
    $this->template->import("css/tmpl.css");
    $this->template->add_css("
        body {
            margin: 0;
        }
        p {
            font-size: 18px;
        }",
        "embed"
    );

    $this->template->import("js/tmpl.js");
    $this->template->import("js/tmpl-plus.js");
?>

<p>我是子模板的内容</p>
```

```
// 控制器 application/controllers/pages.php

<?php

class Pages extends CI_Controller {

    function index() {
        $this->template->write_view('child', 'regions/child');
        $this->template->render();
    }
}
```

```
<!--
渲染后的结果:
    1. css/js 自动分离
    2. 静态资源添加 md5 值
    3. 资源压缩合并
-->

<html><head>
    <title>The Title</title>
    <link type="text/css" rel="stylesheet" href="http://dev.ci.com//css/tmpl_d41d8cd.css">
    <style type="text/css">
        body {
            margin: 0;
        }
        p {
            font-size: 18px;
        }
    </style>
    <style type="text/css"></style>
</head>
<body>

    <p>我是子模板的内容</p>
    <div>我是父模板的内容</div>

    <script type="text/javascript" src="http://dev.ci.com//pkg/lib_dbac7c2.js"></script>
</body></html>
```

# 说明

主要修改 application/libraries/Template.php 文件

 * 添加 import 函数，在模板中引用 css/js 资源。通过该函数添加的资源，会自动指向由 F.I.S 编译后产生的压缩资源。

# 项目发布

1. 配置 Apache、PHP 环境，安装 F.I.S

2. 在项目根目录执行
```
fis release -omp -d path/to/output
```
