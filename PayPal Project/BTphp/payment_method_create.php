<?php
require_once ("braintree_init.php");
require_once ('lib/Braintree.php');

$customer_id = $_SESSION['customer_id'];
$nonce = $_SESSION['fake_valid_nonce'];

$result = $gateway->paymentMethod()->create([
  'customerId' => $customer_id,
  'paymentMethodNonce' => $nonce
]);

$_SESSION['payment_method_token'] = $result->paymentMethod->token;

echo json_encode($result);

?>
