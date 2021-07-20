<?php

if ($_POST) // If form was submited...
{
    $api_endpoint = $_POST["api_endpoint"];
    $request_body = $_POST["request_body"];

    $url = $api_endpoint;

    $ch = curl_init();

    curl_setopt_array($ch, array(
        CURLOPT_URL => "https://api.sandbox.paypal.com/v2/checkout/orders",
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
        CURLOPT_POSTFIELDS => $request_body)
    );

    $res = curl_exec($ch);

    if($e = curl_error($ch))
    {
        echo $e;
    }
    else
    {
        $decoded = json_decode($res);
    }

    curl_close($ch);
}
else
{
    echo "failure";
}

?>