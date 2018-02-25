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
        'client_id' => '1997520890574725',         // Your Facebook Client ID
        'client_secret' => 'a35024da4f7f13ae4185de4a49e134c4', // Your Facebook Client Secret
        'redirect' => 'http://localhost:8000/login/facebook/callback',
    ],

    'google' => [
        'client_id' => '1076771282248-rfe5apls2bjspd8s8mt0htbvkfcfm721.apps.googleusercontent.com',         // Your Google Client ID
        'client_secret' => 'NiCZ99hOnFDxRJikBz-AbcRT', // Your Google Client Secret
        'redirect' => 'http://localhost:8000/login/google/callback',
    ],

];
