<?php

$curl = curl_init();

$clientId="ATOeJ0OYotiAQSDTl0SFwTXaHQb24Kelj00ztY6y29VaTIJYNWpv8N1DYeR2tc2j29KD5P9ewMw5RT4i";
$secret="ELJeCBqa_CVG8XPdj1qArpnZRELKLa_N5Ax9IoY1gPmqo9nbw6GCDsFJfV8vS0OiUN1aepo-Krxr6blo";

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://api.sandbox.paypal.com/v1/oauth2/token",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_SSL_VERIFYHOST => false,
  CURLOPT_SSL_VERIFYPEER => false,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => "grant_type=client_credentials",
  CURLOPT_USERPWD => $clientId .":". $secret,
  CURLOPT_HEADER => false,
  CURLOPT_HTTPHEADER => array(
    "Accept: application/json",
    "Accept-Language: en_US",
   
   ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "<pre>cURL Error #:" . $err . "</pre>";
} else {
  
  $response = json_decode($response);
  
  $access_token = $response->access_token;
  $_SESSION['access_token'] = $access_token;
  
}