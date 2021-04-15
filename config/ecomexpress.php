<?php
return [
    /*
    |---------------------------------------------------------------------------
    | Default Ecom Express Credentials
    |---------------------------------------------------------------------------
    |
    | Here you can set the default ecom express credentials. However, you can
    | pass the credentials while connecting to ecom express client
    |
    */

    'credentials' => [
        'username' => env('ECOMEXP_USERNAME', 'username'),
        'password' => env('ECOMEXP_PASSWORD', 'password')
    ]
]
?>
