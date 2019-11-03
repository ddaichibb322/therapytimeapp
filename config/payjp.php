<?php

return [

    'apikey' => [
        'prod' => [
            'sec' => env('PAYJP_API_KEY_PROD_SEC', ''),
            'pub' => env('PAYJP_API_KEY_PROD_PUB', ''),
        ],
        'test' => [
            'sec' => env('PAYJP_API_KEY_TEST_SEC', ''),
            'pub' => env('PAYJP_API_KEY_TEST_PUB', ''),
        ],
    ],

];
