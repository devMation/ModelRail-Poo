<?php

function render(string $path, array $data)
{
    extract($data);
    ob_start();
    require_once dirname(__DIR__) . '/view/' . $path . '.html.php';
    $content = ob_get_clean();
    require_once dirname(__DIR__) . '/view/base.html.php';
}
