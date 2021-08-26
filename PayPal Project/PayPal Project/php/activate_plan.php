<?php

$data = $_POST['request_body'];
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => $_POST['api_endpoint'],
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

if ($err) 
{
  echo $err;
}
else
{
  // response in array form
  $check_error = json_decode($response, true);
  // response in string form
  $response = json_decode($response);

  if(array_key_exists("error", $check_error) || array_key_exists("name", $check_error)) 
  {
    $response = print_r($response, true);
  }
}

?>