<html>
<head>
    <title>The Title</title>
    <?= $_styles ?>
</head>
<body>
    <?= $this->load->view('regions/child') ?>
    <div>我是父模板的内容</div>

    <?= $_scripts ?>
</body>
</html>