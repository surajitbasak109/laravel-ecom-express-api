<?php

$url = "https://clbeta.ecomexpress.in/apiv2/pincodes/";

$curl = curl_init($url);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$headers = array(
       "Authorization: Basic a2lkY2l0eXNvbHV0aW9ucHZ0bHRkMTk5NzlfdGVtcDpWSEFaSDd4RkxwM1ZHOWpy",
          "Content-Length: 0",
          
);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
//for debug only!
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
//
$resp = curl_exec($curl);
curl_close($curl);
var_dump($resp);
//
//?>
//
//
?>
