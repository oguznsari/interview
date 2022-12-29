<?php 

return [
    'database' => [
        'host' => 'localhost',
        'port' => 3306,
        'dbname' => 'weather',
        'charset' => 'utf8mb4'
    ],

    'weather-icons' => [
        'Sunny' => [
            'icon' => 'fas fa-sun',
            'background' => '#ffffb3'
        ],
        'Rainy' => [
            'icon' => 'fas fa-cloud-showers-heavy',
            'background' => '#99ebff'
        ],
        'Snow' => [
            'icon' => 'fas fa-snowflake',
            'background' => '#f2f2f2'
        ],
        'Cloudly'=> [
            'icon' => 'fas fa-cloud-sun',
            'background' => '#b3b3b3'
        ],
    ]
];
