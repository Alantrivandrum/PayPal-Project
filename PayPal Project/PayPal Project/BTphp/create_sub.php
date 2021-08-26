<?php
require_once ("braintree_init.php");
require_once ("lib/Braintree.php");


$payment_token = $_POST["payment_token"];
$plan_id = $_POST['plan_id'];

$result = $gateway->subscription()->create([
  'paymentMethodToken' => $payment_token,
  'planId' => $plan_id
]);

if ($result->success) {
  $_SESSION['sub_id'] = $result->transaction->id;
}

$response = json_encode($result, JSON_PRETTY_PRINT);

?>