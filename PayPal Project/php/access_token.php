<?php

$curl = curl_init();

// Bianca's
$clientId = "AT0s-es2wc037nBBYq0PLV6Icb_NcHbUw_1bXu6A-lm4rKL_OMR3eER_8HFgUysxNaUFuerGLa_PtdeW";
$secret = "EAvquCPScqQn67CG0LMR1IHIWpVGxbNThJnTJVIbGF5XBeqO66-X7nOv8VLqwDNHJ2VamB-nLIeIWAdR";

// Koushik's
// $clientId = "AZvubSw7L5L7bnKqQ2NvOuodHa9QiZN-I63jG02dKqkoKRqrhcwjpu0loYZHCLDjR-XyIs6bo1zYSMxK";
// $secret = "EHu93ip4EvuMo5XjCmVAavBuVJC2WKRPRlxI_VdLyJQYgvK9u59gCxAN3GMPo2KPmoTvepQCn_ZizBeb";

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

if ($err)
{
  echo $err;
} 
else
{
  $response = json_decode($response);

  $access_token = $response->access_token;
  $_SESSION['access_token'] = $access_token;
}