<?php

return [
    'install' => env('KIRBY_INSTALL', false),
    'slug' => env('KIRBY_PANEL', 'panel'),
    'vue' => [
        'compiler' => env('KIRBY_VUE_COMPILER', false),
    ],
];
