<?php

return [
    'type' => env('EMAIL_PLUS_TYPE'),

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN', 'example.com'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'https://api.mailgun.net'),
        'key' => env('MAILGUN_SECRET'),
    ],

    'resend' => [
        'key' => env('RESEND_SECRET'),
    ],
];
