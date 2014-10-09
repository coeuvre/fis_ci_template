<?php
    $this->template->add_css("css/tmpl.css");
    $this->template->add_css("
        body {
            margin: 0;
        }
        p {
            font-size: 18px;
        }",
        "embed"
    );

    $this->template->add_js("js/tmpl.js");
    $this->template->add_js("js/tmpl-plus.js");
?>

<p>我是子模板的内容</p>
