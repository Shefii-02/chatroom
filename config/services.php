<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, SparkPost and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],

    'firebase' => [
        'api_key' => 'AIzaSyC5zldMMDyMsrN_hBLXqJDW2ocgghTD-CY',
        'auth_domain' => 'crud-telemedicine.firebaseapp.com',
        'database_url' => 'https://crud-telemedicine-default-rtdb.firebaseio.com',
        'project_id' => 'crud-telemedicine',
        'storage_bucket' => 'crud-telemedicine.appspot.com',
        'messaging_sender_id' => '196491373832',
        'app_id' => '1:196491373832:web:3f3be1ebb5a5d2d3b310bd',
        'measurement_id' => 'G-T47HEHYCYD',
    ],
];
