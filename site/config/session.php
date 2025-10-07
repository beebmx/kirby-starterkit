<?php

return [
    'durationNormal' => (int) env('KIRBY_SESSION_DURATION', 7200),
    'durationLong' => (int) env('KIRBY_SESSION_LONG_DURATION', 1209600),
    'timeout' => (int) env('KIRBY_SESSION_TIMEOUT', 1800),
    'cookieName' => env('KIRBY_SESSION', 'kirby_session'),
];
