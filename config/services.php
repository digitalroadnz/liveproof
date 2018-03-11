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

    //Socialite
    'facebook' => [
        'client_id'     => '1908233399487411',
        'client_secret' => '25c50cf7cb20a50b69d60799b9d99a19',
        'redirect'      => 'http://localhost:8000/login/callback/facebook',
    ],

    'google' => [
        'client_id'     => '985152526947-caec6atnv2e2q9de10lbhdk464iavk9i.apps.googleusercontent.com',
        'client_secret' => '3vq--M3Ve49knQb9CK9UgB6W',
        'redirect'      => 'http://localhost:8000/login/callback/google'
    ]

    
    

];
