<?php

use Beebmx\KirbyEnv;

require_once 'helpers.php';

KirbyEnv::load(dirname(__DIR__, 2));

return [
    'debug' => env('KIRBY_DEBUG', false),
    'editor' => env('KIRBY_EDITOR', 'phpstorm'),
    'app' => [
        'key' => env('KIRBY_KEY'),
        'url' => env('APP_URL'),
    ],
    'panel' => [
        'install' => env('KIRBY_INSTALL', false),
        'slug' => env('KIRBY_PANEL', 'panel'),
        'vue' => [
            'compiler' => env('KIRBY_VUE_COMPILER', false),
        ],
    ],
    'cache' => [
        'pages' => [
            'active' => env('KIRBY_CACHE_PAGES', false),
            'type' => env('KIRBY_CACHE_TYPE', 'file'),
        ],
    ],
    'session' => [
        'durationNormal' => (int) env('KIRBY_SESSION_DURATION', 7200),
        'durationLong' => (int) env('KIRBY_SESSION_LONG_DURATION', 1209600),
        'timeout' => (int) env('KIRBY_SESSION_TIMEOUT', 1800),
        'cookieName' => env('KIRBY_SESSION', 'kirby_session'),
    ],
    'cookieName' => env('KIRBY_SESSION', 'kirby_session'),
    'languages' => env('KIRBY_LANGUAGES', false),
    'api' => ['routes' => require_once __DIR__.'/api.php'],
    'auth' => require_once __DIR__.'/auth.php',
    'email' => require_once __DIR__.'/email.php',
    'hooks' => require_once __DIR__.'/hooks.php',
    'routes' => require_once __DIR__.'/routes.php',
    'thumbs' => require_once __DIR__.'/thumbs.php',
    'beebmx.kirby-blade' => require_once __DIR__.'/blade.php',
    'beebmx.courier' => [
        // 'logo' => fn() => site()->file('logo.png'),
        'from' => [
            'address' => env('MAIL_FROM_ADDRESS', 'hello@example.com'),
            'name' => env('MAIL_FROM_NAME', 'Example'),
        ],
    ],
];
