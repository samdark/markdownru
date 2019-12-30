<?php

return [
    'aliases' => [
        '@root' => dirname(__DIR__),
        '@views' => '@root/views',
        '@resources' => '@root/resources',
        '@src' => '@root/src',
        '@content' => '@root/content'
    ],

    'session' => [
        'options' => ['cookie_secure' => 0],
    ]
];
