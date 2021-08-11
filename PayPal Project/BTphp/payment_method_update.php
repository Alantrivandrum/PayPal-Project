<?php
require_once ("braintree_init.php");
require_once ('lib/Braintree.php');

$payment_method_token = $_SESSION['payment_method_token'];

$result = $gateway->paymentMethod()->update(
  $payment_method_token,
  [
    'billingAddress' => [
        'streetAddress' => '100 Oak Lane',
        'options' => [
            'updateExisting' => true
        ]
    ]
]);

echo json_encode($result);

?>