<?php

use Beebmx\KirbyEnv;

require_once 'helpers.php';
$base = dirname(__DIR__, 2);
$storage = $base . '/storage';

KirbyEnv::load($base);

return [
    'debug' => env('KIRBY_DEBUG', false),
    'panel' => [
        'install' => env('KIRBY_INSTALL', false),
        'slug' => env('KIRBY_PANEL', 'panel')
    ],
    'session' => [
        'durationNormal' => (int) env('KIRBY_SESSION_DURATION', 7200),
        'durationLong' => (int) env('KIRBY_SESSION_LONG_DURATION', 1209600),
        'timeout' => (int) env('KIRBY_SESSION_TIMEOUT', 1800),
        'cookieName' => env('KIRBY_SESSION', 'kirby_session'),
    ],
    'api' => env('KIRBY_API', true),
    'cookieName' => env('KIRBY_SESSION', 'kirby_session'),
    'hooks' => require_once 'hooks.php',
    'routes' => require_once 'routes.php',
    'beebmx.kirby-blade.views' => $storage . '/views',
    'email' => [
        'transport' => [
            'type' => env('MAIL_DRIVER', 'mail'),
            'host' => env('MAIL_HOST', 'smtp.server.com'),
            'port' => env('MAIL_PORT', 465),
            'security' => env('MAIL_ENCRYPTION', 'tls'),
            'auth' => env('MAIL_AUTH', false),
            'username' => env('MAIL_USERNAME', ''),
            'password' => env('MAIL_PASSWORD', ''),
        ]
    ],
    'beebmx.kirby-blade.ifs' => [
        'env' => function ($environment) {
            return env('KIRBY_ENV', 'production') === $environment;
        },
    ],
];
