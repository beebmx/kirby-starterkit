<?php
require_once 'helpers.php';
$base = dirname(dirname(__DIR__));
$storage = $base . '/storage';

(new \Beebmx\KirbyEnv($base))->load();

return [
    'debug' => env('KIRBY_DEBUG', false),
    'hooks' => require_once 'hooks.php',
    'routes' => require_once 'routes.php',
    'beebmx.kirby-blade.views' => $storage . '/views',
];
