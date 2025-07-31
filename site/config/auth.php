<?php

return [
    'trials' => env('AUTH_TRIALS', 10),
    'timeout' => env('AUTH_TIMEOUT', 3600), // 1 hour
    'challenges' => ['courier', 'email'],
    'methods' => ['password', 'password-reset'],
    'challenge' => [
        'timeout' => env('AUTH_CHALLENGE_TIMEOUT', 600), // 10 minutes
        'email' => [
            'from' => env('MAIL_FROM_ADDRESS'),
            'fromName' => env('MAIL_FROM_NAME'),
        ],
    ],
];
