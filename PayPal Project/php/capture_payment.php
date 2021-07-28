<?php

$data = "";


$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://api.sandbox.paypal.com/v2/checkout/orders/".$_SESSION['id']."/capture",
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
   $response = json_decode($response);

   //$authorise_id_id = $response->purchase_units[0]->payments->authorizations[0]->id;
   //$_SESSION['capture_id'] = $authorise_id;
     
  }    