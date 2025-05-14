<?php

const KIRBY_HELPER_E = false;
const KIRBY_HELPER_DUMP = false;
const KIRBY_HELPER_GO = false;

include dirname(__DIR__).'/vendor/autoload.php';

use Kirby\Cms\App as Kirby;

echo (new Kirby([
    'roots' => [
        'index' => __DIR__,
        'base' => $base = dirname(__DIR__),
        'content' => $base.'/content',
        'site' => $base.'/site',
        'storage' => $storage = $base.'/storage',
        'accounts' => $storage.'/accounts',
        'cache' => $storage.'/cache',
        'logs' => $storage.'/logs',
        'license' => $storage.'/license/.license',
        'sessions' => $storage.'/sessions',
    ],
]))->render();
