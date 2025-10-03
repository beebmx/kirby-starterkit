<?php

use Kirby\Cms\App;

return [
    'bootstrap' => env('KIRBY_BLADE_BOOTSTRAP', true),
    'views' => dirname(__DIR__, 2).'/storage/views',
    'ifs' => [
        'env' => fn ($environment) => env('KIRBY_ENV', 'production') === $environment,
        'local' => fn () => env('KIRBY_ENV', 'production') === 'local',
        'production' => fn () => env('KIRBY_ENV', 'production') === 'production',
        'productionIf' => fn (bool $condition) => env('KIRBY_ENV', 'production') === 'production' && $condition,
        'analytics' => fn (bool $condition) => env('KIRBY_ENV', 'production') === 'production' && App::instance()->auth()->status()->status() === 'inactive' && $condition,
    ],
    'directives' => [
        'ray' => fn ($expression) => "<?php ray($expression); ?>",
    ],
];
