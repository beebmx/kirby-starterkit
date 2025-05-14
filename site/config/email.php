<?php

return [
    'transport' => [
        'type' => env('MAIL_DRIVER', 'mail'),
        'host' => env('MAIL_HOST', 'smtp.server.com'),
        'port' => env('MAIL_PORT', 465),
        'auth' => env('MAIL_AUTH', false),
        'username' => env('MAIL_USERNAME', ''),
        'password' => env('MAIL_PASSWORD', ''),
        'security' => env('MAIL_ENCRYPTION', 'tls'),
    ],
];
