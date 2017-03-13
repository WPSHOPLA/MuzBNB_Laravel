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

    'facebook' => [
        'client_id' => '391127044599226',
        'client_secret' => '68115766ae5d398687477886f7b9dcf1',
        'redirect' => 'http://localhost:8000/login/facebook/callback',
    ],

    'google' => [
        'client_id' => '229713868082-mbom979u6pkh4au92trig8n1fapnobj8.apps.googleusercontent.com',
        'client_secret' => 'awHiXXyKCfxVGupSn3eJPR9e',
        'redirect' => 'http://localhost:8000/login/google/callback',
    ],

    'twitter' => [
        'client_id' => 'Diva27JrsVxpRPGw5IGxRprmc',
        'client_secret' => '2mYjMZApfDBJespDuY0YafW87Vy1xEN3UJW7akPCgUzW8LhpUV',
        'redirect' => 'http://localhost:8000/login/twitter/callback',
    ],

    'linkedin' => [
        'client_id' => 'your-linkedin-app-id',
        'client_secret' => 'your-linkedin-app-secret',
        'redirect' => 'http://your-linkedin-url',
    ],

];
