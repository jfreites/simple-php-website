<?php

function page_title()
{
    $page = isset($_GET['page']) ? htmlspecialchars($_GET['page']) : 'Home';
    echo ucwords(str_replace('-', ' ', $page));
}

function site_url()
{
    echo config('site_url');
}

function site_name()
{
    echo config('title');
}

function page_content()
{
    $page = isset($_GET['page']) ? $_GET['page'] : 'home';
    $path = getcwd() . '/' . config('content_path') . '/' . $page . '.phtml';

    if (!file_exists($path)) {
        $path = getcwd() . '/' . config('content_path') . '/404.phtml';
    }

    echo file_get_contents($path);
}

function render_menu($sep = ' | ')
{
    $menu = '';
    $menuItems = config('router');

    foreach ($menuItems as $uri => $name) {
        //$queryString = str_replace('page=', '', $_SERVER['QUERY_STRING'] ?? '');
        $url = config('site_url') . '/' . (config('pretty_url') || $uri == '' ? '' :   '?page=') . $uri;

        $menu .= '<a href="' . $url . '" title="' . $name . '" class="list-item">' . $name . '</a>' . $sep;
    }

    echo trim($menu, $sep);
}

function site_version()
{
    echo config('version');
}

function dump($var)
{
    var_dump($var);
}

function start()
{
    require config('template_path') . '/template.php';
}
