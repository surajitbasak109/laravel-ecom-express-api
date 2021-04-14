<?php

header("Content-Type: application/json");

require './vendor/autoload.php';

use surajitbasak109\Ecomexpress\EcomexpressApi;
use surajitbasak109\Ecomexpress\Clients\EcomExpressClient;

$ecom = new EcomexpressApi(new EcomExpressClient());
$token = $ecom->getToken(['username' => 'kidcitysolutionpvtltd19979_temp', 'password' => 'VHAZH7xFLp3VG9jr']);
/* var_dump($token); */
$response = $ecom->service($token)->checkServiceability();

echo json_encode($response);

