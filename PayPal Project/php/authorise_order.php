<?php

$data = "";

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://api.sandbox.paypal.com/v2/payments/authorizations/".$_SESSION['authorise_id']."/a",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_SSL_VERIFYHOST => false,
  CURLOPT_SSL_VERIFYPEER => false,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_HEADER => false,
  CURLOPT_HTTPHEADER => array(
    "Content-Type: application/json",
    "prefer:return=representation",
    "Authorization: Bearer " . $_SESSION['access_token']
  ),
  CURLOPT_POSTFIELDS => $data)
);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo $err;  
  }else{
    
     
  }