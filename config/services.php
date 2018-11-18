<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, Mandrill, and others. This file provides a sane
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

    'facebook' => [
    'client_id' => '2130753713825369',
    'client_secret' => '74266ea72f7f71df03f9101d60acf6aa',
    'redirect' => 'http://localhost:8000/login/facebook/callback',
],

'google' => [
    'client_id' => '283452334905-e5jrj40n8778o60b3hd827kb2a51doie.apps.googleusercontent.com',
    'client_secret' => '1Vca3X8YWj0Ijkf0xNEFwHOf',
    'redirect' => 'http://localhost:8000/login/google/callback',
],

];
