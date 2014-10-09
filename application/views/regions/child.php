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
