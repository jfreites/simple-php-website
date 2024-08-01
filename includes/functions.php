<?php

function page_title()
{
    echo config('page_title');
}

function site_url()
{
    echo config('site_url');
}

function page_content()
{
    $page = isset($_GET['page']) ? $_GET['page'] : 'home';
    $path = getcwd() . '/' . config('content_path') . '/' . $page . 'phtml';

    if (!file_exists($path)) {
        $path = getcwd() . '/' . config('content_path') . '/404.phtml';
    }

    echo file_get_contents($path);
}

function site_version()
{
    echo config('site_version');
}

function start()
{
    require config('template_path') . '/template.php';
}
