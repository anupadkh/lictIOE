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

    'github' => [
        'client_id' => env('GITHUB_CLIENT_ID'),         // Your GitHub Client ID
        'client_secret' => env('GITHUB_CLIENT_SECRET'), // Your GitHub Client Secret
        'redirect' => 'http://your-callback-url',
    ],

    'facebook' => [
        'client_id' => env('FACEBOOK_APP_ID'),         // Your GitHub Client ID
        'client_secret' => env('FACEBOOK_APP_SECRET'), // Your GitHub Client Secret
        'redirect' => env('FACEBOOK_URL'),
    ],

    'google' => [
        'client_id' => env('GOOGLE_CLIENT_ID'),         // Your GitHub Client ID
        'client_secret' => env('GOOGLE_CLIENT_SECRET'), // Your GitHub Client Secret
        'redirect' => 'http://your-callback-url',
    ],

    'twitter' => [
        'client_id' => env('TWITTER_CONSUMER_KEY'),         // Your GitHub Client ID
        'client_secret' => env('TWITTER_CONSUMER_SECRET'), // Your GitHub Client Secret
        'redirect' => env('TWITTER_URL'),
    ],

    'linkedIn' => [
        'client_id' => env('LINKEDIN_CLIENT_ID'),         // Your GitHub Client ID
        'client_secret' => env('LINKEDIN_CLIENT_SECRET'), // Your GitHub Client Secret
        'redirect' => 'http://your-callback-url',
    ],

];