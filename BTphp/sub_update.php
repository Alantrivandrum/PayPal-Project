<?php
require_once ("braintree_init.php");
require_once ("lib/Braintree.php");


$sub_id = $_POST['sub_id']; 
$new_sub_id = $_POST['new_sub_id']; 
$payment_token = $_POST['payment_token'];
$amount = $_POST['amount'];
$plan_id = $_POST['plan_id'];
//$merchant_id = $_POST['merchant_id'];

$result = $gateway->subscription()->update(
  $sub_id, [
    'id' => $new_sub_id,
    'paymentMethodToken' => $payment_token,
    'price' => $amount,
    'planId' => $plan_id
]);

$response = json_encode($result, JSON_PRETTY_PRINT);



?>