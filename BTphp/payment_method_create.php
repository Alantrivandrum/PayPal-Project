<?php
require_once ("braintree_init.php");
require_once ("lib/Braintree.php");


$customer_id = $_POST['customer_id'];
$nonceFromTheClient = $_POST["payment_method_nonce"];

$result = $gateway->paymentMethod()->create([
  'customerId' => $customer_id,
  'paymentMethodNonce' => $nonceFromTheClient
]);

if ($result->success) {
  $_SESSION['payment_token'] = $result->paymentMethod->token;
}

$response = json_encode($result, JSON_PRETTY_PRINT);

?>
