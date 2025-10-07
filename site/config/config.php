<?php

use Beebmx\KirbyEnv;

require_once 'helpers.php';

KirbyEnv::load(dirname(__DIR__, 2));

return [
    'app' => [
        'key' => env('KIRBY_KEY'),
        'url' => env('APP_URL'),
    ],
    'debug' => env('KIRBY_DEBUG', false),
    'editor' => env('KIRBY_EDITOR', 'phpstorm'),
    'languages' => env('KIRBY_LANGUAGES', false),
    'api' => ['routes' => require_once __DIR__.'/api.php'],
    'auth' => require_once __DIR__.'/auth.php',
    'cache' => require_once __DIR__.'/cache.php',
    'email' => require_once __DIR__.'/email.php',
    'hooks' => require_once __DIR__.'/hooks.php',
    'panel' => require_once __DIR__.'/panel.php',
    'routes' => require_once __DIR__.'/routes.php',
    'session' => require_once __DIR__.'/session.php',
    'thumbs' => require_once __DIR__.'/thumbs.php',
    'beebmx.kirby-blade' => require_once __DIR__.'/blade.php',
    'beebmx.scheduler.tasks' => __DIR__.'/tasks.php',
    'beebmx.courier' => [
        // 'logo' => fn() => site()->file('logo.png'),
        'from' => [
            'address' => env('MAIL_FROM_ADDRESS', 'hello@example.com'),
            'name' => env('MAIL_FROM_NAME', 'Example'),
        ],
    ],
];
