<?php
include("access_token.php");

$data = '{
    "intent": "AUTHORIZE",
    "purchase_units": [
        {
            "reference_id": "1",
            "amount": {
                "currency_code": "EUR",
                "value": "1000.00",
                "breakdown": {
                    "item_total": {
                        "currency_code": "EUR",
                        "value": "1000.00"
                    },
                    "shipping": {
                        "currency_code": "EUR",
                        "value": "0.00"
                    }
                }
            },
            "items": [
                {
                    "name": "box",
                    "quantity": "1",
                    "unit_amount": {
                        "currency_code": "EUR",
                        "value": "700.00"
                    }
                },
                {
                    "name": "shoes",
                    "quantity": "1",
                    "unit_amount": {
                        "currency_code": "EUR",
                        "value": "300.00"
                    }
                }
                
            ], "shipping": {
                "name": {
                    "full_name": "John Smith"
                },
                "address": {
                    "address_line_1": "my street 1",
                    "admin_area_1": "my state",
                    "admin_area_2": "my town",
                    "postal_code": "234234",
                    "country_code": "FR"
                }
            },
            
            "description": "Payment for order",
            "custom_id": "1234567890"
        }
    ],
    "application_context": {
        "brand_name": "AMIKADO",
        "locale": "en-EN",
        "shipping_preference": "GET_FROM_FILE",
        "user_action": "PAY_NOW",
        "return_url": "http://example.com/return",
        "cancel_url": "http://example.com/cancel"
        }
    
}';


$curl = curl_init();

curl_setopt_array($curl, array(
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
  CURLOPT_POSTFIELDS => $data)
);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  //echo "<pre>cURL Error #:" . $err . "</pre>";
  //echo $httpcode . $response;

}else{

 //echo "<pre>";
  //$response = json_decode($response);
  //print_r($response);
  
  //$id = $response->id;
  //$_SESSION['id'] = $id;

  $response = json_decode($response,true);
  //print_r($response);
  $id = $response['id'];
  $_SESSION['id'] = $id;
  echo $_SESSION['id'];
  //var_dump($response->links[1]);
     

}        



  
  



