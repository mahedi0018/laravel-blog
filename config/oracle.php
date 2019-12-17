<?php

return [
    'oracle' => [
        'driver'         => 'oracle',
        'tns'            => env('DB_TNS', '1521'),
        'host'           => env('DB_HOST', '192.168.1.44'),
        'port'           => env('DB_PORT', '8889'),
        'database'       => env('DB_DATABASE', 'orcl'),
        'username'       => env('DB_USERNAME', 'deshi'),
        'password'       => env('DB_PASSWORD', 'deshi'),
        'charset'        => env('DB_CHARSET', 'AL32UTF8'),
        'prefix'         => env('DB_PREFIX', ''),
        'prefix_schema'  => env('DB_SCHEMA_PREFIX', ''),
        'server_version' => env('DB_SERVER_VERSION', '10g'),
    ],
];
