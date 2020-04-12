<?php

return [
    'adminEmail' => 'admin@farm.com',
    'senderEmail' => 'noreply@farm.com',
    'senderName' => 'Farm Management',
    'baseUrl' => getenv('BASE_URL'),
    'excludedPaths' => [
        'site/index',
        'site/login',
        'site/sign-in',
        'site/register',
    ],
];
