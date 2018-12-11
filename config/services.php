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
    'google' => [
        'client_id' => '948796121168-p704trkni10mjr5lkaat8eshm7adcn14.apps.googleusercontent.com',
        'client_secret' => 'VqbEZ_ubQlyO4VPmdk6XI12t',
        'redirect' => 'http://localhost:8000/callback'
    ],
    // 'google' => [
    //     'client_id' => '948796121168-p704trkni10mjr5lkaat8eshm7adcn14.apps.googleusercontent.com',
    //     'client_secret' => 'VqbEZ_ubQlyO4VPmdk6XI12t',
    //     'redirect' => 'http://localhost:8000/login/google/callback'
    // ],

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => env('SES_REGION', 'us-east-1'),
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],

];
