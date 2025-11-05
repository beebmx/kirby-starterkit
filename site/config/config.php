<?php

use Beebmx\KirbyEnv;

require_once 'helpers.php';

KirbyEnv::load(dirname(__DIR__, 2));

return [
    'debug' => env('KIRBY_DEBUG', false),
    'editor' => env('KIRBY_EDITOR', 'phpstorm'),
    'languages' => env('KIRBY_LANGUAGES', false),
    'app' => require __DIR__.'/app.php',
    'api' => ['routes' => require __DIR__.'/api.php'],
    'auth' => require __DIR__.'/auth.php',
    'cache' => require __DIR__.'/cache.php',
    'email' => require __DIR__.'/email.php',
    'hooks' => require __DIR__.'/hooks.php',
    'panel' => require __DIR__.'/panel.php',
    'routes' => require __DIR__.'/routes.php',
    'session' => require __DIR__.'/session.php',
    'thumbs' => require __DIR__.'/thumbs.php',
    'beebmx.courier' => require __DIR__.'/courier.php',
    'beebmx.email-plus' => require __DIR__.'/plus.php',
    'beebmx.kirby-blade' => require __DIR__.'/blade.php',
    'beebmx.scheduler.tasks' => __DIR__.'/tasks.php',
];
