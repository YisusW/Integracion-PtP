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
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_REGION', 'us-east-1'),
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
        'webhook' => [
            'secret' => env('STRIPE_WEBHOOK_SECRET'),
            'tolerance' => env('STRIPE_WEBHOOK_TOLERANCE', 300),
        ],
    ],

    /**
     * se crea un array llamado soap para esperar las variables creadas en el archivo .env y darles los valores que se procesaran a el web service
     * @param id_soapWS refiere a SOAP_ID que es el identificador
     * @param SOAP_SECRETKEY se refiere a la llave secretKey mencionada en el documento
     * @param SOAP_ENDPOINT es el valor del endpoind que tambien está asignado en la documentacion
     */

    'soap' => [
       'id_soapWS' => env('SOAP_ID' , 'INTEGRATION'),
       'secretkey' => env('SOAP_SECRETKEY' , 'INTEGRATION'),
       'endpoint'  => env('SOAP_ENDPOINT' , 'INTEGRATION'),
       'wsse'      => env('SOAP_WSSE' , 'INTEGRATION'),
       'wsu'       => env('SOAP_WSU' , 'INTEGRATION'),
    ]

];
