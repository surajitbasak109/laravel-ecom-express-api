<?php

header("Content-Type: application/json");

require './vendor/autoload.php';

use surajitbasak109\EcomExp\EcomExpApi;
use surajitbasak109\EcomExp\Clients\EcomExpClient;

$ecom = new EcomExpApi(new EcomExpClient());
$token = $ecom->getToken(['username' => 'kidcitysolutionpvtltd19979_temp', 'password' => 'VHAZH7xFLp3VG9jr']);
/* var_dump($token); */
$response = $ecom->service($token)->checkServiceability();

echo json_encode($response);
