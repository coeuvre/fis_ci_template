# 说明

主要修改 application/libraries/Template.php 文件

 * 添加 import 函数，在模板中引用 css/js 资源。通过改函数添加的资源，会自动指向由 F.I.S 编译后产生的资源

# 项目发布

1. 配置 Apache、PHP 环境，安装 F.I.S

2. 在项目根目录执行
```
fis release -omp -d path/to/output
```
