<?php declare(strict_types=1);

/**
 * @author Pihe Edmond <pihedy@gmail.com>
 */

use \Illuminate\Support\Str;

return [

    /**
     * Default Database Connection Name
     */
    'default' => env('DB_CONNECTION', 'sqlite'),

    /**
     * Database Connections
     */
    'connections' => [

        'sqlite' => [
            'driver'                    => 'sqlite',
            'url'                       => env('DB_URL'),
            'database'                  => env('DB_DATABASE', database_path('database.sqlite')),
            'prefix'                    => '',
            'foreign_key_constraints'   => env('DB_FOREIGN_KEYS', true),
        ],

    ],

    /**
     * Migration Repository Table
     */
    'migrations' => [
        'table'                     => 'migrations',
        'update_date_on_publish'    => true,
    ],

    /**
     * Redis Databases
     */
    'redis' => [

        'client'    => env('REDIS_CLIENT', 'phpredis'),
        'options'   => [
            'cluster'   => env('REDIS_CLUSTER', 'redis'),
            'prefix'    => env('REDIS_PREFIX', Str::slug(env('APP_NAME', 'laravel'), '_').'_database_'),
        ],

        'default' => [
            'url'       => env('REDIS_URL'),
            'host'      => env('REDIS_HOST', '127.0.0.1'),
            'username'  => env('REDIS_USERNAME'),
            'password'  => env('REDIS_PASSWORD'),
            'port'      => env('REDIS_PORT', '6379'),
            'database'  => env('REDIS_DB', '0'),
        ],

        'cache' => [
            'url'       => env('REDIS_URL'),
            'host'      => env('REDIS_HOST', '127.0.0.1'),
            'username'  => env('REDIS_USERNAME'),
            'password'  => env('REDIS_PASSWORD'),
            'port'      => env('REDIS_PORT', '6379'),
            'database'  => env('REDIS_CACHE_DB', '1'),
        ],
    ],
];
