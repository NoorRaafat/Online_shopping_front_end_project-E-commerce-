<?php

return [
    'database' => [
        'username' => 'root',
        'password' => '',
        'connection' => 'mysql:host=127.0.0.1',
        'name' => 'sale',
        'options' => [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING
        ]
    ]
];
