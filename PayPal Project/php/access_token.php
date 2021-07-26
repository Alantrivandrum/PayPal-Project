<?php

$curl = curl_init();

// Bianca's
$clientId = "AWr7g4AYGMxymbEAddYt9cCVWrF1auC_BLMk5YZwYZHANsjJeemz4YCnUFdofo7D0FSO8f_l6qz6N8Ld";
$secret = "EF1mTjVtnGTQIyGhbs_K-I-csejVntImu6F95KX1SGrGD5GU6FlnxWOSS5IfS6FzEEmvLxf2ZhSCVjK3";

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

$res = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo $err;
} 
else
{
  $res = json_decode($res);

  $access_token = $res->access_token;
  $_SESSION['access_token'] = $access_token;
}