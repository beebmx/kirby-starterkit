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
    'api' => ['routes' => require __DIR__.'/api.php'],
    'auth' => require __DIR__.'/auth.php',
    'cache' => require __DIR__.'/cache.php',
    'email' => require __DIR__.'/email.php',
    'hooks' => require __DIR__.'/hooks.php',
    'panel' => require __DIR__.'/panel.php',
    'routes' => require __DIR__.'/routes.php',
    'session' => require __DIR__.'/session.php',
    'thumbs' => require __DIR__.'/thumbs.php',
    'beebmx.kirby-blade' => require __DIR__.'/blade.php',
    'beebmx.scheduler.tasks' => __DIR__.'/tasks.php',
    'beebmx.courier' => [
        // 'logo' => fn() => site()->file('logo.png'),
        'from' => [
            'address' => env('MAIL_FROM_ADDRESS', 'hello@example.com'),
            'name' => env('MAIL_FROM_NAME', 'Example'),
        ],
    ],
];
