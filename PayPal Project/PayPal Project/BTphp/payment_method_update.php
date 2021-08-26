<?php
require_once ("braintree_init.php");
require_once ("lib/Braintree.php");


$payment_token = $_POST['payment_token'];
$street_address = $_POST['street_address'];

$result = $gateway->paymentMethod()->update(
  $payment_token,
  [
    'billingAddress' => [
        'streetAddress' => $street_address,
        'options' => [
            'updateExisting' => true
        ]
    ]
]);

$response = json_encode($result, JSON_PRETTY_PRINT);

?>