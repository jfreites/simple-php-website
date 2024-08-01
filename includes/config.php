<?php

function config($key = '')
{
    $config = [
        'title' => 'Simple PHP website',
        'site_url' => '',
        'pretty_url' => false,
        //'router' => [],
        'template_path' => 'template',
        'content_path' => 'content',
        'version' => 'v1.0',
    ];

    return isset($config[$key]) ? $config[$key] : null;
}
