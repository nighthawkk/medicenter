<?php

return [

    'defaults' => [
        'guard'     => 'web',
        'passwords' => 'users',
    ],

    'guards' => [
        'web' => [
            'driver'   => 'session',
            'provider' => 'users',
        ],

        'api' => [
            'driver'   => 'token',
            'provider' => 'users',
        ],

        // For public
        'pubs' => [
            'driver'   => 'session',
            'provider' => 'pubs'
        ],
        // For Doctors
        'docs' => [
    'driver'   => 'session',
    'provider' => 'docs'
]
    ],

    'providers' => [
        'users' => [
            'driver' => 'eloquent',
            'model' => App\User::class,
        ],

        // For public
        'pubs' => [
            'driver' => 'eloquent',
            'model' => App\Pub::class
        ],
        // For doctor
        'docs' => [
            'driver' => 'eloquent',
            'model' => App\doctor::class
        ]
    ],

    'passwords' => [
        'users' => [
            'provider' => 'users',
            'email' => 'auth.emails.password',
            'table' => 'password_resets',
            'expire' => 60,
        ],
        'pubs' => [
            'provider' => 'pubs',
            'email' => 'auth.emails.password',
            'table' => 'password_resets',
            'expire' => 60,
        ],
        'docs' => [
            'provider' => 'docs',
            'email' => 'auth.emails.password',
            'table' => 'password_resets',
            'expire' => 60,
        ],
    ],

];