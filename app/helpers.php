<?php

function get_db_config()
{
    if (getenv('APP_ENV') == 'local') {
//        $url = parse_url(getenv("DATABASE_URL"));
//
//        return $db_config = [
//            'connection' => 'pgsql',
//            'host' => $url["host"],
//            'database'  => substr($url["path"], 1),
//            'username'  => $url["user"],
//            'password'  => $url["pass"],
//        ];
        return $db_config = [
            'connection' => env('DB_CONNECTION', 'mysql'),
            'host' => env('DB_HOST', 'localhost'),
            'database'  => env('DB_DATABASE', 'forge'),
            'username'  => env('DB_USERNAME', 'forge'),
            'password'  => env('DB_PASSWORD', ''),
        ];

    } else {
        return $db_config = [
            'connection' => env('DB_CONNECTION', 'mysql'),
            'host' => env('DB_HOST', 'localhost'),
            'database'  => env('DB_DATABASE', 'forge'),
            'username'  => env('DB_USERNAME', 'forge'),
            'password'  => env('DB_PASSWORD', ''),
        ];
    }
}
