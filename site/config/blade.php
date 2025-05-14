<?php

return [
    'bootstrap' => env('KIRBY_BLADE_BOOTSTRAP', true),
    'views' => dirname(__DIR__, 2).'/storage/views',
    'ifs' => [
        'env' => function ($environment) {
            return env('KIRBY_ENV', 'production') === $environment;
        },
        'local' => function () {
            return env('KIRBY_ENV', 'production') === 'local';
        },
        'production' => function () {
            return env('KIRBY_ENV', 'production') === 'production';
        },
        'productionIf' => function (bool $condition) {
            return env('KIRBY_ENV', 'production') === 'production' && $condition;
        },
    ],
    'directives' => [
        'ray' => function ($expression) {
            return "<?php ray($expression); ?>";
        },
    ],
];
